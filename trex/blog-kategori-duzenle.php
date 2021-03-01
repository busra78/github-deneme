<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$kategoriedit=$db->prepare("SELECT * from kategorilerb where kategori_id=:kategori_id");
$kategoriedit->execute(array(
	'kategori_id' => $_GET['kategori_id']
));
$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Kategori İşlemleri</h2>
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
									<a href="blog-kategoriler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
								</div>
								Kategori Düzenle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="kategori_id" value="<?php echo $kategoriwrite['kategori_id']; ?>">
									</div>

									<div class="form-group">
										<label>Kategori Başlık </label>
										<input type="text" name="kategori_ad" value="<?php echo $kategoriwrite['kategori_ad']; ?>" class="form-control">
									</div>

									
									<div class="form-group">
										<label>Kategori Sıra</label>
										<input type="text" name="kategori_sira" value="<?php echo $kategoriwrite['kategori_sira']; ?>" class="form-control">
									</div>
									<hr>
									<div class="">
										<b style="color: red;">*SEO Meta Ayarları</b>
										<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="kategori_title" value="<?php echo $kategoriwrite['kategori_title']; ?>" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Description </label>
										<input name="kategori_descr" type="text" value="<?php echo $kategoriwrite['kategori_descr']; ?>" class="form-control form-control-rounded">
									</div>
									
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="kategori_keyword" value="<?php echo $kategoriwrite['kategori_keyword']; ?>" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>

									<button style="cursor: pointer;" type="submit" name="blogkategoriduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="blog-kategoriler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Kategori Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<?php 
									if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Kategori Başlık </label>
											<input type="text" name="kategori_ad2" value="<?php echo $kategoriwrite['kategori_ad2']; ?>" class="form-control">
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="kategori_title2" value="<?php echo $kategoriwrite['kategori_title2']; ?>" class="form-control form-control-rounded">
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="kategori_descr2" type="text" value="<?php echo $kategoriwrite['kategori_descr2']; ?>" class="form-control form-control-rounded">
										</div>
									<?php } if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="kategori_keyword2" value="<?php echo $kategoriwrite['kategori_keyword2']; ?>" class="form-control form-control-rounded">
											<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
										</div>
									<?php } ?> 
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
							<div class="widget white-bg">
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="blog-kategoriler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Kategori Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->

									<?php if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Kategori Başlık </label>
											<input type="text" name="kategori_ad3" value="<?php echo $kategoriwrite['kategori_ad3']; ?>" class="form-control">
										</div>
									<?php }  if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="kategori_title3" value="<?php echo $kategoriwrite['kategori_title3']; ?>" class="form-control form-control-rounded">
										</div>							
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="kategori_descr3" type="text" value="<?php echo $kategoriwrite['kategori_descr3']; ?>" class="form-control form-control-rounded">
										</div>						
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="kategori_keyword3" value="<?php echo $kategoriwrite['kategori_keyword3']; ?>" class="form-control form-control-rounded">
											<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
										</div>					
									<?php } ?>

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
