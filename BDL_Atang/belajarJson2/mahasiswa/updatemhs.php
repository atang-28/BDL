<?php
$file = "mhs.json";

$mhs = file_get_contents($file);

$data = json_decode($mhs, true);

foreach($data as $row => $d) {
    if($d['no'] === 3) {
        $data[$row]['prodi'] = 'Ilmu Komputer';
    }
}

$update = json_encode($data, JSON_PRETTY_PRINT);
$mhs = file_put_contents($file, $update);

if($mhs) {
    header("Location: viewmhs.php");
    exit;
}
?>