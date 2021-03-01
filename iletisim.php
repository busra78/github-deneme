<?php 
include 'include/head.php';
if ($dilwrite['dil_id']==1) {
$metakey=$db->prepare("SELECT * from meta where meta_id=8");
} elseif ($dilwrite['dil_id']==2) {
$metakey=$db->prepare("SELECT * from meta2 where meta_id=8");
} elseif ($dilwrite['dil_id']==3) {
$metakey=$db->prepare("SELECT * from meta3 where meta_id=8");
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
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title3']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $widgetprint['widget_counter']; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="container">
		<div class="row">
			<?php 
			$sayfalarsor=$db->prepare("SELECT * from sube order by sube_id DESC");
			$sayfalarsor->execute(array(0));
			while ($sayfacek=$sayfalarsor->fetch(PDO::FETCH_ASSOC)) {
				$sayfaicerik=$sayfacek['sube_il']." / ".$sayfacek['sube_ilce']; ?>
				<div class="col-lg-12 clearfix"><!-- Room Information -->
					<div class="col-lg-12 clearfix margint40 room-single-tab"><!-- Room Tab -->
						<div class="tab-style-2 ">
							<ul class="tabbed-area tab-style-nav clearfix">
								<li style="width: 100%;"><h6><a href="#tab<?php echo $sayfacek['sube_id']; ?>s"><?php echo $sayfacek['sube_adi']; ?></a></h6></li>
							</ul>
							<div class="tab-content tab-style-content">
								<div class="tab-pane fade active in" id="tabs">
									<div class="col-lg-12 margint30">
										<div class="luxen-widget news-widget">
											<ul class="footer-links">
												<li><p><i class="fa fa-map-marker"></i> <?php echo $sayfacek['sube_adres']; ?> <br><?php echo $sayfaicerik; ?> </p></li>
												<li><p><i class="fa fa-phone"></i> <?php echo $sayfacek['sube_tel']; ?> </p></li>
												<li><p><i class="fa fa-fax"></i> <?php echo $sayfacek['sube_fax']; ?> </p></li>
												<li><p><i class="fa fa-envelope"></i> <?php echo $sayfacek['sube_mail']; ?></p></li>
												<li><p><i class="fa fa-globe"></i> <a target="_blank" href="<?php echo $sayfacek['sube_web']; ?>"><?php echo $sayfacek['sube_web']; ?></a></p></li>
											</ul>
											<div id="accordion" class="margint30">
												<div class="panel panel-luxen">
													<div class="panel-style">
														<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $sayfacek['sube_id']; ?>"> <?php echo $widgetprint['widget_bdiger']; ?></a></h4>
													</div>
													<div id="collapse<?php echo $sayfacek['sube_id']; ?>" class="collapse collapse-luxen">
														<div class="padt20">    	
															<p>
																<?php echo $sayfacek['sube_harita']; ?>

															</p>
														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<div class="col-lg-12 col-sm-12 clearfix"><!-- Contact -->
				<h3><?php echo $widgetprint['widget_counter']; ?></h3>
				<div class="contact-form margin50"><!-- Contact Form -->
					<form method="POST" action="trex/controller/function.php">
						<input type="text" required="" placeholder="<?php echo $widgetprint['widget_hizmetyo']; ?>" name="mesaj_ad" >
						<input type="email" required="" placeholder="<?php echo $widgetprint['widget_projeyo']; ?>" name="mesaj_mail" >
						<textarea required="" placeholder="<?php echo $widgetprint['widget_urunyo']; ?>" id="ctext" name="mesaj_icerik"></textarea>
						<input class="pull-right margint10" type="submit" name="iletisimform" value="<?php echo $widgetprint['widget_bproje']; ?>">
					</form>
				</div>
			</div>







		</div>
	</div>
</div>
<?php  include 'include/footer.php'; ?>
