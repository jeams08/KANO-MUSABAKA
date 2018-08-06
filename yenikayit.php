<?php 
include "baglan.php";

$baslik=$_POST["baslik"];
$aciklama=$_POST["aciklama"];
$tarih=$_POST["tarih"];

$INSERT=$db->prepare("INSERT INTO todo_list (baslik,aciklama,tarih) VALUES (:baslik,:aciklama,:tarih)");

$INSERT->bindParam(":baslik",$baslik);
$INSERT->bindParam(":aciklama",$aciklama);
$INSERT->bindParam(":tarih",$tarih);

$INSERT->execute();
echo "KAYIT BAŞARILI";

 ?>