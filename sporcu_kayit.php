<?php 
include "baglan.php";

$sporcu_adi=$_POST["sporcu_adi"];
$sporcu_tc=$_POST["sporcu_tc"];
$sporcu_kulup=$_POST["sporcu_kulup"];
$sporcu_kategori=$_POST["sporcu_kategori"];
$sporcu_tarih=$_POST["sporcu_tarih"];
$sporcu_il=$_POST["sporcu_il"];
$sporcu_cinsiyet=$_POST["sporcu_cinsiyet"];
$sporcu_no=$_POST["sporcu_no"];
$sporcu_mail=$_POST["sporcu_mail"];


$INSERT=$db->prepare("INSERT INTO sporcu (sporcu_adi,sporcu_tc,sporcu_kulup,sporcu_kategori,sporcu_tarih,sporcu_il,sporcu_cinsiyet,sporcu_no,sporcu_mail) VALUES (:sporcu_adi,:sporcu_tc,:sporcu_kulup,:sporcu_kategori,:sporcu_tarih,:sporcu_il,:sporcu_cinsiyet,:sporcu_no,:sporcu_mail)");

$INSERT->bindParam(":sporcu_adi",$sporcu_adi);
$INSERT->bindParam(":sporcu_tc",$sporcu_tc);
$INSERT->bindParam(":sporcu_kulup",$sporcu_kulup);
$INSERT->bindParam(":sporcu_kategori",$sporcu_kategori);
$INSERT->bindParam(":sporcu_tarih",$sporcu_tarih);
$INSERT->bindParam(":sporcu_il",$sporcu_il);
$INSERT->bindParam(":sporcu_cinsiyet",$sporcu_cinsiyet);
$INSERT->bindParam(":sporcu_no",$sporcu_no);
$INSERT->bindParam(":sporcu_mail",$sporcu_mail);

$INSERT->execute();
header("Location:sporcu_ekle.php?sporcuekle=ok"); //ADRESE YÖNELDİR

//echo "KAYIT BAŞARILI";











 ?>
