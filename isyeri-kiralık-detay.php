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
?>

<style>
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
    <h1><?php echo $urun_baslik; ?> <?php echo $uruncek['urun_title3']; ?></h1>
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
                                    <table border="0">
                                        <tr>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-time fa-lg" style="color:black"><b> Yıl </b> </i><br></br> <?php echo $uruncek['urun_title3']; ?></td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-car-5 fa-lg" style="color:black" ><b> KM </b> </i><br></br><?php echo $uruncek['urun_baslik2']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-fuel-1 fa-lg" style="color:black" ><b> Yakıt</b></i> <br></br><?php echo $uruncek['urun_baslik3']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-gearshift fa-lg" style="color:black" ><b> Vites </b></i> <br></br><?php echo $uruncek['urun_fiyat2']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-car-door fa-lg" style="color:black"><b> Kapı </b></i> <br></br><?php echo $uruncek['urun_title2']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-security fa-lg" style="color:black" ><b> Kişi</b> </i> <br></br><?php echo $uruncek['urun_aciklama3']; ?>  </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-air-conditioner-3 fa-lg"style="color:black"><b> Klima</b></i>  <br></br><?php echo $uruncek['urun_fiyat3']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-engine fa-lg"style="color:black" ><b> Motor Gücü</b></i>  <br></br><?php echo $uruncek['araba_motor_gucu']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-engine-1 fa-lg"style="color:black" ><b> Motor Hacmi</b></i>  <br></br><?php echo $uruncek['araba_motor_hacim']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-car-key-1 fa-lg"style="color:black" ><b> Model</b></i> <br></br><?php echo $uruncek['araba_model']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-engine-2 fa-lg" style="color:black"><b> Çekiş </b></i> <br></br><?php echo $uruncek['araba_cekis']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-artist-color-palette fa-lg" style="color:black"><b> Renk </b></i> <br></br><?php echo $uruncek['araba_renk']; ?> </td>
                                            <td style="font-size:18px; padding:30px; color:#B09C54"><i class="flaticon-car-7 fa-lg" style="color:black"><b> Durum </b></i> <br></br><?php echo $uruncek['araba_durum']; ?> </td>

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
                <div class="ad-stats" style="font-size:30px; color:#B09C54; text-align:right"><i><span> </span>Fiyat:<?php echo $uruncek['urun_fiyat']; ?> TL </i></div>
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
<?php include 'include/footer.php'; ?>S
