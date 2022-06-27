<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar XML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
    <h5>Lalu Tata Linggiang Raisahid</h5>
    <h5>21103079</h5><br><br>
    <h3>Data Dosen</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $req="http://localhost/latihanXML/dosen.xml";
                    $temp=file_get_contents($req);
                    $xml=simplexml_load_string($temp);

                    foreach($xml as $data){
                    ?>
                        <tr>
                            <td><?=$data->nidn?></td>
                            <td><?=$data->nama?></td>
                            <td><?=$data->alamat?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>