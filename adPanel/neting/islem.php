<?php
ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['login']))
{
	$kullanici_ad = $_POST['kullanici_ad'];
	$kullanici_password = md5($_POST['kullanici_password']);

	if($kullanici_ad && $kullanici_password)
	{
		$kullanicisor = $db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_password=:password");
		$kullanicisor->execute(array(
			'ad' => $kullanici_ad,
			'password' => $kullanici_password
			));
		$say=$kullanicisor->rowcount();

		if($say>0)
		{
			$_SESSION['kullanici_ad'] = $kullanici_ad;
			header('Location:../production/index.php');
		}
		else
		{
			header('Location:../production/login.php?durum=no');
		}

	}
}

if(isset($_POST['doktor']))
{
	$kullanici_ad = $_POST['kullanici_ad'];
	$kullanici_password = md5($_POST['kullanici_password']);

	if($kullanici_ad && $kullanici_password)
	{
		$kullanicisor = $db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_password=:password");
		$kullanicisor->execute(array(
			'ad' => $kullanici_ad,
			'password' => $kullanici_password
			));
		$say=$kullanicisor->rowcount();

		if($say>0)
		{
			$_SESSION['kullanici_ad'] = $kullanici_ad;
			header('Location:../production/doktor-panel.php');
		}
		else
		{
			header('Location:../production/login.php?durum=no');
		}

	}
}

