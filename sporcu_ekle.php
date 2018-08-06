<!DOCTYPE html>
<html>
<head>
	<title>Sporcu Ekleme</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- SAYFAYI MOBİL UYUMLU HALE GETİRİR-->
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css"> <!-- CSS DOSYLARI TANIMLANIR-->
	<link rel="stylesheet" type="text/css" href="dist/css/style.css"> <!-- CSS DOSYLARI TANIMLANIR-->
</head>
<body>

 <div class="jumbotron">
  <h1 class="display-4">Yeni SPORCU Ekleme !</h1>
<form action="sporcu_kayit.php" method="post">
 
  <div class="form-group">
    <label for="baslik">Sporcunun Adı Soyadı </label>
    <input type="text" name="sporcu_adi" class="form-control" id="sporcu_adi" placeholder="Sporcunun Adını ve Soyadını Giriniz">
  </div>

  <div class="form-group">
    <label for="baslik">T.C. Kimlik No</label>
    <input type="text" name="sporcu_tc" class="form-control" id="sporcu_tc" placeholder="Sporcuya Ait T.C. Numarasını Giriniz">
  </div>

   <div class="form-group">
    <label for="baslik">Kulübü</label>
    <input type="text" name="sporcu_kulup" class="form-control" id="sporcu_kulup" placeholder="Sporcunun Kulübünü Giriniz">
  </div>

     <div class="form-group">
   <label>Sporcunun Yarışacağı Kategorileri Seçiniz </label>
   <select size"" multiple="" class="form-control" id="sporcu_kategori" name="sporcu_kategori">
          <option>K1</option>
          <option>C1</option>
          <option>C2</option>
           </select>
         <p class="help-block">Listeden Birkaç Seçim Yapmak İçin 'CTRL'Tuşunu Kullanarak Ekleyebilirisiz.</p>
             </div>


   <div class="form-group">
    <label for="baslik">Doğum Tarihi</label>
    <input type="date" name="sporcu_tarih" class="form-control" id="sporcu_tarih">
  </div>

   <div class="form-group">
    <label for="baslik">İli</label>
    <input type="text" name="sporcu_il" class="form-control" id="sporcu_il" placeholder="Müsabakaya Katıldığı Bölge-İl">
  </div>
    <div class="form-group">
    <label>Cinsiyet</label>
    <select class="form-control" type="text" id="sporcu_cinsiyet" name="sporcu_cinsiyet">
     <option>BAY</option>
    <option>BAYAN</option>
   </select>
    </div>

   <div class="form-group">
    <label for="baslik">Telefon Numarası</label>
    <input type="text" name="sporcu_no" class="form-control" id="sporcu_no" placeholder="Geçerli bir Telefon Numarası Giriniz..">
  </div>

   <div class="form-group">
    <label for="baslik">Mail Adresi</label>
    <input type="mail" name="sporcu_mail" class="form-control" id="sporcu_mail" placeholder="Mail Adresi Giriniz..">
  </div>
  <button type="submit" name="kayit" class="btn btn-danger">KAYIT YAP</button>
</form>
</div>


<script type="text/javascript" src="dist/js/jquery.js"></script><!-- BODY KISMINDA EN ALTTA JAVA DOSYASI GÖSTERİLİR -->
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>