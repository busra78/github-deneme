<?php 
include 'include/head.php';
$kategoriedit=$db->prepare("SELECT * from albumler where kategori_id=:kategori_id");
$kategoriedit->execute(array(
	'kategori_id' => $_GET['album_id']
));
$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
if ($dilwrite['dil_id']==1) {
	$KatAd =  $kategoriwrite['kategori_ad'];
$meta = [
	'title' => $kategoriwrite['kategori_title'],
	'desc' => $kategoriwrite['kategori_descr'],
	'key' => $kategoriwrite['kategori_keyword']
];
} elseif ($dilwrite['dil_id']==2) {
	$KatAd =  $kategoriwrite['kategori_ad2'];
$meta = [
	'title' => $kategoriwrite['kategori_title2'],
	'desc' => $kategoriwrite['kategori_descr2'],
	'key' => $kategoriwrite['kategori_keyword2']
];
} elseif ($dilwrite['dil_id']==3) {
	$KatAd =  $kategoriwrite['kategori_ad3'];
$meta = [
	'title' => $kategoriwrite['kategori_title3'],
	'desc' => $kategoriwrite['kategori_descr3'],
	'key' => $kategoriwrite['kategori_keyword3']
];
}
include 'include/header.php';
include 'include/menu.php';
?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title5']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $KatAd ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="explore-rooms margint30 clearfix">
		<div class="container">
			<div class="row">	
				<?php 
				$picsor=$db->prepare("SELECT * from resimgaleri where resim_album=:album order by resim_id DESC");
				$picsor->execute(array(
					'album' => $_GET['album_id']
				));
				while ($picprint=$picsor->fetch(PDO::FETCH_ASSOC)) {
					?>	
					<div class="col-lg-4 col-sm-6 gallery-box">
						<a href="trex/<?php echo $picprint['resim_link'] ?>" data-fancybox="gallery"><img alt="" class="img-responsive" src="trex/<?php echo $picprint['resim_link'] ?>"></a>
					</div>	

				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php  include 'include/footer.php'; ?>
