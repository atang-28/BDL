<?php
// pilih file yang akan ditambahkan datanya
$file = "mahasiswa.json";
// data dari file itu dirubah ke bentuk string
$mahasiswa = file_get_contents($file);
// data string JSON dirubah menjadi variabel PHP
$data = json_decode($mahasiswa, true);

// memasukkan data baru dengan perintah array
$data [] = array (
    'no' => 6,
    'nama' => 'Doni',
    'alamat' => 'Madura'
);
// rubah data array tadi ke file json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
// simpan data 
$mahasiswa = file_put_contents($file,$jsonfile);

if($mahasiswa){
    echo "
        <script>
        alert ('Data Berhasil Ditambah')
        document.location.href = 'mahasiswa.json'
        </script>";
}else{
    echo "Data Gagal Ditambah";
}
?>