<?php

class Mapa {

    private $estados = array();
    private $matrizAd = array();
    private $cores = array();

    function __construct() {
        $this->estados = array(
            '0' => 'Amazonas',
            '1' => 'Acre',
            '2' => 'Alagoas',
            '3' => 'Amapá',
            '4' => 'Ceará',
            '5' => 'Distrito federal',
            '6' => 'Espirito santo',
            '7' => 'Maranhão',
            '8' => 'Paraná',
            '9' => 'Pernambuco',
            '10' => 'Piauí',
            '11' => 'Rio grande do norte',
            '12' => 'Rio grande do sul',
            '13' => 'Rondônia',
            '14' => 'Roraima',
            '15' => 'Santa catarina',
            '16' => 'Sergipe',
            '17' => 'Tocantins',
            '18' => 'Pará',
            '19' => 'Bahia',
            '20' => 'Goiás',
            '21' => 'Mato grosso',
            '22' => 'Mato grosso do sul',
            '23' => 'Rio de janeiro',
            '24' => 'São paulo',
            '25' => 'Minas gerais',
            '26' => 'Paraiba',
        );

        for ($i = 0; $i < 27; $i++) {
            for ($j = 0; $j < 27; $j++) {
                $this->matrizAd[$i][$j] = 'F';
            }
        }

        $this->matrizAd[0][13] = 'V'; //amazonas
        $this->matrizAd[0][14] = 'V';
        $this->matrizAd[0][10] = 'V';
        $this->matrizAd[0][1] = 'V';

        $this->matrizAd[1][0] = 'V'; //acre
        $this->matrizAd[1][13] = 'V'; //acre


        $this->matrizAd[2][16] = 'V'; //alagoas
        $this->matrizAd[2][19] = 'V';
        $this->matrizAd[2][9] = 'V';

        $this->matrizAd[3][18] = 'V'; //amapa 

        $this->matrizAd[4][9] = 'V'; //Ceara
        $this->matrizAd[4][26] = 'V';
        $this->matrizAd[4][11] = 'V';
        $this->matrizAd[4][10] = 'V';

        $this->matrizAd[5][20] = 'V'; //Distrito federal
        $this->matrizAd[5][25] = 'V';

        $this->matrizAd[6][23] = 'V'; //Espirito santo
        $this->matrizAd[6][25] = 'V';
        $this->matrizAd[6][19] = 'V';

        $this->matrizAd[7][17] = 'V'; //Maranhão
        $this->matrizAd[7][18] = 'V';
        $this->matrizAd[7][10] = 'V';
        $this->matrizAd[7][19] = 'V';

        $this->matrizAd[8][15] = 'V'; //'Paraná',
        $this->matrizAd[8][24] = 'V';
        $this->matrizAd[8][22] = 'V';

        $this->matrizAd[9][19] = 'V'; //Pernambuco
        $this->matrizAd[9][10] = 'V'; //
        $this->matrizAd[9][2] = 'V'; //
        $this->matrizAd[9][26] = 'V'; //
        $this->matrizAd[9][4] = 'V'; //

        $this->matrizAd[10][19] = 'V'; //'Piauí',
        $this->matrizAd[10][9] = 'V'; //
        $this->matrizAd[10][4] = 'V'; //
        $this->matrizAd[10][7] = 'V'; //
        $this->matrizAd[10][17] = 'V'; //

        $this->matrizAd[11][4] = 'V'; //Rio grande do norte
        $this->matrizAd[11][26] = 'V'; //

        $this->matrizAd[12][15] = 'V'; //Rio grande do sul

        $this->matrizAd[13][0] = 'V'; //Rondônia
        $this->matrizAd[13][21] = 'V'; //
        $this->matrizAd[13][1] = 'V'; //

        $this->matrizAd[14][0] = 'V'; //Roraima
        $this->matrizAd[14][18] = 'V'; //

        $this->matrizAd[15][12] = 'V'; //Santa catarina
        $this->matrizAd[15][8] = 'V'; //

        $this->matrizAd[16][19] = 'V'; //Sergipe
        $this->matrizAd[16][2] = 'V'; //
        $this->matrizAd[16][9] = 'V'; //

        $this->matrizAd[17][20] = 'V'; //Tocantins
        $this->matrizAd[17][19] = 'V'; //
        $this->matrizAd[17][10] = 'V'; //
        $this->matrizAd[17][7] = 'V'; //
        $this->matrizAd[17][18] = 'V'; //
        $this->matrizAd[17][21] = 'V'; //

        $this->matrizAd[18][21] = 'V'; //Pará
        $this->matrizAd[18][17] = 'V'; //
        $this->matrizAd[18][7] = 'V'; //
        $this->matrizAd[18][3] = 'V'; //
        $this->matrizAd[18][14] = 'V'; //
        $this->matrizAd[18][0] = 'V'; 

        $this->matrizAd[19][6] = 'V'; //Bahia
        $this->matrizAd[19][16] = 'V';
        $this->matrizAd[19][2] = 'V';
        $this->matrizAd[19][9] = 'V';
        $this->matrizAd[19][10] = 'V';
        $this->matrizAd[19][7] = 'V';
        $this->matrizAd[19][17] = 'V';
        $this->matrizAd[19][20] = 'V';
        $this->matrizAd[19][25] = 'V';

        $this->matrizAd[20][25] = 'V'; //Goiás
        $this->matrizAd[20][5] = 'V'; //
        $this->matrizAd[20][19] = 'V'; //
        $this->matrizAd[20][17] = 'V'; //
        $this->matrizAd[20][21] = 'V'; //
        $this->matrizAd[20][22] = 'V'; //

        $this->matrizAd[21][22] = 'V'; //Mato grosso
        $this->matrizAd[21][20] = 'V'; //
        $this->matrizAd[21][17] = 'V'; //
        $this->matrizAd[21][18] = 'V'; //
        $this->matrizAd[21][0] = 'V'; 
        $this->matrizAd[21][13] = 'V'; //

        $this->matrizAd[22][8] = 'V'; //Mato grosso sul
        $this->matrizAd[22][24] = 'V'; //
        $this->matrizAd[22][25] = 'V'; //
        $this->matrizAd[22][20] = 'V'; //
        $this->matrizAd[22][21] = 'V'; 
        
        $this->matrizAd[23][24] = 'V'; //Rio de janeiro
        $this->matrizAd[23][25] = 'V'; //
        $this->matrizAd[23][6] = 'V'; //

        $this->matrizAd[24][8] = 'V'; //São paulo
        $this->matrizAd[24][23] = 'V'; //
        $this->matrizAd[24][25] = 'V'; //
        $this->matrizAd[24][22] = 'V'; //


        $this->matrizAd[25][24] = 'V'; //Minas gerais
        $this->matrizAd[25][23] = 'V'; //
        $this->matrizAd[25][6] = 'V'; //
        $this->matrizAd[25][19] = 'V'; //
        $this->matrizAd[25][20] = 'V'; //
        $this->matrizAd[25][5] = 'V'; //
        $this->matrizAd[25][22] = 'V'; //

        $this->matrizAd[26][9] = 'V'; //Paraiba
        $this->matrizAd[26][11] = 'V'; //
        $this->matrizAd[26][4] = 'V'; //

        // inicia cores
        for ($i = 0; $i < 27; $i++) {
            $this->cores[$i] = [$i];
        }
    }

    function getEstados() {
        return $this->estados;
    }

    function getMatrizAd() {
        return $this->matrizAd;
    }
    
    

}
