<?php 
$link = $_SERVER['REQUEST_URI'];
?>
<div class="main-sidebar-nav default-navigation">
	<div class="nano">
		<div class="nano-content sidebar-nav">
			<ul class="metisMenu nav flex-column" id="menu">
				<div class="card-block border-bottom text-center nav-profile">
					<img alt="profile" class="rounded-circle margin-b-10 circle-border " src="<?php echo $userprint['kullanici_resim']; ?>" width="80">
					<p class="lead margin-b-0 toggle-none"><small>sayın<br> </small><?php echo $userprint['kullanici_adsoyad'] ?></p>
					<p class="text-muted mv-0 toggle-none">Hoşgeldin</p>
				</div>	
				<li class="nav-heading">
					<b>Menü</b>			
				</li>
				<li class="nav-item <?php if (strstr($link, "index.php")) { echo "active";} ?>"><a class="nav-link" href="index.php"><i class="icon-home"></i> <span class="toggle-none">Panel Anasayfa </span></a></li>

                <li class="nav-item"><a class="nav-link" target="_blank" href="<?php echo $settingsprint['ayar_siteurl']; ?>"><i class="icon-link"></i> <span class="toggle-none">Siteye Git</span> </a></li>

                <li class="nav-item <?php if (strstr($link, "oda")) { echo "active";} ?><?php if (strstr($link, "sosyal")) { echo "active";} ?><?php if (strstr($link, "bilgi")) { echo "active";} ?><?php if (strstr($link, "sss")) { echo "active";} ?><?php if (strstr($link, "sayfa")) { echo "active";} ?><?php if (strstr($link, "hizmet")) { echo "active";} ?><?php if (strstr($link, "html")) { echo "active";} ?><?php if (strstr($link, "sube")) { echo "active";} ?><?php if (strstr($link, "blog")) { echo "active";} ?>">
					<a class="nav-link" href="" aria-expanded="true"><i class="icon-list"></i> <span class="toggle-none">İçerik Yönetimi<span style="float: right;" class="fa fa-angle-down"></span></span></a>
					<ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
						<li class="nav-item"><a class="nav-link" href="daireler.php">Satılık Daire</a></li>
                        <li class="nav-item"><a class="nav-link" href="residenceler.php">Satılık Residence</a></li>
                        <li class="nav-item"><a class="nav-link" href="mustakil-evler.php">Satılık Müstakil Ev</a></li>
                        <li class="nav-item"><a class="nav-link" href="emlaklar.php">Satılık Villa&Köşk&Konak&Yalı</a></li>
                        <li class="nav-item"><a class="nav-link" href="arsalar.php">Satılık Arsa</a></li>
                        <li class="nav-item"><a class="nav-link" href="k-daireler.php">Kiralık Daire</a></li>
                        <li class="nav-item"><a class="nav-link" href="k-residenceler.php">Kiralık Residence</a></li>
                        <li class="nav-item"><a class="nav-link" href="k-mustakil-evler.php">Kiralık Müstakil Ev</a></li>
                        <li class="nav-item"><a class="nav-link" href="k-emlaklar.php">Kiralık Villa&Köşk&Konak&Yalı</a></li>
                        <li class="nav-item"><a class="nav-link" href="k-arsalar.php">Kiralık Arsa</a></li>
                        <li class="nav-item"><a class="nav-link" href="isyeri-satılıklar.php">Satılık İşyeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="isyeri-kiralıklar.php">Kiralık İşyeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="sube.php">Şube Yönetimi</a></li>
						<li class="nav-item"><a class="nav-link" href="blog.php">Blog Yönetimi</a></li>
						<li class="nav-item"><a class="nav-link" href="sayfalar.php">Sayfa Yönetimi</a></li>
						<li class="nav-item"><a class="nav-link" href="bilgiler.php">Bilgi Yönetimi</a></li>
						<li class="nav-item"><a class="nav-link" href="html-alan.php">Ana Sayfa HTML Alan</a></li>
						<li class="nav-item"><a class="nav-link" href="sosyal-medya.php">Sosyal Medya Yönetimi</a></li>
					</ul>
				</li>
				<li class="nav-item <?php if (strstr($link, "slayt")) { echo "active";} ?><?php if (strstr($link, "video")) { echo "active";} ?><?php if (strstr($link, "resim")) { echo "active";} ?>">
					<a class="nav-link" href="" aria-expanded="true"><i class="icon-film"></i> <span class="toggle-none">Medya Yönetimi<span style="float: right;" class="fa fa-angle-down"></span></span></a>
					<ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
						<li class="nav-item"><a class="nav-link" href="resim-albumler.php">Resim Albümleri</a></li>
						<li class="nav-item"><a class="nav-link" href="video-albumler.php">Video Albümleri</a></li>
						<li class="nav-item"><a class="nav-link" href="slayt.php">Slayt Yönetimi</a></li>
					</ul>
				</li>
				<li class="nav-item <?php if (strstr($link, "menu")) { echo "active";} ?><?php if (strstr($link, "link")) { echo "active";} ?>">
					<a class="nav-link" href="" aria-expanded="true"><i class="icon-list"></i> <span class="toggle-none">Menü Yönetimi<span style="float: right;" class="fa fa-angle-down"></span></span></a>
					<ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
						<li class="nav-item"><a class="nav-link" href="menu.php">Üst Menü Yönetimi</a></li>
						<li class="nav-item"><a class="nav-link" href="alt-menu.php">Alt Menü Yönetimi</a></li>
					</ul>
				</li>

				<li class="nav-item <?php if (strstr($link, "modul")) { echo "active";} ?>"><a class="nav-link" href="modul.php"><i class="icon-puzzle"></i> <span class="toggle-none">Modül Yönetimi</span></a></li>

				<li class="nav-item <?php if (strstr($link, "seo")) { echo "active";} ?>"><a class="nav-link" href="seo.php"><i class="icon-rocket"></i> <span class="toggle-none">Seo Yönetimi</span></a></li>


				<li class="nav-item <?php if (strstr($link, "genel-ayar")) { echo "active";} ?><?php if (strstr($link, "google")) { echo "active";} ?><?php if (strstr($link, "smtp")) { echo "active";} ?><?php if (strstr($link, "tema")) { echo "active";} ?><?php if (strstr($link, "dil")) { echo "active";} ?>">
					<a class="nav-link" href="" aria-expanded="true"><i class="icon-film"></i> <span class="toggle-none">Site Ayarları<span style="float: right;" class="fa fa-angle-down"></span></span></a>
					<ul class="nav-second-level nav flex-column sub-menu" aria-expanded="true">
						<li class="nav-item"><a class="nav-link" href="genel-ayarlar.php">Genel Ayarlar</a></li>
						<li class="nav-item"><a class="nav-link" href="smtp-ayarlar.php">SMTP Ayarları</a></li>
						<li class="nav-item"><a class="nav-link" href="tema-gorsel.php">Tema Görsel Ayarları</a></li>
						<li class="nav-item"><a class="nav-link" href="tema-renk.php">Tema Renk Ayarları</a></li>
						<li class="nav-item"><a class="nav-link" href="google-yandex-ayarlari.php">Google&Yandex Yönetimi</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>
