<?php
ob_start();
session_start();
include 'config.php';
date_default_timezone_set( 'Europe/Istanbul' );
if ( isset( $_POST[ 'login' ] ) )
{


	$kullanici_adi  = htmlspecialchars(trim($_POST[ 'kullanici_adi' ]));
	$kullanici_pass = htmlspecialchars(trim(md5( $_POST[ 'kullanici_pass' ] )));

	if ( $kullanici_adi && $kullanici_pass )
	{


		$kullanicisor = $db->prepare( "SELECT * from kullanici where kullanici_adi=:adi and kullanici_pass=:pass" );
		$kullanicisor->execute(
			array(
				'adi'  => $kullanici_adi,
				'pass' => $kullanici_pass
			)
		);

		$say = $kullanicisor->rowCount();

		if ( $say > 0 )
		{

			$_SESSION[ 'kullanici_adi' ] = $kullanici_adi;

			header( 'Location:../index.php' );
		}
		else
		{

			header( 'Location:../login.php?status=no' );
		}
	}
}


if ( isset( $_POST[ 'yorumkonu' ] ) )
{
    
	$settings=$db->prepare("SELECT * from ayar where ayar_id=?");
	$settings->execute(array(0));
	$settingsprint=$settings->fetch(PDO::FETCH_ASSOC);
	include 'seo.php';

	$yorum_isim = htmlspecialchars(strip_tags(trim($_POST[ 'yorum_isim' ])));
	$yorum_mail = htmlspecialchars(strip_tags(trim($_POST[ 'yorum_mail' ])));
	$yorum_mesaj = htmlspecialchars(strip_tags(trim($_POST[ 'yorum_mesaj' ])));
	$yorum_cins = htmlspecialchars(strip_tags(trim($_POST[ 'yorum_cins' ])));
	$yorum_konu = htmlspecialchars(strip_tags(trim($_POST[ 'yorum_konu' ])));

	

	$kaydet = $db->prepare(
		"INSERT INTO yorum SET
		yorum_isim=:name,
		yorum_mail=:mail,
		yorum_mesaj=:mesaj,
		yorum_cins=:cins,
		yorum_konu=:konu");
	$insert = $kaydet->execute(
		array(
			'name' => $yorum_isim,
			'mail' => $yorum_mail,
			'mesaj' => $yorum_mesaj,
			'cins' => $yorum_cins,
			'konu' => $yorum_konu
		));


	if ($yorum_cins==1) {

		$sayfasor=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id");
		$sayfasor->execute(array(
			'sayfa_id' => $yorum_konu
		));
		$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);

		$link = $settingsprint['ayar_siteurl'].seo('sayfa-'.$sayfacek["sayfa_baslik"]).'-'.$sayfacek["sayfa_id"];

	} elseif ($yorum_cins==2) {

		$hizmetsor=$db->prepare("SELECT * from hizmetler where hizmet_id=:hizmet_id");
		$hizmetsor->execute(array(
			'hizmet_id' => $yorum_konu
		));
		$hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC);

		$link = $settingsprint['ayar_siteurl'].seo('hizmet-'.$hizmetcek["hizmet_baslik"]).'-'.$hizmetcek["hizmet_id"];

		
	} elseif ($yorum_cins==3) {

		$projeedit=$db->prepare("SELECT * from projeler where proje_id=:proje_id");
		$projeedit->execute(array(
			'proje_id' => $yorum_konu
		));
		$projewrite=$projeedit->fetch(PDO::FETCH_ASSOC);

		$link = $settingsprint['ayar_siteurl'].seo('proje-'.$projewrite["proje_baslik"]).'-'.$projewrite["proje_id"];

	} elseif ($yorum_cins==4) {

		$urunedit=$db->prepare("SELECT * from urunler where urun_id=:urun_id");
		$urunedit->execute(array(
			'urun_id' => $yorum_konu
		));
		$urunwrite=$urunedit->fetch(PDO::FETCH_ASSOC);

		$link = $settingsprint['ayar_siteurl'].seo('oda-'.$urunwrite['urun_baslik']).'-'.$urunwrite['urun_id'];

	} elseif ($yorum_cins==5) {

		$blogedit=$db->prepare("SELECT * from blog where blog_id=:blog_id");
		$blogedit->execute(array(
			'blog_id' => $yorum_konu
		));
		$blogwrite=$blogedit->fetch(PDO::FETCH_ASSOC);

		$link = $settingsprint['ayar_siteurl'].seo('blog-'.$blogwrite["blog_baslik"]).'-'.$blogwrite["blog_id"];

	}


	if ( $insert )
	{

		Header( "Location:../../phpmail/yorum.php?randevuform=ok" );


	}
	else
	{

		Header( "Location:$link?status=ok" );
	}
}
if ( isset( $_POST[ 'randevu' ] ) )
{
	$yetiskin = htmlspecialchars(trim($_POST[ 'yetiskin' ]));
	$oda = htmlspecialchars(trim($_POST[ 'oda' ]));
	$fiyat = htmlspecialchars(trim($_POST[ 'fiyat' ]));
	$cocuk = htmlspecialchars(trim($_POST[ 'cocuk' ]));
	$giris = htmlspecialchars(trim($_POST[ 'giris' ]));
	$donus = htmlspecialchars(trim($_POST[ 'donus' ]));
	$gunfarki = htmlspecialchars(trim($_POST[ 'gunfarki' ]));
	$randevu_ad = htmlspecialchars(trim($_POST[ 'randevu_ad' ]));
	$randevu_mail = htmlspecialchars(trim($_POST[ 'randevu_mail' ]));
	$randevu_tel = htmlspecialchars(trim($_POST[ 'randevu_tel' ]));


	$kaydet = $db->prepare(
		"INSERT INTO randevu SET  
		randevu_ad=:ad,
		randevu_mail=:mail,
		randevu_tel=:tel,
		randevu_oda=:oda,
		randevu_giris=:giris,
		randevu_donus=:donus,
		randevu_yetiskin=:yetiskin,
		randevu_cocuk=:cocuk,
		randevu_gunfarki=:gunfarki,
		randevu_fiyat=:fiyat");
	$insert = $kaydet->execute(
		array(
			'ad' => $randevu_ad,
			'mail' => $randevu_mail,
			'tel' => $randevu_tel,
			'oda' => $oda,
			'giris' => $giris,
			'donus' => $donus,
			'yetiskin' => $yetiskin,
			'cocuk' => $cocuk,
			'gunfarki' => $gunfarki,
			'fiyat' => $fiyat
		));


	if ( $insert )
	{

		Header( "Location:../../phpmail/rezervasyon.php?randevuform=ok" );
		
		
	}
	else
	{

		Header( "Location:../../randevu?status=no" );
	}
}

if ( isset( $_POST[ 'SatinAl' ] ) )
{
	$ad=htmlspecialchars(trim($_POST[ 'siparis_ad' ]));
	$urun=htmlspecialchars(trim($_POST[ 'siparis_urun' ]));
	$odeme =htmlspecialchars(trim($_POST[ 'siparis_odeme' ]));
	$tel=htmlspecialchars(trim($_POST[ 'siparis_tel' ]));
	$il=htmlspecialchars(trim($_POST[ 'siparis_il' ]));
	$ilce=htmlspecialchars(trim($_POST[ 'siparis_ilce' ]));
	$adres=htmlspecialchars(trim($_POST[ 'siparis_adres' ]));
	$mail=htmlspecialchars(trim($_POST[ 'siparis_mail' ]));


	$kaydet = $db->prepare(
		"INSERT INTO siparis SET
		siparis_ad=:ad,
		siparis_urun=:urun,
		siparis_odeme=:odeme,
		siparis_tel=:tel,
		siparis_il=:il,
		siparis_ilce=:ilce,
		siparis_mail=:mail,
		siparis_adres=:adres");
	$insert = $kaydet->execute(
		array(
			'ad' => $ad,
			'urun' => $urun,
			'odeme' => $odeme,
			'tel' => $tel,
			'mail' => $mail,
			'il' => $il,
			'ilce' => $ilce,
			'adres' => $adres
		));

	$smssor=$db->prepare("SELECT * from sms where sms_id=0");
	$smssor->execute(array(0));
	$smscek=$smssor->fetch(PDO::FETCH_ASSOC);

	$settings=$db->prepare("SELECT * from ayar where ayar_id=?");
	$settings->execute(array(0));
	$settingsprint=$settings->fetch(PDO::FETCH_ASSOC);

	$link = $settingsprint['ayar_siteurl'];

	if ( $insert )
	{
		Header( "Location:../../phpmail/siparis.php?iletisimform=ok" );
		
	}
	else
	{

		Header( "Location:$link?status=no" );
	}
}
if ( isset( $_POST[ 'iletisimform' ] ) )
{
	$mesaj_ad= htmlspecialchars(strip_tags(trim($_POST[ 'mesaj_ad' ])));
	$mesaj_mail= htmlspecialchars(strip_tags(trim($_POST[ 'mesaj_mail' ])));
	$mesaj_icerik= htmlspecialchars(strip_tags(trim($_POST[ 'mesaj_icerik' ])));


	$ayarkaydet = $db->prepare(
		"INSERT INTO mesajlar SET
		mesaj_ad=:ad,
		mesaj_mail=:mail,
		mesaj_icerik=:icerik
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $mesaj_ad,
			'mail'     => $mesaj_mail,
			'icerik'     => $mesaj_icerik
		)
	);

	

	if ( $update )
	{
		$idmesaj = $db->lastInsertId();
		Header( "Location:../../phpmail/index.php?iletisimform=ok&mesaj=$idmesaj" );
	}
	else
	{

		Header( "Location:../../iletisim?status=no" );
	}
} 
if ( isset( $_POST[ 'blogekle' ] ) )
{
    
	$uploads_dir = '../assets/img/blog';
	@$tmp_name = $_FILES[ 'blog_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti='.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );



	$kaydet = $db->prepare(
		"INSERT INTO blog SET
		blog_baslik=:baslik,
		blog_baslik2=:baslik2,
		blog_baslik3=:baslik3,
		blog_kategori=:kategori,
		blog_detay=:detay,
		blog_detay2=:detay2,
		blog_detay3=:detay3,
		blog_title=:title,
		blog_title2=:title2,
		blog_title3=:title3,
		blog_descr=:descr,
		blog_descr2=:descr2,
		blog_descr3=:descr3,
		blog_keyword=:keyword,
		blog_keyword2=:keyword2,
		blog_keyword3=:keyword3,
		blog_resim=:resim"
	);
	$insert = $kaydet->execute(
		array(
			'baslik' => $_POST[ 'blog_baslik' ],
			'baslik2' => $_POST[ 'blog_baslik2' ],
			'baslik3' => $_POST[ 'blog_baslik3' ],
			'kategori' => $_POST[ 'blog_kategori' ],
			'detay'  => $_POST[ 'blog_detay' ],
			'detay2'  => $_POST[ 'blog_detay2' ],
			'detay3'  => $_POST[ 'blog_detay3' ],
			'title'  => $_POST[ 'blog_title' ],
			'title2'  => $_POST[ 'blog_title2' ],
			'title3'  => $_POST[ 'blog_title3' ],
			'descr'  => $_POST[ 'blog_descr' ],
			'descr2'  => $_POST[ 'blog_descr2' ],
			'descr3'  => $_POST[ 'blog_descr3' ],
			'keyword'  => $_POST[ 'blog_keyword' ],
			'keyword2'  => $_POST[ 'blog_keyword2' ],
			'keyword3'  => $_POST[ 'blog_keyword3' ],
			'resim'  => $refimgyol
		)
	);

	if ( $insert )
	{

		Header( "Location:../blog.php?status=ok" );
	}
	else
	{

		Header( "Location:../blog.php?status=no" );
	}
}
if ( isset( $_POST[ 'yorumicerikduzenle' ] ) )
{
	$ayarkaydet = $db->prepare(
		"UPDATE yorum SET
		yorum_isim=:name,
		yorum_mail=:mail,
		yorum_tarih=:tarih,
		yorum_durum=:durum,
		yorum_mesaj=:mesaj
		WHERE yorum_id={$_POST['yorum_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'name' => $_POST[ 'yorum_isim' ],
			'mail' => $_POST[ 'yorum_mail' ],
			'mesaj' => $_POST[ 'yorum_mesaj' ],
			'durum' => $_POST[ 'yorum_durum' ],
			'tarih' => $_POST[ 'yorum_tarih' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../index.php?status=ok" );
	}
	else
	{

		Header( "Location:../index.php?status=ok" );
	}
} 
if ( isset( $_POST[ 'widgetduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE widget SET
		widget_ceviri1=:ceviri1,
		widget_ceviri2=:ceviri2,
		widget_ceviri3=:ceviri3,
		widget_ceviri4=:ceviri4,
		widget_ceviri5=:ceviri5,
		widget_ceviri6=:ceviri6,
		widget_ceviri7=:ceviri7,
		widget_bdiger=:bdiger,
		widget_diger=:diger,
		widget_counter=:counter,
		widget_bbilgi=:bbilgi,
		widget_rezgidis=:rezgidis,
		widget_rezdonus=:rezdonus,
		widget_rezyetiskin=:rezyetiskin,
		widget_rezcocuk=:rezcocuk,
		widget_rezbuton=:rezbuton,
		widget_rez=:rez,
		widget_sayfayo=:sayfayo,
		widget_hizmetyo=:hizmetyo,
		widget_projeyo=:projeyo,
		widget_urunyo=:urunyo,
		widget_blogyo=:blogyo,
		widget_bhizmet=:bhizmet,
		widget_hizmet=:hizmet,
		widget_btwitter=:btwitter,
		widget_twitter=:twitter,
		widget_blog=:blog,
		widget_proje=:proje,
		widget_bproje=:bproje,
		widget_referans=:referans,
		widget_breferans=:breferans,
		widget_galeri=:galeri,
		widget_bgaleri=:bgaleri,
		widget_burun=:burun,
		widget_urun=:urun,
		widget_yorum=:yorum,
		widget_bwelcome=:bwelcome,
		widget_welcome=:welcome,
		widget_bwelcome1=:bwelcome1,
		widget_welcome1=:welcome1,
		widget_counter=:counter,
		widget_bblog=:bblog,
		widget_bara=:bara,
		widget_ara=:ara,
		widget_bilgi=:bilgi,
		widget_ufiyat=:ufiyat,
		widget_usatinal=:usatinal,
		widget_byorum=:byorum
		WHERE widget_id={$_POST['widget_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ceviri1'     => $_POST[ 'widget_ceviri1' ],
			'ceviri2'     => $_POST[ 'widget_ceviri2' ],
			'ceviri3'     => $_POST[ 'widget_ceviri3' ],
			'ceviri4'     => $_POST[ 'widget_ceviri4' ],
			'ceviri5'     => $_POST[ 'widget_ceviri5' ],
			'ceviri6'     => $_POST[ 'widget_ceviri6' ],
			'ceviri7'     => $_POST[ 'widget_ceviri7' ],
			'bdiger'     => $_POST[ 'widget_bdiger' ],
			'diger'     => $_POST[ 'widget_diger' ],
			'counter'     => $_POST[ 'widget_counter' ],
			'bbilgi'     => $_POST[ 'widget_bbilgi' ],
			'rezgidis'     => $_POST[ 'widget_rezgidis' ],
			'rezdonus'     => $_POST[ 'widget_rezdonus' ],
			'rezyetiskin'     => $_POST[ 'widget_rezyetiskin' ],
			'rezcocuk'     => $_POST[ 'widget_rezcocuk' ],
			'rezbuton'     => $_POST[ 'widget_rezbuton' ],
			'rez'     => $_POST[ 'widget_rez' ],
			'sayfayo'     => $_POST[ 'widget_sayfayo' ],
			'hizmetyo'     => $_POST[ 'widget_hizmetyo' ],
			'projeyo'     => $_POST[ 'widget_projeyo' ],
			'urunyo'     => $_POST[ 'widget_urunyo' ],
			'blogyo'     => $_POST[ 'widget_blogyo' ],
			'bhizmet'     => $_POST[ 'widget_bhizmet' ],
			'hizmet'     => $_POST[ 'widget_hizmet' ],
			'btwitter'     => $_POST[ 'widget_btwitter' ],
			'twitter'     => $_POST[ 'widget_twitter' ],
			'blog'     => $_POST[ 'widget_blog' ],
			'proje'     => $_POST[ 'widget_proje' ],
			'bproje'     => $_POST[ 'widget_bproje' ],
			'referans'     => $_POST[ 'widget_referans' ],
			'breferans'     => $_POST[ 'widget_breferans' ],
			'galeri'     => $_POST[ 'widget_galeri' ],
			'bgaleri'     => $_POST[ 'widget_bgaleri' ],
			'burun'     => $_POST[ 'widget_burun' ],
			'urun'     => $_POST[ 'widget_urun' ],
			'yorum'     => $_POST[ 'widget_yorum' ],
			'bwelcome'     => $_POST[ 'widget_bwelcome' ],
			'welcome'     => $_POST[ 'widget_welcome' ],
			'counter'    => $_POST[ 'widget_counter' ],
			'bwelcome1'     => $_POST[ 'widget_bwelcome1' ],
			'welcome1'     => $_POST[ 'widget_welcome1' ],
			'bblog'     => $_POST[ 'widget_bblog' ],
			'bara'     => $_POST[ 'widget_bara' ],
			'ara'     => $_POST[ 'widget_ara' ],
			'bilgi'     => $_POST[ 'widget_bilgi' ],
			'ufiyat'     => $_POST[ 'widget_ufiyat' ],
			'usatinal'     => $_POST[ 'widget_usatinal' ],
			'byorum'     => $_POST[ 'widget_byorum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../modul.php?status=ok" );
	}
	else
	{

		Header( "Location:../modul.php?status=no" );
	}
}
if ( isset( $_POST[ 'widgetduzenle2' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE widget2 SET
		widget_ceviri1=:ceviri1,
		widget_ceviri2=:ceviri2,
		widget_ceviri3=:ceviri3,
		widget_ceviri4=:ceviri4,
		widget_ceviri5=:ceviri5,
		widget_ceviri6=:ceviri6,
		widget_ceviri7=:ceviri7,
		widget_bdiger=:bdiger,
		widget_diger=:diger,
		widget_counter=:counter,
		widget_bbilgi=:bbilgi,
		widget_rezgidis=:rezgidis,
		widget_rezdonus=:rezdonus,
		widget_rezyetiskin=:rezyetiskin,
		widget_rezcocuk=:rezcocuk,
		widget_rezbuton=:rezbuton,
		widget_rez=:rez,
		widget_sayfayo=:sayfayo,
		widget_hizmetyo=:hizmetyo,
		widget_projeyo=:projeyo,
		widget_urunyo=:urunyo,
		widget_blogyo=:blogyo,
		widget_bhizmet=:bhizmet,
		widget_hizmet=:hizmet,
		widget_btwitter=:btwitter,
		widget_twitter=:twitter,
		widget_blog=:blog,
		widget_proje=:proje,
		widget_bproje=:bproje,
		widget_referans=:referans,
		widget_breferans=:breferans,
		widget_galeri=:galeri,
		widget_bgaleri=:bgaleri,
		widget_burun=:burun,
		widget_urun=:urun,
		widget_yorum=:yorum,
		widget_bwelcome=:bwelcome,
		widget_welcome=:welcome,
		widget_bwelcome1=:bwelcome1,
		widget_welcome1=:welcome1,
		widget_counter=:counter,
		widget_bblog=:bblog,
		widget_bara=:bara,
		widget_ara=:ara,
		widget_bilgi=:bilgi,
		widget_ufiyat=:ufiyat,
		widget_usatinal=:usatinal,
		widget_byorum=:byorum
		WHERE widget_id={$_POST['widget_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ceviri1'     => $_POST[ 'widget_ceviri1' ],
			'ceviri2'     => $_POST[ 'widget_ceviri2' ],
			'ceviri3'     => $_POST[ 'widget_ceviri3' ],
			'ceviri4'     => $_POST[ 'widget_ceviri4' ],
			'ceviri5'     => $_POST[ 'widget_ceviri5' ],
			'ceviri6'     => $_POST[ 'widget_ceviri6' ],
			'ceviri7'     => $_POST[ 'widget_ceviri7' ],
			'bdiger'     => $_POST[ 'widget_bdiger' ],
			'diger'     => $_POST[ 'widget_diger' ],
			'counter'     => $_POST[ 'widget_counter' ],
			'bbilgi'     => $_POST[ 'widget_bbilgi' ],
			'rezgidis'     => $_POST[ 'widget_rezgidis' ],
			'rezdonus'     => $_POST[ 'widget_rezdonus' ],
			'rezyetiskin'     => $_POST[ 'widget_rezyetiskin' ],
			'rezcocuk'     => $_POST[ 'widget_rezcocuk' ],
			'rezbuton'     => $_POST[ 'widget_rezbuton' ],
			'rez'     => $_POST[ 'widget_rez' ],
			'sayfayo'     => $_POST[ 'widget_sayfayo' ],
			'hizmetyo'     => $_POST[ 'widget_hizmetyo' ],
			'projeyo'     => $_POST[ 'widget_projeyo' ],
			'urunyo'     => $_POST[ 'widget_urunyo' ],
			'blogyo'     => $_POST[ 'widget_blogyo' ],
			'bhizmet'     => $_POST[ 'widget_bhizmet' ],
			'hizmet'     => $_POST[ 'widget_hizmet' ],
			'btwitter'     => $_POST[ 'widget_btwitter' ],
			'twitter'     => $_POST[ 'widget_twitter' ],
			'blog'     => $_POST[ 'widget_blog' ],
			'proje'     => $_POST[ 'widget_proje' ],
			'bproje'     => $_POST[ 'widget_bproje' ],
			'referans'     => $_POST[ 'widget_referans' ],
			'breferans'     => $_POST[ 'widget_breferans' ],
			'galeri'     => $_POST[ 'widget_galeri' ],
			'bgaleri'     => $_POST[ 'widget_bgaleri' ],
			'burun'     => $_POST[ 'widget_burun' ],
			'urun'     => $_POST[ 'widget_urun' ],
			'yorum'     => $_POST[ 'widget_yorum' ],
			'bwelcome'     => $_POST[ 'widget_bwelcome' ],
			'welcome'     => $_POST[ 'widget_welcome' ],
			'counter'    => $_POST[ 'widget_counter' ],
			'bwelcome1'     => $_POST[ 'widget_bwelcome1' ],
			'welcome1'     => $_POST[ 'widget_welcome1' ],
			'bblog'     => $_POST[ 'widget_bblog' ],
			'bara'     => $_POST[ 'widget_bara' ],
			'ara'     => $_POST[ 'widget_ara' ],
			'bilgi'     => $_POST[ 'widget_bilgi' ],
			'ufiyat'     => $_POST[ 'widget_ufiyat' ],
			'usatinal'     => $_POST[ 'widget_usatinal' ],
			'byorum'     => $_POST[ 'widget_byorum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../modul.php?status=ok" );
	}
	else
	{

		Header( "Location:../modul.php?status=no" );
	}
}
if ( isset( $_POST[ 'widgetduzenle3' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE widget3 SET
		widget_ceviri1=:ceviri1,
		widget_ceviri2=:ceviri2,
		widget_ceviri3=:ceviri3,
		widget_ceviri4=:ceviri4,
		widget_ceviri5=:ceviri5,
		widget_ceviri6=:ceviri6,
		widget_ceviri7=:ceviri7,
		widget_bdiger=:bdiger,
		widget_diger=:diger,
		widget_counter=:counter,
		widget_bbilgi=:bbilgi,
		widget_rezgidis=:rezgidis,
		widget_rezdonus=:rezdonus,
		widget_rezyetiskin=:rezyetiskin,
		widget_rezcocuk=:rezcocuk,
		widget_rezbuton=:rezbuton,
		widget_rez=:rez,
		widget_sayfayo=:sayfayo,
		widget_hizmetyo=:hizmetyo,
		widget_projeyo=:projeyo,
		widget_urunyo=:urunyo,
		widget_blogyo=:blogyo,
		widget_bhizmet=:bhizmet,
		widget_hizmet=:hizmet,
		widget_btwitter=:btwitter,
		widget_twitter=:twitter,
		widget_blog=:blog,
		widget_proje=:proje,
		widget_bproje=:bproje,
		widget_referans=:referans,
		widget_breferans=:breferans,
		widget_galeri=:galeri,
		widget_bgaleri=:bgaleri,
		widget_burun=:burun,
		widget_urun=:urun,
		widget_yorum=:yorum,
		widget_bwelcome=:bwelcome,
		widget_welcome=:welcome,
		widget_bwelcome1=:bwelcome1,
		widget_welcome1=:welcome1,
		widget_counter=:counter,
		widget_bblog=:bblog,
		widget_bara=:bara,
		widget_ara=:ara,
		widget_bilgi=:bilgi,
		widget_ufiyat=:ufiyat,
		widget_usatinal=:usatinal,
		widget_byorum=:byorum
		WHERE widget_id={$_POST['widget_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ceviri1'     => $_POST[ 'widget_ceviri1' ],
			'ceviri2'     => $_POST[ 'widget_ceviri2' ],
			'ceviri3'     => $_POST[ 'widget_ceviri3' ],
			'ceviri4'     => $_POST[ 'widget_ceviri4' ],
			'ceviri5'     => $_POST[ 'widget_ceviri5' ],
			'ceviri6'     => $_POST[ 'widget_ceviri6' ],
			'ceviri7'     => $_POST[ 'widget_ceviri7' ],
			'bdiger'     => $_POST[ 'widget_bdiger' ],
			'diger'     => $_POST[ 'widget_diger' ],
			'counter'     => $_POST[ 'widget_counter' ],
			'bbilgi'     => $_POST[ 'widget_bbilgi' ],
			'rezgidis'     => $_POST[ 'widget_rezgidis' ],
			'rezdonus'     => $_POST[ 'widget_rezdonus' ],
			'rezyetiskin'     => $_POST[ 'widget_rezyetiskin' ],
			'rezcocuk'     => $_POST[ 'widget_rezcocuk' ],
			'rezbuton'     => $_POST[ 'widget_rezbuton' ],
			'rez'     => $_POST[ 'widget_rez' ],
			'sayfayo'     => $_POST[ 'widget_sayfayo' ],
			'hizmetyo'     => $_POST[ 'widget_hizmetyo' ],
			'projeyo'     => $_POST[ 'widget_projeyo' ],
			'urunyo'     => $_POST[ 'widget_urunyo' ],
			'blogyo'     => $_POST[ 'widget_blogyo' ],
			'bhizmet'     => $_POST[ 'widget_bhizmet' ],
			'hizmet'     => $_POST[ 'widget_hizmet' ],
			'btwitter'     => $_POST[ 'widget_btwitter' ],
			'twitter'     => $_POST[ 'widget_twitter' ],
			'blog'     => $_POST[ 'widget_blog' ],
			'proje'     => $_POST[ 'widget_proje' ],
			'bproje'     => $_POST[ 'widget_bproje' ],
			'referans'     => $_POST[ 'widget_referans' ],
			'breferans'     => $_POST[ 'widget_breferans' ],
			'galeri'     => $_POST[ 'widget_galeri' ],
			'bgaleri'     => $_POST[ 'widget_bgaleri' ],
			'burun'     => $_POST[ 'widget_burun' ],
			'urun'     => $_POST[ 'widget_urun' ],
			'yorum'     => $_POST[ 'widget_yorum' ],
			'bwelcome'     => $_POST[ 'widget_bwelcome' ],
			'welcome'     => $_POST[ 'widget_welcome' ],
			'counter'    => $_POST[ 'widget_counter' ],
			'bwelcome1'     => $_POST[ 'widget_bwelcome1' ],
			'welcome1'     => $_POST[ 'widget_welcome1' ],
			'bblog'     => $_POST[ 'widget_bblog' ],
			'bara'     => $_POST[ 'widget_bara' ],
			'ara'     => $_POST[ 'widget_ara' ],
			'bilgi'     => $_POST[ 'widget_bilgi' ],
			'ufiyat'     => $_POST[ 'widget_ufiyat' ],
			'usatinal'     => $_POST[ 'widget_usatinal' ],
			'byorum'     => $_POST[ 'widget_byorum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../modul.php?status=ok" );
	}
	else
	{

		Header( "Location:../modul.php?status=no" );
	}
}
if ( isset( $_POST[ 'bilgiduzenle' ] ) )
{


	if ( $_FILES[ 'bilgi_resim' ][ "size" ] > 0 )
	{ 
		$uploads_dir = '../assets/img/genel';
		@$tmp_name = $_FILES[ 'bilgi_resim' ][ "tmp_name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE bilgi SET
			bilgi_resim=:resim
			WHERE bilgi_id={$_POST['bilgi_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol
			)
		);
		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../../$resimsilunlink" );
	}





	$ayarkaydet = $db->prepare(
		"UPDATE bilgi SET
		bilgi_baslik=:baslik,
		bilgi_baslik2=:baslik2,
		bilgi_baslik3=:baslik3,
		bilgi_aciklama=:aciklama,
		bilgi_aciklama2=:aciklama2,
		bilgi_aciklama3=:aciklama3
		WHERE bilgi_id={$_POST['bilgi_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'baslik'     => $_POST[ 'bilgi_baslik' ],
			'baslik2'     => $_POST[ 'bilgi_baslik2' ],
			'baslik3'     => $_POST[ 'bilgi_baslik3' ],
			'aciklama'     => $_POST[ 'bilgi_aciklama' ],
			'aciklama2'     => $_POST[ 'bilgi_aciklama2' ],
			'aciklama3'     => $_POST[ 'bilgi_aciklama3' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../bilgiler.php?status=ok" );
	}
	else
	{

		Header( "Location:../bilgiler.php?status=no" );
	}
}
if ( isset( $_POST[ 'whatsappduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE whatsapp SET
		whats_tel=:tel,
		whats_cdestek=:cdestek,
		whats_cdestekdurum=:cdestekdurum,
		whats_tiklaara=:tiklaara,
		whats_tiklaaradurum=:tiklaaradurum,
		whats_skype=:skype,
		whats_skypedurum=:skypedurum,
		whats_mail=:mail,
		whats_maildurum=:maildurum,
		whats_sssdurum=:sssdurum,
		whats_iletisimdurum=:iletisimdurum,
		whats_durum=:durum
		WHERE whats_id={$_POST['whats_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'tel'     => $_POST[ 'whats_tel' ],
			'cdestek'     => $_POST[ 'whats_cdestek' ],
			'cdestekdurum'     => $_POST[ 'whats_cdestekdurum' ],
			'tiklaara'     => $_POST[ 'whats_tiklaara' ],
			'tiklaaradurum'     => $_POST[ 'whats_tiklaaradurum' ],
			'skype'     => $_POST[ 'whats_skype' ],
			'skypedurum'     => $_POST[ 'whats_skypedurum' ],
			'mail'     => $_POST[ 'whats_mail' ],
			'maildurum'     => $_POST[ 'whats_maildurum' ],
			'sssdurum'     => $_POST[ 'whats_sssdurum' ],
			'iletisimdurum'     => $_POST[ 'whats_iletisimdurum' ],
			'durum'     => $_POST[ 'whats_durum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../kolay-iletisim.php?status=ok" );
	}
	else
	{

		Header( "Location:../kolay-iletisim.php?status=no" );
	}
}
if ( isset( $_POST[ 'htmlduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE widget SET
		widget_html=:html,
		widget_html2=:html2,
		widget_html3=:html3
		WHERE widget_id={$_POST['widget_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'html'     => $_POST[ 'widget_html' ],
			'html2'     => $_POST[ 'widget_html2' ],
			'html3'     => $_POST[ 'widget_html3' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../html-alan.php?status=ok" );
	}
	else
	{

		Header( "Location:../html-alan.php?status=no" );
	}
}
if ( isset( $_POST[ 'widgetsssduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE widget SET
		widget_sbir=:sbir,
		widget_cbir=:cbir,
		widget_siki=:siki,
		widget_ciki=:ciki,
		widget_suc=:suc,
		widget_cuc=:cuc
		WHERE widget_id={$_POST['widget_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'sbir'     => $_POST[ 'widget_sbir' ],
			'cbir'     => $_POST[ 'widget_cbir' ],
			'siki'     => $_POST[ 'widget_siki' ],
			'ciki'     => $_POST[ 'widget_ciki' ],
			'suc'     => $_POST[ 'widget_suc' ],
			'cuc'     => $_POST[ 'widget_cuc' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../modul.php?status=ok" );
	}
	else
	{

		Header( "Location:../modul.php?status=no" );
	}
}
if ( isset( $_POST[ 'counterduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE counter SET
		counter_isim=:isim,
		counter_rakam=:rakam,
		counter_icon=:icon
		WHERE counter_id={$_POST['counter_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'isim'     => $_POST[ 'counter_isim' ],
			'rakam'     => $_POST[ 'counter_rakam' ],
			'icon'     => $_POST[ 'counter_icon' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../counter.php?status=ok" );
	}
	else
	{

		Header( "Location:../counter.php?status=no" );
	}
}
if ( isset( $_POST[ 'metaduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE meta SET
		meta_title=:title,
		meta_descr=:descr,
		meta_keyword=:keyword
		WHERE meta_id={$_POST['meta_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'title'     => $_POST[ 'meta_title' ],
			'descr'     => $_POST[ 'meta_descr' ],
			'keyword'     => $_POST[ 'meta_keyword' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../seo.php?status=ok" );
	}
	else
	{

		Header( "Location:../seo.php?status=no" );
	}
}
if ( isset( $_POST[ 'metaduzenle2' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE meta2 SET
		meta_title=:title,
		meta_descr=:descr,
		meta_keyword=:keyword
		WHERE meta_id={$_POST['meta_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'title'     => $_POST[ 'meta_title' ],
			'descr'     => $_POST[ 'meta_descr' ],
			'keyword'     => $_POST[ 'meta_keyword' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../seo.php?status=ok" );
	}
	else
	{

		Header( "Location:../seo.php?status=no" );
	}
}
if ( isset( $_POST[ 'metaduzenle3' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE meta3 SET
		meta_title=:title,
		meta_descr=:descr,
		meta_keyword=:keyword
		WHERE meta_id={$_POST['meta_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'title'     => $_POST[ 'meta_title' ],
			'descr'     => $_POST[ 'meta_descr' ],
			'keyword'     => $_POST[ 'meta_keyword' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../seo.php?status=ok" );
	}
	else
	{

		Header( "Location:../seo.php?status=no" );
	}
}
if ( isset( $_POST[ 'kategoriduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE kategoriler SET
		kategori_ad=:ad,
		kategori_title=:title,
		kategori_descr=:descr,
		kategori_keyword=:keyword,
		kategori_sira=:sira
		WHERE kategori_id={$_POST['kategori_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'title'     => $_POST[ 'kategori_title' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../kategoriler.php?status=no" );
	}
}
if ( isset( $_POST[ 'blogkategoriduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE kategorilerb SET
		kategori_ad=:ad,
		kategori_ad2=:ad2,
		kategori_ad3=:ad3,
		kategori_title=:title,
		kategori_title2=:title2,
		kategori_title3=:title3,
		kategori_descr=:descr,
		kategori_descr2=:descr2,
		kategori_descr3=:descr3,
		kategori_keyword=:keyword,
		kategori_keyword2=:keyword2,
		kategori_keyword3=:keyword3,
		kategori_sira=:sira
		WHERE kategori_id={$_POST['kategori_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'ad2'     => $_POST[ 'kategori_ad2' ],
			'ad3'     => $_POST[ 'kategori_ad3' ],
			'title'     => $_POST[ 'kategori_title' ],
			'title2'     => $_POST[ 'kategori_title2' ],
			'title3'     => $_POST[ 'kategori_title3' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'descr2'     => $_POST[ 'kategori_descr2' ],
			'descr3'     => $_POST[ 'kategori_descr3' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'keyword2'     => $_POST[ 'kategori_keyword2' ],
			'keyword3'     => $_POST[ 'kategori_keyword3' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../blog-kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../blog-kategoriler.php?status=no" );
	}
}
if ( isset( $_POST[ 'projekategoriduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE kategorilerp SET
		kategori_ad=:ad,
		kategori_title=:title,
		kategori_descr=:descr,
		kategori_keyword=:keyword,
		kategori_sira=:sira
		WHERE kategori_id={$_POST['kategori_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'title'     => $_POST[ 'kategori_title' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../proje-kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../proje-kategoriler.php?status=no" );
	}
}
if ( isset( $_POST[ 'genelayar' ] ) )
{

	if ( $_FILES[ 'ayar_fav' ][ "size" ] > 0 )
	{ 
		$uploads_dir = '../assets/img/genel';
		@$tmp_name = $_FILES[ 'ayar_fav' ][ "tmp_name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_fav=:fav

			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'fav' => $refimgyol
			)
		);

		
	}

	if ( $_FILES[ 'ayar_logo' ][ "size" ] > 0 )
	{ 
		$uploads_dir = '../assets/img/genel';
		@$tmp_name = $_FILES[ 'ayar_logo' ][ "tmp_name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE ayar SET
			ayar_logo=:logo

			WHERE ayar_id=0"
		);
		$update     = $ayarkaydet->execute(
			array(
				'logo' => $refimgyol
			)
		);

		if ( $update )
		{
			$resimsilunlink = $_POST[ 'eskiyol_logo' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../genel-ayarlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../genel-ayarlar.php?status=no" );
		}
	}

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_siteurl=:siteurl,
		ayar_mail=:mail,
		ayar_tel=:tel,
		ayar_firmaadi=:firmaadi,
		ayar_kod=:kod,
		ayar_harita=:harita

		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'siteurl'     => $_POST[ 'ayar_siteurl' ],
			'firmaadi'    => $_POST[ 'ayar_firmaadi' ],
			'mail'     => $_POST[ 'ayar_mail' ],
			'tel'     => $_POST[ 'ayar_tel' ],
			'kod'     => $_POST[ 'ayar_kod' ],
			'harita'         => $_POST[ 'ayar_harita' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../genel-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../genel-ayarlar.php?status=no" );
	}
	
}
if ( isset( $_POST[ 'genelayartema' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_mobil=:mobil,
		ayar_mobil1=:mobil1,
		ayar_mobil2=:mobil2,
		ayar_mobil3=:mobil3,
		ayar_slaytarka=:slaytarka
		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'mobil'     => "#".$_POST[ 'ayar_mobil' ],
			'mobil1'     => "#".$_POST[ 'ayar_mobil1' ],
			'mobil2'     => "#".$_POST[ 'ayar_mobil2' ],
			'mobil3'     => "#".$_POST[ 'ayar_mobil3' ],
			'slaytarka'     => "#".$_POST[ 'ayar_slaytarka' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../tema-renk.php?status=ok" );
	}
	else
	{

		Header( "Location:../tema-renk.php?status=no" );
	}
	
}
if ( isset( $_POST[ 'arkaplan' ] ) )
{
	if ( $_FILES[ 'ayar_resimcounter' ][ "size" ] > 0 || $_FILES[ 'ayar_resimparalax' ][ "size" ] > 0 || $_FILES[ 'ayar_title1' ][ "size" ] > 0 || $_FILES[ 'ayar_title2' ][ "size" ] > 0 || $_FILES[ 'ayar_title3' ][ "size" ] > 0 || $_FILES[ 'ayar_title4' ][ "size" ] > 0 || $_FILES[ 'ayar_title5' ][ "size" ] > 0 || $_FILES[ 'ayar_title6' ][ "size" ] > 0)
	{ 

		if ( $_FILES[ 'ayar_title1' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_title1' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_title1=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eayar_title1' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 
		if ( $_FILES[ 'ayar_title2' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_title2' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_title2=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eayar_title2' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 
		if ( $_FILES[ 'ayar_title3' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_title3' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_title3=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eayar_title3' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 
		if ( $_FILES[ 'ayar_title4' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_title4' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_title4=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eayar_title4' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 
		if ( $_FILES[ 'ayar_title5' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_title5' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_title5=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eayar_title5' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 

		if ( $_FILES[ 'ayar_title6' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_title6' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_title6=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eayar_title6' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 

		if ( $_FILES[ 'ayar_resimparalax' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_resimparalax' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_resimparalax=:logo

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'logo' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eskiyol_paralax' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 

		if ( $_FILES[ 'ayar_resimcounter' ][ "size" ] > 0 )
		{ 
			$uploads_dir = '../assets/img/genel';
			@$tmp_name = $_FILES[ 'ayar_resimcounter' ][ "tmp_name" ];
			$benzersizsayi4 = rand( 20000, 32000 );
			$uzanti = '.jpg';
			$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

			@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

			$ayarkaydet = $db->prepare(
				"UPDATE ayar SET
				ayar_resimcounter=:fav

				WHERE ayar_id=0"
			);
			$update     = $ayarkaydet->execute(
				array(
					'fav' => $refimgyol
				)
			);

			if ( $update )
			{
				$resimsilunlink = $_POST[ 'eskiyol_counter' ];
				unlink( "../$resimsilunlink" );

				Header( "Location:../tema-gorsel.php?status=ok" );
			}
			else
			{

				Header( "Location:../tema-gorsel.php?status=no" );
			}
		} 
	}else {
		Header( "Location:../tema-gorsel.php?status=eksik" );
	}

}
if ( isset( $_POST[ 'seoayar' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords
		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'title'       => $_POST[ 'ayar_title' ],
			'description' => $_POST[ 'ayar_description' ],
			'keywords' => $_POST[ 'ayar_keywords' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../genel-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../genel-ayarlar.php?status=no" );
	}
}
if ( isset( $_POST[ 'renkayar' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_mobil=:mobil,
		ayar_renk=:renk
		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'mobil'       => $_POST[ 'ayar_mobil' ],
			'renk'       => $_POST[ 'ayar_renk' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../genel-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../genel-ayarlar.php?status=no" );
	}
}
if ( isset( $_POST[ 'iletisimayar' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_adres=:adres,
		ayar_ilce=:ilce,
		ayar_ara=:ara,
		ayar_il=:il,
		ayar_tel=:tel,
		ayar_fax=:fax,
		ayar_mail=:mail
		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'adres'       => $_POST[ 'ayar_adres' ],
			'ilce'        => $_POST[ 'ayar_ilce' ],
			'ara'        => $_POST[ 'ayar_ara' ],
			'il'          => $_POST[ 'ayar_il' ],
			'tel'         => $_POST[ 'ayar_tel' ],
			'fax'         => $_POST[ 'ayar_fax' ],
			'mail'        => $_POST[ 'ayar_mail' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../genel-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../genel-ayarlar.php?status=no" );
	}
}
if ( isset( $_POST[ 'sms' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE sms SET
		sms_kullanici=:kullanici,
		sms_firma=:firma,
		sms_sifre=:sifre,
		sms_baslik=:baslik,
		sms_bildirim=:bildirim,
		sms_durum=:durum
		WHERE sms_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'kullanici' => $_POST[ 'sms_kullanici' ],
			'firma' => $_POST[ 'sms_firma' ],
			'sifre' => $_POST[ 'sms_sifre' ],
			'baslik' => $_POST[ 'sms_baslik' ],
			'bildirim' => $_POST[ 'sms_bildirim' ],
			'durum' => $_POST[ 'sms_durum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../genel-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../genel-ayarlar.php?status=no" );
	}
}
if ( isset( $_POST[ 'motorduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE motor SET
		motor_analitik=:analitik,
		motor_metrika=:metrika,
		motor_gonay=:gonay,
		motor_yonay=:yonay
		WHERE motor_id={$_POST['motor_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'analitik' => $_POST[ 'motor_analitik' ],
			'metrika' => $_POST[ 'motor_metrika' ],
			'gonay' => $_POST[ 'motor_gonay' ],
			'yonay' => $_POST[ 'motor_yonay' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../google-yandex-ayarlari.php?status=ok" );
	}
	else
	{

		Header( "Location:../google-yandex-ayarlari.php?status=no" );
	}
}
if ( isset( $_POST[ 'logoduzenle' ] ) )
{

	$uploads_dir = '../assets/img/genel';
	@$tmp_name = $_FILES[ 'ayar_logo' ][ "tmp_name" ];
	@$name = $_FILES[ 'ayar_logo' ][ "name" ];
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol      = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'logo' => $refimgyol
		)
	);

	if ( $update )
	{
		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../../$resimsilunlink" );

		Header( "Location:../genel-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../genel-ayaralar.php?status=no" );
	}
}

if ( isset( $_POST[ 'favduzenle' ] ) )
{

	$uploads_dir = '../../img';
	@$tmp_name = $_FILES[ 'ayar_fav' ][ "tmp_name" ];
	@$name = $_FILES[ 'ayar_fav' ][ "name" ];
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

	$ayarkaydet = $db->prepare(
		"UPDATE ayar SET
		ayar_fav=:fav
		WHERE ayar_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'fav' => $refimgyol2,
		)
	);

	if ( $update )
	{

		$resimsilunlink = $_POST[ 'eski_yol2' ];
		unlink( "../../$resimsilunlink" );

		Header( "Location:../production/genel-ayarlar.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/genel-ayarlar.php?durum=no" );
	}
}

if ( isset( $_POST[ 'sosyalduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE sosyal SET
		sosyal_link=:link,
		sosyal_icon=:icon
		WHERE sosyal_id={$_POST['sosyal_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'link' => $_POST[ 'sosyal_link' ],
			'icon' => $_POST[ 'sosyal_icon' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../sosyal-medya.php?status=ok" );
	}
	else
	{

		Header( "Location:../sosyal-medya.php?status=no" );
	}
}

if ( isset( $_POST[ 'sosyalekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO sosyal SET
		sosyal_link=:link,
		sosyal_icon=:icon
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'link' => $_POST[ 'sosyal_link' ],
			'icon' => $_POST[ 'sosyal_icon' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../sosyal-medya.php?status=ok" );
	}
	else
	{

		Header( "Location:../sosyal-medya.php?status=no" );
	}
}

if ( isset( $_POST[ 'mailayarlari' ] ) )
{


	$ayarkaydet = $db->prepare(
		"UPDATE mail SET
		mail_user=:user,
		mail_host=:host,
		mail_pass=:pass,
		mail_bildirim=:bildirim,
		mail_name=:name,
		mail_sender=:sender,
		mail_secure=:secure,
		mail_port=:port
		WHERE mail_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'user' => $_POST[ 'mail_user' ],
			'host' => $_POST[ 'mail_host' ],
			'pass' => $_POST[ 'mail_pass' ],
			'bildirim' => $_POST[ 'mail_bildirim' ],
			'name' => $_POST[ 'mail_name' ],
			'sender' => $_POST[ 'mail_sender' ],
			'secure' => $_POST[ 'mail_secure' ],
			'port' => $_POST[ 'mail_port' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../smtp-ayarlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../smtp-ayarlar.php?status=no" );
	}
}

if ( isset( $_POST[ 'profilresimduzenle' ] ) )
{

	$uploads_dir = '../assets/img/genel';
	@$tmp_name = $_FILES[ 'kullanici_resim' ][ "tmp_name" ];
	$uzanti='.jpg';
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

	$ayarkaydet = $db->prepare(
		"UPDATE kullanici SET
		kullanici_resim=:resim
		WHERE kullanici_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'resim' => $refimgyol
		)
	);

	if ( $update )
	{


		Header( "Location:../user.php?status=ok" );
	}
	else
	{

		Header( "Location:../user.php?status=no" );
	}
}

if ( isset( $_POST[ 'kullaniciduzenle' ] ) )
{

	$kullanici_pass = md5( $_POST[ 'kullanici_pass' ] );

	$ayarkaydet = $db->prepare(
		"UPDATE kullanici SET
		kullanici_adsoyad=:adsoyad,
		kullanici_adi=:adi
		WHERE kullanici_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'adsoyad' => $_POST[ 'kullanici_adsoyad' ],
			'adi'     => $_POST[ 'kullanici_adi' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../user.php?status=ok" );
	}
	else
	{

		Header( "Location:../user.php?status=no" );
	}
}

if ( isset( $_POST[ 'kullanicisifre' ] ) )
{

	$kullanici_pass = md5( $_POST[ 'kullanici_pass' ] );

	$ayarkaydet = $db->prepare(
		"UPDATE kullanici SET
		kullanici_pass=:pass
		WHERE kullanici_id=0"
	);
	$update     = $ayarkaydet->execute(
		array(
			'pass' => $kullanici_pass
		)
	);

	if ( $update )
	{

		Header( "Location:../user.php?status=ok" );
	}
	else
	{

		Header( "Location:../user.php?status=no" );
	}
}


if ( isset( $_POST[ 'sssduzenle' ] ) )
{

	$sss_id = $_POST[ 'sss_id' ];

	$ayarkaydet = $db->prepare(
		"UPDATE sss SET
		sss_soru=:soru,
		sss_sira=:sira,
		sss_cevap=:cevap
		WHERE sss_id={$_POST['sss_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'soru'  => $_POST[ 'sss_soru' ],
			'sira'  => $_POST[ 'sss_sira' ],
			'cevap' => $_POST[ 'sss_cevap' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../sss.php?status=ok" );
	}
	else
	{

		Header( "Location:../sss.php?status=no" );
	}
}

if ( isset( $_POST[ 'hsssduzenle' ] ) )
{

	$sss_id = $_POST[ 'sss_id' ];
	$hizmet_id = $_POST[ 'hizmet_id' ];

	$ayarkaydet = $db->prepare(
		"UPDATE hsss SET
		sss_soru=:soru,
		sss_hizmet=:hizmet,
		sss_sira=:sira,
		sss_cevap=:cevap
		WHERE sss_id={$_POST['sss_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'soru'  => $_POST[ 'sss_soru' ],
			'hizmet'  => $hizmet_id,
			'sira'  => $_POST[ 'sss_sira' ],
			'cevap' => $_POST[ 'sss_cevap' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../hizmet-sss.php?hizmet_id=$hizmet_id&status=ok" );
	}
	else
	{

		Header( "Location:../hizmet-sss.php?hizmet_id=$hizmet_id&status=no" );
	}
}
if ( isset( $_POST[ 'albumekle' ] ) )
{
	$uploads_dir = '../assets/img/hizmetler';
	@$tmp_name = $_FILES[ 'kategori_resim' ][ "tmp_name" ];
	@$name = $_FILES[ 'kategori_resim' ][ "name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti='.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$ayarkaydet = $db->prepare(
		"INSERT INTO albumler SET
		kategori_ad=:ad,
		kategori_ad2=:ad2,
		kategori_ad3=:ad3,
		kategori_kategori=:kategori,
		kategori_title=:title,
		kategori_title2=:title2,
		kategori_title3=:title3,
		kategori_descr=:descr,
		kategori_descr2=:descr2,
		kategori_descr3=:descr3,
		kategori_keyword=:keyword,
		kategori_keyword2=:keyword2,
		kategori_keyword3=:keyword3,
		kategori_resim=:resim,
		kategori_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'ad2'     => $_POST[ 'kategori_ad2' ],
			'ad3'     => $_POST[ 'kategori_ad3' ],
			'kategori' => $_POST[ 'kategori_kategori' ],
			'title'     => $_POST[ 'kategori_title' ],
			'title2'     => $_POST[ 'kategori_title2' ],
			'title3'     => $_POST[ 'kategori_title3' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'descr2'     => $_POST[ 'kategori_descr2' ],
			'descr3'     => $_POST[ 'kategori_descr3' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'keyword2'     => $_POST[ 'kategori_keyword2' ],
			'keyword3'     => $_POST[ 'kategori_keyword3' ],
			'resim'     => $refimgyol,
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);


	if ( $update )
	{

		Header( "Location:../resim-albumler.php?status=ok" );
	}
	else
	{

		Header( "Location:../resim-albumler.php?status=no" );
	}
}
if ( isset( $_POST[ 'albumduzenle' ] ) )
{
	if ( $_FILES[ 'kategori_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'kategori_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'kategori_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE albumler SET
			kategori_resim=:resim
			WHERE kategori_id={$_POST['kategori_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim'     => $refimgyol
			)
		);
	}

	$ayarkaydet = $db->prepare(
		"UPDATE albumler SET
		kategori_ad=:ad,
		kategori_ad2=:ad2,
		kategori_ad3=:ad3,
		kategori_kategori=:kategori,
		kategori_title=:title,
		kategori_title2=:title2,
		kategori_title3=:title3,
		kategori_descr=:descr,
		kategori_descr2=:descr2,
		kategori_descr3=:descr3,
		kategori_keyword=:keyword,
		kategori_keyword2=:keyword2,
		kategori_keyword3=:keyword3,
		kategori_sira=:sira
		WHERE kategori_id={$_POST['kategori_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'ad2'     => $_POST[ 'kategori_ad2' ],
			'ad3'     => $_POST[ 'kategori_ad3' ],
			'kategori' => $_POST[ 'kategori_kategori' ],
			'title'     => $_POST[ 'kategori_title' ],
			'title2'     => $_POST[ 'kategori_title2' ],
			'title3'     => $_POST[ 'kategori_title3' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'descr2'     => $_POST[ 'kategori_descr2' ],
			'descr3'     => $_POST[ 'kategori_descr3' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'keyword2'     => $_POST[ 'kategori_keyword2' ],
			'keyword3'     => $_POST[ 'kategori_keyword3' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);
	if ( $update )
	{

		Header( "Location:../resim-albumler.php?status=ok" );
	}
	else
	{

		Header( "Location:../resim-albumler.php?status=no" );
	}
}


if ( isset( $_POST[ 'valbumekle' ] ) )
{
	$uploads_dir = '../assets/img/hizmetler';
	@$tmp_name = $_FILES[ 'kategori_resim' ][ "tmp_name" ];
	@$name = $_FILES[ 'kategori_resim' ][ "name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti='.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$ayarkaydet = $db->prepare(
		"INSERT INTO valbumler SET
		kategori_ad=:ad,
		kategori_ad2=:ad2,
		kategori_ad3=:ad3,
		kategori_kategori=:kategori,
		kategori_title=:title,
		kategori_title2=:title2,
		kategori_title3=:title3,
		kategori_descr=:descr,
		kategori_descr2=:descr2,
		kategori_descr3=:descr3,
		kategori_keyword=:keyword,
		kategori_keyword2=:keyword2,
		kategori_keyword3=:keyword3,
		kategori_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'ad2'     => $_POST[ 'kategori_ad2' ],
			'ad3'     => $_POST[ 'kategori_ad3' ],
			'kategori' => $_POST[ 'kategori_kategori' ],
			'title'     => $_POST[ 'kategori_title' ],
			'title2'     => $_POST[ 'kategori_title2' ],
			'title3'     => $_POST[ 'kategori_title3' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'descr2'     => $_POST[ 'kategori_descr2' ],
			'descr3'     => $_POST[ 'kategori_descr3' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'keyword2'     => $_POST[ 'kategori_keyword2' ],
			'keyword3'     => $_POST[ 'kategori_keyword3' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);


	if ( $update )
	{

		Header( "Location:../video-albumler.php?status=ok" );
	}
	else
	{

		Header( "Location:../video-albumler.php?status=no" );
	}
}
if ( isset( $_POST[ 'valbumduzenle' ] ) )
{
	if ( $_FILES[ 'kategori_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'kategori_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'kategori_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE valbumler SET
			kategori_resim=:resim
			WHERE kategori_id={$_POST['kategori_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim'     => $refimgyol
			)
		);
	}

	$ayarkaydet = $db->prepare(
		"UPDATE valbumler SET
		kategori_ad=:ad,
		kategori_ad2=:ad2,
		kategori_ad3=:ad3,
		kategori_kategori=:kategori,
		kategori_title=:title,
		kategori_title2=:title2,
		kategori_title3=:title3,
		kategori_descr=:descr,
		kategori_descr2=:descr2,
		kategori_descr3=:descr3,
		kategori_keyword=:keyword,
		kategori_keyword2=:keyword2,
		kategori_keyword3=:keyword3,
		kategori_sira=:sira
		WHERE kategori_id={$_POST['kategori_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'ad2'     => $_POST[ 'kategori_ad2' ],
			'ad3'     => $_POST[ 'kategori_ad3' ],
			'kategori' => $_POST[ 'kategori_kategori' ],
			'title'     => $_POST[ 'kategori_title' ],
			'title2'     => $_POST[ 'kategori_title2' ],
			'title3'     => $_POST[ 'kategori_title3' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'descr2'     => $_POST[ 'kategori_descr2' ],
			'descr3'     => $_POST[ 'kategori_descr3' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'keyword2'     => $_POST[ 'kategori_keyword2' ],
			'keyword3'     => $_POST[ 'kategori_keyword3' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);
	$GetID = $_POST[ 'kategori_kategori' ];
	if ( $update )
	{

		Header( "Location:../video-albumler.php?status=ok" );
	}
	else
	{

		Header( "Location:../video-albumler.php?status=no" );
	}
}
if ( $_GET[ 'albumsil' ] == "ok" )
{

	$kategoriedit=$db->prepare("SELECT * from albumler where kategori_id=:kategori_id");
	$kategoriedit->execute(array(
		'kategori_id' => $_GET['album_id']
	));
	$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);

	$IdGet = $kategoriwrite[ 'kategori_kategori' ];
	

	$sil     = $db->prepare( "DELETE from albumler where kategori_id=:kategori_id" );
	$kontrol = $sil->execute(
		array(
			'kategori_id' => $_GET[ 'album_id' ]
		)
	);
	if ( $kontrol )
	{


		Header( "Location:../resim-albumler.php?status=ok" );
	}
	else
	{

		Header( "Location:../resim-albumler.php?status=no" );
	}

}
if ( $_GET[ 'video-valbumsil' ] == "ok" )
{

	$kategoriedit=$db->prepare("SELECT * from valbumler where kategori_id=:kategori_id");
	$kategoriedit->execute(array(
		'kategori_id' => $_GET['valbum_id']
	));
	$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);

	$IdGet = $kategoriwrite[ 'kategori_kategori' ];
	

	$sil     = $db->prepare( "DELETE from valbumler where kategori_id=:kategori_id" );
	$kontrol = $sil->execute(
		array(
			'kategori_id' => $_GET[ 'valbum_id' ]
		)
	);
	if ( $kontrol )
	{


		Header( "Location:../video-albumler.php?status=ok" );
	}
	else
	{

		Header( "Location:../video-albumler.php?status=no" );
	}

}
if ( isset( $_POST[ 'kategoriekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO kategoriler SET
		kategori_ad=:ad,
		kategori_title=:title,
		kategori_descr=:descr,
		kategori_keyword=:keyword,
		kategori_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'title'     => $_POST[ 'kategori_title' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../kategoriler.php?status=no" );
	}
}
if ( isset( $_POST[ 'blogkategoriekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO kategorilerb SET
		kategori_ad=:ad,
		kategori_ad2=:ad2,
		kategori_ad3=:ad3,
		kategori_title=:title,
		kategori_title2=:title2,
		kategori_title3=:title3,
		kategori_descr=:descr,
		kategori_descr2=:descr2,
		kategori_descr3=:descr3,
		kategori_keyword=:keyword,
		kategori_keyword2=:keyword2,
		kategori_keyword3=:keyword3,
		kategori_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'ad2'     => $_POST[ 'kategori_ad2' ],
			'ad3'     => $_POST[ 'kategori_ad3' ],
			'title'     => $_POST[ 'kategori_title' ],
			'title2'     => $_POST[ 'kategori_title2' ],
			'title3'     => $_POST[ 'kategori_title3' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'descr2'     => $_POST[ 'kategori_descr2' ],
			'descr3'     => $_POST[ 'kategori_descr3' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'keyword2'     => $_POST[ 'kategori_keyword2' ],
			'keyword3'     => $_POST[ 'kategori_keyword3' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../blog-kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../blog-kategoriler.php?status=no" );
	}
}
if ( isset( $_POST[ 'projekategoriekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO kategorilerp SET
		kategori_ad=:ad,
		kategori_title=:title,
		kategori_descr=:descr,
		kategori_keyword=:keyword,
		kategori_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'kategori_ad' ],
			'title'     => $_POST[ 'kategori_title' ],
			'descr'     => $_POST[ 'kategori_descr' ],
			'keyword'     => $_POST[ 'kategori_keyword' ],
			'sira'    => $_POST[ 'kategori_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../proje-kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../proje-kategoriler.php?status=no" );
	}
}

if ( isset( $_POST[ 'sssekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO sss SET
		sss_soru=:soru,
		sss_cevap=:cevap,
		sss_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'soru'  => $_POST[ 'sss_soru' ],
			'cevap' => $_POST[ 'sss_cevap' ],
			'sira'  => $_POST[ 'sss_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../sss.php?&status=ok" );
	}
	else
	{

		Header( "Location:../sss.php?status=no" );
	}
}
if ( isset( $_POST[ 'hsssekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO hsss SET
		sss_soru=:soru,
		sss_hizmet=:hizmet,
		sss_cevap=:cevap,
		sss_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'soru'  => $_POST[ 'sss_soru' ],
			'hizmet'  => $_POST[ 'hizmet_id' ],
			'cevap' => $_POST[ 'sss_cevap' ],
			'sira'  => $_POST[ 'sss_sira' ]
		)
	);
	$Id= $_POST[ 'hizmet_id' ];

	if ( $update )
	{

		Header( "Location:../hizmet-sss.php?hizmet_id=$Id&status=ok" );
	}
	else
	{

		Header( "Location:../hizmet-sss.php?hizmet_id=$Id&status=no" );
	}
}
if ( isset( $_POST[ 'omenuekle' ] ) )
{

	$ust=$_POST[ 'omenu_ust' ];
	if ($ust==0) {
		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_ust=:ust,
			omenu_durum=:durum,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'ust' => $_POST[ 'omenu_ust' ],
				'durum' => '0',
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);
	} else {
		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_ust=:ust,
			omenu_durum=:durum,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'ust' => $_POST[ 'omenu_ust' ],
				'durum' => $_POST[ 'omenu_ust' ],
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);
	}
	if ( $update )
	{
		$ayarkaydet = $db->prepare(
			"UPDATE omenu SET
			omenu_durum=:durum
			WHERE omenu_id={$_POST[ 'omenu_ust' ]}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'durum' => $_POST[ 'omenu_ust' ]
			)
		);

		Header( "Location:../menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'omenuekle2' ] ) )
{

	$ust=$_POST[ 'omenu_ust' ];
	if ($ust==0) {
		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu2 SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_ust=:ust,
			omenu_durum=:durum,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'ust' => $_POST[ 'omenu_ust' ],
				'durum' => '0',
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);
	} else {
		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu2 SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_ust=:ust,
			omenu_durum=:durum,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'ust' => $_POST[ 'omenu_ust' ],
				'durum' => $_POST[ 'omenu_ust' ],
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);
	}
	if ( $update )
	{
		$ayarkaydet = $db->prepare(
			"UPDATE omenu2 SET
			omenu_durum=:durum
			WHERE omenu_id={$_POST[ 'omenu_ust' ]}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'durum' => $_POST[ 'omenu_ust' ]
			)
		);

		Header( "Location:../menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}

if ( isset( $_POST[ 'omenuekle3' ] ) )
{

	$ust=$_POST[ 'omenu_ust' ];
	if ($ust==0) {
		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu3 SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_ust=:ust,
			omenu_durum=:durum,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'ust' => $_POST[ 'omenu_ust' ],
				'durum' => '0',
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);
	} else {
		$ayarkaydet = $db->prepare(
			"INSERT INTO omenu3 SET
			omenu_ad=:ad,
			omenu_link=:link,
			omenu_ust=:ust,
			omenu_durum=:durum,
			omenu_sira=:sira
			"
		);
		$update     = $ayarkaydet->execute(
			array(
				'ad'  => $_POST[ 'omenu_ad' ],
				'link' => $_POST[ 'omenu_link' ],
				'ust' => $_POST[ 'omenu_ust' ],
				'durum' => $_POST[ 'omenu_ust' ],
				'sira'  => $_POST[ 'omenu_sira' ]
			)
		);
	}
	if ( $update )
	{
		$ayarkaydet = $db->prepare(
			"UPDATE omenu3 SET
			omenu_durum=:durum
			WHERE omenu_id={$_POST[ 'omenu_ust' ]}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'durum' => $_POST[ 'omenu_ust' ]
			)
		);

		Header( "Location:../menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'flinkekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO flink SET
		flink_ad=:ad,
		flink_sira=:sira,
		flink_link=:link
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'  => $_POST[ 'flink_ad' ],
			'sira'  => $_POST[ 'flink_sira' ],
			'link' => $_POST[ 'flink_link' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../top-menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../top-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'fmenuekle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO fmenu SET
		fmenu_ad=:ad,
		fmenu_link=:link,
		fmenu_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'  => $_POST[ 'fmenu_ad' ],
			'link' => $_POST[ 'fmenu_link' ],
			'sira'  => $_POST[ 'fmenu_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../alt-menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'fmenuekle2' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO fmenu2 SET
		fmenu_ad=:ad,
		fmenu_link=:link,
		fmenu_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'  => $_POST[ 'fmenu_ad' ],
			'link' => $_POST[ 'fmenu_link' ],
			'sira'  => $_POST[ 'fmenu_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../alt-menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'fmenuekle3' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO fmenu3 SET
		fmenu_ad=:ad,
		fmenu_link=:link,
		fmenu_sira=:sira
		"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'  => $_POST[ 'fmenu_ad' ],
			'link' => $_POST[ 'fmenu_link' ],
			'sira'  => $_POST[ 'fmenu_sira' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../alt-menu.php?&status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}

if ( isset( $_POST[ 'slaytresimduzenle' ] ) )
{

	$uploads_dir = '../../img/slayt';
	@$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
	@$name = $_FILES[ 'slayt_resim' ][ "name" ];
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

	$slayt_id = $_POST[ 'slayt_id' ];

	$ayarkaydet = $db->prepare(
		"UPDATE slayt SET
		slayt_resim=:resim
		WHERE slayt_id={$_POST['slayt_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'resim' => $refimgyol2,
		)
	);

	if ( $update )
	{

		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../../$resimsilunlink" );

		Header( "Location:../production/slayt.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/slayt.php?durum=no" );
	}
}


if ( isset( $_POST[ 'hizmetresimduzenle' ] ) )
{

	$uploads_dir = '../../img/hizmetler';
	@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
	@$name = $_FILES[ 'hizmet_resim' ][ "name" ];
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

	$slayt_id = $_POST[ 'hizmet_id' ];

	$ayarkaydet = $db->prepare(
		"UPDATE hizmetler SET
		hizmet_resim=:resim
		WHERE hizmet_id={$_POST['hizmet_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'resim' => $refimgyol2,
		)
	);

	if ( $update )
	{

		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../../$resimsilunlink" );

		Header( "Location:../production/hizmetler.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/hizmetler.php?durum=no" );
	}
}
if ( isset( $_POST[ 'yorumresimduzenle' ] ) )
{

	$uploads_dir = '../../img/yorum';
	@$tmp_name = $_FILES[ 'yorum_resim' ][ "tmp_name" ];
	@$name = $_FILES[ 'yorum_resim' ][ "name" ];
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );

	$slayt_id = $_POST[ 'yorum_id' ];

	$ayarkaydet = $db->prepare(
		"UPDATE yorumlar SET
		yorum_resim=:resim
		WHERE yorum_id={$_POST['yorum_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'resim' => $refimgyol2,
		)
	);

	if ( $update )
	{

		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../../$resimsilunlink" );

		Header( "Location:../production/yorumlar.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/yorumlar.php?durum=no" );
	}
}
if ( isset( $_POST[ 'urunresimekle' ] ) )
{

	$uploads_dir = '../assets/img/urunler';
	$tmp_name = $_FILES[ 'resim_link' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO resim SET
		resim_urun=:urun,
		resim_link=:link
		");
	$insert = $kaydet->execute(
		array(
			'urun'     => $_POST[ 'resim_urun' ],
			'link'    => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../oda.php?status=ok" );
	}
	else
	{

		Header( "Location:../oda.php?status=no" );
	}
}
if ( isset( $_POST[ 'projeresimduzenle' ] ) )
{

	$uploads_dir = '../../img/projeler';
	@$tmp_name = $_FILES[ 'proje_resim' ][ "tmp_name" ];
	@$name = $_FILES[ 'proje_resim' ][ "name" ];
	$benzersizsayi4 = rand( 20000, 32000 );
	$refimgyol2     = substr( $uploads_dir, 6 ) . "/" . $benzersizsayi4 . $name;

	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$name" );



	$ayarkaydet = $db->prepare(
		"UPDATE projeler SET
		proje_resim=:resim
		WHERE proje_id={$_POST['proje_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'resim' => $refimgyol2,
		)
	);

	if ( $update )
	{

		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../../$resimsilunlink" );

		Header( "Location:../production/projeler.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/projeler.php?durum=no" );
	}
}
if ( isset( $_POST[ 'slaytduzenle' ] ) )
{

	if ( $_FILES[ 'slayt_resim' ][ "size" ] > 0 )
	{

		$uploads_dir = '../assets/img/slayt';
		@$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$refimgyol2     = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE slayt SET
			slayt_resim=:resim
			WHERE slayt_id={$_POST['slayt_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol2
			)
		);		
	} 

	$ayarkaydet = $db->prepare(
		"UPDATE slayt SET
		slayt_sira=:sira,
		slayt_baslik=:baslik,
		slayt_baslik2=:baslik2,
		slayt_baslik3=:baslik3,
		slayt_butonlink=:butonlink,
		slayt_butonlink2=:butonlink2,
		slayt_butonlink3=:butonlink3,
		slayt_renk=:renk,
		slayt_butonad=:butonad,
		slayt_butonad2=:butonad2,
		slayt_butonad3=:butonad3,
		slayt_aciklama=:aciklama,
		slayt_aciklama2=:aciklama2,
		slayt_aciklama3=:aciklama3
		WHERE slayt_id={$_POST['slayt_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'sira'     => $_POST[ 'slayt_sira' ],
			'baslik'     => $_POST[ 'slayt_baslik' ],
			'baslik2'     => $_POST[ 'slayt_baslik2' ],
			'baslik3'     => $_POST[ 'slayt_baslik3' ],
			'butonlink'     => $_POST[ 'slayt_butonlink' ],
			'butonlink2'     => $_POST[ 'slayt_butonlink2' ],
			'butonlink3'     => $_POST[ 'slayt_butonlink3' ],
			'renk'     => "#".$_POST[ 'slayt_renk' ],
			'butonad'     => $_POST[ 'slayt_butonad' ],
			'butonad2'     => $_POST[ 'slayt_butonad2' ],
			'butonad3'     => $_POST[ 'slayt_butonad3' ],
			'aciklama' => $_POST[ 'slayt_aciklama' ],
			'aciklama2' => $_POST[ 'slayt_aciklama2' ],
			'aciklama3' => $_POST[ 'slayt_aciklama3' ]
		)
	);

	if ( $update )
	{
		Header( "Location:../slayt.php?status=ok" );
	}
	else
	{
		Header( "Location:../slayt.php?status=no" );
	}
}


if ( isset( $_POST[ 'hizmetduzenle' ] ) )
{

	if ( $_FILES[ 'hizmet_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'hizmet_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE hizmetler SET
			hizmet_baslik=:baslik,
			hizmet_icerik=:icerik,
			hizmet_title=:title,
			hizmet_descr=:descr,
			hizmet_keyword=:keyword,
			hizmet_vitrin=:vitrin,
			hizmet_resim=:resim,
			hizmet_icon=:icon
			WHERE hizmet_id={$_POST['hizmet_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'hizmet_baslik' ],
				'icerik'     => $_POST[ 'hizmet_icerik' ],
				'title'     => $_POST[ 'hizmet_title' ],
				'descr'     => $_POST[ 'hizmet_descr' ],
				'keyword'     => $_POST[ 'hizmet_keyword' ],
				'vitrin'     => $_POST[ 'hizmet_vitrin' ],
				'resim'     => $refimgyol,
				'icon' => $_POST[ 'hizmet_icon' ]
			)
		);

		if ( $update )
		{
			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../hizmetler.php?status=ok" );
		}
		else
		{

			Header( "Location:../hizmetler.php?status=no" );
		}
	} else {

		$ayarkaydet = $db->prepare(
			"UPDATE hizmetler SET
			hizmet_baslik=:baslik,
			hizmet_icerik=:icerik,
			hizmet_title=:title,
			hizmet_descr=:descr,
			hizmet_keyword=:keyword,
			hizmet_vitrin=:vitrin,
			hizmet_icon=:icon
			WHERE hizmet_id={$_POST['hizmet_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'hizmet_baslik' ],
				'icerik'     => $_POST[ 'hizmet_icerik' ],
				'title'     => $_POST[ 'hizmet_title' ],
				'descr'     => $_POST[ 'hizmet_descr' ],
				'keyword'     => $_POST[ 'hizmet_keyword' ],
				'vitrin'     => $_POST[ 'hizmet_vitrin' ],
				'icon' => $_POST[ 'hizmet_icon' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../hizmetler.php?status=ok" );
		}
		else
		{

			Header( "Location:../hizmetler.php?status=no" );
		}
	}
}
if ( isset( $_POST[ 'markaduzenle' ] ) )
{

	if ( $_FILES[ 'hizmet_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'hizmet_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE markalar SET
			hizmet_baslik=:baslik,
			hizmet_icerik=:icerik,
			hizmet_title=:title,
			hizmet_descr=:descr,
			hizmet_keyword=:keyword,
			hizmet_resim=:resim,
			hizmet_icon=:icon
			WHERE hizmet_id={$_POST['hizmet_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'hizmet_baslik' ],
				'icerik'     => $_POST[ 'hizmet_icerik' ],
				'title'     => $_POST[ 'hizmet_title' ],
				'descr'     => $_POST[ 'hizmet_descr' ],
				'keyword'     => $_POST[ 'hizmet_keyword' ],
				'resim'     => $refimgyol,
				'icon' => $_POST[ 'hizmet_icon' ]
			)
		);

		if ( $update )
		{
			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../markalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../markalar.php?status=no" );
		}
	} else {

		$ayarkaydet = $db->prepare(
			"UPDATE markalar SET
			hizmet_baslik=:baslik,
			hizmet_icerik=:icerik,
			hizmet_title=:title,
			hizmet_descr=:descr,
			hizmet_keyword=:keyword,
			hizmet_vitrin=:vitrin,
			hizmet_icon=:icon
			WHERE hizmet_id={$_POST['hizmet_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'hizmet_baslik' ],
				'icerik'     => $_POST[ 'hizmet_icerik' ],
				'title'     => $_POST[ 'hizmet_title' ],
				'descr'     => $_POST[ 'hizmet_descr' ],
				'keyword'     => $_POST[ 'hizmet_keyword' ],
				'vitrin'     => $_POST[ 'hizmet_vitrin' ],
				'icon' => $_POST[ 'hizmet_icon' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../markalar.php?status=ok" );
		}
		else
		{

			Header( "Location:../markalar.php?status=no" );
		}
	}
}

if ( isset( $_POST[ 'urunduzenle' ] ) )
{


	if ( $_FILES[ 'urun_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'urun_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'urun_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE urunler SET
			urun_resim=:resim
			WHERE urun_id={$_POST['urun_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim'     => $refimgyol
			)
		);

		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../$resimsilunlink" );
	}



	$ayarkaydet = $db->prepare(
		"UPDATE urunler SET
		urun_baslik=:baslik,
		urun_kategori=:kategori,
		urun_fiyat=:fiyat,
		urun_kisaaciklama=:kisaaciklama,
		urun_aciklama=:aciklama,
		urun_vitrin=:vitrin,
		urun_title=:title,
		urun_descr=:descr,
		urun_keyword=:keyword
		WHERE urun_id={$_POST['urun_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'baslik'     => $_POST[ 'urun_baslik' ],
			'kategori'     => $_POST[ 'urun_kategori' ],
			'fiyat'     => $_POST[ 'urun_fiyat' ],
			'kisaaciklama'     => $_POST[ 'urun_kisaaciklama' ],
			'aciklama'     => $_POST[ 'urun_aciklama' ],
			'vitrin'     => $_POST[ 'urun_vitrin' ],
			'title'     => $_POST[ 'urun_title' ],
			'descr'     => $_POST[ 'urun_descr' ],
			'keyword'     => $_POST[ 'urun_keyword' ]
		)
	);

	if ( $update )
	{


		Header( "Location:../oda.php?status=ok" );
	}
	else
	{

		Header( "Location:../oda.php?status=no" );
	}
}

if ( isset( $_POST[ 'odaduzenle' ] ) )
{


	if ( $_FILES[ 'urun_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/hizmetler';
		@$tmp_name = $_FILES[ 'urun_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'urun_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE urunler SET
			urun_resim=:resim
			WHERE urun_id={$_POST['urun_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim'     => $refimgyol
			)
		);

		$resimsilunlink = $_POST[ 'eski_yol' ];
		unlink( "../$resimsilunlink" );
	}

	$ayarkaydet = $db->prepare(
		"UPDATE urunler SET
		urun_baslik=:baslik,
		urun_baslik2=:baslik2,
		urun_baslik3=:baslik3,
		urun_kategori=:kategori,
		urun_fiyat=:fiyat,
		urun_fiyat2=:fiyat2,
		urun_fiyat3=:fiyat3,
		urun_kisaaciklama=:kisaaciklama,
		urun_aciklama=:aciklama,
		urun_aciklama2=:aciklama2,
		urun_aciklama3=:aciklama3,
		araba_motor_hacim=:hacim,
		araba_renk=:renk,
		araba_cekis=:cekis,
		araba_model=:arabaModel,
		araba_motor_gucu=:motorGucu,
		araba_durum=:durum,
		urun_vitrin=:vitrin,
		urun_title=:title,
		urun_title2=:title2,
		urun_title3=:title3,
		urun_descr=:descr,
		urun_descr2=:descr2,
		urun_descr3=:descr3,
                  
		urun_keyword=:keyword,
		urun_keyword2=:keyword2,
		urun_keyword3=:keyword3
        
		WHERE urun_id={$_POST['urun_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'baslik'     => $_POST[ 'urun_baslik' ],
			'baslik2'     => $_POST[ 'urun_baslik2' ],
			'baslik3'     => $_POST[ 'urun_baslik3' ],
			'kategori'     => $_POST[ 'urun_kategori' ],
			'fiyat'     => $_POST[ 'urun_fiyat' ],
			'fiyat2'     => $_POST[ 'urun_fiyat2' ],
			'fiyat3'     => $_POST[ 'urun_fiyat3' ],
			'kisaaciklama'  => $_POST[ 'urun_kisaaciklama' ],
			'aciklama'     => $_POST[ 'urun_aciklama' ],
			'aciklama2'     => $_POST[ 'urun_aciklama2' ],
			'aciklama3'     => $_POST[ 'urun_aciklama3' ],
			'hacim'     => $_POST[ 'araba_motor_hacim' ],
			'renk'     => $_POST[ 'araba_renk' ],
			'cekis'	=> $_POST[ 'araba_cekis' ],
			'arabaModel'     => $_POST[ 'araba_model' ],
			'motorGucu'     => $_POST[ 'araba_motor_gucu' ],
			'durum'     => $_POST[ 'araba_durum' ],
			'vitrin'     => $_POST[ 'urun_vitrin' ],
			'title'     => $_POST[ 'urun_title' ],
			'title2'     => $_POST[ 'urun_title2' ],
			'title3'     => $_POST[ 'urun_title3' ],

			'descr'     => $_POST[ 'urun_descr' ],
			'descr2'     => $_POST[ 'urun_descr2' ],
			'descr3'     => $_POST[ 'urun_descr3' ],
			'keyword'     => $_POST[ 'urun_keyword' ],
			'keyword2'     => $_POST[ 'urun_keyword2' ],
			'keyword3'     => $_POST[ 'urun_keyword3' ]

		)
	);

	if ( $update )
	{


		Header( "Location:../oda.php?status=ok" );
	}
	else
	{

		Header( "Location:../oda.php?status=no" );
	}
}
if ( isset( $_POST[ 'projeduzenle' ] ) )
{

	if ( $_FILES[ 'proje_resim' ][ "size" ] > 0 )
	{
		$uploads_dir = '../assets/img/projeler';
		@$tmp_name = $_FILES[ 'proje_resim' ][ "tmp_name" ];
		@$name = $_FILES[ 'proje_resim' ][ "name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti='.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );


		$ayarkaydet = $db->prepare(
			"UPDATE projeler SET
			proje_baslik=:baslik,
			proje_kategori=:kategori,
			proje_icerik=:icerik,
			proje_resim=:resim,
			proje_title=:title,
			proje_descr=:descr,
			proje_keyword=:keyword
			WHERE proje_id={$_POST['proje_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'proje_baslik' ],
				'kategori'     => $_POST[ 'proje_kategori' ],
				'icerik'     => $_POST[ 'proje_icerik' ],
				'resim'     => $refimgyol,
				'title'     => $_POST[ 'proje_title' ],
				'descr'     => $_POST[ 'proje_descr' ],
				'keyword'     => $_POST[ 'proje_keyword' ]
			)
		);

		if ( $update )
		{
			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../kadro.php?status=ok" );
		}
		else
		{

			Header( "Location:../kadro.php?status=no" );
		}
	}
	else {
		$ayarkaydet = $db->prepare(
			"UPDATE projeler SET
			proje_baslik=:baslik,
			proje_kategori=:kategori,
			proje_icerik=:icerik,
			proje_vitrin=:vitrin,
			proje_title=:title,
			proje_descr=:descr,
			proje_keyword=:keyword
			WHERE proje_id={$_POST['proje_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'baslik'     => $_POST[ 'proje_baslik' ],
				'kategori'     => $_POST[ 'proje_kategori' ],
				'icerik'     => $_POST[ 'proje_icerik' ],
				'vitrin'     => $_POST[ 'proje_vitrin' ],
				'title'     => $_POST[ 'proje_title' ],
				'descr'     => $_POST[ 'proje_descr' ],
				'keyword'     => $_POST[ 'proje_keyword' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../kadro.php?status=ok" );
		}
		else
		{

			Header( "Location:../kadro.php?status=no" );
		}
	}
}

if ( isset( $_POST[ 'hosduzenle' ] ) )
{


	$ayarkaydet = $db->prepare(
		"UPDATE hosgeldiniz SET
		hosgeldiniz_baslik=:baslik,
		hosgeldiniz_aciklama=:icerik
		WHERE hos_id={$_POST['hosgeldiniz_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'baslik'     => $_POST[ 'hosgeldiniz_baslik' ],
			'icerik'     => $_POST[ 'hosgeldiniz_aciklama' ]
		)
	);

	if ( $update )
	{


		Header( "Location:../production/hosgeldiniz.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/hosgeldiniz.php?durum=no" );
	}
}
if ( $_GET[ 'urunsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from urunler where urun_id=:urun_id" );
	$kontrol = $sil->execute(
		array(
			'urun_id' => $_GET[ 'oda_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['urun_resim'];
		unlink("../$resimsilunlink");

		Header( "Location:../oda.php?status=ok" );
	}
	else
	{

		Header( "Location:../oda.php?status=no" );
	}
}
if ( $_GET[ 'odasil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from urunler where urun_id=:urun_id" );
	$kontrol = $sil->execute(
		array(
			'urun_id' => $_GET[ 'oda_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['urun_resim'];
		unlink("../$resimsilunlink");

		Header( "Location:../oda.php?status=ok" );
	}
	else
	{

		Header( "Location:../oda.php?status=no" );
	}
}
if ( $_GET[ 'urunresimdetaysil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resim where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['resim_link'];
		unlink("../$resimsilunlink");

		Header( "Location:../oda.php?status=ok" );
	}
	else
	{

		Header( "Location:../oda.php?status=no" );
	}
}
if ( $_GET[ 'referanssil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from referanslar where referans_id=:referans_id" );
	$kontrol = $sil->execute(
		array(
			'referans_id' => $_GET[ 'referans_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['referans_resim1'];
		unlink("../$resimsilunlink");

		Header( "Location:../referanslar.php?status=ok" );
	}
	else
	{

		Header( "Location:../referanslar.php?status=no" );
	}
}
if ( $_GET[ 'slaytsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from slayt where slayt_id=:slayt_id" );
	$kontrol = $sil->execute(
		array(
			'slayt_id' => $_GET[ 'slayt_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['slayt_resim'];
		unlink("../$resimsilunlink");

		Header( "Location:../slayt.php?status=ok" );
	}
	else
	{

		Header( "Location:../slayt.php?status=no" );
	}
}
if ( $_GET[ 'videosil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from videogaleri where video_id=:video_id" );
	$kontrol = $sil->execute(
		array(
			'video_id' => $_GET[ 'video_id' ]
		)
	);
	$Id = $_GET[ 'video_album' ];
	if ( $kontrol )
	{
		$resimsilunlink=$_GET['video_resim'];
		unlink("../$resimsilunlink");

		Header( "Location:../video-galerisi.php?album=$Id&status=ok" );
	}
	else
	{

		Header( "Location:../video-galerisi.php?album=$Id&status=ok" );
	}
}
if ( $_GET[ 'resimsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resimgaleri where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);
	$Id = $_GET[ 'resim_album' ];
	if ( $kontrol )
	{
		$resimsilunlink=$_GET['eski_yol'];
		unlink("../$resimsilunlink");

		Header( "Location:../resim-galerisi.php?album=$Id&status=ok" );
	}
	else
	{

		Header( "Location:../resim-galerisi.php?album=$Id&status=ok" );
	}
}

if ( isset( $_POST[ 'subeekle' ] ) )
{


	$kaydet = $db->prepare(
		"INSERT INTO sube SET
		sube_adi=:adi,
		sube_tel=:tel,
		sube_gsm=:gsm,
		sube_fax=:fax,
		sube_web=:web,
		sube_mail=:mail,
		sube_harita=:harita,
		sube_il=:il,
		sube_ilce=:ilce,
		sube_adres=:adres
		"
	);
	$insert = $kaydet->execute(
		array(
			'adi'   => $_POST[ 'sube_adi' ],
			'tel'   => $_POST[ 'sube_tel' ],
			'gsm'   => $_POST[ 'sube_gsm' ],
			'fax'   => $_POST[ 'sube_fax' ],
			'web'   => $_POST[ 'sube_web' ],
			'mail'   => $_POST[ 'sube_mail' ],
			'harita'   => $_POST[ 'sube_harita' ],
			'il'   => $_POST[ 'sube_il' ],
			'ilce'   => $_POST[ 'sube_ilce' ],
			'adres' => $_POST[ 'sube_adres' ]
		)
	);

	if ( $insert )
	{

		Header( "Location:../sube.php?status=ok" );
	}
	else
	{

		Header( "Location:../sube.php?status=no" );
	}
}

if ( $_GET[ 'subesil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from sube where sube_id=:sayfa_id" );
	$kontrol = $sil->execute(
		array(
			'sayfa_id' => $_GET[ 'sube_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../sube.php?status=ok" );
	}
	else
	{

		Header( "Location:../sube.php?status=no" );
	}
}
if ( isset( $_POST[ 'subeduzenle' ] ) )
{

	$duzenle = $db->prepare(
		"UPDATE sube SET
		sube_adi=:adi,
		sube_tel=:tel,
		sube_gsm=:gsm,
		sube_fax=:fax,
		sube_web=:web,
		sube_mail=:mail,
		sube_harita=:harita,
		sube_il=:il,
		sube_ilce=:ilce,
		sube_adres=:adres
		WHERE sube_id={$_POST['sube_id']}"
	);
	$update  = $duzenle->execute(
		array(
			'adi'   => $_POST[ 'sube_adi' ],
			'tel'   => $_POST[ 'sube_tel' ],
			'gsm'   => $_POST[ 'sube_gsm' ],
			'fax'   => $_POST[ 'sube_fax' ],
			'web'   => $_POST[ 'sube_web' ],
			'mail'   => $_POST[ 'sube_mail' ],
			'harita'   => $_POST[ 'sube_harita' ],
			'il'   => $_POST[ 'sube_il' ],
			'ilce'   => $_POST[ 'sube_ilce' ],
			'adres' => $_POST[ 'sube_adres' ]
		)
	);

	$sayfa_id = $_POST[ 'sube_id' ];

	if ( $update )
	{


		Header( "Location:../sube-duzenle.php?sube_id=$sayfa_id&status=ok" );
	}
	else
	{

		Header( "Location:../sube-duzenle.php?sube_id=$sayfa_id&status=no" );
	}
}

if ( $_GET[ 'yorumsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from yorumlar where yorum_id=:yorum_id" );
	$kontrol = $sil->execute(
		array(
			'yorum_id' => $_GET[ 'yorum_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['yorum_resim'];
		unlink("../$resimsilunlink");

		Header( "Location:../yorumlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../yorumlar.php?status=no" );
	}
}
if ( $_GET[ 'konuyorumsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from yorum where yorum_id=:yorum_id" );
	$kontrol = $sil->execute(
		array(
			'yorum_id' => $_GET[ 'yorum_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['yorum_resim'];
		unlink("../$resimsilunlink");

		Header( "Location:../index.php?status=ok" );
	}
	else
	{

		Header( "Location:../index.php?status=no" );
	}
}
if ( $_GET[ 'markasil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from markalar where hizmet_id=:hizmet_id" );
	$kontrol = $sil->execute(
		array(
			'hizmet_id' => $_GET[ 'hizmet_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../markalar.php?status=ok" );
	}
	else
	{

		Header( "Location:../markalar.php?status=no" );
	}
}
if ( $_GET[ 'hizmetsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from hizmetler where hizmet_id=:hizmet_id" );
	$kontrol = $sil->execute(
		array(
			'hizmet_id' => $_GET[ 'hizmet_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../hizmetler.php?status=ok" );
	}
	else
	{

		Header( "Location:../hizmetler.php?status=no" );
	}
}
if ( $_GET[ 'projesil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from projeler where proje_id=:proje_id" );
	$kontrol = $sil->execute(
		array(
			'proje_id' => $_GET[ 'proje_id' ]
		)
	);

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['proje_resim'];
		unlink("../../$resimsilunlink");

		Header( "Location:../projeler.php?status=ok" );
	}
	else
	{

		Header( "Location:../projeler.php?status=no" );
	}
}
if ( $_GET[ 'sosyalsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from sosyal where sosyal_id=:sosyal_id" );
	$kontrol = $sil->execute(
		array(
			'sosyal_id' => $_GET[ 'sosyal_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../sosyal-medya.php?status=ok" );
	}
	else
	{

		Header( "Location:../sosyal-medya.php?status=no" );
	}
}
if ( $_GET[ 'mesajsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from mesajlar where mesaj_id=:mesaj_id" );
	$kontrol = $sil->execute(
		array(
			'mesaj_id' => $_GET[ 'mesaj_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../index.php?status=ok" );
	}
	else
	{

		Header( "Location:../index.php?status=no" );
	}
}
if ( $_GET[ 'kategorisil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from kategoriler where kategori_id=:kategori_id" );
	$kontrol = $sil->execute(
		array(
			'kategori_id' => $_GET[ 'kategori_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../kategoriler.php?status=no" );
	}

}
if ( $_GET[ 'blogkategorisil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from kategorilerb where kategori_id=:kategori_id" );
	$kontrol = $sil->execute(
		array(
			'kategori_id' => $_GET[ 'kategori_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../blog-kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../blog-kategoriler.php?status=no" );
	}

}
if ( $_GET[ 'projekategorisil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from kategorilerp where kategori_id=:kategori_id" );
	$kontrol = $sil->execute(
		array(
			'kategori_id' => $_GET[ 'kategori_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../proje-kategoriler.php?status=ok" );
	}
	else
	{

		Header( "Location:../proje-kategoriler.php?status=no" );
	}
}
if ( $_GET[ 'flinksil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from flink where flink_id=:flink_id" );
	$kontrol = $sil->execute(
		array(
			'flink_id' => $_GET[ 'flink_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../top-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../top-menu.php?status=no" );
	}
}
if ( $_GET[ 'fmenusil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from fmenu where fmenu_id=:fmenu_id" );
	$kontrol = $sil->execute(
		array(
			'fmenu_id' => $_GET[ 'fmenu_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../alt-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( $_GET[ 'fmenu2sil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from fmenu2 where fmenu_id=:fmenu_id" );
	$kontrol = $sil->execute(
		array(
			'fmenu_id' => $_GET[ 'fmenu_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../alt-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( $_GET[ 'fmenu3sil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from fmenu3 where fmenu_id=:fmenu_id" );
	$kontrol = $sil->execute(
		array(
			'fmenu_id' => $_GET[ 'fmenu_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../alt-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( $_GET[ 'omenusil' ] == "ok" )
{


	$sil     = $db->prepare( "DELETE from omenu where omenu_id=:omenu_id" );
	$kontrol = $sil->execute(
		array(
			'omenu_id' => $_GET[ 'omenu_id' ]
		)
	);




	if ( $kontrol )
	{

		$menulistixl=$db->prepare("SELECT * from omenu where omenu_ust=:UstMenux");
		$menulistixl->execute(array('UstMenux' => $_GET[ 'omenu_ust' ])); 
		$KontSay=$menulistixl->rowCount();

		if ($KontSay=='0') {
			$eski=$_GET[ 'omenu_ust' ];
			$ayarkaydet = $db->prepare(
				"UPDATE omenu SET
				omenu_durum=:durum
				WHERE omenu_id={$eski}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'durum' => '0'
				)
			);
		}

		Header( "Location:../menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}
if ( $_GET[ 'omenu2sil' ] == "ok" )
{


	$sil     = $db->prepare( "DELETE from omenu2 where omenu_id=:omenu_id" );
	$kontrol = $sil->execute(
		array(
			'omenu_id' => $_GET[ 'omenu_id' ]
		)
	);




	if ( $kontrol )
	{

		$menulistixl=$db->prepare("SELECT * from omenu2 where omenu_ust=:UstMenux");
		$menulistixl->execute(array('UstMenux' => $_GET[ 'omenu_ust' ])); 
		$KontSay=$menulistixl->rowCount();

		if ($KontSay=='0') {
			$eski=$_GET[ 'omenu_ust' ];
			$ayarkaydet = $db->prepare(
				"UPDATE omenu2 SET
				omenu_durum=:durum
				WHERE omenu_id={$eski}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'durum' => '0'
				)
			);
		}

		Header( "Location:../menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}
if ( $_GET[ 'omenu3sil' ] == "ok" )
{


	$sil     = $db->prepare( "DELETE from omenu3 where omenu_id=:omenu_id" );
	$kontrol = $sil->execute(
		array(
			'omenu_id' => $_GET[ 'omenu_id' ]
		)
	);




	if ( $kontrol )
	{

		$menulistixl=$db->prepare("SELECT * from omenu3 where omenu_ust=:UstMenux");
		$menulistixl->execute(array('UstMenux' => $_GET[ 'omenu_ust' ])); 
		$KontSay=$menulistixl->rowCount();

		if ($KontSay=='0') {
			$eski=$_GET[ 'omenu_ust' ];
			$ayarkaydet = $db->prepare(
				"UPDATE omenu3 SET
				omenu_durum=:durum
				WHERE omenu_id={$eski}"
			);
			$update     = $ayarkaydet->execute(
				array(
					'durum' => '0'
				)
			);
		}

		Header( "Location:../menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}
if ( $_GET[ 'ssssil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from sss where sss_id=:sss_id" );
	$kontrol = $sil->execute(
		array(
			'sss_id' => $_GET[ 'sss_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../sss.php?status=ok" );
	}
	else
	{

		Header( "Location:../sss.php?status=no" );
	}
}
if ( $_GET[ 'hssssil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from hsss where sss_id=:sss_id" );
	$kontrol = $sil->execute(
		array(
			'sss_id' => $_GET[ 'sss_id' ]
		)
	);

	$Id=$_GET[ 'hizmet_id' ];
	if ( $kontrol )
	{


		Header( "Location:../hizmet-sss.php?hizmet_id=$Id&status=ok" );
	}
	else
	{

		Header( "Location:../hizmet-sss.php?hizmet_id=$Id&status=no" );
	}
}

if ( isset( $_POST[ 'hizmetekle' ] ) )
{


	$uploads_dir = '../assets/img/hizmetler';
	@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO hizmetler SET
		hizmet_baslik=:baslik,
		hizmet_icerik=:icerik,
		hizmet_title=:title,
		hizmet_descr=:descr,
		hizmet_keyword=:keyword,
		hizmet_vitrin=:vitrin,
		hizmet_resim=:resim");
	$insert = $kaydet->execute(
		array(
			'baslik'     => $_POST[ 'hizmet_baslik' ],
			'icerik'     => $_POST[ 'hizmet_icerik' ],
			'title'     => $_POST[ 'hizmet_title' ],
			'descr'     => $_POST[ 'hizmet_descr' ],
			'keyword'     => $_POST[ 'hizmet_keyword' ],
			'vitrin'     => $_POST[ 'hizmet_vitrin' ],
			'resim'     => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../hizmetler.php?status=ok" );
	}
	else
	{

		Header( "Location:../hizmetler.php?status=no" );
	}
}
if ( isset( $_POST[ 'markaekle' ] ) )
{


	$uploads_dir = '../assets/img/hizmetler';
	@$tmp_name = $_FILES[ 'hizmet_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO markalar SET
		hizmet_baslik=:baslik,
		hizmet_icerik=:icerik,
		hizmet_title=:title,
		hizmet_descr=:descr,
		hizmet_keyword=:keyword,
		hizmet_vitrin=:vitrin,
		hizmet_resim=:resim");
	$insert = $kaydet->execute(
		array(
			'baslik'     => $_POST[ 'hizmet_baslik' ],
			'icerik'     => $_POST[ 'hizmet_icerik' ],
			'title'     => $_POST[ 'hizmet_title' ],
			'descr'     => $_POST[ 'hizmet_descr' ],
			'keyword'     => $_POST[ 'hizmet_keyword' ],
			'vitrin'     => $_POST[ 'hizmet_vitrin' ],
			'resim'     => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../markalar.php?status=ok" );
	}
	else
	{

		Header( "Location:../markalar.php?status=no" );
	}
}
if ( isset( $_POST[ 'yorumekle' ] ) )
{


	$uploads_dir = '../assets/img/yorumlar';
	@$tmp_name = $_FILES[ 'yorum_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$benzersizsayi3 = rand( 20000, 32000 );
	$benzersizsayi4 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO yorumlar SET
		yorum_isim=:isim,
		yorum_link=:link,
		yorum_icerik=:icerik,
		yorum_resim=:resim");
	$insert = $kaydet->execute(
		array(
			'isim'     => $_POST[ 'yorum_isim' ],
			'link' => $_POST[ 'yorum_link' ],
			'icerik'     => $_POST[ 'yorum_icerik' ],
			'resim'    => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../yorumlar.php?status=ok" );
	}
	else
	{

		Header( "Location:../yorumlar.php?status=no" );
	}
}
if ( isset( $_POST[ 'projeekle' ] ) )
{


	$uploads_dir = '../assets/img/projeler';
	@$tmp_name = $_FILES[ 'proje_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti='.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO projeler SET
		proje_baslik=:baslik,
		proje_kategori=:kategori,
		proje_icerik=:icerik,
		proje_resim=:resim,
		proje_title=:title,
		proje_descr=:descr,
		proje_keyword=:keyword");
	$insert = $kaydet->execute(
		array(
			'baslik'     => $_POST[ 'proje_baslik' ],
			'kategori'     => $_POST[ 'proje_kategori' ],
			'icerik'     => $_POST[ 'proje_icerik' ],
			'resim'     => $refimgyol,
			'title'     => $_POST[ 'proje_title' ],
			'descr'     => $_POST[ 'proje_descr' ],
			'keyword'     => $_POST[ 'proje_keyword' ]
		));

	if ( $insert )
	{

		Header( "Location:../projeler.php?status=ok" );
	}
	else
	{

		Header( "Location:../projeler.php?status=no" );
	}
}
if ( isset( $_POST[ 'slaytekle' ] ) )
{

	$uploads_dir = '../assets/img/slayt';
	$tmp_name = $_FILES[ 'slayt_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO slayt SET
		slayt_sira=:sira,
		slayt_baslik=:baslik,
		slayt_baslik2=:baslik2,
		slayt_baslik3=:baslik3,
		slayt_butonlink=:butonlink,
		slayt_butonlink2=:butonlink2,
		slayt_butonlink3=:butonlink3,
		slayt_renk=:renk,
		slayt_butonad=:butonad,
		slayt_butonad2=:butonad2,
		slayt_butonad3=:butonad3,
		slayt_aciklama=:aciklama,
		slayt_aciklama2=:aciklama2,
		slayt_aciklama3=:aciklama3,
		slayt_resim=:resim");
	$insert = $kaydet->execute(
		array(
			'sira'     => $_POST[ 'slayt_sira' ],
			'baslik'     => $_POST[ 'slayt_baslik' ],
			'baslik2'     => $_POST[ 'slayt_baslik2' ],
			'baslik3'     => $_POST[ 'slayt_baslik3' ],
			'butonlink'     => $_POST[ 'slayt_butonlink' ],
			'butonlink2'     => $_POST[ 'slayt_butonlink2' ],
			'butonlink3'     => $_POST[ 'slayt_butonlink3' ],
			'renk'     => "#".$_POST[ 'slayt_renk' ],
			'butonad'     => $_POST[ 'slayt_butonad' ],
			'butonad2'     => $_POST[ 'slayt_butonad2' ],
			'butonad3'     => $_POST[ 'slayt_butonad3' ],
			'aciklama' => $_POST[ 'slayt_aciklama' ],
			'aciklama2' => $_POST[ 'slayt_aciklama2' ],
			'aciklama3' => $_POST[ 'slayt_aciklama3' ],
			'resim'    => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../slayt.php?status=ok" );
	}
	else
	{

		Header( "Location:../slayt.php?status=no" );
	}
}

if ( isset( $_POST[ 'odaekle' ] ) )
{


	$uploads_dir = '../assets/img/urunler';
	@$tmp_name = $_FILES[ 'urun_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO urunler SET
		urun_baslik=:baslik,
		urun_baslik2=:baslik2,
		urun_baslik3=:baslik3,
		urun_kategori=:kategori,
		urun_fiyat=:fiyat,
		urun_fiyat2=:fiyat2,
		urun_fiyat3=:fiyat3,
		urun_kisaaciklama=:kisaaciklama,
		urun_aciklama=:aciklama,
		urun_aciklama2=:aciklama2,
		urun_aciklama3=:aciklama3,
		araba_motor_hacim=:hacim,
		araba_renk=:renk,
		araba_cekis=:cekis,
		araba_model=:arabaModel,
		araba_motor_gucu=:motorGucu,
		araba_durum=:durum,
		urun_efiyat=:efiyat,
		urun_vitrin=:vitrin,
		urun_title=:title,
		urun_title2=:title2,
		urun_title3=:title3,
		
		urun_descr=:descr,
		urun_descr2=:descr2,
		urun_descr3=:descr3,
		urun_keyword=:keyword,
		urun_keyword2=:keyword2,
		urun_resim=:resim,
		urun_keyword3=:keyword");
	$insert = $kaydet->execute(
		array(
			'baslik'     => $_POST[ 'urun_baslik' ],
			'baslik2'     => $_POST[ 'urun_baslik2' ],
			'baslik3'     => $_POST[ 'urun_baslik3' ],
			'kategori'     => $_POST[ 'urun_kategori' ],
			'fiyat'     => $_POST[ 'urun_fiyat' ],
			'fiyat2'     => $_POST[ 'urun_fiyat2' ],
			'fiyat3'     => $_POST[ 'urun_fiyat3' ],
			'kisaaciklama'  => $_POST[ 'urun_kisaaciklama' ],
			'aciklama'     => $_POST[ 'urun_aciklama' ],
			'aciklama2'     => $_POST[ 'urun_aciklama2' ],
			'aciklama3'     => $_POST[ 'urun_aciklama3' ],
			'hacim'     => $_POST[ 'araba_motor_hacim' ],
			'renk'     => $_POST[ 'araba_renk' ],
			'cekis'	=> $_POST[ 'araba_cekis' ],
			'arabaModel'     => $_POST[ 'araba_model' ],
			'motorGucu'     => $_POST[ 'araba_motor_gucu' ],
			'durum'     => $_POST[ 'araba_durum' ],
			'vitrin'     => $_POST[ 'urun_vitrin' ],
			'efiyat'     => $_POST[ 'urun_efiyat' ],
			'title'     => $_POST[ 'urun_title' ],
			'title2'     => $_POST[ 'urun_title2' ],
			'title3'     => $_POST[ 'urun_title3' ],
			'descr'     => $_POST[ 'urun_descr' ],
			'descr2'     => $_POST[ 'urun_descr2' ],
			'descr3'     => $_POST[ 'urun_descr3' ],
			'keyword'     => $_POST[ 'urun_keyword' ],
			'keyword2'     => $_POST[ 'urun_keyword2' ],
			'resim'     => $refimgyol,
			'keyword3'     => $_POST[ 'urun_keyword3' ]

		));

	if ( $insert )
	{

		Header( "Location:../index.php?status=ok" );
	}
	else
	{

		Header( "Location:../index.php?status=no" );
	}
}



if ( isset( $_POST[ 'refekle' ] ) )
{


	$uploads_dir = '../assets/img/referanslar';
	@$tmp_name = $_FILES[ 'referans_resim1' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );


	$kaydet = $db->prepare(
		"INSERT INTO referanslar SET
		referans_adi=:adi,
		referans_kategori=:kategori,
		referans_link=:link,
		referans_resim1=:resim1
		");
	$insert = $kaydet->execute(
		array(
			'adi'    => $_POST[ 'referans_adi' ],
			'kategori'    => $_POST[ 'referans_kategori' ],
			'link'    => $_POST[ 'referans_link' ],
			'resim1'    => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../referanslar.php?status=ok" );
	}
	else
	{

		Header( "Location:../referanslar.php?status=no" );
	}
}

if ( isset( $_POST[ 'blogduzenle' ] ) )
{


	if ( $_FILES[ 'blog_resim' ][ "size" ] > 0 )
	{

		$uploads_dir = '../assets/img/blog';
		@$tmp_name = $_FILES[ 'blog_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$duzenle = $db->prepare(
			"UPDATE blog SET
			blog_baslik=:baslik,
			blog_baslik2=:baslik2,
			blog_baslik3=:baslik3,
			blog_kategori=:kategori,
			blog_detay=:detay,
			blog_detay2=:detay2,
			blog_detay3=:detay3,
			blog_title=:title,
			blog_title2=:title2,
			blog_title3=:title3,
			blog_descr=:descr,
			blog_descr2=:descr2,
			blog_descr3=:descr3,
			blog_keyword=:keyword,
			blog_keyword2=:keyword2,
			blog_keyword3=:keyword3,
			blog_resim=:resim
			WHERE blog_id={$_POST['blog_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'baslik' => $_POST[ 'blog_baslik' ],
				'baslik2' => $_POST[ 'blog_baslik2' ],
				'baslik3' => $_POST[ 'blog_baslik3' ],
				'kategori' => $_POST[ 'blog_kategori' ],
				'detay'  => $_POST[ 'blog_detay' ],
				'detay2'  => $_POST[ 'blog_detay2' ],
				'detay3'  => $_POST[ 'blog_detay3' ],
				'title'  => $_POST[ 'blog_title' ],
				'title2'  => $_POST[ 'blog_title2' ],
				'title3'  => $_POST[ 'blog_title3' ],
				'descr'  => $_POST[ 'blog_descr' ],
				'descr2'  => $_POST[ 'blog_descr2' ],
				'descr3'  => $_POST[ 'blog_descr3' ],
				'keyword'  => $_POST[ 'blog_keyword' ],
				'keyword2'  => $_POST[ 'blog_keyword2' ],
				'keyword3'  => $_POST[ 'blog_keyword3' ],
				'resim'  => $refimgyol
			)
		);

		$blog_id = $_POST[ 'blog_id' ];

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../blog.php?status=ok" );
		}
		else
		{

			Header( "Location:../blog.php?status=no" );
		}
	}
	else
	{

		$duzenle = $db->prepare(
			"UPDATE blog SET
			blog_baslik=:baslik,
			blog_baslik2=:baslik2,
			blog_baslik3=:baslik3,
			blog_kategori=:kategori,
			blog_detay=:detay,
			blog_detay2=:detay2,
			blog_detay3=:detay3,
			blog_title=:title,
			blog_title2=:title2,
			blog_title3=:title3,
			blog_descr=:descr,
			blog_descr2=:descr2,
			blog_descr3=:descr3,
			blog_keyword=:keyword,
			blog_keyword2=:keyword2,
			blog_keyword3=:keyword3
			WHERE blog_id={$_POST['blog_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'baslik' => $_POST[ 'blog_baslik' ],
				'baslik2' => $_POST[ 'blog_baslik2' ],
				'baslik3' => $_POST[ 'blog_baslik3' ],
				'kategori' => $_POST[ 'blog_kategori' ],
				'detay'  => $_POST[ 'blog_detay' ],
				'detay2'  => $_POST[ 'blog_detay2' ],
				'detay3'  => $_POST[ 'blog_detay3' ],
				'title'  => $_POST[ 'blog_title' ],
				'title2'  => $_POST[ 'blog_title2' ],
				'title3'  => $_POST[ 'blog_title3' ],
				'descr'  => $_POST[ 'blog_descr' ],
				'descr2'  => $_POST[ 'blog_descr2' ],
				'descr3'  => $_POST[ 'blog_descr3' ],
				'keyword'  => $_POST[ 'blog_keyword' ],
				'keyword2'  => $_POST[ 'blog_keyword2' ],
				'keyword3'  => $_POST[ 'blog_keyword3' ]
			)
		);

		$blog_id = $_POST[ 'blog_id' ];

		if ( $update )
		{


			Header( "Location:../blog.php?status=ok" );
		}
		else
		{

			Header( "Location:../blog.php?status=no" );
		}
	}
}

if ( $_GET[ 'blogsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from blog where blog_id=:blog_id" );
	$kontrol = $sil->execute(
		array(
			'blog_id' => $_GET[ 'blog_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../blog.php?status=ok" );
	}
	else
	{

		Header( "Location:../blog.php?status=no" );
	}
}

if ( isset( $_POST[ 'yaziduzenle' ] ) )
{


	$duzenle = $db->prepare(
		"UPDATE yazi SET
		yazi_baslik=:baslik,
		yazi_icerik=:icerik
		WHERE yazi_id={$_POST['yazi_id']}"
	);
	$update  = $duzenle->execute(
		array(
			'baslik'   => $_POST[ 'yazi_baslik' ],
			'icerik' => $_POST[ 'yazi_icerik' ]
		)
	);

	$yazi_id = $_POST[ 'yazi_id' ];

	if ( $update )
	{


		Header( "Location:../production/yazi.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/yazi.php?durum=no" );
	}
}

if ( isset( $_POST[ 'sayfaduzenle' ] ) )
{

	$duzenle = $db->prepare(
		"UPDATE sayfalar SET
		sayfa_title=:title,
		sayfa_title2=:title2,
		sayfa_title3=:title3,
		sayfa_descr=:descr,
		sayfa_descr2=:descr2,
		sayfa_descr3=:descr3,
		sayfa_keyword=:keyword,
		sayfa_keyword2=:keyword2,
		sayfa_keyword3=:keyword3,
		sayfa_baslik=:baslik,
		sayfa_baslik2=:baslik2,
		sayfa_baslik3=:baslik3,
		sayfa_menu=:menu,
		sayfa_icerik=:icerik,
		sayfa_icerik2=:icerik2,
		sayfa_icerik3=:icerik3
		WHERE sayfa_id={$_POST['sayfa_id']}"
	);
	$update  = $duzenle->execute(
		array(
			'title'   => $_POST[ 'sayfa_title' ],
			'title2'   => $_POST[ 'sayfa_title2' ],
			'title3'   => $_POST[ 'sayfa_title3' ],
			'descr'   => $_POST[ 'sayfa_descr' ],
			'descr2'   => $_POST[ 'sayfa_descr2' ],
			'descr3'   => $_POST[ 'sayfa_descr3' ],
			'keyword'   => $_POST[ 'sayfa_keyword' ],
			'keyword2'   => $_POST[ 'sayfa_keyword2' ],
			'keyword3'   => $_POST[ 'sayfa_keyword3' ],
			'baslik'   => $_POST[ 'sayfa_baslik' ],
			'baslik2'   => $_POST[ 'sayfa_baslik2' ],
			'baslik3'   => $_POST[ 'sayfa_baslik3' ],
			'menu'   => $_POST[ 'sayfa_menu' ],
			'icerik' => $_POST[ 'sayfa_icerik' ],
			'icerik2' => $_POST[ 'sayfa_icerik2' ],
			'icerik3' => $_POST[ 'sayfa_icerik3' ]
		)
	);

	$sayfa_id = $_POST[ 'sayfa_id' ];

	if ( $update )
	{


		Header( "Location:../sayfalar.php?status=ok" );
	}
	else
	{

		Header( "Location:../sayfalar.php?status=no" );
	}
}
if ( isset( $_POST[ 'hesapduzenle' ] ) )
{

	$duzenle = $db->prepare(
		"UPDATE hesap SET
		hesap_banka=:banka,
		hesap_isim=:isim,
		hesap_sube=:sube,
		hesap_no=:no,
		hesap_iban=:iban
		WHERE hesap_id={$_POST['hesap_id']}"
	);
	$update  = $duzenle->execute(
		array(
			'banka'   => $_POST[ 'hesap_banka' ],
			'isim'   => $_POST[ 'hesap_isim' ],
			'sube'   => $_POST[ 'hesap_sube' ],
			'no'   => $_POST[ 'hesap_no' ],
			'iban' => $_POST[ 'hesap_iban' ]
		)
	);


	if ( $update )
	{


		Header( "Location:../hesaplarim.php?status=ok" );
	}
	else
	{

		Header( "Location:../hesaplarim.php?status=no" );
	}
}
if ( $_GET[ 'hesapsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from hesap where hesap_id=:hesap_id" );
	$kontrol = $sil->execute(
		array(
			'hesap_id' => $_GET[ 'hesap_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../hesaplarim.php?status=ok" );
	}
	else
	{

		Header( "Location:../hesaplarim.php?status=no" );
	}
}
if ( $_GET[ 'sayfasil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from sayfalar where sayfa_id=:sayfa_id" );
	$kontrol = $sil->execute(
		array(
			'sayfa_id' => $_GET[ 'sayfa_id' ]
		)
	);

	if ( $kontrol )
	{

		Header( "Location:../sayfalar.php?status=ok" );
	}
	else
	{

		Header( "Location:../sayfalar.php?status=no" );
	}
}


if ( isset( $_POST[ 'hesapekle' ] ) )
{


	$kaydet = $db->prepare(
		"INSERT INTO hesap SET
		hesap_banka=:banka,
		hesap_isim=:isim,
		hesap_sube=:sube,
		hesap_no=:no,
		hesap_iban=:iban
		"
	);
	$insert = $kaydet->execute(
		array(
			'banka'   => $_POST[ 'hesap_banka' ],
			'isim'   => $_POST[ 'hesap_isim' ],
			'sube'   => $_POST[ 'hesap_sube' ],
			'no'   => $_POST[ 'hesap_no' ],
			'iban' => $_POST[ 'hesap_iban' ]
		)
	);

	if ( $insert )
	{

		Header( "Location:../hesaplarim.php?status=ok" );
	}
	else
	{

		Header( "Location:../hesaplarim.php?status=no" );
	}
}
if ( isset( $_POST[ 'sayfaekle' ] ) )
{


	$kaydet = $db->prepare(
		"INSERT INTO sayfalar SET
		sayfa_title=:title,
		sayfa_title2=:title2,
		sayfa_title3=:title3,
		sayfa_descr=:descr,
		sayfa_descr2=:descr2,
		sayfa_descr3=:descr3,
		sayfa_keyword=:keyword,
		sayfa_keyword2=:keyword2,
		sayfa_keyword3=:keyword3,
		sayfa_baslik=:baslik,
		sayfa_baslik2=:baslik2,
		sayfa_baslik3=:baslik3,
		sayfa_menu=:menu,
		sayfa_icerik=:icerik,
		sayfa_icerik2=:icerik2,
		sayfa_icerik3=:icerik3
		"
	);
	$insert = $kaydet->execute(
		array(
			'title'   => $_POST[ 'sayfa_title' ],
			'title2'   => $_POST[ 'sayfa_title2' ],
			'title3'   => $_POST[ 'sayfa_title3' ],
			'descr'   => $_POST[ 'sayfa_descr' ],
			'descr2'   => $_POST[ 'sayfa_descr2' ],
			'descr3'   => $_POST[ 'sayfa_descr3' ],
			'keyword'   => $_POST[ 'sayfa_keyword' ],
			'keyword2'   => $_POST[ 'sayfa_keyword2' ],
			'keyword3'   => $_POST[ 'sayfa_keyword3' ],
			'baslik'   => $_POST[ 'sayfa_baslik' ],
			'baslik2'   => $_POST[ 'sayfa_baslik2' ],
			'baslik3'   => $_POST[ 'sayfa_baslik3' ],
			'menu'   => $_POST[ 'sayfa_menu' ],
			'icerik' => $_POST[ 'sayfa_icerik' ],
			'icerik2' => $_POST[ 'sayfa_icerik2' ],
			'icerik3' => $_POST[ 'sayfa_icerik3' ]
		)
	);

	if ( $insert )
	{

		Header( "Location:../sayfalar.php?status=ok" );
	}
	else
	{

		Header( "Location:../sayfalar.php?status=no" );
	}
}



if ( isset( $_POST[ 'teklifver' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO teklif SET
		teklif_adsoyad=:adsoyad,
		teklif_tel=:tel,
		teklif_nereden=:nereden,
		teklif_nereye=:nereye,
		teklif_cinsi=:cinsi"
	);
	$update     = $ayarkaydet->execute(
		array(
			'adsoyad' => $_POST[ 'teklif_adsoyad' ],
			'tel'    => $_POST[ 'teklif_tel' ],
			'nereden'   => $_POST[ 'teklif_nereden' ],
			'nereye' => $_POST[ 'teklif_nereye' ],
			'cinsi'    => $_POST[ 'teklif_cinsi' ]
		)
	);

	$uye    = $_POST[ 'teklif_adsoyad' ];
	$tel   = $_POST[ 'teklif_tel' ];

	if ( $update )
	{

		Header( "Location:../../teklif-sms-yolla?tel=$tel&ad=$uye" );

	}
	else
	{

		Header( "Location:../../index.php?teklif=no" );
	}
}

if ( isset( $_POST[ 'beniara' ] ) )
{


	$ayarkaydet = $db->prepare(
		"INSERT INTO beniara SET
		beniara_tel=:tel"
	);
	$update     = $ayarkaydet->execute(
		array(
			'tel' => $_POST[ 'beniara_tel' ]
		)
	);

	$tel   = $_POST[ 'teklif_tel' ];

	if ( $update )
	{

		Header( "Location:../../beniara-sms-yolla?tel=$tel" );

	}
	else
	{

		Header( "Location:../../index.php?teklif=no" );
	}
}

if ( $_GET[ 'beniarasil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from beniara where beniara_id=:beniara_id" );
	$kontrol = $sil->execute(
		array(
			'beniara_id' => $_GET[ 'beniara_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../production/beni-ara.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/beni-ara.php?durum=no" );
	}
}
if ( $_GET[ 'rezervasyonsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from randevu where randevu_id=:randevu_id" );
	$kontrol = $sil->execute(
		array(
			'randevu_id' => $_GET[ 'randevu_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../rezervasyon.php?status=ok" );
	}
	else
	{

		Header( "Location:../rezervasyon.php?status=no" );
	}
}
if ( $_GET[ 'teklifsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from teklif where teklif_id=:teklif_id" );
	$kontrol = $sil->execute(
		array(
			'teklif_id' => $_GET[ 'teklif_id' ]
		)
	);

	if ( $kontrol )
	{


		Header( "Location:../production/teklifler.php?durum=ok" );
	}
	else
	{

		Header( "Location:../production/teklifler.php?durum=no" );
	}
}


if ( $_GET[ 'urunresimsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resim where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);
	$urun = $_GET['urun_id'];

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['eski_yol'];
		unlink("../$resimsilunlink");

		Header( "Location:../oda-resim-duzenle.php?urun_id=$urun&status=ok" );
	}
	else
	{

		Header( "Location:../oda-resim-duzenle.php?urun_id=$urun&status=no" );
	}
}
if ( $_GET[ 'yorumresimsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resimy where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);
	$urun = $_GET['yorum_id'];

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['eski_yol'];
		unlink("../$resimsilunlink");

		Header( "Location:../yorum-resim-duzenle.php?yorum_id=$urun&?status=ok" );
	}
	else
	{

		Header( "Location:../yorum-resim-duzenle.php?yorum_id=$urun&?status=no" );
	}
}
if ( $_GET[ 'hizmetresimsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resimh where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);
	$urun = $_GET['hizmet_id'];

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['eski_yol'];
		unlink("../$resimsilunlink");

		Header( "Location:../hizmet-resim-duzenle.php?hizmet_id=$urun&status=ok" );
	}
	else
	{

		Header( "Location:../hizmet-resim-duzenle.php?hizmet_id=$urun&status=no" );
	}
}
if ( $_GET[ 'projeresimsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resimp where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);
	$urun = $_GET['proje_id'];

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['eski_yol'];
		unlink("../$resimsilunlink");

		Header( "Location:../kadro-resim-duzenle.php?proje_id=$urun&status=ok" );
	}
	else
	{

		Header( "Location:../kadro-resim-duzenle.php?proje_id=$urun&status=no" );
	}
}
if ( $_GET[ 'blogresimsil' ] == "ok" )
{

	$sil     = $db->prepare( "DELETE from resimb where resim_id=:resim_id" );
	$kontrol = $sil->execute(
		array(
			'resim_id' => $_GET[ 'resim_id' ]
		)
	);
	$urun = $_GET['blog_id'];

	if ( $kontrol )
	{
		$resimsilunlink=$_GET['eski_yol'];
		unlink("../$resimsilunlink");

		Header( "Location:../blog-resim-duzenle.php?blog_id=$urun&status=ok" );
	}
	else
	{

		Header( "Location:../blog-resim-duzenle.php?blog_id=$urun&status=no" );
	}
}
if ( isset( $_POST[ 'videoekle' ] ) )
{

	$uploads_dir = '../assets/img/galeri';
	$tmp_name = $_FILES[ 'video_resim' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO videogaleri SET
		video_link=:link,
		video_album=:album,
		video_resim=:resim");
	$insert = $kaydet->execute(
		array(
			'link' => $_POST[ 'video_link' ],
			'album' => $_POST[ 'album' ],
			'resim'    => $refimgyol
		));
	$Id=$_POST[ 'album' ];
	if ( $insert )
	{

		Header( "Location:../video-galerisi.php?album=$Id&status=ok" );
	}
	else
	{

		Header( "Location:../video-galerisi.php?album=$Id&status=ok" );
	}
}
if ( $_GET[ 'siparisonay']=='ok' )
{

	$kaydet = $db->prepare(
		"UPDATE siparis SET
		siparis_durum=:durum
		WHERE siparis_id={$_GET['siparis_id']}");
	$insert = $kaydet->execute(
		array(
			'durum' => 0
		));

	if ( $insert )
	{

		Header( "Location:../tamamlanan-siparisler.php?status=ok" );
	}
	else
	{

		Header( "Location:../yeni-siparisler.php?status=no" );
	}
}
if ( isset( $_POST[ 'resimekle' ] ) )
{

	$uploads_dir = '../assets/img/galeri';
	$tmp_name = $_FILES[ 'resim_link' ][ "tmp_name" ];
	$benzersizsayi1 = rand( 20000, 32000 );
	$benzersizsayi2 = rand( 20000, 32000 );
	$uzanti = '.jpg';
	$benzersizad    = $benzersizsayi1 . $benzersizsayi2 ;
	$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
	move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

	$kaydet = $db->prepare(
		"INSERT INTO resimgaleri SET
		resim_baslik=:baslik,
		resim_link=:resim");
	$insert = $kaydet->execute(
		array(
			'baslik' => $_POST[ 'resim_baslik' ],
			'resim'    => $refimgyol
		));

	if ( $insert )
	{

		Header( "Location:../resim-galerisi.php?status=ok" );
	}
	else
	{

		Header( "Location:../resim-galerisi.php?status=no" );
	}
}
if ( $_GET[ 'siparissil' ] == "ok" )
{
	$inovance=$db->prepare("SELECT * from siparis where siparis_id=:siparis_id");
	$inovance->execute(array(
		'siparis_id' => $_GET['siparis_id']
	));
	$inovanceprint=$inovance->fetch(PDO::FETCH_ASSOC);

	$durum=$inovanceprint['siparis_durum'];

	$sil     = $db->prepare( "DELETE from siparis where siparis_id=:siparis_id" );
	$kontrol = $sil->execute(
		array(
			'siparis_id' => $_GET[ 'siparis_id' ]
		)
	);

	if ( $kontrol )
	{



		if ($durum=='1') {

			Header( "Location:../yeni-siparisler.php?status=ok" );
		} else {
			Header( "Location:../tamamlanan-siparisler.php?status=ok" );
		}


	}
	else
	{

		Header( "Location:../slayt.php?urun_id=$urun&?status=no" );
	}
}

if ( isset( $_POST[ 'omenuduzenle' ] ) )

{



	$ust=$_POST[ 'omenu_ust' ];

	if ($ust==0) {

		$menulist=$db->prepare("SELECT * from omenu where omenu_id=:ID");

		$menulist->execute(array('ID' => $_POST['omenu_id'] )); 

		$menulistprint=$menulist->fetch(PDO::FETCH_ASSOC);



		$ayarkaydet = $db->prepare(

			"UPDATE omenu SET

			omenu_ad=:ad,

			omenu_sira=:sira,

			omenu_ust=:ust,

			omenu_link=:link

			WHERE omenu_id={$_POST['omenu_id']}"

		);

		$update     = $ayarkaydet->execute(

			array(

				'ad'     => $_POST[ 'omenu_ad' ],

				'sira'     => $_POST[ 'omenu_sira' ],

				'ust'     => $menulistprint[ 'omenu_ust' ],

				'link'     => $_POST[ 'omenu_link' ]

			)

		);

	}



	$menulist=$db->prepare("SELECT * from omenu where omenu_id=:ID");

	$menulist->execute(array('ID' => $_POST['omenu_id'] )); 

	$menulistprint=$menulist->fetch(PDO::FETCH_ASSOC);





	$ayarkaydet = $db->prepare(

		"UPDATE omenu SET

		omenu_ad=:ad,

		omenu_sira=:sira,

		omenu_ust=:ust,

		omenu_link=:link

		WHERE omenu_id={$_POST['omenu_id']}"

	);

	$update     = $ayarkaydet->execute(

		array(

			'ad'     => $_POST[ 'omenu_ad' ],

			'sira'     => $_POST[ 'omenu_sira' ],

			'ust'     => $_POST[ 'omenu_ust' ],

			'link'     => $_POST[ 'omenu_link' ]

		)

	);



	if ( $update )

	{ 



		Header( "Location:../menu.php?status=ok" );

	}

	else

	{



		Header( "Location:../menu.php?status=no" );

	}

}
if ( isset( $_POST[ 'omenuduzenle2' ] ) )

{



	$ust=$_POST[ 'omenu_ust' ];

	if ($ust==0) {

		$menulist=$db->prepare("SELECT * from omenu where omenu_id=:ID");

		$menulist->execute(array('ID' => $_POST['omenu_id'] )); 

		$menulistprint=$menulist->fetch(PDO::FETCH_ASSOC);



		$ayarkaydet = $db->prepare(

			"UPDATE omenu2 SET

			omenu_ad=:ad,

			omenu_sira=:sira,

			omenu_ust=:ust,

			omenu_link=:link

			WHERE omenu_id={$_POST['omenu_id']}"

		);

		$update     = $ayarkaydet->execute(

			array(

				'ad'     => $_POST[ 'omenu_ad' ],

				'sira'     => $_POST[ 'omenu_sira' ],

				'ust'     => $menulistprint[ 'omenu_ust' ],

				'link'     => $_POST[ 'omenu_link' ]

			)

		);

	}



	$menulist=$db->prepare("SELECT * from omenu where omenu_id=:ID");

	$menulist->execute(array('ID' => $_POST['omenu_id'] )); 

	$menulistprint=$menulist->fetch(PDO::FETCH_ASSOC);





	$ayarkaydet = $db->prepare(

		"UPDATE omenu2 SET

		omenu_ad=:ad,

		omenu_sira=:sira,

		omenu_ust=:ust,

		omenu_link=:link

		WHERE omenu_id={$_POST['omenu_id']}"

	);

	$update     = $ayarkaydet->execute(

		array(

			'ad'     => $_POST[ 'omenu_ad' ],

			'sira'     => $_POST[ 'omenu_sira' ],

			'ust'     => $_POST[ 'omenu_ust' ],

			'link'     => $_POST[ 'omenu_link' ]

		)

	);



	if ( $update )

	{ 



		Header( "Location:../menu.php?status=ok" );

	}

	else

	{



		Header( "Location:../menu.php?status=no" );

	}

}
if ( isset( $_POST[ 'omenuduzenle3' ] ) )

{



	$ust=$_POST[ 'omenu_ust' ];

	if ($ust==0) {

		$menulist=$db->prepare("SELECT * from omenu where omenu_id=:ID");

		$menulist->execute(array('ID' => $_POST['omenu_id'] )); 

		$menulistprint=$menulist->fetch(PDO::FETCH_ASSOC);



		$ayarkaydet = $db->prepare(

			"UPDATE omenu3 SET

			omenu_ad=:ad,

			omenu_sira=:sira,

			omenu_ust=:ust,

			omenu_link=:link

			WHERE omenu_id={$_POST['omenu_id']}"

		);

		$update     = $ayarkaydet->execute(

			array(

				'ad'     => $_POST[ 'omenu_ad' ],

				'sira'     => $_POST[ 'omenu_sira' ],

				'ust'     => $menulistprint[ 'omenu_ust' ],

				'link'     => $_POST[ 'omenu_link' ]

			)

		);

	}



	$menulist=$db->prepare("SELECT * from omenu where omenu_id=:ID");

	$menulist->execute(array('ID' => $_POST['omenu_id'] )); 

	$menulistprint=$menulist->fetch(PDO::FETCH_ASSOC);





	$ayarkaydet = $db->prepare(

		"UPDATE omenu3 SET

		omenu_ad=:ad,

		omenu_sira=:sira,

		omenu_ust=:ust,

		omenu_link=:link

		WHERE omenu_id={$_POST['omenu_id']}"

	);

	$update     = $ayarkaydet->execute(

		array(

			'ad'     => $_POST[ 'omenu_ad' ],

			'sira'     => $_POST[ 'omenu_sira' ],

			'ust'     => $_POST[ 'omenu_ust' ],

			'link'     => $_POST[ 'omenu_link' ]

		)

	);



	if ( $update )

	{ 



		Header( "Location:../menu.php?status=ok" );

	}

	else

	{



		Header( "Location:../menu.php?status=no" );

	}

}
if ( isset( $_POST[ 'smenuduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE smenu SET
		smenu_ad=:ad,
		smenu_durum=:durum
		WHERE smenu_id={$_POST['smenu_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'smenu_ad' ],
			'durum'     => $_POST[ 'smenu_durum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'flinkduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE flink SET
		flink_sira=:sira,
		flink_ad=:ad,
		flink_link=:link
		WHERE flink_id={$_POST['flink_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'sira'     => $_POST[ 'flink_sira' ],
			'ad'     => $_POST[ 'flink_ad' ],
			'link'     => $_POST[ 'flink_link' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../top-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../top-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'fmenuduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE fmenu SET
		fmenu_ad=:ad,
		fmenu_link=:link,
		fmenu_sira=:sira
		WHERE fmenu_id={$_POST['fmenu_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'fmenu_ad' ],
			'sira'     => $_POST[ 'fmenu_sira' ],
			'link'     => $_POST[ 'fmenu_link' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../alt-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'fmenuduzenle2' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE fmenu2 SET
		fmenu_ad=:ad,
		fmenu_link=:link,
		fmenu_sira=:sira
		WHERE fmenu_id={$_POST['fmenu_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'fmenu_ad' ],
			'sira'     => $_POST[ 'fmenu_sira' ],
			'link'     => $_POST[ 'fmenu_link' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../alt-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'fmenuduzenle3' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE fmenu3 SET
		fmenu_ad=:ad,
		fmenu_link=:link,
		fmenu_sira=:sira
		WHERE fmenu_id={$_POST['fmenu_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'ad'     => $_POST[ 'fmenu_ad' ],
			'sira'     => $_POST[ 'fmenu_sira' ],
			'link'     => $_POST[ 'fmenu_link' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../alt-menu.php?status=ok" );
	}
	else
	{

		Header( "Location:../alt-menu.php?status=no" );
	}
}
if ( isset( $_POST[ 'yorumduzenle' ] ) )
{

	if ( $_FILES[ 'yorum_resim' ][ "size" ] > 0 )
	{

		$uploads_dir = '../assets/img/yorumlar';
		@$tmp_name = $_FILES[ 'yorum_resim' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$duzenle = $db->prepare(
			"UPDATE yorumlar SET
			yorum_icerik=:icerik,
			yorum_kisa=:kisaicerik,
			vitrin=:vitrin,
			descr=:descr,
			title=:title,
			keyword=:keyword,
			yorum_isim=:isim,
			yorum_link=:link,
			yorum_resim=:resim
			WHERE yorum_id={$_POST['yorum_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'icerik' => $_POST[ 'yorum_icerik' ],
				'kisaicerik'     => $_POST[ 'yorum_kisaicerik' ],
				'vitrin'     => $_POST[ 'vitrin' ],
				'descr'     => $_POST[ 'descr' ],
				'title'     => $_POST[ 'title' ],
				'keyword'     => $_POST[ 'keyword' ],
				'isim'  => $_POST[ 'yorum_isim' ],
				'link'  => $_POST[ 'yorum_link' ],
				'resim'  => $refimgyol
			)
		);


		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../yorumlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../yorumlar.php?status=no" );
		}
	}
	else
	{

		$duzenle = $db->prepare(
			"UPDATE yorumlar SET
			yorum_icerik=:icerik,
			yorum_isim=:isim,
			yorum_kisa=:kisaicerik,
			vitrin=:vitrin,
			descr=:descr,
			title=:title,
			keyword=:keyword,
			yorum_link=:link
			WHERE yorum_id={$_POST['yorum_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'icerik' => $_POST[ 'yorum_icerik' ],
				'isim'  => $_POST[ 'yorum_isim' ],
				'kisaicerik'     => $_POST[ 'yorum_kisaicerik' ],
				'vitrin'     => $_POST[ 'vitrin' ],
				'descr'     => $_POST[ 'descr' ],
				'title'     => $_POST[ 'title' ],
				'keyword'     => $_POST[ 'keyword' ],
				'link'  => $_POST[ 'yorum_link' ]
			)
		);

		if ( $update )
		{

			Header( "Location:../yorumlar.php?status=ok" );
		}
		else
		{

			Header( "Location:../yorumlar.php?status=no" );
		}
	}
}
if ( isset( $_POST[ 'referansduzenle' ] ) )
{


	if ( $_FILES[ 'referans_resim1' ][ "size" ] > 0 )
	{

		$uploads_dir = '../assets/img/referanslar';
		@$tmp_name = $_FILES[ 'referans_resim1' ][ "tmp_name" ];
		$benzersizsayi1 = rand( 20000, 32000 );
		$benzersizsayi2 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$benzersizad    = $benzersizsayi1 . $benzersizsayi2;
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizad . $uzanti;
		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizad$uzanti" );

		$duzenle = $db->prepare(
			"UPDATE referanslar SET
			referans_adi=:adi,
			referans_kategori=:kategori,
			referans_link=:link,
			referans_resim1=:resim1
			WHERE referans_id={$_POST['referans_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'adi'    => $_POST[ 'referans_adi' ],
				'kategori'    => $_POST[ 'referans_kategori' ],
				'link'    => $_POST[ 'referans_link' ],
				'resim1'    => $refimgyol
			)
		);

		if ( $update )
		{

			$resimsilunlink = $_POST[ 'eski_yol1' ];
			unlink( "../$resimsilunlink" );

			Header( "Location:../referanslar.php?status=ok" );
		}
		else
		{

			Header( "Location:../referanslar.php?status=no" );
		}
	} else {
		$duzenle = $db->prepare(
			"UPDATE referanslar SET
			referans_adi=:adi,
			referans_kategori=:kategori,
			referans_link=:link
			WHERE referans_id={$_POST['referans_id']}"
		);
		$update  = $duzenle->execute(
			array(
				'adi'    => $_POST[ 'referans_adi' ],
				'kategori'    => $_POST[ 'referans_kategori' ],
				'link'    => $_POST[ 'referans_link' ]
			)
		);

		if ( $update )
		{


			Header( "Location:../referanslar.php?status=ok" );
		}
		else
		{

			Header( "Location:../referanslar.php?status=no" );
		}
	}
}  

if ( isset( $_POST[ 'odemeduzenle' ] ) )
{

	$ayarkaydet = $db->prepare(
		"UPDATE odeme SET
		odeme_adi=:adi,
		odeme_not=:not,
		odeme_durum=:durum
		WHERE odeme_id={$_POST['odeme_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'adi'     => $_POST[ 'odeme_adi' ],
			'not'     => $_POST[ 'odeme_not' ],
			'durum'     => $_POST[ 'odeme_durum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../odeme-yontemleri.php?status=ok" );
	}
	else
	{

		Header( "Location:../odeme-yontemleri.php?status=no" );
	}
}

if ( isset( $_POST[ 'dilduzenle' ] ) )
{


	if ( $_FILES[ 'dil_bayrak' ][ "size" ] > 0 )
	{ 
		$uploads_dir = '../assets/img/genel';
		@$tmp_name = $_FILES[ 'dil_bayrak' ][ "tmp_name" ];
		$benzersizsayi4 = rand( 20000, 32000 );
		$uzanti = '.jpg';
		$refimgyol      = substr( $uploads_dir, 3 ) . "/" . $benzersizsayi4 . $uzanti;

		@move_uploaded_file( $tmp_name, "$uploads_dir/$benzersizsayi4$uzanti" );

		$ayarkaydet = $db->prepare(
			"UPDATE dil SET
			dil_bayrak=:resim
			WHERE dil_id={$_POST['dil_id']}"
		);
		$update     = $ayarkaydet->execute(
			array(
				'resim' => $refimgyol
			)
		);
	}


	$ayarkaydet = $db->prepare(
		"UPDATE dil SET
		dil_adi=:adi,
		dil_birim=:birim,
		dil_durum=:durum
		WHERE dil_id={$_POST['dil_id']}"
	);
	$update     = $ayarkaydet->execute(
		array(
			'adi'     => $_POST[ 'dil_adi' ],
			'birim'     => $_POST[ 'dil_birim' ],
			'durum'     => $_POST[ 'dil_durum' ]
		)
	);

	if ( $update )
	{

		Header( "Location:../dil.php?status=ok" );
	}
	else
	{

		Header( "Location:../dil.php?status=no" );
	}
}
?>
