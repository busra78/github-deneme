<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$hizmetedit=$db->prepare("SELECT * from bilgi where bilgi_id=:bilgi_id");
$hizmetedit->execute(array(
	'bilgi_id' => $_GET['bilgi_id']
));
$hizmetwrite=$hizmetedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Bilgi İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">



			<div class="tabs">
				<ul class="nav nav-tabs">
					<li class="nav-item" role="presentation"><a class="nav-link  active" href="#settings<?php echo $dil1print['dil_id']; ?>" aria-controls="settings<?php echo $dil1print['dil_id']; ?>" role="tab" data-toggle="tab"><img src="<?php echo $dil1print['dil_bayrak']; ?>"> <?php echo $dil1print['dil_adi']; ?></a></li>
					<?php if ($dil2print['dil_durum']==1) { ?>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#settings<?php echo $dil2print['dil_id']; ?>" aria-controls="settings<?php echo $dil2print['dil_id']; ?>" role="tab" data-toggle="tab"><img src="<?php echo $dil2print['dil_bayrak']; ?>"> <?php echo $dil2print['dil_adi']; ?></a></li>
					<?php  } if ($dil3print['dil_durum']==1) { ?>
						<li class="nav-item" role="presentation"><a class="nav-link" href="#settings<?php echo $dil3print['dil_id']; ?>" aria-controls="settings<?php echo $dil3print['dil_id']; ?>" role="tab" data-toggle="tab"><img src="<?php echo $dil3print['dil_bayrak']; ?>"> <?php echo $dil3print['dil_adi']; ?></a></li>
					<?php } ?>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="settings<?php echo $dil1print['dil_id']; ?>">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card-heading card-default">
								<div class="pull-right mt-10">
									<a href="bilgiler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
								</div>
								Bilgi Düzenle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="eski_yol" value="<?php echo $hizmetwrite['hizmet_resim']; ?>">
									</div>
									<div class="form-group">
										<input type="hidden" name="bilgi_id" value="<?php echo $hizmetwrite['bilgi_id']; ?>">
									</div>	

									<div class="form-group">
										<label>Başlık</label>
										<input type="text" name="bilgi_baslik" value="<?php echo $hizmetwrite['bilgi_baslik']; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Açıklama </label> 
										<textarea style="height: 80px;" name="bilgi_aciklama"><?php echo $hizmetwrite['bilgi_aciklama']; ?></textarea>
									</div>	
									
																		
										<input type="hidden" name="bilgi_resim" value="1" class="form-control">

									<button style="cursor: pointer;" type="submit" name="bilgiduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="bilgiler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Bilgi Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<div class="form-group">
										<label>Başlık </label>
										<input type="text" name="bilgi_baslik2" value="<?php echo $hizmetwrite['bilgi_baslik2']; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Açıklama </label> 
										<textarea style="height: 80px;"  name="bilgi_aciklama2"><?php echo $hizmetwrite['bilgi_aciklama2']; ?></textarea>
									</div> 
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
							<div class="widget white-bg">
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="bilgiler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Bilgi Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<div class="form-group">
										<label>Başlık </label>
										<input type="text" name="bilgi_baslik3" value="<?php echo $hizmetwrite['bilgi_baslik3']; ?>" class="form-control">
									</div>

									<div class="form-group">
										<label>Açıklama </label> 
										<textarea style="height: 80px;"  name="bilgi_aciklama3"><?php echo $hizmetwrite['bilgi_aciklama3']; ?></textarea>
									</div>	

								</form>
							</div>

							<!-- FORM SON -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
