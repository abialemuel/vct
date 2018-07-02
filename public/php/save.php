<?php
include "connect.php";


$nama = $_POST["txtNama"];
$tanggal = $_POST["txtTanggal"];
$ruang = $_POST["txtRuangan"];
$jenis = $_POST["txtJenis"];
$CP = $_POST["txtCP"];
$deskripsi = $_POST["txtDeskripsi"];

$sql = "INSERT INTO kegiatan(namakegiatan, tanggalkegiatan, ruangan, jeniskegiatan, penanggungjawab, deskripsikegiatan) VALUES ('$nama', '$tanggal', '$ruang', '$jenis', '$CP', '$deskripsi')";
dml($sql);

echo ("data sudah disimpan... cak");

header ("Refresh: 2; url=formpendaf.php");
?>