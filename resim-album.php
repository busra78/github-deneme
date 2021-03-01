<?php 
include 'include/head.php';
if ($dilwrite['dil_id']==1) {
	$metakey=$db->prepare("SELECT * from meta where meta_id=6");
} elseif ($dilwrite['dil_id']==2) {
	$metakey=$db->prepare("SELECT * from meta2 where meta_id=6");
} elseif ($dilwrite['dil_id']==3) {
	$metakey=$db->prepare("SELECT * from meta3 where meta_id=6");
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
?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title5']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $widgetprint['widget_ceviri1']; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="explore-rooms margint30 clearfix">
		<div class="container">
			<div class="row">	
				<?php 
				$picsor=$db->prepare("SELECT * from albumler order by kategori_sira ASC");
				$picsor->execute(array(0));
				while ($picprint=$picsor->fetch(PDO::FETCH_ASSOC)) {
					
					if ($dilwrite['dil_id']==1) {
						$LinkAlbum = seo('album-detay-'.$picprint["kategori_ad"]).'-'.$picprint["kategori_id"];
						$AlbumAd = $picprint['kategori_ad'];
					} elseif ($dilwrite['dil_id']==2) {
						$LinkAlbum = seo('album-detay-'.$picprint["kategori_ad"]).'-'.$picprint["kategori_id"];
						$AlbumAd = $picprint['kategori_ad2'];
					} elseif ($dilwrite['dil_id']==3) {
						$LinkAlbum = seo('album-detay-'.$picprint["kategori_ad"]).'-'.$picprint["kategori_id"];
						$AlbumAd = $picprint['kategori_ad3'];
					}
					?>	
					<div class="col-lg-4 col-sm-6 gallery-box">
						<a href="<?php echo $LinkAlbum ?>"><img alt="<?php echo $AlbumAd; ?>" class="img-responsive" src="trex/<?php echo $picprint['kategori_resim']; ?>"></a>
						<a href="<?php echo $LinkAlbum ?>"><h5><?php echo $AlbumAd; ?></h5></a>
					</div>	

				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php  include 'include/footer.php'; ?>
