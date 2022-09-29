<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>'0110220070','nama'=>'Ameri Yulina','nilai'=>95];
$m2 = ['nim'=>'0110220069','nama'=>'Arni Rahayu','nilai'=>75];
$m3 = ['nim'=>'0110220078','nama'=>'Ahmad Noval','nilai'=>65];
$m4 = ['nim'=>'0110220123','nama'=>'Gunawan','nilai'=>60];
$m5 = ['nim'=>'0110220001','nama'=>'Muhammad Ismail','nilai'=>25];
$m6 = ['nim'=>'0110220087','nama'=>'Aulia Putri','nilai'=>85];
$m7 = ['nim'=>'0110220062','nama'=>'Ikhwan Nurrohman','nilai'=>78];
$m8 = ['nim'=>'0110220060','nama'=>'Rayyanazka','nilai'=>69];
$m9 = ['nim'=>'0110220072','nama'=>'Cindy Aulia','nilai'=>56];
$m10 = ['nim'=>'0110220068','nama'=>'Nada Kamilia','nilai'=>40];


$ar_judul = ['No','NIM','Nama','Nilai','Keterangan',
'Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$jumlah_mahasiswa = count(array_column($mahasiswa, 'nama'));
$nilai_max = max(array_column($mahasiswa, 'nilai'));
$nilai_min = min(array_column($mahasiswa, 'nilai'));
$jumlah_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jumlah_nilai);
$nilai_rata2 = $total_nilai / $jumlah_mahasiswa;

    $data_mahasiswa = [
        'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
        'Nilai Tertinggi'=>$nilai_max,
        'Nilai Terendah'=>$nilai_min,
        'Nilai Rata-rata'=>$nilai_rata2
    ];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>
            footer p{
                text-align: center;
                color: #444444;
            }
        </style>
    </head>

    <body>
        <div class="container">
        <h3 class="text-center my-5">Daftar nilai Mahasiswa</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                //rumus2
                $keterangan = ($mhs['nilai'] >= 60) ? 'lulus' : 'Tidak Lulus';

                //Grade 
                if ($mhs['nilai'] <= 100 && $mhs['nilai'] >= 85) $grade = "A";
                elseif ($mhs['nilai'] <= 84 && $mhs['nilai'] >= 75) $grade = "B";
                elseif ($mhs['nilai'] <= 74 && $mhs['nilai'] >= 65) $grade = "C";
                elseif ($mhs['nilai'] <= 64 && $mhs['nilai'] >= 55) $grade = "D";
                elseif ($mhs['nilai'] <= 54) $grade = "E";

                //Predikat 
                switch ($mhs['nilai']) {
                    case ($mhs['nilai'] <= 100 && $mhs['nilai'] >= 85): 
                        $predikat = "Memuaskan";
                        break;
                    case ($mhs['nilai'] <= 84 && $mhs['nilai'] >= 75): 
                        $predikat = "Bagus";
                        break;
                    case ($mhs['nilai'] <= 74 && $mhs['nilai'] >= 65): 
                        $predikat = "Cukup";
                        break;
                    case ($mhs['nilai'] <= 64 && $mhs['nilai'] >= 55): 
                        $predikat = "Kurang";
                        break;
                    case ($mhs['nilai'] <= 54): 
                        $predikat = "Buruk";
                        break;
                    default:
                        $predikat = '';
                    
                }
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($data_mahasiswa as $ket => $data) {
                ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $data ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        <footer>
            <p>
                Copyright &copy; Chika Aulia Zahwa | #Akademik Fullstack Web Developer MSIB Batch3 2022
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>