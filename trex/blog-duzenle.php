<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$blogedit=$db->prepare("SELECT * from blog where blog_id=:blog_id");
$blogedit->execute(array(
	'blog_id' => $_GET['blog_id']
));
$blogwrite=$blogedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Blog İşlemleri</h2>
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
									<a href="blog.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
								</div>
								Blog Düzenle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="blog_id" value="<?php echo $blogwrite['blog_id']; ?>">
									</div>
									<div class="form-group">
										<input type="hidden" name="eski_yol" value="<?php echo $blogwrite['blog_resim']; ?>">
									</div>	

									<div class="form-group">
										<label>Blog Başlık </label>
										<input type="text" name="blog_baslik" value="<?php echo $blogwrite['blog_baslik']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Kategori</label>
										<select name="blog_kategori" class="form-control m-b">
											<?php 
											$kategoriedit=$db->prepare("SELECT * from kategorilerb where kategori_id=:kategori_id");
											$kategoriedit->execute(array(
												'kategori_id' => $blogwrite['blog_kategori']
											));
											$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
											?>
											<option value="<?php echo $kategoriwrite['kategori_id'] ?>"><?php echo $kategoriwrite['kategori_ad'] ?></option>
											<?php 
											$kategorisor=$db->prepare("SELECT * from kategorilerb");
											$kategorisor->execute(array(0));
											while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
												?>
												<option value="<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label>Açıklama </label> 
										<textarea class="summernote" name="blog_detay"><?php echo $blogwrite['blog_detay']; ?></textarea>
									</div>	
									<input type="hidden" name="blog_resim" value="<?php echo $blogwrite['blog_resim']; ?>" class="form-control form-control-rounded">
									<input type="hidden" name="blog_vitrin" value="1">
									<hr>
									<div class="">
										<b style="color: red;">*SEO Meta Ayarları</b>
										<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="blog_title" value="<?php echo $blogwrite['blog_title']; ?>" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Description </label>
										<input name="blog_descr" type="text" value="<?php echo $blogwrite['blog_descr']; ?>" class="form-control form-control-rounded">
									</div>
									
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="blog_keyword" value="<?php echo $blogwrite['blog_keyword']; ?>" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>

									<button style="cursor: pointer;" type="submit" name="blogduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="blog.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Blog Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<?php 
									if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Blog Başlık </label>
											<input type="text" name="blog_baslik2" value="<?php echo $blogwrite['blog_baslik2']; ?>" class="form-control">
										</div>
									<?php } if ($dil2print['dil_durum']==1) { ?>

										<div class="form-group">
											<label>Açıklama </label> 
											<textarea class="summernote" name="blog_detay2"><?php echo $blogwrite['blog_detay2']; ?></textarea>
										</div>	
									<?php }   if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="blog_title2" value="<?php echo $blogwrite['blog_title2']; ?>" class="form-control form-control-rounded">
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="blog_descr2" type="text" value="<?php echo $blogwrite['blog_descr2']; ?>" class="form-control form-control-rounded">
										</div>
									<?php } if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="blog_keyword2" value="<?php echo $blogwrite['blog_keyword2']; ?>" class="form-control form-control-rounded">
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
										<a href="blog.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Blog Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->

									<?php if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Blog Başlık </label>
											<input type="text" name="blog_baslik3" value="<?php echo $blogwrite['blog_baslik3']; ?>" class="form-control">
										</div>
									<?php }  if ($dil3print['dil_durum']==1) { ?>

										<div class="form-group">
											<label>Açıklama </label> 
											<textarea class="summernote" name="blog_detay3"><?php echo $blogwrite['blog_detay3']; ?></textarea>
										</div>	
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="blog_title3" value="<?php echo $blogwrite['blog_title3']; ?>" class="form-control form-control-rounded">
										</div>							
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="blog_descr3" type="text" value="<?php echo $blogwrite['blog_descr3']; ?>" class="form-control form-control-rounded">
										</div>						
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="blog_keyword3" value="<?php echo $blogwrite['blog_keyword3']; ?>" class="form-control form-control-rounded">
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
</div>
</div>

<?php include 'footer.php'; ?>
