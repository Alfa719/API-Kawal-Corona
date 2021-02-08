<?php
    $urlIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
    $dataIndo = json_decode($urlIndo, true);
    $urlProv = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
    $dataProv = json_decode($urlProv, true);
    $globPositif = file_get_contents('https://api.kawalcorona.com/positif');
    $dataGlobPos = json_decode($globPositif, true);
    $globSembuh = file_get_contents('https://api.kawalcorona.com/sembuh');
    $dataGlobSemb = json_decode($globSembuh, true);
    $globMeninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
    $dataGlobMening = json_decode($globMeninggal, true);
    