<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de CEP</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Consultar Endereço pelo CEP</h1>

        <form method="GET">
            <input type="text" name="cep" placeholder="Digite o CEP (ex: 01001-000)" maxlength="9" required>
            <button type="submit">Buscar</button>
        </form>

        <?php
        // Mapeamento de siglas UF para estados
        function getEstado($uf)
        {
            $estados = [
                'AC' => 'Acre',
                'AL' => 'Alagoas',
                'AP' => 'Amapá',
                'AM' => 'Amazonas',
                'BA' => 'Bahia',
                'CE' => 'Ceará',
                'DF' => 'Distrito Federal',
                'ES' => 'Espírito Santo',
                'GO' => 'Goiás',
                'MA' => 'Maranhão',
                'MT' => 'Mato Grosso',
                'MS' => 'Mato Grosso do Sul',
                'MG' => 'Minas Gerais',
                'PA' => 'Pará',
                'PB' => 'Paraíba',
                'PR' => 'Paraná',
                'PE' => 'Pernambuco',
                'PI' => 'Piauí',
                'RJ' => 'Rio de Janeiro',
                'RN' => 'Rio Grande do Norte',
                'RS' => 'Rio Grande do Sul',
                'RO' => 'Rondônia',
                'RR' => 'Roraima',
                'SC' => 'Santa Catarina',
                'SP' => 'São Paulo',
                'SE' => 'Sergipe',
                'TO' => 'Tocantins'
            ];
            return $estados[$uf] ?? 'Desconhecido';
        }

        // Mapeamento de regiões por UF
        function getRegiao($uf)
        {
            $regioes = [
                'Norte' => ['AC', 'AP', 'AM', 'PA', 'RO', 'RR', 'TO'],
                'Nordeste' => ['AL', 'BA', 'CE', 'MA', 'PB', 'PE', 'PI', 'RN', 'SE'],
                'Centro-Oeste' => ['DF', 'GO', 'MT', 'MS'],
                'Sudeste' => ['ES', 'MG', 'RJ', 'SP'],
                'Sul' => ['PR', 'RS', 'SC']
            ];
            foreach ($regioes as $nome => $ufs) {
                if (in_array($uf, $ufs)) {
                    return $nome;
                }
            }
            return 'Desconhecida';
        }

        // Lógica principal
        if (isset($_GET['cep'])) {
            $cepInput = $_GET['cep'];
            $cep = preg_replace('/\D/', '', $cepInput); // Remove tudo que não for número
        
            if (!preg_match('/^\d{8}$/', $cep)) {
                echo "<p class='erro'>CEP inválido. Digite exatamente 8 números.</p>";
            } else {
                $url = "https://viacep.com.br/ws/$cep/json/";
                $response = @file_get_contents($url);

                if ($response === FALSE) {
                    echo "<p class='erro'>Erro ao acessar o serviço ViaCEP.</p>";
                } else {
                    $data = json_decode($response, true);

                    if (!is_array($data)) {
                        echo "<p class='erro'>Erro ao processar a resposta da API.</p>";
                    } elseif (isset($data['erro']) && $data['erro'] === true) {
                        echo "<p class='erro'>CEP não encontrado na base de dados do ViaCEP.</p>";
                    } else {
                        $estado = getEstado($data['uf']);
                        $regiao = getRegiao($data['uf']);

                        echo "<div class='resultado'>";
                        echo "<p><strong>Logradouro:</strong> " . ($data['logradouro'] ?: 'N/A') . "</p>";
                        echo "<p><strong>Bairro:</strong> " . ($data['bairro'] ?: 'N/A') . "</p>";
                        echo "<p><strong>Localidade:</strong> " . $data['localidade'] . "</p>";
                        echo "<p><strong>UF:</strong> " . $data['uf'] . "</p>";
                        echo "<p><strong>Estado:</strong> $estado</p>";
                        echo "<p><strong>Região:</strong> $regiao</p>";
                        echo "</div>";
                    }
                }
            }
        }
        ?>
    </div>
</body>

</html>