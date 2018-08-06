<?php 
include "baglan.php";

$kategori_adi=$_POST["kategori_adi"];
$kategori_sira=$_POST["kategori_sira"];

$INSERT=$db->prepare("INSERT INTO kategori (kategori_adi,kategori_sira) VALUES (:kategori_adi,:kategori_sira)");

$INSERT->bindParam(":kategori_adi",$kategori_adi);
$INSERT->bindParam(":kategori_sira",$kategori_sira);

$INSERT->execute();
echo "KAYIT BAŞARILI";











 ?>
