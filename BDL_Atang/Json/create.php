<?php

$data [] = array (
    'no' => 1,
    'nama' => 'Putu',
    'alamat' => 'Denpasar'
);

$data [] = array (
    'no' => 2,
    'nama' => 'Kadek',
    'alamat' => 'Badung'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('mahasiswa.json', $jsonfile);

if(file_put_contents("mahasiswa.json", $jsonfile)) {
    echo "
        <script>
            alert ('File JSON Berhasil Dimuat')
            document.location.href = 'mahasiswa.json'
        </script>";
} else {
    echo "Error!! No Data Found!!";
}
?>
