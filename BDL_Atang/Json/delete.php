<?php
$file = "mahasiswa.json";

$mahasiswa = file_get_contents($file);

$data = json_decode($mahasiswa, true);

foreach($data as $key => $d){
    if ($d['no'] === 3){
        array_splice($data, $key, 1);
    }
}

$delete = json_encode($data, JSON_PRETTY_PRINT);
$mahasiswa = file_put_contents($file, $delete);
?>