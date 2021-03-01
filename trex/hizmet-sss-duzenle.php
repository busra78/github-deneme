<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$sssedit=$db->prepare("SELECT * from hsss where sss_id=:sss_id");
$sssedit->execute(array(
	'sss_id' => $_GET['sss_id']
));
$ssswrite=$sssedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>SSS İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="hizmet-sss.php?hizmet_id=<?php echo $_GET['hizmet_id']; ?>" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					SSS Düzenle
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="sss_id" value="<?php echo $ssswrite['sss_id']; ?>">
							<input type="hidden" name="hizmet_id" value="<?php echo $_GET['hizmet_id']; ?>">
						</div>
						<div class="form-group">
							<label>Soru</label>
							<input type="text" name="sss_soru" value="<?php echo $ssswrite['sss_soru']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Cevap</label>
							<input type="text" name="sss_cevap" value="<?php echo $ssswrite['sss_cevap']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Sıra</label>
							<input type="text" name="sss_sira" value="<?php echo $ssswrite['sss_sira']; ?>" class="form-control">
						</div>
						<button style="cursor: pointer;" type="submit" name="hsssduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
