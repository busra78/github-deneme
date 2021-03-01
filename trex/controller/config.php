<?php

try {

	$db=new PDO("mysql:host=localhost;dbname=busra",'root','' );
	$db->query("SET NAMES utf8");
	//echo "veritabanı bağlantısı başarılı";

}

catch (PDOExpception $e) {

	echo $e->getMessage();
}
