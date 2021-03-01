<?php 
include 'include/head.php';
$kategoriedit=$db->prepare("SELECT * from valbumler where kategori_id=:kategori_id");
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
if (!isset($_GET['album_id'])) {
	Header( "Location:video-albumler" );
}

$vidsor=$db->prepare("SELECT * from videogaleri where video_album=:Album order by video_id DESC");
$vidsor->execute(array('Album' => $_GET['album_id']));

include 'include/header.php';
include 'include/menu.php';
?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title5']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $KatAd; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="explore-rooms margint30 clearfix">
		<div class="container">
			<div class="row">	
				<?php while ($vidprint=$vidsor->fetch(PDO::FETCH_ASSOC)) { ?>
					<div class="col-md-6" style="margin-bottom: 20px;">
						
						<iframe width="100%" height="350" src="https://www.youtube.com/embed/<?php echo $vidprint['video_link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php  include 'include/footer.php'; ?>
