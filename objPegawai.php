<?php
require 'Pegawai.php';
//ciptakan object
$neur = new Pegawai('001','Gunawan','Manager','Kristen Katholik','Menikah');
$salah = new Pegawai('012','Arni Rahayu','Asmen','Islam','Menikah');
$mail = new Pegawai('008','Ikhwan Nurrohaman','Staff','Konghucu','Belum Menikah');
$muas = new Pegawai('011','Aulia Zahwa','Kabag','Islam','Belum Menikah');
$ameri = new Pegawai('006','Rayyanazka','Manager','Budha','Menikah');
//dst ...
//cetak struktur gaji

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$mail->mencetak();
$muas->mencetak();
$ameri->mencetak();
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;