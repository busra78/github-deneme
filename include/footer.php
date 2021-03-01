<style>
h6{
  color:#FFFFCC;
}
li{
  color:black;
}
</style>

<div class="footer margint40"><!-- Footer Section -->
  <div class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 footer-logo " align="center">
          <img alt="Logo" src="trex/<?php echo $settingsprint['ayar_logo']; ?>" class="img-circle" >
        </div>
        <div class="col-lg-8 col-sm-8">
          <div class="col-lg-3 col-sm-3">
           <h6 ><?php echo $widgetprint['widget_bwelcome1']; ?></h6>
           <ul class="footer-links">
             <?php
             if ($dilwrite['dil_id']==1) {
              $footermenu=$db->prepare("SELECT * from fmenu order by fmenu_sira");
            } elseif ($dilwrite['dil_id']==2) {
              $footermenu=$db->prepare("SELECT * from fmenu2 order by fmenu_sira");
            } elseif ($dilwrite['dil_id']==3) {
              $footermenu=$db->prepare("SELECT * from fmenu3 order by fmenu_sira");
            } 
            $footermenu->execute();
            while($footermenuprint=$footermenu->fetch(PDO::FETCH_ASSOC)) { ?>
              <li><a href="<?php echo $footermenuprint['fmenu_link'] ?>" style="color:black"><?php
              $projelerkarakter = strlen( $footermenuprint['fmenu_ad'] );
              if ( $projelerkarakter > 30 )
              {

                echo mb_substr($footermenuprint['fmenu_ad'], 0,30, 'UTF-8')."...";
              } else {
                echo $footermenuprint['fmenu_ad'];
              }

              ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4">
          <h6><?php echo $widgetprint['widget_byorum']; ?></h6>
          <ul class="footer-links">
            <?php 
            $blog=$db->prepare("SELECT * from blog order by blog_id DESC Limit 4");
            $blog->execute();
            while($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) { 
              if ($dilwrite['dil_id']==1) {
                $Link = seo('blog-'.$blogcek["blog_baslik"]).'-'.$blogcek["blog_id"];
              } elseif ($dilwrite['dil_id']==2) {
                $Link = seo('blog-'.$blogcek["blog_baslik2"]).'-'.$blogcek["blog_id"];
              } elseif ($dilwrite['dil_id']==3) {
                $Link = seo('blog-'.$blogcek["blog_baslik3"]).'-'.$blogcek["blog_id"];
              }
              ?>
              <li>

                <a href="<?php echo $Link; ?>" style="color:black">
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
                  ?></a>
                </li>
              <?php }

            $socialfo=$db->prepare("SELECT * from sube");
            $socialfo->execute();
           ($socialprint=$socialfo->fetch(PDO::FETCH_ASSOC))

            ?>
            </ul>
          </div>
          <div class="col-lg-4 col-sm-4">
            <h6> <?php echo $widgetprint['widget_burun']; ?></h6>
            <ul class="footer-links">
              <li><p><i class="fa fa-phone"></i> <?php echo $socialprint['sube_tel'] ?> </p></li>
              <li><p><i class="fa fa-envelope"></i> <a href="mailto:info@2035themes.com" style="color:black"><?php echo $socialprint['sube_mail'] ?></a></p></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pre-footer">
    <div class="container">
      <div class="row">
        <div class="pull-left"><p><?php echo $widgetprint['widget_bwelcome']; ?></p></div>
        <div class="pull-right">
          <ul>
            <?php 
            $socialfo=$db->prepare("SELECT * from sosyal");
            $socialfo->execute();
            while($socialprint=$socialfo->fetch(PDO::FETCH_ASSOC)) { ?>
              <li>
                <a style="margin-right: 6px;" target="_blank" href="<?php echo $socialprint['sosyal_link']; ?>"><i class="fa <?php echo $socialprint['sosyal_icon']; ?>"></i></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!-- JS FILES -->
<script src="<?php echo $Js; ?>/vendor/jquery-1.11.1.min.js"></script>
<script src="<?php echo $Js; ?>/vendor/bootstrap.min.js"></script>
<script src="<?php echo $Js; ?>/retina-1.1.0.min.js"></script>
<script src="<?php echo $Js; ?>/jquery.flexslider-min.js"></script>
<script src="<?php echo $Js; ?>/superfish.pack.1.4.1.js"></script>
<?php echo $motorprint['motor_analitik']; ?>
<?php echo $motorprint['motor_metrika']; ?>
<?php echo $settingsprint['ayar_kod']; ?>
<script src="<?php echo $Js; ?>/jquery.prettyPhoto.js"></script>
<script src="<?php echo $Js; ?>/bootstrap-datepicker.js"></script>
<script src="<?php echo $Js; ?>/selectordie.min.js"></script>
<script src="<?php echo $Js; ?>/jquery.slicknav.min.js"></script>
<script src="<?php echo $Js; ?>/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="<?php echo $Js; ?>/main.js"></script>
<!--Sweet Alerts-->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="//cdn.jsdelivr.net/sweetalert2/6.5.6/sweetalert2.min.js"></script>     

<?php 
$OlumluBaslik = $widgetprint['widget_ceviri4'];
$Olumluaciklama = $widgetprint['widget_ceviri5'];
$OlumsuzBaslik = $widgetprint['widget_ceviri6'];
$OlumsuzAciklama = $widgetprint['widget_ceviri7']; 
?>

<!-- <?php if ($_GET['status']=='ok') { ?>
  <script>
   $(document).ready(function () {
    swal({
      title: "<?php echo $OlumluBaslik; ?>",
      text: "<?php echo $Olumluaciklama; ?>",
      type: "success",
      showCancelButton: false,
      showConfirmButton: false,
      select:false,
      timer: '5000',
    });
  });
 </script> -->
<?php  
$sayfaURL = "http";
if(isset($_SERVER["HTTPS"])){
  if($_SERVER["HTTPS"] == "on"){
    $sayfaURL .= "s";
  }
}
$hesapa=$db->prepare("SELECT * from smenu where smenu_id=11");
$hesapa->execute(array(0));
$hesapprinta=$hesapa->fetch(PDO::FETCH_ASSOC);

$sayfaURL .= "://";
$sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
?>
<meta http-equiv="refresh" content="5; URL=<?php echo substr($sayfaURL,0, -10);?>">
<?php

} elseif ($_GET['status']=='no') {?>
  <script>
   $(document).ready(function () {
    swal({
      title: "<?php echo $OlumsuzBaslik; ?>",
      text: "<?php echo $OlumsuzAciklama; ?>",
      type: "error",
      showCancelButton: false,
      showConfirmButton: false,
      timer: '5000'
    });
  });
</script>
<?php  
$sayfaURL = "http";
if(isset($_SERVER["HTTPS"])){
  if($_SERVER["HTTPS"] == "on"){
    $sayfaURL .= "s";
  }
}
$sayfaURL .= "://";
$sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
<meta http-equiv="refresh" content="5; URL=<?php echo substr($sayfaURL,0, -10);?>">
<?php } elseif ($_GET['demo']=='ok') { ?>
  <script>
   $(document).ready(function () {
    swal({
      title: "OoPs!",
      text: "Demo modda bu işleme izin verilmiyor.",
      type: "warning",
      showCancelButton: false,
      showConfirmButton: false,
      timer: '6000'
    });
  });
</script>
<?php  
$sayfaURL = "http";
if(isset($_SERVER["HTTPS"])){
  if($_SERVER["HTTPS"] == "on"){
    $sayfaURL .= "s";
  }
}
$sayfaURL .= "://";
$sayfaURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
<meta http-equiv="refresh" content="6; URL=<?php echo substr($sayfaURL,0, -8);?>">
<?php } ?>

</body>
</html>
