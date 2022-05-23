<?php
$file = "mybio.json";

$mahasiswa = file_get_contents($file);

$data = json_decode($mahasiswa, true);

foreach ($data as $d) {
    echo $d['nim']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['akun_ig']. "<br>";
}
?>