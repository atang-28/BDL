<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Abadi Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-4">
        <h5>Lalu Tata Linggiang Raisahid</h5>
        <h5>21103079</h5><br><br>
        <h3>Data Barang UD. Abadi Jaya</h3>
        <table class="table table-hover table-light">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $ambil="http://localhost/BDL_ATANG/latihanXML/latihan.xml";
                $temp=file_get_contents($ambil);
                $xml=simplexml_load_string($temp);

                foreach($xml as $data){
                ?>
                    <tr>
                        <td><?=$data->id_barang?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->harga?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>