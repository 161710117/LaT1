<?php

require_once 'konstrak.php';

$sekolah = new sekolah('SMK Assalaam','Jl.Situtarate','TKR,TSM dan RPL');
echo "Nama Sekolah = ".$sekolah->get_namasekolah();
echo "<br />";
echo "Alamat = ".$sekolah->get_alamat();
echo "<br />";
echo "Jurusan = ".$sekolah->get_jenisjurusan();
echo "<br />";
?>