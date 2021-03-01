<?php 
include 'include/head.php';
$Id=htmlspecialchars(strip_tags(trim($_GET['kategori_id'])));
$kategorisor=$db->prepare("SELECT * from kategorilerb where kategori_id=:SorguId");
$kategorisor->execute(array('SorguId' => $Id));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

$metakey=$db->prepare("SELECT * from meta where meta_id=4");
$metakey->execute(array(0));
$metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC);


if ($dilwrite['dil_id']==1) {
$meta = [
	'title' => $kategoricek['kategori_title'],
	'desc' => $kategoricek['kategori_descr'],
	'key' => $kategoricek['kategori_keyword']
];
} elseif ($dilwrite['dil_id']==2) {
$meta = [
	'title' => $kategoricek['kategori_title2'],
	'desc' => $kategoricek['kategori_descr2'],
	'key' => $kategoricek['kategori_keyword2']
];
} elseif ($dilwrite['dil_id']==3) {
$meta = [
	'title' => $kategoricek['kategori_title3'],
	'desc' => $kategoricek['kategori_descr3'],
	'key' => $kategoricek['kategori_keyword3']
];
}
include 'include/header.php';
include 'include/menu.php';
$sayfada = 3; // sayfada gösterilecek içerik miktarını belirtiyoruz.

$sorgu=$db->prepare("SELECT * from blog where blog_kategori=$Id");
$sorgu->execute();
$toplam_icerik=$sorgu->rowCount();

$toplam_sayfa = ceil($toplam_icerik / $sayfada);

                  // eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

                // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if($sayfa < 1) $sayfa = 1; 

                // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

$limit = ($sayfa - 1) * $sayfada;

$blogsor=$db->prepare("SELECT * from blog where blog_kategori=$Id order by blog_id DESC limit $limit,$sayfada");
$blogsor->execute(array(
	'bloglimit' => "$limit,$sayfada"
));

