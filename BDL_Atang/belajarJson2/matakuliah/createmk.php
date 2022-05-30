<?php

$matkul [] = array (
    'kd_mk' => 'BSD01',
    'mk' => 'Basis Data',
    'sks' => 3
);
$matkul [] = array (
    'kd_mk' => 'BSD02',
    'mk' => 'Basis Data Lanjut',
    'sks' => 3
);

$encode = json_encode($matkul, JSON_PRETTY_PRINT);
$hasil = file_put_contents("matkul.json", $encode);


if($hasil){
    header("Location: matkul.json");
    exit;
}


?>