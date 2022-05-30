<?php
$file = "mhs.json";
$mhs = file_get_contents($file);
$data = json_decode($mhs, true);

foreach ($data as $d) {
    echo $d['no']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['nim']. "<br>";
    echo $d['prodi']. "<br>";
    echo $d['ig']. "<br><br>";
}

?>