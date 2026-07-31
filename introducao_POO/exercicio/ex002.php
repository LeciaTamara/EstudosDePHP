<?php 

    class Cachorro{
        function latir(){
            echo "AU AU AU AU <br>";
        }

        function andar($mover){
            $i = 0;

            while($i < $mover){
                echo "Andar <br>";

                $i++;
            }
        }
    }

    $cachorro1 = new Cachorro();

    $cachorro1 ->latir();
    $cachorro1 -> andar(5);

?>