?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title6']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php
	if ($dilwrite['dil_id']==1) {
		$katAdi = $kategoricek['kategori_ad'];
	} elseif ($dilwrite['dil_id']==2) {
		$katAdi = $kategoricek['kategori_ad2'];
	} elseif ($dilwrite['dil_id']==3) {
		$katAdi = $kategoricek['kategori_ad3'];
	} 

	echo $katAdi; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-8 blog-post-contents">
				<?php 
				while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) {


					$aylar = array(

						1=>"Ocak",

						2=>"Şubat",

						3=>"Mart",

						4=>"Nisan",

						5=>"Mayıs",

						6=>"Haziran",

						7=>"Temmuz",

						8=>"Ağustos",

						9=>"Eylül",

						10=>"Ekim",

						11=>"Kasım",

						12=>"Aralık"

					);
					$Gun= substr($blogcek['blog_tarih'],8,2);
					$Ay= (int) substr($blogcek['blog_tarih'],5,2);
					$Yil= substr($blogcek['blog_tarih'],0,4);
					$Id=htmlspecialchars(strip_tags(trim($blogcek['blog_kategori'])));
					$kategorisor=$db->prepare("SELECT * from kategorilerb where kategori_id=:SorguId");
					$kategorisor->execute(array('SorguId' => $Id));
					$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

					if ($dilwrite['dil_id']==1) {
						$baslikOrjin = $blogcek['blog_baslik'];
						$KisaAciklama=  substr(strip_tags($blogcek['blog_detay']), 0,220).'...';
						$Blog_link=  seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
					} elseif ($dilwrite['dil_id']==2) {
						$baslikOrjin = $blogcek['blog_baslik2'];
						$KisaAciklama=  substr(strip_tags($blogcek['blog_detay2']), 0,220).'...';
						$Blog_link=  seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
					} elseif ($dilwrite['dil_id']==3) {
						$baslikOrjin = $blogcek['blog_baslik3'];
						$KisaAciklama=  substr(strip_tags($blogcek['blog_detay3']), 0,220).'...';
						$Blog_link=  seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
					} 
					$konuyorum=$db->prepare("SELECT * from yorum where yorum_cins=5 and yorum_durum=1 and yorum_konu=:hizmet_id order by yorum_tarih DESC");
					$konuyorum->execute(array(
						'hizmet_id' => $blogcek['blog_id']
					));
					$YorumSay = $konuyorum->RowCount();
					$kategorisor=$db->prepare("SELECT * from kategorilerb order by kategori_sira ASC");
					$kategorisor->execute(array('Kategori' => $blogcek['blog_id']));
					$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
					if ($dilwrite['dil_id']==1) {
						$kat_baslik=  $kategoricek['kategori_ad'];
						$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad"]).'-'.$kategoricek["kategori_id"];
					} elseif ($dilwrite['dil_id']==2) {
						$kat_baslik=  $kategoricek['kategori_ad2'];
						$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad"]).'-'.$kategoricek["kategori_id"];
					} elseif ($dilwrite['dil_id']==3) {
						$kat_baslik=  $kategoricek['kategori_ad3'];
						$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad"]).'-'.$kategoricek["kategori_id"];
					}
					?>
					<div class="blog-post">
						<h3><a href="<?php echo $Blog_link; ?>"><?php echo $baslikOrjin; ?></a></h3>
						<div class="post-materials  clearfix">
							<ul>
								<li><h6><i class="fa fa-calendar"></i><?php echo $Gun ?> / <?php echo substr($blogcek['blog_tarih'],5,2)?> / <?php echo $Yil ?></h6></li>
								<li><h6><i class="fa fa-comments"></i><?php echo $widgetprint['widget_ara']; ?> (<?php echo $YorumSay ?>)</h6></li>
								<li><h6><a href="<?php echo $kat_link; ?>"><i class="fa fa-tags"></i><?php echo $kat_baslik; ?></a></h6></li>
							</ul>
						</div>
						<div class="blog-image marginb30 margint30">
							<div class="flexslider">
								<ul class="slides"> <?php 
								$urunresimsor=$db->prepare("SELECT * from resimb where resim_urun=:resim_urun");
								$urunresimsor->execute(array(
									'resim_urun' => $blogcek['blog_id']
								));
								while($urunresimcek=$urunresimsor->fetch(PDO::FETCH_ASSOC)) { ?>
									<li><img style="width: 100%" alt="<?php echo $baslikOrjin; ?>" class="img-responsive" src="trex/<?php echo $urunresimcek['resim_link'] ?>"  /> </li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="post-content margint10">
						<p><?php echo $KisaAciklama; ?></p>
					</div>
					<div class="button mini-button button-style-2 margint30"><h6><a href="<?php echo $Blog_link ?>"><?php echo htmlspecialchars($widgetprint['widget_bbilgi']); ?></a></h6></div>
					
				</div>
			<?php } ?>
			<ul class="pagination">
				 <?php $gosterilecekbuton = 3; // gösterilecek sayfa.
				 if ($sayfa > 1) {
				 	?>
				 	<li><a href="?sayfa=1"><i class="fa fa-home"></i></a></li>
				 	<li><a href="?sayfa=<?php echo $sayfa-1; ?>"><i class="fa fa-chevron-left"></i></i></a></li>
				 <?php }
				 for ($i= $sayfa - $gosterilecekbuton; $i < $sayfa + $gosterilecekbuton +1; $i++) {
				 	if ($i > 0 and $i <= $toplam_sayfa) {
				 		if ($i == $sayfa) {
				 			?>
				 			<li class="active">
				 				<a href="?sayfa=<?php echo $i ?>"><?php echo $i ?> <span class="sr-only">(current)</span></a>
				 			</li>
				 			<?php
				 		} else {
				 			?>
				 			<li>
				 				<a href="?sayfa=<?php echo $i ?>"><?php echo $i ?> <span class="sr-only">(current)</span></a>
				 			</li>
				 			<?php
				 		}
				 	}
				 }
				 if ($sayfa != $toplam_sayfa) {
				 	?>
				 	<li><a href="?sayfa=<?php echo $sayfa+1; ?>"><i class="fa fa-chevron-right"></i></a></li>
				 <?php } ?>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-4 margint60"><!-- Sidebar -->
				<div class="luxen-widget news-widget">
					<div class="title">
						<h5><?php echo $widgetprint['widget_proje']; ?></h5>
					</div>
					<ul class="sidebar-recent">
						<li class="clearfix">
							<?php 
							$kategorisor=$db->prepare("SELECT * from kategorilerb order by kategori_sira ASC");
							$kategorisor->execute(array(0));
							while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
								if ($dilwrite['dil_id']==1) {
									$kat_baslik=  $kategoricek['kategori_ad'];
									$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad"]).'-'.$kategoricek["kategori_id"];
								} elseif ($dilwrite['dil_id']==2) {
									$kat_baslik=  $kategoricek['kategori_ad2'];
									$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad"]).'-'.$kategoricek["kategori_id"];
								} elseif ($dilwrite['dil_id']==3) {
									$kat_baslik=  $kategoricek['kategori_ad3'];
									$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad"]).'-'.$kategoricek["kategori_id"];
								}
								?><h6><a href="<?php echo $kat_link; ?>"><?php echo $kat_baslik; ?></a></h6>
							<?php } ?>

							<h6><a href="blog"><?php echo $widgetprint['widget_referans']; ?></a></h6>
						</li>
						<li class="clearfix">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'include/footer.php'; ?>
