<?php 
include 'include/head.php';
$blogsor=$db->prepare("SELECT * from blog where blog_id=:blog_id");
$blogsor->execute(array(
	'blog_id' => $_GET['blog_id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

if ($dilwrite['dil_id']==1) {
$meta = [
	'title' => $blogcek['blog_title'],
	'desc' => $blogcek['blog_descr'],
	'key' => $blogcek['blog_keyword']
];
} elseif ($dilwrite['dil_id']==2) {
$meta = [
	'title' => $blogcek['blog_title2'],
	'desc' => $blogcek['blog_descr2'],
	'key' => $blogcek['blog_keyword2']
];
} elseif ($dilwrite['dil_id']==3) {
$meta = [
	'title' => $blogcek['blog_title3'],
	'desc' => $blogcek['blog_descr3'],
	'key' => $blogcek['blog_keyword3']
];
}
include 'include/header.php';
include 'include/menu.php';

?>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title6']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $widgetprint['widget_bblog']; ?></h1>
</div>
<div class="content"><!-- Content Section -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-8 blog-post-contents">

				<?php  

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
					$KisaAciklama=  $blogcek['blog_detay'];
					$Blog_link=  seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
					$paylas = $settingsprint['ayar_siteurl'].seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
				} elseif ($dilwrite['dil_id']==2) {
					$baslikOrjin = $blogcek['blog_baslik2'];
					$KisaAciklama=  $blogcek['blog_detay2'];
					$Blog_link=  seo('blog-'.$blogcek["blog_baslik2"]).'-'.$blogcek["blog_id"];
					$paylas = $settingsprint['ayar_siteurl'].seo('blog-'.$blogcek["blog_baslik2"]).'-'.$blogcek["blog_id"];
				} elseif ($dilwrite['dil_id']==3) {
					$baslikOrjin = $blogcek['blog_baslik3'];
					$KisaAciklama=  $blogcek['blog_detay3'];
					$Blog_link=  seo('blog-'.$blogcek["blog_baslik3"]).'-'.$blogcek["blog_id"];
					$paylas = $settingsprint['ayar_siteurl'].seo('blog-'.$blogcek["blog_baslik3"]).'-'.$blogcek["blog_id"];
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
					$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad2"]).'-'.$kategoricek["kategori_id"];
				} elseif ($dilwrite['dil_id']==3) {
					$kat_baslik=  $kategoricek['kategori_ad3'];
					$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad3"]).'-'.$kategoricek["kategori_id"];
				}
				?>
				<div class="blog-post"><!-- Blog Post -->
					<h3><?php echo $baslikOrjin; ?></a></h3>				
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
								<div ><!-- Write Comment -->

									<div class="comment-number clearfix"><!-- Blog Comment Number Section -->
										<div class="pull-right write-comment">
											<h6><a href="#write-comment"><?php echo $widgetprint['widget_bara']; ?></a></h6>
										</div>
									</div>
									<div class="comments-container clearfix"><!-- Blog Comments Section -->
										<ul>
											<?php 
											while ($konuyorumcek=$konuyorum->fetch(PDO::FETCH_ASSOC)) {
												?>
												<li class="comment-box clearfix margint40">
													<div class="col-lg-12">
														<h5><?php echo $konuyorumcek['yorum_isim']; ?></h5>
														<div class="date marginb20"><?php echo $konuyorumcek['yorum_tarih']; ?></div>
														<p><?php echo $konuyorumcek['yorum_mesaj']; ?></p>
													</div>
												</li>
											<?php } ?>
										</ul>
									</div>
									<div id="write-comment" class="write-comment-box padt60 marginb60 clearfix"><!-- Write Comment Section -->
										<h2><?php echo $widgetprint['widget_bara']; ?></h2>
										<div class="contact-form margint40">

											<form action="trex/controller/function.php" method="POST" id="mini-contact-form">
												<input type="hidden" name="yorum_konu" value="<?php echo $blogcek['blog_id']; ?>">
												<input type="hidden" name="yorum_cins" value="5">
												<input type="text" required="" name="yorum_isim" placeholder="<?php echo $widgetprint['widget_hizmetyo']; ?>">
												<input type="email" required="" name="yorum_mail" placeholder="<?php echo $widgetprint['widget_projeyo']; ?>">
												<textarea name="yorum_mesaj" required="" placeholder="<?php echo $widgetprint['widget_urunyo']; ?>"></textarea>
												<input class="margint10" name="yorumkonu" type="submit" value="<?php echo $widgetprint['widget_bproje']; ?>">
											</form>			
										</div>
									</div>
								</div>
							</div>
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
												$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad2"]).'-'.$kategoricek["kategori_id"];
											} elseif ($dilwrite['dil_id']==3) {
												$kat_baslik=  $kategoricek['kategori_ad3'];
												$kat_link=  seo('konu-kategori-'.$kategoricek["kategori_ad3"]).'-'.$kategoricek["kategori_id"];
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
