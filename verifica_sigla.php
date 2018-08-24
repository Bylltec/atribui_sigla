<?php

function atribui_sigla($entrada){

    $map = array(
        'á' => 'a',
        'à' => 'a',
        'ã' => 'a',
        'â' => 'a',
        'é' => 'e',
        'ê' => 'e',
        'í' => 'i',
        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ú' => 'u',
        'ü' => 'u',
        'ù' => 'u',
        'ç' => 'c',
        'Á' => 'A',
        'À' => 'A',
        'Ã' => 'A',
        'Â' => 'A',
        'É' => 'E',
        'Ê' => 'E',
        'Í' => 'I',
        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ú' => 'U',
        'Ü' => 'U',
        'Ç' => 'C'
    );

    $entrada = strtoupper(preg_replace("/[^A-Za-z ]/", '', strtr($entrada, $map)));

    $estados = array(   'ACRE' => "AC",
                        'ALAGOAS' => "AL",
                        'AMAPA' => "AP",
                        'AMAZONAS' => "AM",
                        'BAHIA' => "BA",
                        'CEARA' => "CE",
                        'DISTRITO FEDERAL' => "DF",
                        'ESPIRITO SANTO' => "ES",
                        'GOIAS' => "GO",
                        'MARANHAO' => "MA",
                        'MATO GROSSO' => "MT",
                        'MATO GROSSO DO SUL' => "MS",
                        'MINAS GERAIS' => "MG",
                        'PARA' => "PA",
                        'PARAIBA' => "PB",
                        'PARANA' => "PR",
                        'PERNAMBUCO' => "PE",
                        'PIAUI' => "PI",
                        'RIO DE JANEIRO' => "RJ",
                        'RIO GRANDE DO NORTE' => "RN",
                        'RIO GRANDE DO SUL' => "RS",
                        'RONDONIA' => "RO",
                        'RORAIMA' => "RR",
                        'SANTA CATARINA' => "SC",
                        'SAO PAULO' => "SP",
                        'SERGIPE' => "SE",
                        'TOCANTINS' => "TO");

    foreach ($estados as $key => $value) {
        if($key == $entrada){
            return $value;
        }
    }
}

echo atribui_sigla("são páúLo!%6");
echo "\n";
?>
