<?php

require_once 'lingkaran.php';
require_once 'persegi_panjang.php';
require_once 'segitiga.php';

// jari-jari 
$object1 = new lingkaran(15);
//Panjang dan Lebar 
$object2 = new persegi_panjang(15, 4);
//alas, tinggi, sisiMiring
$object3 = new segitiga(8, 6);

$object_data = [$object1, $object2, $object3];
$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Bidang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <h1 class="text-center text-decoration-underline mt-5">Kumpulan Bidang</h1>

        <table class="table my-5">
            <thead class="table-secondary">
                <tr>
                    <?php foreach ($judul as $jdl) : ?>
                        <th> <?= $jdl ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody class="table-light align-middle">
                    <?php 
                    $no = 1;
                    foreach ($object_data as $data) : ?>
                        <tr>
                            <th><?= $no++ ?>.</th>
                            <?= $data->cetak() ?>
                    <?php endforeach ?>
                </tr>
            </thead>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>