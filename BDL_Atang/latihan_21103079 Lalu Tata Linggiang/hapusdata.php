<?php
// ambil file yang akan dihapus
$file = "mybio.json";
// data itu diubah menjadi string
$hobi = file_get_contents($file);
// data string kemudian dimasukkan kedalam variabel php
$data = json_decode($hobi, true);

foreach($data as $key => $d){
    // pilih array yang akan dihapus dengan menggunakan elemen tertentu
    if ($d['hobbi'] === 'Renang'){
        // gunakan sintax dibawah untuk menghapusnya, angka 1 artinya true
        array_splice($data, $key, 1);
    }
}
// ubah ke file json
$delete = json_encode($data, JSON_PRETTY_PRINT);
// simpan perubahan dengan sintax dibawah
$hobi = file_put_contents($file, $delete);

if($hobi){
    echo "
    <script>
        alert ('Data Berhasil Dihapus')
        document.location.href = 'mybio.json'
    </script>";
}else{
    echo "Data Gagal Dihapus";
}
?>