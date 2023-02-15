<?php

    $endereco = urlencode('JK');
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL,"http://maps.googleapis.com/maps/api/geocode/json?address=$endereco");
    //curl_setopt($curl, CURLOPT_POST, 1);
    //curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array()));


    //receive server response...
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($curl);

    curl_close ($curl);

    echo $server_output;


    //Requisição com CURL no server local
    /*
    $resultado = json_decode($server_output);

    echo $resultado->titulo[0];
    echo '<br />';
    echo $resultado->conteudo[0];
    */
?>