<?php
require("baglan.php");
if(!$baglan){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı<br>";
}
$sorgu="select * from ogrenci_bilgi";
$a=mysqli_query($baglan,$sorgu);
if(mysqli_num_rows($a)>0)
	# "ogrenci_bilgi" tablomuzun içi boş değilse... diye bu if'li kod
{
	while($row=mysqli_fetch_assoc($a))# bu komut veritabanından gelen bilgileri bir liste yapmak için
	{
		echo "Ogrenci no: ".$row["ogrenci_no"]." - Ad: ".$row["ad"]." - Soyad: ".$row["soyad"]." - Bolumu: ".$row["bolum"]."<br>";
	}
}
else{
	echo "Kayıt bulunamadı";
}
mysqli_close($baglan);
# mysql'i kapatmazsak veritabanına yük biner, bu nedenle en son "close" ediyoruz
?>
