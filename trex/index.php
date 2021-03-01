<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
include 'controller/seo.php';
$mesajsor=$db->prepare("SELECT * from mesajlar");
$mesajsor->execute(array(0));
//Saydırma
$siparissay=$db->prepare("SELECT * from siparis where siparis_durum=1");
$siparissay->execute();
$yenisiparis=$siparissay->rowCount(); 
//
$urunsay=$db->prepare("SELECT * from urunler");
$urunsay->execute();
$tumurunler=$urunsay->rowCount(); 
//
$projesay=$db->prepare("SELECT * from projeler");
$projesay->execute();
$tumprojeler=$projesay->rowCount(); 
//
$hizmetsay=$db->prepare("SELECT * from hizmetler");
$hizmetsay->execute();
$tumhizmetler=$hizmetsay->rowCount(); 
//Saydırma
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->

<section class="main-content container">
	<div class="row">
		
		<?php 

		$bugun=date("d"); // bugünün tarihi 
 	$ay=date("m"); // bu ay
 	$yil=date("Y"); // bu yıl 
 	$onlineSuresi=time()-2*60*60; // iki dakika aktif olmazsa onlineden düşecek
 	$ip=$_SERVER['REMOTE_ADDR']; // ziyaretçinin ip si 
 	$bugunGiris=$db->query("SELECT * FROM hit WHERE ip='$ip' AND gun='$bugun'")->rowCount(); // bugün o ip ile girilmişmi 
 	if($bugunGiris!=0){ // yani bugün girilmişse
 		$al=$db->query("SELECT * FROM `hit` WHERE  `ip`='".$ip."' AND `gun`='".$bugun."'")->fetch();
 	$guncelle=$db->query("UPDATE `hit` SET `sayac`='".($al['sayac']+1)."' WHERE id='".$al['id']."'"); // çoğulu 1 artırdık 

	}else{ // griş yapılmamışsa kaydettirelim
		$db->query("INSERT INTO `hit` SET `gun`='$bugun', `ay`='$ay', `yil`='$yil', simdi='".time()."', sayac='1',ip='$ip'");
		
	}
	// evet sıra geldi online, tekil ve çoğulu Göstermeye
	// online Kişi 
	$online=$db->query("SELECT * FROM hit WHERE simdi>='$onlineSuresi'")->rowCount(); // onlnie kişilerimiz
	// çoğul hitler 
	$bugunx=$db->query("SELECT SUM(sayac) FROM hit WHERE gun='$bugun' AND ay='$ay' AND yil='$yil' ORDER BY id desc")->fetch();
	$bugun_cogul=$bugunx['SUM(sayac)']; // bugün çoğul
	$dunx=$db->query("SELECT SUM(sayac) FROM hit WHERE gun='".($bugun-1)."' AND ay='$ay' AND yil='$yil' ORDER BY id desc")->fetch();
	$dun_cogul=$dunx['SUM(sayac)']; // dün Çoğul 
	$ayx=$db->query("SELECT SUM(sayac) FROM hit WHERE ay='$ay' AND yil='$yil' ORDER BY id desc")->fetch();
	$buay_cogul=$ayx['SUM(sayac)']; // bu ay çoğul
	$toplamx=$db->query("SELECT SUM(sayac) FROM hit ORDER BY id desc")->fetch();
	$toplam_cogul=$toplamx['SUM(sayac)']; // toplam çoğulumuz
	// tekil hitler 
	$bugun_tekil=$db->query("SELECT * FROM hit WHERE gun='$bugun' AND ay='$ay' AND yil='$yil'")->rowCount(); // bugün tekil
	$dun_tekil=$db->query("SELECT * FROM hit WHERE gun='".($bugun-1)."' AND ay='$ay' AND yil='$yil'")->rowCount(); // dün tekil
	$buay_tekil=$db->query("SELECT * FROM hit WHERE  ay='$ay' AND yil='$yil'")->rowCount(); // dün tekil
	$toplam_tekil=$db->query("SELECT * FROM hit")->rowCount(); // dün tekil
	
	?>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-success pull-right">CANLI</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i>  Online</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10 text-success"><b><?php echo $online; ?></b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="text-muted margin-b-0"><small class="text-muted">TEKİL ZİYARETÇİ</small></h3>                            
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-primary pull-right">BUGÜN</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i>  Günlük</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10  text-primary"><b><?php echo $bugun_tekil ?></b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="margin-b-10  text-primary"><b><?php echo $bugun_cogul ?></b> <small class="text-muted">GÖSTERİM</small></h3>                           
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-warning pull-right">AY</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i>  AYLIK</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10 text-warning"><b><?php echo $buay_tekil ?></b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="margin-b-10 text-warning"><b><?php echo $buay_cogul ?></b> <small class="text-muted">GÖSTERİM</small></h3>                            
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="widget widget-chart white-bg padding-0">
			<div class="widget-title">
				<span class="label label-danger pull-right">HEPSİ</span>
				<h2 class="margin-b-0"><i class="fa fa-users"></i> TÜMÜ</h2>
			</div>
			<div class="widget-content">
				<h3 class="margin-b-10 text-danger"><b><?php echo $toplam_tekil ?></b> <small class="text-muted">ZİYARETÇİ</small></h3>
				<h3 class="margin-b-10 text-danger"><b><?php echo $toplam_cogul ?></b> <small class="text-muted">GÖSTERİM</small></h3>                            
			</div>
		</div>
	</div>
	<!-- İLETİŞİM MESAJLARI -->
	<div class="col-md-12">
		<div class="card">
			<div class="card-heading card-default">
				<div class="pull-right mt-10">
				</div>
				İçerik Yorumları
			</div>
			<div class="card-block">
				<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
					<thead>
						<tr>
							<th class="text-left">
								<strong>Yorum Tarihi</strong>
							</th>
							<th class="text-left">
								<strong>Yorum İsim</strong>
							</th>
							<th class="text-left">
								<strong>Yorum Konu</strong>
							</th>
							<th class="text-left text-center">
								<strong>Yorum Link</strong>
							</th>
							<th class="text-left text-center">
								<strong>Yorum Durum</strong>
							</th>
							<th class="text-center">
								<strong>İşlemler</strong>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$yorumsor=$db->prepare("SELECT * from yorum order by yorum_tarih DESC");
						$yorumsor->execute(array(0));
						while ($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {
							?>
							<tr>
								<td><?php echo $yorumcek['yorum_tarih']; ?></td>
								<td><?php echo $yorumcek['yorum_isim']; ?></td>
								<td><?php

								$yorum_cins = $yorumcek['yorum_cins'];
								$yorum_konu = $yorumcek['yorum_konu'];
								if ($yorum_cins==1) {

									$sayfasor=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id");
									$sayfasor->execute(array(
										'sayfa_id' => $yorum_konu
									));
									$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);

									$link = $settingsprint['ayar_siteurl'].seo('sayfa-'.$sayfacek["sayfa_baslik"]).'-'.$sayfacek["sayfa_id"];

									echo "Sayfa Yorumu";
								} elseif ($yorum_cins==2) {

									$hizmetsor=$db->prepare("SELECT * from hizmetler where hizmet_id=:hizmet_id");
									$hizmetsor->execute(array(
										'hizmet_id' => $yorum_konu
									));
									$hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC);

									$link = $settingsprint['ayar_siteurl'].seo('hizmet-'.$hizmetcek["hizmet_baslik"]).'-'.$hizmetcek["hizmet_id"];

									echo "Hizmet Yorumu";
								} elseif ($yorum_cins==3) {

									$projeedit=$db->prepare("SELECT * from projeler where proje_id=:proje_id");
									$projeedit->execute(array(
										'proje_id' => $yorum_konu
									));
									$projewrite=$projeedit->fetch(PDO::FETCH_ASSOC);

									$link = $settingsprint['ayar_siteurl'].seo('kadro-'.$projewrite["proje_baslik"]).'-'.$projewrite["proje_id"];

									echo "Kadro Yorumu";
								} elseif ($yorum_cins==4) {
									$urunedit=$db->prepare("SELECT * from urunler where urun_id=:urun_id");
									$urunedit->execute(array(
										'urun_id' => $yorum_konu
									));
									$urunwrite=$urunedit->fetch(PDO::FETCH_ASSOC);

									$link = $settingsprint['ayar_siteurl'].seo('oda-'.$urunwrite['urun_baslik']).'-'.$urunwrite['urun_id'];

									echo "Emlak Yorumu";
								} elseif ($yorum_cins==5) {

									$blogedit=$db->prepare("SELECT * from blog where blog_id=:blog_id");
									$blogedit->execute(array(
										'blog_id' => $yorum_konu
									));
									$blogwrite=$blogedit->fetch(PDO::FETCH_ASSOC);

									$link = $settingsprint['ayar_siteurl'].seo('blog-'.$blogwrite["blog_baslik"]).'-'.$blogwrite["blog_id"];

									echo "Blog Yorumu";
								} ?></td>
								<td class="text-center">
									<a target="_blank" href="<?php echo $link; ?>" title="Konuya git" class="btn btn-sm btn-default"><i class="fa fa-link"></i></a>
								</td>
								<td class="text-center"><?php
								if ($yorumcek['yorum_durum']=='1') { ?>
									<a class="btn btn-primary">ONAYLI</a>
								<?php } else { ?>
									<a class="btn btn-warning">ONAY BEKLİYOR</a>
									<?php } ?></td>
									<td class="text-center">
										<a href="yorum-detay.php?yorum_id=<?php echo $yorumcek['yorum_id']; ?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="controller/function.php?konuyorumsil=ok&yorum_id=<?php echo $yorumcek['yorum_id']; ?>&yorum_resim=<?php echo $yorumcek['yorum_resim']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- İLETİŞİM MESAJLARI -->
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					Gelen Mesajlar
					<p class="text-muted">İletişim formu ile gönderilen mesajlar</p>
				</div>
				<div class="card-block">
					<table id="datatable2" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-left">
									<strong>Tarih</strong>
								</th>
								<th class="text-left">
									<strong>Ad Soyad</strong>
								</th>
								<th class="text-left">
									<strong>Mail Adresi</strong>
								</th>
								<th class="text-left">
									<strong>Mesaj</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							while ($mesajprint=$mesajsor->fetch(PDO::FETCH_ASSOC)) {
								$mesajicerik=mb_substr(strip_tags($mesajprint['mesaj_icerik']), 0, 80, 'UTF-8')."...";
								?>
								<tr>
									<td><?php echo $mesajprint['mesaj_tarih']; ?></td>
									<td><?php echo $mesajprint['mesaj_ad']; ?></td>
									<td><?php echo $mesajprint['mesaj_mail']; ?></td>
									<td><?php echo $mesajicerik; ?></td>
									<td class="text-center">
										<a href="mesaj-detay.php?mesaj_id=<?php echo $mesajprint['mesaj_id']; ?>" title="Göster" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
										<a href="controller/function.php?mesajsil=ok&mesaj_id=<?php echo $mesajprint['mesaj_id']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- İLETİŞİM MESAJLARI -->
	</div>

	<?php include 'footer.php'; ?>
