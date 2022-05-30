<?php
$file = "matkul.json";

$ambil = file_get_contents($file);
$decode = json_decode($ambil, true);

foreach($decode as $data) {
    echo $data['kd_mk']. "<br>";
    echo $data['mk']. "<br>";
    echo $data['sks']. "<br><br>";

}
?>