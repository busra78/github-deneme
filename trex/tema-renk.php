<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';

$mail=$db->prepare("SELECT * from mail where mail_id=?");
$mail->execute(array(0));
$mailprint=$mail->fetch(PDO::FETCH_ASSOC);
?>	
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">

	<div class="page-header">
		<h2>Genel Ayarlar</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="widget white-bg">
				<!-- FORM BAŞLA -->
				<div class="card-heading card-default">
					TEMA AYARLAR
				</div>
				<div class="card-block">
					<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="controller/function.php">
						<input type="hidden" name="ayar_mobil" value="1">
						<input type="hidden" name="ayar_mobil3" value="1">
						<input type="hidden" name="ayar_slaytarka" value="1">
						<div class="form-group">
							<label>Site Ana Rengi 1</label> 
							<input class="jscolor form-control form-control-rounded" name="ayar_mobil1" value="<?php echo $settingsprint['ayar_mobil1']; ?>">
						</div>
						<div class="form-group">
							<label>Site Ana Rengi 2</label>
							<input class="jscolor form-control form-control-rounded" name="ayar_mobil2" value="<?php echo $settingsprint['ayar_mobil2']; ?>">
						</div>
						<div class="form-group">
							<label>Rezervasyon Arkaplan</label>
							<input class="jscolor form-control form-control-rounded" name="ayar_mobil3" value="<?php echo $settingsprint['ayar_mobil3']; ?>">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="genelayartema" value="Sign up">Güncelle</button>
						</div>
					</form>
				</div>
				<!-- FORM SON -->


			</div>
		</div>

	</div>
</div>
<!-- ============================================================== -->
<!-- 						Content End 							-->
<!-- ============================================================== -->

<?php include 'footer.php'; ?>
