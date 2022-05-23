<?php
// panggil file dalam bentuk variabel
$file = "mahasiswa.json";
// ubah data dari file tersebut menjadi string
$mahasiswa = file_get_contents($file);
// data string itu kemudian diubah dalam bentuk variabel php
$data = json_decode($mahasiswa, true);
// pilih data yang akan dihapus dengan foreach
foreach($data as $key => $d){
    if($d['no'] === 2) {
        $data[$key]['alamat'] = 'Surabaya';
    }
}

$update = json_encode($data, JSON_PRETTY_PRINT);
$mahasiswa = file_put_contents($file, $update);

if($mahasiswa){
    echo "
        <script>
            alert ('Data Berhasil Ditambah')
            document.location.href = 'mybio.json'
        </script>";
}else{
    echo "Data Gagal Ditambah";
}
?>