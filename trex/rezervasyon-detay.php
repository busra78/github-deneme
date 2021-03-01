<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$randevuedit=$db->prepare("SELECT * from randevu where randevu_id=:randevu_id");
$randevuedit->execute(array(
	'randevu_id' => $_GET['randevu_id']
));
$randevuwrite=$randevuedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Rezervasyon Telebi</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<button class="btn btn-success" onclick="window.print();"><i class="fa fa-print"></i> Yazdır</button>
						<a href="rezervasyon.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Gelen Rezervasyon Telebi
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<label>Oluşturulma Tarihi</label>
							<input type="text"  value="<?php echo $randevuwrite['randevu_tarih']; ?>" readonly="" class="form-control">
						</div>
						<div class="form-group">
							<label>Ad Soyad</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_ad']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Telefon</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_tel']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Mail</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_mail']; ?>" class="form-control">
						</div>
						<?php $urunedit=$db->prepare("SELECT * from urunler where urun_id=:urun_id");
						$urunedit->execute(array(
							'urun_id' => $randevuwrite['randevu_oda']
						));
						$urunwrite=$urunedit->fetch(PDO::FETCH_ASSOC); ?>
						<div class="form-group">
							<label>Oda Bilgisi</label>
							<input type="text" readonly="readonly" value="<?php echo $urunwrite['urun_baslik']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Rezervasyon Giriş - Çıkış Tarihleri</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_giris']." - ".$randevuwrite['randevu_donus']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Yetişkin</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_yetiskin']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Çoçuk</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_cocuk']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Toplam Gün</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_gunfarki']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Toplam Fiyat</label>
							<input type="text" readonly="readonly" value="<?php echo $randevuwrite['randevu_fiyat']; ?>TL" class="form-control">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
