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


$bugun = date('d.m.Y'); 
$yarin = date("d.m.Y", mktime(0,0,0,date("m"),date("d")+1,date("Y")));
$saat = date(H);


$alis=$_POST['giris'];
$donus=$_POST['donus'];
$yetiskin=$_POST['yetiskin'];
$cocuk=$_POST['cocuk'];


$datetime1 = new DateTime($alis);
$datetime2 = new DateTime($donus);
$interval = $datetime1->diff($datetime2);
$gunfarkikarakter = $interval->format('%R%a');
$gunfarki =substr($gunfarkikarakter, 1);

if ($_POST['oda-sec']) {

} else {
	header( 'Location:index.php' );
}
?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title4']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $widgetprint['widget_ufiyat']; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
		<div class="container">
			<div class="row">	
				<div class="col-lg-12">

					<table>
						<tr class="products-title">
							<td class="table-products-image pos-center"><h6></h6></td>
							<td class="table-products-name pos-center"><h6></h6></td>
							<td class="table-products-price pos-center"><h6></h6></td>
							<td class="table-products-total pos-center"><h6></h6></td>
						</tr>
						<?php 
						$urunsor=$db->prepare("SELECT * from urunler order by urun_id ASC");
						$urunsor->execute(array(0));
						while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
							if ($dilwrite['dil_id']==1) {
								$urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama']), 0, 90, 'UTF-8')."...";
								$LinkOda = seo('oda-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"];
								$FiyatOda = $uruncek["urun_fiyat"];
								$urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik']), 0, 90, 'UTF-8');
							} elseif ($dilwrite['dil_id']==2) {
								$urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama2']), 0, 90, 'UTF-8')."...";
								$LinkOda = seo('oda-'.$uruncek["urun_baslik2"]).'-'.$uruncek["urun_id"];
								$FiyatOda = $uruncek["urun_fiyat2"];
								$urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik2']), 0, 90, 'UTF-8');
							} elseif ($dilwrite['dil_id']==3) {
								$urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama3']), 0, 90, 'UTF-8')."...";
								$LinkOda = seo('oda-'.$uruncek["urun_baslik3"]).'-'.$uruncek["urun_id"];
								$urun_baslik =  mb_substr(strip_tags($uruncek['urun_baslik3']), 0, 90, 'UTF-8');
								$FiyatOda = $uruncek["urun_fiyat3"];
							}
							 $ToplamFiyat = $FiyatOda*$gunfarki;
							?>
							<tr class="table-products-list pos-center">
								<td class="products-image-table"><img alt="<?php echo $urun_baslik ?>" src="trex/<?php echo $uruncek['urun_resim']; ?>" class="img-responsive"></td>
								<td class="title-table">
									<div class="room-details-list clearfix">
										<div class="pull-left">
											<h5><?php echo $urun_baslik ?></h5>
										</div>
									</div>
									<p><?php echo $urunaciklama; ?></p>
								</td>
								<td><
                                    ><?php echo $ToplamFiyat; ?><?php echo $dilwrite['dil_birim'] ?></h3><?php echo $FiyatOda; ?><?php echo $dilwrite['dil_birim'] ?> x <?php echo $gunfarki; echo $widgetprint['widget_usatinal']; ?>
							</td>
							<td>
								<form action="rezervasyon" method="post">
									<input type="hidden" name="yetiskin" value="<?php echo $yetiskin; ?>">
									<input type="hidden" name="fiyat" value="<?php echo $ToplamFiyat; ?>">
									<input type="hidden" name="oda" value="<?php echo $uruncek["urun_id"]; ?>">
									<input type="hidden" name="cocuk" value="<?php echo $cocuk; ?>">
									<input type="hidden" name="giris" value="<?php echo $alis; ?>">
									<input type="hidden" name="oda" value="<?php echo $uruncek['urun_id']; ?>">
									<input type="hidden" name="donus" value="<?php echo $donus; ?>">
									<input type="hidden" name="gunfarki" value="<?php echo $gunfarki; ?>">
									<div class="pull-right">
										<div class="button-style-1">
											<input style="padding-left: 10px;padding-right: 10px;width: 100%;" class="pull-right" type="submit" name="rezervasyon" value="<?php echo $widgetprint['widget_diger']; ?>">
										</div>
									</div>
								</form>
							</td>
						</tr>
					<?php } ?>
				</table>

			</div>








		</div>
	</div>
</div>
</div>
<?php  include 'include/footer.php'; ?>
