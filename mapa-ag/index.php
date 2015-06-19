<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .celula{
                width: 20px;
                height: 20px;
                border: solid 1px black;
                float:left;
                text-align: center;
            }
            .espaco{
                height: 22px;
            }
        </style>
    </head>
    <body>
        <?php
        include_once './Mapa.php';
        include_once './PintarMapa.php';
        $mp = new Mapa();
        $e = $mp->getMatrizAd();


        echo "<div class='celula'></div>";
        for ($i = 0; $i < 27; $i++) {
            echo "<div class='celula'>" . $i . "</div>";
        }
        echo '<div class="espaco"></div>';

        for ($i = 0; $i < 27; $i++) {
            echo "<div class='celula'>" . $i . "</div>";
            for ($j = 0; $j < 27; $j++) {
                echo "<div class='celula'>" . $e[$i][$j] . "</div>";
            }
            echo '<div class="espaco"></div>';
        }





        $pt = new PintarMapa();
        $estados = $mp->getEstados();
        $populacao = $pt->gerarPopInicial();

        for ($i = 0; $i < $pt->limite_populacao; $i++) {
            for ($j = 0; $j < 27; $j++) {
                echo '[' . $j . '] ' . $estados[$j] . " => " . $populacao[$i][$j] . "</br>";
            }
            echo "</br>";
            echo "Cores usadas: " . count(array_unique($populacao[$i]));
            echo "</br>";
            echo "---------------------------------------------";
            echo "</br>";
         
        }
        ?>






    </body>
</html>
