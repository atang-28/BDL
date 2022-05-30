<?php
$file = "matkul.json";
$ambil = file_get_contents($file);

$decode = json_decode($ambil, true);

foreach($decode as $row => $d) {
    if( $d['kd_mk'] === 'MCL01' ) {
        $decode[$row]['sks'] = 4;
    }
}

$update = json_encode($decode, JSON_PRETTY_PRINT);
$hasil = file_put_contents($file, $update);

if($hasil) {
    header("Location: viewmk.php");
    exit;
}

?>