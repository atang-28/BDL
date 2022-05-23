<?php

$data [] = array (
    'nim' => '21103079',
    'nama' => 'Lalu Tata Linggiang Raisahid',
    'akun_ig' => '@_aquatang'
);

$buat = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('mybio.json', $buat);

if(file_put_contents("mybio.json", $buat)) {
    echo "
        <script>
            alert ('File JSON Anda Berhasil Dimuat')
            document.location.href = 'mybio.json'
        </script>";
} else {
    echo "Error!! No Data Found!!";
}
?>
