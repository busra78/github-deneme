<?php
include 'include/head.php';
if ($dilwrite['dil_id']==1) {
    $metakey=$db->prepare("SELECT * from meta where meta_id=1");
} elseif ($dilwrite['dil_id']==2) {
    $metakey=$db->prepare("SELECT * from meta2 where meta_id=1");
} elseif ($dilwrite['dil_id']==3) {
    $metakey=$db->prepare("SELECT * from meta3 where meta_id=1");
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

<div class="breadcrumb breadcrumb-1 pos-center" style="background: url(trex/<?php echo $settingsprint['ayar_title4']; ?>) no-repeat fixed; width: 100%;">
    <h1> SATILIK ARSA</h1>
</div>
<div class="content"><!-- Content Section -->
    <div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
        <div class="container">
            <div class="row">
                <?php
                $urunsor=$db->prepare("SELECT * from urunler where urun_kategori=9 order by urun_id ASC");
                $urunsor->execute(array(0));
                $count=0;
                while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
                $count++;
                if($count>=1){

                    $urunaciklama=  mb_substr(strip_tags($uruncek['urun_aciklama']), 0, 90, 'UTF-8')."...";
                    $LinkOda = seo('oda-'.$uruncek["urun_baslik"]).'-'.$uruncek["urun_id"];
                    $FiyatOda = $uruncek["urun_fiyat"];
                    $urun_baslik=  mb_substr(strip_tags($uruncek['urun_baslik']), 0, 90, 'UTF-8');

                    ?>
                    <div class="col-lg-4 col-sm-6 marginb30">
                        <div class="home-room-box">
                            <div class="room-image">
                                <img style="width: 100%;margin-bottom: 50px;" alt="" class="img-responsive" src="trex/<?php echo $uruncek['urun_resim']; ?>">
                                <div class="home-room-details">
                                    <h5><a href="<?php echo $LinkOda; ?>"><div class="ad-details">
                                                <ul class="">
                                                    Oda Sayısı:</i> </li> </i><?php echo $uruncek['urun_keyword2']; ?>--->
                                                    Krediye Uygun:</i> </li> </i><?php echo $uruncek['araba_durum']; ?><br>
                                                    Site İçerisinde:</i> </li> </i><?php echo $uruncek['araba_cekis']; ?>--->
                                                    Kat Sayısı:</i> </li> </i><?php echo $uruncek['urun_title2']; ?>
                                                </ul>
                                            </div></a></h5>


                                </div>
                            </div>
                            <?php $deger=$uruncek['urun_title3'];
                            $katsor=$db->prepare("SELECT * from kategorilerp where kategori_id='$deger'");

                            $katsor->execute(array(0));

                            ($katcek=$katsor->fetch(PDO::FETCH_ASSOC)); ?>
                            <div class="room-details" style="height: 50px;">
                                <p>         <h4> <?php echo $urun_baslik ?> <?php  echo $katcek['kategori_ad'];?> <h4></p>
                            </div>
                            <div class="room-bottom">
                                <div class="pull-left"><h4><?php echo $FiyatOda; ?><?php echo $dilwrite['dil_birim'] ?><span class="room-bottom-time"></span></h4></div>
                                <div class="pull-right">
                                    <div class="button-style-1">
                                        <a href="<?php echo $LinkOda; ?>">EMLAK DETAYLARI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                }
                if($count==0){?>
                    <h1 style="color: midnightblue; font-family: 'Times New Roman'; "class="title text-center"><b> Arsamız Bulunmamaktadır.</b></h1>
                    <?php


                }
                ?>

            </div>
        </div>
    </div>
</div>
<?php  include 'include/footer.php'; ?>
