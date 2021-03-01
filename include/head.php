<?php
ob_start();
session_start();
include 'trex/controller/config.php'; 
include 'trex/controller/seo.php';
date_default_timezone_set('Europe/Istanbul');

  $_SESSION['lang'] = 1;

$dilwritte=$db->prepare("SELECT * from dil where dil_id=:DilId");
$dilwritte->execute(array('DilId' => $_SESSION['lang']));
$dilwrite=$dilwritte->fetch(PDO::FETCH_ASSOC);


$settings=$db->prepare("SELECT * from ayar where ayar_id=?");
$settings->execute(array(0));
$settingsprint=$settings->fetch(PDO::FETCH_ASSOC);

$social=$db->prepare("SELECT * from sosyal");
$social->execute();

$socialf=$db->prepare("SELECT * from sosyal");
$socialf->execute();

$socials=$db->prepare("SELECT * from sosyal");
$socials->execute();

$motor=$db->prepare("SELECT * from motor where motor_id=1");
$motor->execute(array(0));
$motorprint=$motor->fetch(PDO::FETCH_ASSOC);

if ($dilwrite['dil_id']==1) {
    $widgets=$db->prepare("SELECT * from widget where widget_id=1");
} elseif ($dilwrite['dil_id']==2) {
    $widgets=$db->prepare("SELECT * from widget2 where widget_id=1");
} elseif ($dilwrite['dil_id']==3) {
    $widgets=$db->prepare("SELECT * from widget3 where widget_id=1");
}
$widgets->execute(array(0));
$widgetprint=$widgets->fetch(PDO::FETCH_ASSOC);


$ShareLink = $settingsprint['ayar_siteurl'].$_SERVER['REQUEST_URI']; 

if ($settingsprint['ayar_harita']==1) {
   $Css = 'css';
   $Js = 'js';
} else { 
    $Css = 'css-w';
    $Js = 'js-w';
} 


?>
