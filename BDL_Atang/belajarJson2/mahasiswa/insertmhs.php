<?php
$file = "mhs.json";

$mhs = file_get_contents($file);

$data = json_decode($mhs,true);

$data [] = array (
    'no' => 3,
    'nama' => 'Meldiyanti',
    'nim' => '21103061',
    'prodi' => 'TI-KAB',
    'ig' => '@Meldyyyy'
);

$result = json_encode($data, JSON_PRETTY_PRINT);

$mahasiswa = file_put_contents($file,$result);

if($mahasiswa) {
    header("Location: viewmhs.php");
    exit;
}
?>