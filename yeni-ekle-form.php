<!DOCTYPE html>
<html>
<head>
	<title>Liste</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- SAYFAYI MOBİL UYUMLU HALE GETİRİR-->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"> <!-- CSS DOSYLARI TANIMLANIR-->
	<link rel="stylesheet" type="text/css" href="dist/css/style.css"> <!-- CSS DOSYLARI TANIMLANIR-->
</head>
<body>
<?php 
include 'navbar.php'
 ?>

 <div class="jumbotron">
  <h1 class="display-6">Yeni Ekleme Formu!</h1>
<form action="yenikayit.php" method="post">
  <div class="form-group">
    <label for="baslik">Başlık</label>
    <input type="text" name="baslik" class="form-control" id="baslik" placeholder="Başlık Giriniz">
  </div>

  <div class="form-group">
    <label for="aciklama">Açıklama</label>
    <textarea name="aciklama" class="form-control" id="aciklama" rows="3" placeholder="Açıklama Giriniz.."></textarea>
  </div>
    <div class="form-group">
    <label for="tarih">Tarih</label>
    <input type="date" name="tarih" class="form-control" id="tarih">
  </div>
  <button type="submit" name="kayit" class="btn btn-danger">KAYIT YAP</button>
</form>
</div>


<script type="text/javascript" src="dist/js/jquery.js"></script><!-- BODY KISMINDA EN ALTTA JAVA DOSYASI GÖSTERİLİR -->
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>