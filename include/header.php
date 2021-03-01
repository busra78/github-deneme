<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">    
    <style>
        :root
        {
            --renk1 : <?php echo $settingsprint['ayar_mobil1']; ?>
        }
    </style>
    <style>
        :root
        {
            --renk1 : #AC8E54;
        }
    </style>
    <style>
        :root
        {
            --renk2 : <?php echo $settingsprint['ayar_mobil2']; ?>
        }
    </style>
    <style>
        :root
        {
            --renk2: #575757;
        }
    </style>
    <style>
        :root
        {
            --renk3 : <?php echo $settingsprint['ayar_mobil3']; ?>
        }
    </style>
    <style>
        :root
        {
            --renkar : <?php echo $settingsprint['ayar_mobil']; ?>
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $meta['title'] ?></title>
    <meta name="keywords" content="<?php echo $meta['desc'] ?>" />
    <meta name="description" content="<?php echo $meta['key'] ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="trex/<?php echo $settingsprint['ayar_fav']; ?>">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?php echo $Css; ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $Css; ?>/flexslider.css">
    <link rel="stylesheet" href="<?php echo $Css; ?>/prettyPhoto.css">

    <!-- Sweet Alerts -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.5.6/sweetalert2.min.css">
    <?php echo $motorprint['motor_yonay']; ?>
    <?php echo $motorprint['motor_gonay']; ?>
    <link rel="stylesheet" href="<?php echo $Css; ?>/datepicker.css">
    <link rel="stylesheet" href="<?php echo $Css; ?>/selectordie.css">
    <link rel="stylesheet" href="<?php echo $Css; ?>/main.css">
    <link rel="stylesheet" href="<?php echo $Css; ?>/responsive.css">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">

    <script src="<?php echo $Js; ?>/vendor/modernizr-2.8.3-respond-1.1.0.min.js"></script>
</head>
<?php if ($settingsprint['ayar_harita']==1) { ?>
    <body class="boxed" style="background: url(trex/<?php echo $settingsprint['ayar_resimcounter']; ?>) repeat;">
    <?php } else { ?>
        <body>
        <?php } ?>
