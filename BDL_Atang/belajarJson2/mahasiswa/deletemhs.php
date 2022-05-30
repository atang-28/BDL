<?php
$file = "mhs.json";

$mhs = file_get_contents($file);
$data = json_decode($mhs,true);

foreach($data as $key => $d) {
    if($d['no'] === 2){
        array_splice($data, $key, 1);
    }
}

$delete = json_encode($data, JSON_PRETTY_PRINT);

$mahasiswa = file_put_contents($file, $delete);


if($mahasiswa){
    header("Location: viewmhs.php");
    exit;
}
?>