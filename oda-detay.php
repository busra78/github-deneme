<?php 
include 'include/head.php';
$urunsor=$db->prepare("SELECT * from urunler where urun_id=:UrunId");
$urunsor->execute(array('UrunId' => $_GET['oda_id']));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

$meta = [
	'title' => $uruncek['urun_title'],
	'desc' => $uruncek['urun_descr'],
	'key' => $uruncek['urun_keyword']
];

include 'include/header.php';
include 'include/menu.php';

	$urunaciklama=  $uruncek['urun_aciklama'];
	$LinkOda = seo('oda-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"];
	$FiyatOda = $uruncek["urun_fiyat"];
	$urun_baslik=  $uruncek['urun_baslik'];

$urunresimsor=$db->prepare("SELECT * from resim where resim_urun=:resim_urun");
$urunresimsor->execute(array(
	'resim_urun' => $uruncek['urun_id']
));
$deger=$uruncek['urun_title3'];
$katsor=$db->prepare("SELECT * from kategorilerp where kategori_id='$deger'");

$katsor->execute(array(0));

($katcek=$katsor->fetch(PDO::FETCH_ASSOC));
?>

<style>

    :root
    {
        --renk1: grey;
    }

ul,li{
	list-style-type:none !important;
}
.flex-prev:before{
	color:rgb(176, 156, 84) !important;
}
.flex-next:before{
	color:rgb(176, 156, 84) !important;
}
.flex-prev{
	/* padding:5px !important; */
opacity:1 !important;	
/* background-color:#000 !important; */
padding:10px  !important;
}
.flex-next{
	/* padding:5px !important; */

	opacity:1 !important;	
	/* background-color:#000  !important; */
	padding:10px  !important;

}
</style>
<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title4']; ?>) no-repeat fixed; width: 100%;">
	<h1><?php echo $urun_baslik; ?> <?php  echo $katcek['kategori_ad']; ?></h1>
</div>

	<div class="container">
		<div class="">
			<div class=""><!-- Room Gallery Slider -->
				<div class="room-gallery" >
					<div class="flexslider-thumb" style="margin-top:40px;">
						<ul class="slides">
							<?php while($urunresimcek=$urunresimsor->fetch(PDO::FETCH_ASSOC)) { ?>
								<li data-thumb="trex/<?php echo $urunresimcek['resim_link'] ?>"><img  class="img-responsive" src="trex/<?php echo $urunresimcek['resim_link'] ?>"/></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<li>
                <div class="well ad-listing clearfix"  >
				<div class="" style="text-align:center">
				
				</div>
                    <div class="">
                        <!-- Ad Content-->
                        <div class="column" >
                            <div class="content-area" style="margin-top:20px; margin-bottom:20px; margin-left:70px; margin-right:70px">
                                <div class="" >
                                    <!-- Ad Description-->
                                    <div class="ad-details">
										<table border="5px solid red;">


                                            <tr>
                                                <td colspan="3"align="center" style="font-size:18px; padding:30px; color:#330000;"> <b>Adres Detayları: </b></i><br></br><?php echo $uruncek['urun_efiyat']; ?></td>
                                            </tr>
											<tr>
                                                <td style="font-size:18px; padding:30px; color:#330000 "> <b>m² (Brüt): </b></i><br></br><?php echo $uruncek['urun_baslik2']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>m² (Net): </b></i><br></br><?php echo $uruncek['urun_baslik3']; ?></td>


                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Şehir: </b></i><br></br><?php   echo $katcek['kategori_ad'];     ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Oda Sayısı: </b></i><br></br><?php echo $uruncek['urun_keyword2']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Bina Yaşı: </b></i><br></br><?php echo $uruncek['urun_fiyat2']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Balkon: </b></i><br></br><?php echo $uruncek['urun_fiyat3']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Bulunduğu Kat: </b></i><br></br><?php echo $uruncek['urun_aciklama3']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Kat Sayısı: </b></i><br></br><?php echo $uruncek['urun_title2']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Isıtma: </b></i><br></br><?php echo $uruncek['araba_motor_gucu']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Banyo Sayısı: </b></i><br></br><?php echo $uruncek['araba_motor_hacim']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Eşyalı: </b></i><br></br><?php echo $uruncek['araba_model']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Site İçerisinde: </b></i><br></br><?php echo $uruncek['araba_cekis']; ?></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Aidat: </b></i><br></br><?php echo $uruncek['araba_renk']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Krediye Uygun: </b></i><br></br><?php echo $uruncek['araba_durum']; ?></td>
                                                <td style="font-size:18px; padding:30px; color:#330000"> <b>Görüntülü Arama: </b></i><br></br><?php echo $uruncek['urun_descr2']; ?></td>
                                            </tr>
										</table>
									
									
										<!-- <ul style="margin-bottom:60px">
                                            <li style="font-size:20px"><i class="flaticon-car-5">   </i><?php echo $uruncek['urun_baslik2']; ?> km</li>
                                            <li style="font-size:20px"><i class="flaticon-document" >  </i><?php echo $uruncek['urun_baslik3']; ?></li>
                                            <li style="font-size:20px"><i class="flaticon-gearshift" >  </i><?php echo $uruncek['urun_fiyat2']; ?></li>
                                            <li style="font-size:20px"><i class="flaticon-air-conditioner-3" >  </i><?php echo $uruncek['urun_fiyat3']; ?></li>
                                            <li style="font-size:20px"><i class="flaticon-vehicle-4" >  </i><?php echo $uruncek['urun_aciklama2']; ?> Bavul</li>
                                            <li style="font-size:20px"><i class="flaticon-security" >  </i><?php echo $uruncek['urun_aciklama3']; ?> Kişilik </li>
                                            <li style="font-size:20px"><i class="flaticon-car-door" >  </i><?php echo $uruncek['urun_title2']; ?>  Kapı</li>
                                        </ul> -->
                                    </div>

                                </div>
                            </div>
                        </div>
					</div>
					<div  class="ad-stats" style="font-size:30px; color:#330000; text-align:right"><i><span> </span>Fiyat:<?php echo $uruncek['urun_fiyat']; ?> TL </i></div>
                </div>
            </li>

			<div ><!-- Room Tab -->
				<div class="tab-style-2 ">

					<ul class="tabbed-area tab-style-nav clearfix">
						<li class="active"><h6><a href="#tab1s">AÇIKLAMA</a></h6></li>
					</ul>
				
					<div class="tab-content tab-style-content">
						<div class="tab-pane fade active in" id="tab1s">
							<div class="col-lg-12 margint30">
								<p><?php echo $urunaciklama; ?>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>
<?php include 'include/footer.php'; ?>
