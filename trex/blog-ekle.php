<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
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
								Blog Ekle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									
									<input type="hidden" name="blog_resim" value="1" class="form-control">
									<div class="form-group">
										<label>Blog Başlık </label>
										<input type="text" name="blog_baslik" placeholder="İçerik giriniz" class="form-control">
									</div>
									<div class="form-group">
										<label>Kategori</label>
										<select name="blog_kategori" class="form-control m-b">
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
									<input type="hidden" name="blog_vitrin" value="1">
									<hr>
									<div class="">
										<b style="color: red;">*SEO Meta Ayarları</b>
										<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="blog_title" placeholder="İçerik giriniz" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Description </label>
										<input name="blog_descr" type="text" placeholder="İçerik giriniz" class="form-control form-control-rounded">
									</div>
									
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="blog_keyword" placeholder="İçerik giriniz" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>

									<button style="cursor: pointer;" type="submit" name="blogekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
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
									Blog Ekle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<?php 
									if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Blog Başlık </label>
											<input type="text" name="blog_baslik2" placeholder="İçerik giriniz" class="form-control">
										</div>
									<?php } if ($dil2print['dil_durum']==1) { ?>

										<div class="form-group">
											<label>Açıklama </label> 
											<textarea class="summernote" name="blog_detay2"></textarea>
										</div>	
									<?php }   if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="blog_title2" placeholder="İçerik giriniz" class="form-control form-control-rounded">
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="blog_descr2" type="text" placeholder="İçerik giriniz" class="form-control form-control-rounded">
										</div>
									<?php } if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="blog_keyword2" placeholder="İçerik giriniz" class="form-control form-control-rounded">
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
									Blog Ekle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->

									<?php if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Blog Başlık </label>
											<input type="text" name="blog_baslik3" placeholder="İçerik giriniz" class="form-control">
										</div>
									<?php }  if ($dil3print['dil_durum']==1) { ?>

										<div class="form-group">
											<label>Açıklama </label> 
											<textarea class="summernote" name="blog_detay3"><?php echo $blogwrite['blog_detay3']; ?></textarea>
										</div>	
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="blog_title3" placeholder="İçerik giriniz" class="form-control form-control-rounded">
										</div>							
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="blog_descr3" type="text" placeholder="İçerik giriniz" class="form-control form-control-rounded">
										</div>						
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="blog_keyword3" placeholder="İçerik giriniz" class="form-control form-control-rounded">
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
