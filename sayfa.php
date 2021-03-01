<?php 
include 'include/head.php';
$sayfasor=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id");
$sayfasor->execute(array(
	'sayfa_id' => $_GET['sayfa_id']
));
$sayfacek=$sayfasor->fetch(PDO::FETCH_ASSOC);
if ($dilwrite['dil_id']==1) {
$meta = [
	'title' => $sayfacek['sayfa_title'],
	'desc' => $sayfacek['sayfa_descr'],
	'key' => $sayfacek['sayfa_keyword']
];
} elseif ($dilwrite['dil_id']==2) {
$meta = [
	'title' => $sayfacek['sayfa_title2'],
	'desc' => $sayfacek['sayfa_descr2'],
	'key' => $sayfacek['sayfa_keyword2']
];
} elseif ($dilwrite['dil_id']==3) {
$meta = [
	'title' => $sayfacek['sayfa_title3'],
	'desc' => $sayfacek['sayfa_descr3'],
	'key' => $sayfacek['sayfa_keyword3']
];
}
include 'include/header.php';
include 'include/menu.php';

if ($dilwrite['dil_id']==1) {
	$urunaciklama=  $sayfacek['sayfa_icerik'];
	$SayfaBaslik = $sayfacek["sayfa_baslik"];
	$paylas = $settingsprint['ayar_siteurl'].seo('sayfa-'.$sayfacek["sayfa_baslik"]).'-'.$sayfacek["sayfa_id"];
} elseif ($dilwrite['dil_id']==2) {
	$urunaciklama=  $sayfacek['sayfa_icerik2'];
	$SayfaBaslik = $sayfacek["sayfa_baslik2"];
	$paylas = $settingsprint['ayar_siteurl'].seo('sayfa-'.$sayfacek["sayfa_baslik2"]).'-'.$sayfacek["sayfa_id"];
} elseif ($dilwrite['dil_id']==3) {
	$urunaciklama=  $sayfacek['sayfa_icerik3'];
	$SayfaBaslik = $sayfacek["sayfa_baslik3"];
	$paylas = $settingsprint['ayar_siteurl'].seo('sayfa-'.$sayfacek["sayfa_baslik3"]).'-'.$sayfacek["sayfa_id"];
}
?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title1']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $SayfaBaslik; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 blog-post-contents">
					<div class="blog-post"><!-- Blog Post -->
						<h3><a href="blog-details.html"><?php echo $SayfaBaslik; ?></a></h3>
						<div class="post-content margint10">
							<p><?php echo $urunaciklama; ?></p>

						</div>
						<div class="blog-share-tags clearfix margint40 marginb40"><!-- Blog Post Share & Tags Section -->
							<div class="pull-right">
								<div class="blog-share">
									<ul>
										<li class="title darkest-color"><h6><?php echo $widgetprint['widget_blogyo']; ?> :</h6></li>
										<li><a href="http://www.facebook.com/sharer.php?u=<?php echo $paylas ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">
											<i class="fa fa-facebook"></i></a></li>
											<li><a href="https://twitter.com/share?url=<?php echo $paylas ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">
												<i class="fa fa-twitter"></i></a></li>
												<li><a href="http://pinterest.com/pin/create/button/?source_url=<?php echo $paylas ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Pinterest">
													<i class="fa fa-pinterest"></i></a></li>
													<li><a href="https://plus.google.com/share?url=<?php echo $paylas ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Google Plus">
														<i class="fa fa-google-plus"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php  include 'include/footer.php'; ?>
