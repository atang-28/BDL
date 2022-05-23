<?php
// pilih file yang akan ditambahkan datanya
$file = "mybio.json";
// data dari file itu dirubah ke bentuk string
$asal = file_get_contents($file);
// data string JSON dirubah menjadi variabel PHP
$data = json_decode($asal, true);

// memasukkan data baru dengan perintah array
$data [] = array (
    'nama' => 'Lalu Tata Linggiang Raisahid',
    'hobbi' => 'Volleyball'
);
// rubah data array tadi ke file json
$tambah = json_encode($data, JSON_PRETTY_PRINT);
// simpan data 
$asal = file_put_contents($file,$tambah);

if($asal){
    echo "
        <script>
        alert ('Data Berhasil Ditambah')
        document.location.href = 'mybio.json'
        </script>";
}else{
    echo "Data Gagal Ditambah";
}
?>