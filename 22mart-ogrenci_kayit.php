<?php
require("baglan.php");
# baglan.php'yi çağırmak için require komutu kullanılır / "include" veya "require_once" da kullanılabilir
# "include" sunucuya yük bindirir, tüm kodları çalıştırır ama baglan.php'de bir sıkıntı olup kodlar silinse veya bağlantı yapılmasa dahi sistem çalışır
if(!$baglan){
	die("Bağlantı başarısız".mysqli_connect_error());
}
# "die", break komutu ile aynı anlama geliyor, kod başarısız olursa aşağıdaki kodlara geçmiyor
# hatanın nerede olduğunu göstermek için "mysqli_connect_error"
else
{
	echo "Bağlantı başarılı<br>";
}
$ogrno=$_POST["ogr_no"];
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$bolum=$_POST["bolum"];
if($ogrno&$ad&$soyad&$bolum)
{
	$sorgu="insert into ogrenci_bilgi(ogrenci_no, ad, soyad, bolum) values('$ogrno','$ad','$soyad','$bolum')";
	
	if(mysqli_query($baglan,$sorgu)===True)# "===" hem türü aynı olacak hem de değer aynı olacak // "==" sadece değerler aynı olacak
	{
		echo "Kayıtlar başarıyla eklendi";
	}	
	else{
		echo "Kayıtlar eklenemedi";
	}
}
else{
	echo "Lütfen tüm alanları doldurun";
}
?>
