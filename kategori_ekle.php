<!DOCTYPE html>
<html>
<head>
	<title>Kategori Ekleme</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- SAYFAYI MOBİL UYUMLU HALE GETİRİR-->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"> <!-- CSS DOSYLARI TANIMLANIR-->
	<link rel="stylesheet" type="text/css" href="dist/css/style.css"> <!-- CSS DOSYLARI TANIMLANIR-->
</head>
<body>

 <div class="jumbotron">
  <h1 class="display-4">Yeni Kategori Ekleme !</h1>
<form action="kayit.php" method="post">
  <div class="form-group">
    <label for="baslik">Kategori Adı</label>
    <input type="text" name="kategori_adi" class="form-control" id="kategori_adi" placeholder="Kategori Giriniz">
  </div>

  <div class="form-group">
    <label for="aciklama">Kategori Sırası</label>
    <input type="text" name="kategori_sira" class="form-control" id="kategori_sira" placeholder="Sıra Numarası Giriniz.">
  </div>
  <button type="submit" name="kayit" class="btn btn-danger">KAYIT YAP</button>
</form>
</div>


<script type="text/javascript" src="dist/js/jquery.js"></script><!-- BODY KISMINDA EN ALTTA JAVA DOSYASI GÖSTERİLİR -->
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>