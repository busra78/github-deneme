<?php 
include 'include/head.php';
if ($dilwrite['dil_id']==1) {
	$metakey=$db->prepare("SELECT * from meta where meta_id=12");
} elseif ($dilwrite['dil_id']==2) {
	$metakey=$db->prepare("SELECT * from meta2 where meta_id=12");
} elseif ($dilwrite['dil_id']==3) {
	$metakey=$db->prepare("SELECT * from meta3 where meta_id=12");
}
$metakey->execute(array(0));
$metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC);
$meta = [
	'title' => $metakeyprint['meta_title'],
	'desc' => $metakeyprint['meta_descr'],
	'key' => $metakeyprint['meta_keyword']
];
include 'include/header.php';
include 'include/menu.php';

if ($_POST['rezervasyon']) {
	$yetiskin = htmlspecialchars(trim($_POST[ 'yetiskin' ]));
	$fiyat = htmlspecialchars(trim($_POST[ 'fiyat' ]));
	$cocuk = htmlspecialchars(trim($_POST[ 'cocuk' ]));
	$giris = htmlspecialchars(trim($_POST[ 'giris' ]));
	$donus = htmlspecialchars(trim($_POST[ 'donus' ]));
	$gunfarki = htmlspecialchars(trim($_POST[ 'gunfarki' ]));
	$oda = htmlspecialchars(trim($_POST[ 'oda' ]));
	$urunsor=$db->prepare("SELECT * from urunler where urun_id=:UrunId");
	$urunsor->execute(array('UrunId' => $oda));
	$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
	if ($dilwrite['dil_id']==1) {
		$urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik']), 0, 90, 'UTF-8');
	} elseif ($dilwrite['dil_id']==2) {
		$urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik2']), 0, 90, 'UTF-8');
	} elseif ($dilwrite['dil_id']==3) {
		$urun_baslik =  mb_substr(strip_tags($uruncek['urun_baslik3']), 0, 90, 'UTF-8');
	}



	
} else {
	header( 'Location:index.php' );
}
?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title4']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $widgetprint['widget_urun']; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 clearfix"><!-- Room Information -->
				<div class="col-lg-12 clearfix margint40 room-single-tab"><!-- Room Tab -->
					<div class="tab-style-2 ">
						<div class="tab-content tab-style-content">
							<div class="tab-pane fade active in" id="tabs">
								<div class="col-lg-12 margint30">
									<div class="luxen-widget news-widget">
										<ul class="footer-links">
											<li><p><i class="fa fa-calendar"> <?php echo $widgetprint['widget_rezgidis']; ?></i>  <?php echo $giris; ?> </p></li>
											<li><p><i class="fa fa-calendar"> <?php echo $widgetprint['widget_rezdonus']; ?></i>  <?php echo $donus; ?> </p></li>
											<li><p><i class="fa fa-user"> <?php echo $widgetprint['widget_rezyetiskin']; ?></i> <?php echo $yetiskin; ?> </p></li>
											<li><p><i class="fa fa-child"> <?php echo $widgetprint['widget_rezcocuk']; ?></i> <?php echo $cocuk; ?> </p></li>
											<li><p><i class="fa fa-home"> <?php echo $widgetprint['widget_ufiyat']; ?></i>  <?php echo $urun_baslik ?></p></li>
											<li><p><i class="fa fa-money"></i> <?php echo $fiyat.$dilwrite['dil_birim'] ?></p></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 clearfix"><!-- Contact -->
				<div class="contact-form margin50 room-single-tab"><!-- Contact Form -->
					<form method="POST" action="trex/controller/function.php">
						<input type="hidden" name="yetiskin" value="<?php echo $yetiskin; ?>">
						<input type="hidden" name="fiyat" value="<?php echo $fiyat.$dilwrite['dil_birim']; ?>">
						<input type="hidden" name="cocuk" value="<?php echo $cocuk; ?>">
						<input type="hidden" name="giris" value="<?php echo $giris; ?>">
						<input type="hidden" name="donus" value="<?php echo $donus; ?>">
						<input type="hidden" name="oda" value="<?php echo $oda; ?>">
						<input type="hidden" name="gunfarki" value="<?php echo $gunfarki; ?>">
						<input type="text" required="" placeholder="<?php echo $widgetprint['widget_hizmetyo']; ?>" name="randevu_ad" >
						<input type="email" required="" placeholder="<?php echo $widgetprint['widget_projeyo']; ?>" name="randevu_mail" >
						<input type="text" required="" placeholder="<?php echo htmlspecialchars($widgetprint['widget_breferans']); ?>" name="randevu_tel" >
						<?php if ($widgetprint['widget_twitter']==1) { 
							$kategoriedit=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id");
							$kategoriedit->execute(array(
								'sayfa_id' => $widgetprint['widget_btwitter']
							));
							$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
							?>
							<input type="checkbox" required="" readonly="" id="checkbox13" name="checkbox5" checked=""><a target="_blank" href="<?=seo('sayfa-'.$kategoriwrite["sayfa_baslik"]).'-'.$kategoriwrite["sayfa_id"]?>"> <?php echo $kategoriwrite["sayfa_baslik"]; ?></a> kabul ediyorum. 
						<?php } ?>
						<input style="margin-left:30px; " class="pull-right" type="submit" name="randevu" value="<?php echo $widgetprint['widget_bproje']; ?>">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php  include 'include/footer.php'; ?>
