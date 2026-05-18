<?php 

    function countVowels($letra){
            
        $cont = 0;
        
        // O strlen conta o tamanho da string
        for($i = 0; $i < strlen($letra); $i++){
            //O strpos verifica se a string possui essas letras em seu nome
            if(strpos("aeiouAEIOU", $letra[$i]) !== False){

                
                $cont++;
            }
        }
        
        return $cont;
        
    }
    
   echo countVowels("Maria");

?>