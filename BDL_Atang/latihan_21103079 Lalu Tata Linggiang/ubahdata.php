<?php
// panggil file dalam bentuk variabel
$file = "mybio.json";
// ubah data dari file tersebut menjadi string
$hobi = file_get_contents($file);
// data string itu kemudian diubah dalam bentuk variabel php
$data = json_decode($hobi, true);
// pilih data yang akan dihapus dengan foreach
foreach($data as $key => $d){
    if($d['hobbi'] === 'Volleyball') {
        $data[$key]['hobbi'] = 'Renang';
    }
}

$update = json_encode($data, JSON_PRETTY_PRINT);
$hobi = file_put_contents($file, $update);

if($hobi){
    echo "
        <script>
            alert ('Data Berhasil Diubah')
            document.location.href = 'mybio.json'
        </script>";
}else{
    echo "Data Gagal Diubah";
}
?>