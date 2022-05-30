<?php
 
$data [] = array (
    'no' => 1,
    'nama' => 'Lalu Tata Linggiang Raisahid',
    'nim' => '21103079',
    'prodi' => 'TI-KAB',
    'ig' => '@_aquatang'
);

$data [] = array (
    'no' => 2,
    'nama' => 'Adit',
    'nim' => '167',
    'prodi' => 'TI-MTI',
    'ig' => '@aditcaesarr'
);

$result = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents("mhs.json", $result);

if(file_put_contents("mhs.json", $result)) {
    header("Location: mhs.json");
    exit;
}


?>