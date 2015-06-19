<?php

require_once './Mapa.php';

class PintarMapa {

    public $limite_populacao = 100;
    public $corMapa = array();

    public function __construct() {
        for ($i = 0; $i < 27; $i++) {
            $this->corMapa[$i] = '0';
        }
    }

    function gerarPopInicial() {
        $m = new Mapa();
        $estados = $m->getEstados();
        $popInicial = array();
        $cont = 0;

        $matrizAd = $m->getMatrizAd();
        for ($i = 0; $i < 27; $i++) {
            for ($j = 0; $j < 27; $j++) {
                if ($matrizAd[$i][$j] == "V" || $matrizAd[$j][$i] == "V") {
                    //echo $estados[$j];
                }
            }
            //echo "</br>";
        }

        while ($cont < $this->limite_populacao) {
            for ($i = 0; $i < 27; $i++) {
                $r = rand(0, 26);
                for ($j = 0; $j < 27; $j++) {
                    if ($matrizAd[$i][$j] == "V" || $matrizAd[$j][$i] == "V") {
                        while ($this->corMapa[$j] == $r) {
                            $r = rand(0, 26);
                        }
                    }
                }
                $this->corMapa[$i] = $r;
            }
            $popInicial[$cont] = $this->corMapa;
            $cont++;
        }
        return $this->ordenarNumCores($popInicial);
        //return$popInicial;
    }

    function gerarPop() {
        $m = new Mapa();
        $estados = $m->getEstados();
        $popInicial = array();
        $cont = 0;

        $matrizAd = $m->getMatrizAd();
        for ($i = 0; $i < 27; $i++) {
            for ($j = 0; $j < 27; $j++) {
                if ($matrizAd[$i][$j] == "V" || $matrizAd[$j][$i] == "V") {
                    //echo $estados[$j];
                }
            }
            //echo "</br>";
        }

        while ($cont < $this->limite_populacao) {
            for ($i = 0; $i < 27; $i++) {
                $r = rand(0, 26);
                for ($j = 0; $j < 27; $j++) {
                    if ($matrizAd[$i][$j] == "V" || $matrizAd[$j][$i] == "V") {
                        while ($this->corMapa[$j] == $r) {
                            $r = rand(0, 26);
                        }
                    }
                }
                $this->corMapa[$i] = $r;
            }
            $popInicial[$cont] = $this->corMapa;
            $cont++;
        }
        return $this->ordenarNumCores($popInicial);
        //return$popInicial;
    }

    function ordenarNumCores($popI) {
        $lista = array();
        $numOrd = array();

        for ($i = 0; $i < $this->limite_populacao; $i++) {
            $lista[$i] = count(array_unique($popI[$i]));
        }

        asort($lista);
        $cont = 0;
        foreach ($lista as $k => $v) {
            $numOrd[$cont] = $popI[$k];
            $cont++;
        }
        return $numOrd;
    }

}
