<?php
include 'include/head.php';
if ($dilwrite['dil_id']==1) {
	$metakey=$db->prepare("SELECT * from meta where meta_id=11");
} elseif ($dilwrite['dil_id']==2) {
	$metakey=$db->prepare("SELECT * from meta2 where meta_id=11");
} elseif ($dilwrite['dil_id']==3) {
	$metakey=$db->prepare("SELECT * from meta3 where meta_id=11");
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
include 'include/slider.php';

?>
<style>
    body{
        background-color: #ECEFF1 !important;
    }
</style>


<section  class="section welcome-area bg-overlay overflow-hidden" style="height: 150px; margin-top: 30px; background-color: #ECEFF1;">

    <div class="hero-main">




            <div class="row">
                <div class="col-12">
                    <div class="banner-inner">
                        <h2 style="color: 	#424242; font-family: Arial, Helvetica, sans-serif"class="title text-center">Satışın ötesinde, hayalinizdeki ev için arayın!</h2>
                        <h5 style="color: 	#B8860B" class="sub-title text-center">Bu sizin yolculuğunuz. Yardım etmek için buradayız..</h5>
                    </div>
                </div>

                <div class="col-12">
                    <div class="banner-search-wrap">


                            <div class="tab-pane fade active in" id="tabs_2">
                                <div class="rld-main-search">
                                    <form action="search.php" method="get">
                                    <div class="row">

                                        <div class="col-xl-2 col-lg-3 col-md-3" style="margin-top: 10px;margin-left: 25% ;">
                                            <div class="rld-single-select">
                                                <select class="select single-select form-control" name="location" id="marka">
                                                    <option>Konut Seçiniz</option>
                                                    <?php
                                                    $kategorisor = $db->prepare( "SELECT * from kategoriler order by kategori_sira ASC" );
                                                    $kategorisor->execute( array( 0 ) );
                                                    while ( $kategoricek = $kategorisor->fetch( PDO::FETCH_ASSOC ) )
                                                    {
                                                        ?>
                                                        <option value="<?php echo $kategoricek[ 'kategori_id' ]; ?>"><?php echo $kategoricek[ 'kategori_ad' ]; ?></option>

                                                    <?php } ?>

                                                </select>
                                            </div>

                                        </div>


                                        <div class="col-xl-2 col-lg-3 col-md-3" style="margin-top:10px;">
                                            <div class="rld-single-select">
                                                <select name="sehir" class="form-control">
                                                    <option value="0">Şehir Seçiniz</option>
                                                    <option value="1">Adana</option>
                                                    <option value="2">Adıyaman</option>
                                                    <option value="3">Afyonkarahisar</option>
                                                    <option value="4">Ağrı</option>
                                                    <option value="5">Amasya</option>
                                                    <option value="6">Ankara</option>
                                                    <option value="7">Antalya</option>
                                                    <option value="8">Artvin</option>
                                                    <option value="9">Aydın</option>
                                                    <option value="10">Balıkesir</option>
                                                    <option value="11">Bilecik</option>
                                                    <option value="12">Bingöl</option>
                                                    <option value="13">Bitlis</option>
                                                    <option value="14">Bolu</option>
                                                    <option value="15">Burdur</option>
                                                    <option value="16">Bursa</option>
                                                    <option value="17">Çanakkale</option>
                                                    <option value="18">Çankırı</option>
                                                    <option value="19">Çorum</option>
                                                    <option value="20">Denizli</option>
                                                    <option value="21">Diyarbakır</option>
                                                    <option value="22">Edirne</option>
                                                    <option value="23">Elazığ</option>
                                                    <option value="24">Erzincan</option>
                                                    <option value="25">Erzurum</option>
                                                    <option value="26">Eskişehir</option>
                                                    <option value="27">Gaziantep</option>
                                                    <option value="28">Giresun</option>
                                                    <option value="29">Gümüşhane</option>
                                                    <option value="30">Hakkari</option>
                                                    <option value="31">Hatay</option>
                                                    <option value="32">Isparta</option>
                                                    <option value="33">Mersin</option>
                                                    <option value="34">İstanbul</option>
                                                    <option value="35">İzmir</option>
                                                    <option value="36">Kars</option>
                                                    <option value="37">Kastamonu</option>
                                                    <option value="38">Kayseri</option>
                                                    <option value="39">Kırklareli</option>
                                                    <option value="40">Kırşehir</option>
                                                    <option value="41">Kocaeli</option>
                                                    <option value="42">Konya</option>
                                                    <option value="43">Kütahya</option>
                                                    <option value="44">Malatya</option>
                                                    <option value="45">Manisa</option>
                                                    <option value="46">Kahramanmaraş</option>
                                                    <option value="47">Mardin</option>
                                                    <option value="48">Muğla</option>
                                                    <option value="49">Muş</option>
                                                    <option value="50">Nevşehir</option>
                                                    <option value="51">Niğde</option>
                                                    <option value="52">Ordu</option>
                                                    <option value="53">Rize</option>
                                                    <option value="54">Sakarya</option>
                                                    <option value="55">Samsun</option>
                                                    <option value="56">Siirt</option>
                                                    <option value="57">Sinop</option>
                                                    <option value="58">Sivas</option>
                                                    <option value="59">Tekirdağ</option>
                                                    <option value="60">Tokat</option>
                                                    <option value="61">Trabzon</option>
                                                    <option value="62">Tunceli</option>
                                                    <option value="63">Şanlıurfa</option>
                                                    <option value="64">Uşak</option>
                                                    <option value="65">Van</option>
                                                    <option value="66">Yozgat</option>
                                                    <option value="67">Zonguldak</option>
                                                    <option value="68">Aksaray</option>
                                                    <option value="69">Bayburt</option>
                                                    <option value="70">Karaman</option>
                                                    <option value="71">Kırıkkale</option>
                                                    <option value="72">Batman</option>
                                                    <option value="73">Şırnak</option>
                                                    <option value="74">Bartın</option>
                                                    <option value="75">Ardahan</option>
                                                    <option value="76">Iğdır</option>
                                                    <option value="77">Yalova</option>
                                                    <option value="78">Karabük</option>
                                                    <option value="79">Kilis</option>
                                                    <option value="80">Osmaniye</option>
                                                    <option value="81">Düzce</option>
                                                </select>
                                            </div>

                                        </div>




                                        <div class="col-xl-2 col-lg-2 col-md-4" style="margin-top:10px;">
                                            <button  class="btn btn-success"type="submit" value="submit" >ARA</button>
                                        </div>
                                    </div>
                                    </form>


                </div>
            </div>
        </div>
    </div>



</section>
<div class="content" STYLE="background-color: #F9FBE7"><!-- Content Section -->
	<?php if ($widgetprint['widget_rez']==1) { ?>
		<div class="free-book">
			<div class="book-slider">
				<div class="container">
					<div class="row pos-center">
						<div class="pos-center white-title marginb30">
							<h2><?php echo $widgetprint['widget_urun']; ?></h2>
						</div>
						<div class="reserve-form-area">
							<form action="oda-sec" method="post">
								<ul class="clearfix">
									<li class="li-input">
										<label><?php echo $widgetprint['widget_rezgidis']; ?></label>
										<input type="text" id="dpd1" name="giris" required="" class="date-selector" placeholder="&#xf073;" />
									</li>
									<li class="li-input">
										<label><?php echo $widgetprint['widget_rezdonus']; ?></label>
										<input type="text" id="dpd2" name="donus" required="" class="date-selector" placeholder="&#xf073;" />
									</li>
									<li class="li-select">
										<label><?php echo $widgetprint['widget_rezyetiskin']; ?></label>
										<select name="yetiskin" required="" class="pretty-select">
											<option selected="selected" value="1" >1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</li>
									<li class="li-select">
										<label><?php echo $widgetprint['widget_rezcocuk']; ?></label>
										<select name="cocuk" required="" class="pretty-select">
											<option selected="selected" value="0" >0</option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</li>
									<li>
										<div class="button-style-1 margint30">
											<input style="margin-top: 10px; padding-top: 3px;" name="oda-sec"  type="submit" value="<?php echo $widgetprint['widget_rezbuton']; ?>">
										</div>
									</li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } if ($widgetprint['widget_hizmet']==1) { ?>
		<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
			<div class="container">
				<div class="row">
					<div class="title-style-2 marginb40 pos-center">
						<h3><?php echo $widgetprint['widget_bhizmet']; ?></h3>
						<hr>
					</div>
					<?php
					$urunsor=$db->prepare("SELECT * from urunler where urun_vitrin=1 order by urun_id ASC");
					$urunsor->execute(array(0));
					while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
						if ($dilwrite['dil_id']==1) {
							$urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama']), 0, 90, 'UTF-8')."...";
							$LinkOda = seo('oda-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"];
						} elseif ($dilwrite['dil_id']==2) {
							$urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama2']), 0, 90, 'UTF-8')."...";
							$LinkOda = seo('oda-'.$uruncek["urun_baslik2"]).'-'.$uruncek["urun_id"];
						} elseif ($dilwrite['dil_id']==3) {
							$urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama3']), 0, 90, 'UTF-8')."...";
							$LinkOda = seo('oda-'.$uruncek["urun_baslik3"]).'-'.$uruncek["urun_id"];
						}
						if ($dilwrite['dil_id']==1) {
							$urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik']), 0, 90, 'UTF-8');
							$FiyatOda = $uruncek["urun_fiyat"];
						} elseif ($dilwrite['dil_id']==2) {
							$urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik2']), 0, 90, 'UTF-8');
							$FiyatOda = $uruncek["urun_fiyat2"];
						} elseif ($dilwrite['dil_id']==3) {
							$urun_baslik =  mb_substr(strip_tags($uruncek['urun_baslik3']), 0, 90, 'UTF-8');
							$FiyatOda = $uruncek["urun_fiyat3"];
						}
						?>
						<div class="col-lg-4 col-sm-6 marginb30">
							<div class="home-room-box">
								<div class="room-image">
									<img style="width: 100%; margin-bottom: 50px;" alt="<?php echo $urun_baslik ?>" class="img-responsive" src="trex/<?php echo $uruncek['urun_resim']; ?>">
									<div class="home-room-details">
                                        <h5><a href="<?php echo $LinkOda; ?>"><div class="ad-details">
												<ul class="">
                                                    Oda Sayısı:</i> </li> </i><?php echo $uruncek['urun_keyword2']; ?>--->
                                                    Krediye Uygun:</i> </li> </i><?php echo $uruncek['araba_durum']; ?><br>
                                                    Site İçerisinde:</i> </li> </i><?php echo $uruncek['araba_cekis']; ?>--->
                                                    Kat Sayısı:</i> </li> </i><?php echo $uruncek['urun_title2']; ?>
                                                </ul>
                                                </div></a></h5>
										<div class="pull-left">
										</div>
										<div class="pull-right room-rating">
										</div>
									</div>
								</div>
                                <?php $deger=$uruncek['urun_title3'];
$katsor=$db->prepare("SELECT * from kategorilerp where kategori_id='$deger'");

$katsor->execute(array(0));

($katcek=$katsor->fetch(PDO::FETCH_ASSOC)); ?>
								<div class="room-details" style="height: 50px;">
                                    <p>  <h4> <?php echo $urun_baslik ?>  <?php  echo $katcek['kategori_ad'];?> <h4></p>
								</div>
								<div class="room-bottom">
                                    <div class="pull-left"><h4><?php echo $FiyatOda; ?><?php echo $dilwrite['dil_birim'] ?><span class="room-bottom-time"></span></h4></div>
									<div class="pull-right">
										<div class="btn btn-success">
                                            <a href="<?php echo $LinkOda; ?>">EMLAK DETAYLARI</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } if ($widgetprint['widget_bilgi']==1) {  ?>
		<div id="parallax123" class="parallax parallax-one clearfix margint60" style="background: url(trex/<?php echo $settingsprint['ayar_resimparalax']; ?>); padding: 100px 0;"><!-- Parallax Section -->
			<div class="support-section">
				<div class="container">
					<div class="row">
						<?php
						$bilgisor=$db->prepare("SELECT * from bilgi");
						$bilgisor->execute(array(0));
						while ($bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC)) {

							if ($dilwrite['dil_id']==1) {
								$bilgiBaslik = $bilgicek['bilgi_baslik'];
							} elseif ($dilwrite['dil_id']==2) {
								$bilgiBaslik = $bilgicek['bilgi_baslik2'];
							} elseif ($dilwrite['dil_id']==3) {
								$bilgiBaslik = $bilgicek['bilgi_baslik3'];
							}
							if ($dilwrite['dil_id']==1) {
								$bilgidetay = $bilgicek['bilgi_aciklama'];
							} elseif ($dilwrite['dil_id']==2) {
								$bilgidetay = $bilgicek['bilgi_aciklama2'];
							} elseif ($dilwrite['dil_id']==3) {
								$bilgidetay = $bilgicek['bilgi_aciklama3'];
							}
							?>
							<div class="col-lg-4 col-sm-4">
								<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
									<div class="flipper">
										<div class="support-box pos-center front">
											<h4><?php echo $bilgiBaslik; ?></h4>
											<p ><?php echo $bilgidetay; ?></p>
										</div>
										<div class="support-box pos-center back">
											<h4><?php echo $bilgiBaslik; ?></h4>
											<p ><?php echo $bilgidetay; ?></p>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	<?php } if ($widgetprint['widget_galeri']==1 or $widgetprint['widget_blog']==1) { ?>
		<div class="about clearfix"><!-- About Section -->
			<div class="container">
				<div class="row">
					<div class="about-title pos-center">

					</div>
					<div class="otel-info margint60">
						<?php  if ($widgetprint['widget_galeri']==1) {
							if ($widgetprint['widget_galeri']==0 or $widgetprint['widget_blog']==0) {
								?>
								<div class="col-lg-12 col-sm-12">
								<?php } else { ?>
									<div class="col-lg-6 col-sm-6">
									<?php } ?>
									<p><?php
									if ($dilwrite['dil_id']==1) {
										echo $widgetprint['widget_html'];
									} elseif ($dilwrite['dil_id']==2) {
										echo $widgetprint['widget_html2'];
									} elseif ($dilwrite['dil_id']==3) {
										echo $widgetprint['widget_html3'];
									}
									?></p>
								</div>
							<?php } if ($widgetprint['widget_blog']==1) {
								if ($widgetprint['widget_galeri']==0 or $widgetprint['widget_blog']==0) {
									?>
									<div class="col-lg-12 col-sm-12">
									<?php } else { ?>
										<div class="col-lg-6 col-sm-6">
										<?php } ?>
										<div class="title-style-1 marginb40">
											<h5><?php echo $widgetprint['widget_bblog']; ?></h5>
											<hr>
										</div>
										<div class="home-news">
											<?php
											$blog=$db->prepare("SELECT * from blog order by blog_id DESC Limit 2");
											$blog->execute();
											while($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) {
												if ($dilwrite['dil_id']==1) {
													$Link = seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
												} elseif ($dilwrite['dil_id']==2) {
													$Link = seo('blog-'.$blogcek["blog_baslik2"]).'-'.$blogcek["blog_id"];
												} elseif ($dilwrite['dil_id']==3) {
													$Link = seo('blog-'.$blogcek["blog_baslik3"]).'-'.$blogcek["blog_id"];
												}

												$Gun= substr($blogcek['blog_tarih'],8,2);
												$Yil= substr($blogcek['blog_tarih'],0,4);
												$Id=htmlspecialchars(strip_tags(trim($blogcek['blog_kategori'])));
												$kategorisor=$db->prepare("SELECT * from kategorilerb where kategori_id=:SorguId");
												$kategorisor->execute(array('SorguId' => $Id));
												$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
												?>
												<div class="news-box clearfix">
													<div class="news-time pull-left">
														<div class="news-date pos-center"><div class="date-day"><?php echo $Gun ?><hr /></div><?php echo substr($blogcek['blog_tarih'],5,2)?> / <?php echo $Yil ?></div>
													</div>
													<div class="news-content pull-left">
														<h6><a href="<?php echo $Link; ?>">

															<?php
															if ($dilwrite['dil_id']==1) {
																$baslikOrjin = $blogcek['blog_baslik'];
															} elseif ($dilwrite['dil_id']==2) {
																$baslikOrjin = $blogcek['blog_baslik2'];
															} elseif ($dilwrite['dil_id']==3) {
																$baslikOrjin = $blogcek['blog_baslik3'];
															}
															$karakter = strlen( $baslikOrjin );
															if ( $karakter > 35 )
															{
																echo mb_substr( $baslikOrjin, 0, 35, 'UTF-8' ) . '...';
															}
															else
															{
																echo $baslikOrjin;
															}
															?></a></h6>
															<p class="margint10"><?php
															if ($dilwrite['dil_id']==1) {
																$KisaAciklama = $blogcek['blog_detay'];
															} elseif ($dilwrite['dil_id']==2) {
																$KisaAciklama = $blogcek['blog_detay2'];
															} elseif ($dilwrite['dil_id']==3) {
																$KisaAciklama = $blogcek['blog_detay3'];
															}
															echo substr(strip_tags($KisaAciklama), 0,120).'...'; ?> <a class="active-color" href="<?php echo $Link ?>">[...]</a></p>
														</div>
													</div>
												<?php } ?>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>

				<?php } include 'include/footer.php'; ?>