if(isset($_POST['hasta']))
{
	$kullanici_ad = $_POST['kullanici_ad'];
	$kullanici_password = md5($_POST['kullanici_password']);

	if($kullanici_ad && $kullanici_password)
	{
		$kullanicisor = $db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_password=:password");
		$kullanicisor->execute(array(
			'ad' => $kullanici_ad,
			'password' => $kullanici_password
			));
		$say=$kullanicisor->rowcount();

		if($say>0)
		{
			$_SESSION['kullanici_ad'] = $kullanici_ad;
			header('Location:../production/hasta-panel.php');
		}
		else
		{
			header('Location:../production/login.php?durum=no');
		}

	}
}

	if(isset($_POST['GenelAyarKaydet']))
	{
		$ayarkaydet = $db -> prepare("UPDATE ayar SET
			ayar_siteurl = :siteurl,
			ayar_title = :title,
			ayar_description = :description,
			ayar_keywords = :keywords,
			ayar_author = :author
			WHERE ayar_id=0");

		$guncelle = $ayarkaydet->execute(array(
			'siteurl' => $_POST['ayar_siteurl'],
			'title' => $_POST['ayar_title'],
			'description' => $_POST['ayar_description'],
			'keywords' => $_POST['ayar_keywords'],
			'author' => $_POST['ayar_author']
			));

		if($guncelle)
	{
		header("Location:../production/genel-ayar.php?durum=ok");
	}
	else
		{
			header("Location:../production/genel-ayar.php?durum=no");
		}
	}

	if(isset($_POST['IletisimAyarKaydet']))
	{
		$ayarkaydet = $db -> prepare("UPDATE ayar SET
			ayar_tel = :tel,
			ayar_gsm = :gsmtel,
			ayar_faks = :faks,
			ayar_mail = :mail,
			ayar_adres = :adres,
			ayar_ilce = :ilce,
			ayar_il = :il,
			ayar_mesai = :mesai
			WHERE ayar_id=0");

		$guncelle = $ayarkaydet->execute(array(
			'tel' => $_POST['ayar_tel'],
			'gsmtel' => $_POST['ayar_gsm'],
			'faks' => $_POST['ayar_faks'],
			'mail' => $_POST['ayar_mail'],
			'adres' => $_POST['ayar_adres'],
			'ilce' => $_POST['ayar_ilce'],
			'il' => $_POST['ayar_il'],
			'mesai' => $_POST['ayar_mesai']
			));
		if($guncelle)
	{
		header("Location:../production/iletisim-ayar.php?durum=ok");
	}
	else
		{
			header("Location:../production/iletisim-ayar.php?durum=no");
		}
	}

	if(isset($_POST['ApiAyarKaydet']))
	{
		$ayarkaydet = $db -> prepare("UPDATE ayar SET
			ayar_recapctha = :recapctha,
			ayar_googlemap = :googlemap,
			ayar_analystic = :analystic
			WHERE ayar_id=0");

		$guncelle = $ayarkaydet->execute(array(
			'recapctha' => $_POST['ayar_recapctha'],
			'googlemap' => $_POST['ayar_googlemap'],
			'analystic' => $_POST['ayar_analystic']
			));
		if($guncelle)
	{
		header("Location:../production/api-ayar.php?durum=ok");
	}
	else
		{
			header("Location:../production/api-ayar.php?durum=no");
		}
	}

	if(isset($_POST['MedyaAyarKaydet']))
	{
		$ayarkaydet = $db -> prepare("UPDATE ayar SET
			ayar_facebook = :facebook,
			ayar_twitter = :twitter,
			ayar_youtube = :youtube,
			ayar_google = :google
			WHERE ayar_id=0");

		$guncelle = $ayarkaydet->execute(array(
			'facebook' => $_POST['ayar_facebook'],
			'twitter' => $_POST['ayar_twitter'],
			'youtube' => $_POST['ayar_youtube'],
			'google' => $_POST['ayar_google']
			));
		if($guncelle)
	{
		header("Location:../production/medya-ayar.php?durum=ok");
	}
	else
		{
			header("Location:../production/medya-ayar.php?durum=no");
		}
	}

	if(isset($_POST['MailAyarKaydet']))
	{
		$ayarkaydet = $db -> prepare("UPDATE ayar SET
			ayar_smtphost = :smtphost,
			ayar_smtpuser = :smtpuser,
			ayar_smtppassword = :smtppassword,
			ayar_smtpport = :smtpport
			WHERE ayar_id=0");

		$guncelle = $ayarkaydet->execute(array(
			'smtphost' => $_POST['ayar_smtphost'],
			'smtpuser' => $_POST['ayar_smtpuser'],
			'smtppassword' => $_POST['ayar_smtppassword'],
			'smtpport' => $_POST['ayar_smtpport']
			));
		if($guncelle)
	{
		header("Location:../production/mail-ayar.php?durum=ok");
	}
	else
		{
			header("Location:../production/mail-ayar.php?durum=no");
		}
	}

	if(isset($_POST['HakkimizdaKaydet']))
	{
		$ayarkaydet = $db -> prepare("UPDATE hakkimizda SET
			hakkimizda_baslik = :baslik,
			hakkimizda_icerik = :icerik,
			hakkimizda_video = :video,
			hakkimizda_vizyon = :vizyon,
			hakkimizda_misyon = :misyon
			WHERE hakkimizda_id=0");

		$guncelle = $ayarkaydet->execute(array(
			'baslik' => $_POST['hakkimizda_baslik'],
			'icerik' => $_POST['hakkimizda_icerik'],
			'video' => $_POST['hakkimizda_video'],
			'vizyon' => $_POST['hakkimizda_vizyon'],
			'misyon' => $_POST['hakkimizda_misyon']
			));

		if($guncelle)
	{
		header("Location:../production/hakkimizda.php?durum=ok");
	}
	else
		{
			header("Location:../production/hakkimizda.php?durum=no");
		}
	}


	if(isset($_POST['SliderKaydet']))
	{

		$uploads_dir ='../../dimg/slider';
		@$tmp_name = $_FILES['slider_resimyol']['tmp_name'];
		@$name = $_FILES['slider_resimyol']['name'];
		$random1 = rand(20000,32000);
		$random2 = rand(20000,32000);
		$random3 = rand(20000,32000);
		$random4 = rand(20000,32000); 
		$benzersizad = $random4.$random3.$random2.$random1;
		$refimgyol = substr($uploads_dir, 4)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$kaydet = $db -> prepare("INSERT INTO slider SET
			slider_ad = :ad,
			slider_link = :link,
			slider_sira = :sira,
			slider_durum = :durum,
			slider_resimyol = :resimyol");
		$insert = $kaydet->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum' => $_POST['slider_durum'],
			'resimyol' => $refimgyol
			));

		if($insert)
	{
		header("Location:../production/slider.php?durum=ok");
	}
	else
		{
			header("Location:../production/slider.php?durum=no");
		}
	}

	if($_GET['slidersil'] =="ok")
	{
		$sil = $db->prepare("DELETE from slider  WHERE slider_id=:slider_id");
		$kontrol = $sil->execute(array(
		'slider_id' => $_GET['slider_id']	
			));
		if($kontrol)
	{
		//$ResimSil = $_POST['slider_resimyol'];
		//unlink("../../dimg/slider/$ResimSil");
		header("Location:../production/slider.php?durum=ok");
	}
	else
		{
			header("Location:../production/slider.php?durum=no");
		}

	}

	if(isset($_POST['SliderDuzenle']))
	{
		$duzenle = $db -> prepare("UPDATE slider SET
			slider_ad = :ad,
			slider_link = :link,
			slider_sira = :sira,
			slider_durum = :durum
			WHERE slider_id={$_POST['slider_id']}");
		$guncelle = $duzenle->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'durum'=> $_POST['slider_durum']
			));

		$slider_id =$_POST['slider_id'];

		if($guncelle)
	{
		header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
	}
	else
		{
			header("Location:../production/slider-duzenle.php?durum=no");
		}
	}

	if(isset($_POST['icerikKaydet']))
	{

		$uploads_dir ='../../dimg/icerik';
		@$tmp_name = $_FILES['icerik_resimyol']['tmp_name'];
		@$name = $_FILES['icerik_resimyol']['name'];
		$random1 = rand(20000,32000);
		$random2 = rand(20000,32000);
		$random3 = rand(20000,32000);
		$random4 = rand(20000,32000); 
		$benzersizad = $random4.$random3.$random2.$random1;
		$refimgyol = substr($uploads_dir, 4)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		$tarih = $_POST['icerik_tarih'];
		$saat = $_POST['icerik_saat'];
		$zaman =$tarih." ".$saat;

		$kaydet = $db->prepare("INSERT INTO icerik SET
			icerik_ad = :ad,
			icerik_detay = :detay,
			icerik_keyword = :keyword,
			icerik_durum = :durum,
			icerik_resimyol = :resimyol,
			icerik_zaman = :zaman");
		$insert = $kaydet->execute(array(
			'ad' => $_POST['icerik_ad'],
			'detay' => $_POST['icerik_detay'],
			'keyword' => $_POST['icerik_keyword'],
			'durum' => $_POST['icerik_durum'],
			'resimyol' => $refimgyol,
			'zaman' => $zaman
			));
	
		if($insert)
	{
		header("Location:../production/icerik.php?durum=ok");
	}
	else
		{	
			header("Location:../production/icerik.php?durum=no");
		}
	}

	if($_GET['iceriksil'] =="ok")
	{
		$sil = $db->prepare("DELETE from icerik  WHERE icerik_id=:icerik_id");
		$kontrol = $sil->execute(array(
		'icerik_id' => $_GET['icerik_id']	
			));
		if($kontrol)
	{
		//$ResimSil = $_POST['slider_resimyol'];
		//unlink("../../dimg/slider/$ResimSil");
		header("Location:../production/icerik.php?durum=ok");
	}
	else
		{
			header("Location:../production/icerik.php?durum=no");
		}

	}

	if(isset($_POST['icerikDuzenle']))
	{
		$duzenle = $db -> prepare("UPDATE icerik SET
			icerik_ad = :ad,
			icerik_zaman = :zaman,
			icerik_durum = :durum
			WHERE icerik_id={$_POST['icerik_id']}");
		$guncelle = $duzenle->execute(array(
			'ad' => $_POST['icerik_ad'],
			'zaman' => $_POST['icerik_zaman'],
			'durum'=> $_POST['icerik_durum']
			));

		$icerik_id =$_POST['icerik_id'];

		if($guncelle)
	{
		header("Location:../production/icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");
	}
	else
		{
			header("Location:../production/icerik-duzenle.php?durum=no");
		}
	}

?>