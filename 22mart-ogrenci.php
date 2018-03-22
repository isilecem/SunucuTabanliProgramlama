<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Öğrenci Bilgi Tablosu</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div>
<form class="form-signin" action="ogrenci_kayit.php" method="POST">
<h2 class="form-signin-heading"> Öğrenci Kayıt Formu </h2>
<input type="number" name="ogr_no" placeholder="Öğrenci No" class="form-control"><br>
<input type="text" name="ad" placeholder="Ad"><br>
<input type="text" name="soyad" placeholder="Soyad"><br>
<input type="text" name="bolum" placeholder="Bölüm"><br>
<button class="btn btn-lg btn-primary btn-block" type="submit">GÖNDER</button>
</form>
</div>
<br>
<form class="form-signin" action="ogrenci_listele.php" method="POST">
<button class="btn btn-lg btn-primary btn-block" type="submit">KAYITLARI GÖR</button>
</form>
</body>
</html>
