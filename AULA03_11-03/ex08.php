<?php
    //FUNÇÃO que gere e retorne um array com 10 números aleatórios com ARRAY
	function gera_aleatorio(){
		//criar um vetor vazio
        $vetor = array();
		//laço FOR de 10x
        for ($i=0; $i < 10; $i++) { 
            //add 10 números aleatórios
            $vetor[$i] = rand(0,100);
        }
		//retorna com o vetor preenchido
        return $vetor;
	}

    print_r(gera_aleatorio());
?>