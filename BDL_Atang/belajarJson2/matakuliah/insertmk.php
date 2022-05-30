<?php
$file = "matkul.json";
$ambil = file_get_contents($file);
$matkul = json_decode($ambil, true);

$matkul [] = array (
    'kd_mk' => 'MCL01',
    'mk' => 'Machine Learning',
    'sks' => 3
);

$encode = json_encode($matkul, JSON_PRETTY_PRINT);
$hasil = file_put_contents($file, $encode);
if($hasil) {
    header("Location: viewmk.php");
    exit;
}


?>