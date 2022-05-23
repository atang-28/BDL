<?php
$file = "mahasiswa.json";

$mahasiswa = file_get_contents($file);

$data = json_decode($mahasiswa, true);

foreach ($data as $d) {
    echo $d['no']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['alamat']. "<br>";
}
?>