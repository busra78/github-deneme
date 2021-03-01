<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
include 'controller/seo.php';
$pageedit=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfaid");
$pageedit->execute(array(
	'sayfaid' => $_GET['sayfa_id']
));
$pagewrite=$pageedit->fetch(PDO::FETCH_ASSOC);
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Sayfa İşlemleri</h2>
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
									<a href="sayfalar.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
								</div>
								Sayfa Düzenle
							</div>
							<div class="card-block">
								<div class="form-group">
									<label>Sayfa Linki (Buradaki linki kopyalayarak menüye ve farklı bir yere ekleyebilirsiniz. )</label>
									<input type="text" readonly="" value="<?=seo('sayfa-'.$pagewrite["sayfa_baslik"]).'-'.$pagewrite["sayfa_id"]?>">
								</div>
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="sayfa_id" value="<?php echo $pagewrite['sayfa_id']; ?>">
									</div>


									<div class="form-group">
										<label>Başlık </label>
										<input type="text" name="sayfa_baslik" value="<?php echo $pagewrite['sayfa_baslik']; ?>" class="form-control">
									</div>

									
									<div class="form-group">
										<label>İçerik</label>
										<textarea class="summernote" name="sayfa_icerik"><?php echo $pagewrite['sayfa_icerik']; ?></textarea>
									</div>
									<div class="form-group">
										<label>Menude Göster</label>
										<select name="sayfa_menu" class="form-control m-b">
											<?php if ($pagewrite['sayfa_menu']==1) { ?>
												<option value="1">Göster</option>
												<option value="0">Gizle</option>
												<?php
											} else {?>
												<option value="0">Gizle</option>
												<option value="1">Göster</option>
											<?php }?>
										</select>
										<small class="text-muted">Seçilen özellik ile oluşturulan  sayfa yan menu vb.menülerde gösterilecektir</small>
									</div>
									<hr>
									<div class="">
										<b style="color: red;">*SEO Meta Ayarları</b>
										<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="sayfa_title" value="<?php echo $pagewrite['sayfa_title']; ?>" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Description </label>
										<input name="sayfa_descr" type="text" value="<?php echo $pagewrite['sayfa_descr']; ?>" class="form-control form-control-rounded">
									</div>
									
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="sayfa_keyword" value="<?php echo $pagewrite['sayfa_keyword']; ?>" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>

									<button style="cursor: pointer;" type="submit" name="sayfaduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="sayfalar.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Sayfa Düzenle
								</div>
								<div class="card-block">
									<div class="form-group">
										<label>Sayfa Linki (Buradaki linki kopyalayarak menüye ve farklı bir yere ekleyebilirsiniz. )</label>
										<input type="text" readonly="" value="<?=seo('sayfa-'.$pagewrite["sayfa_baslik2"]).'-'.$pagewrite["sayfa_id"]?>">
									</div>
									<!-- TEMA ARKAPLAN -->
									<div class="form-group">
										<label>Başlık </label>
										<input type="text" name="sayfa_baslik2" value="<?php echo $pagewrite['sayfa_baslik2']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>İçerik</label>
										<textarea class="summernote" name="sayfa_icerik2"><?php echo $pagewrite['sayfa_icerik2']; ?></textarea>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="sayfa_title2" value="<?php echo $pagewrite['sayfa_title2']; ?>" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Description </label>
										<input name="sayfa_descr2" type="text" value="<?php echo $pagewrite['sayfa_descr2']; ?>" class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="sayfa_keyword2" value="<?php echo $pagewrite['sayfa_keyword2']; ?>" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
							<div class="widget white-bg">
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="sayfalar.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Sayfa Düzenle
								</div>
								<div class="card-block">
									<div class="form-group">
										<label>Sayfa Linki (Buradaki linki kopyalayarak menüye ve farklı bir yere ekleyebilirsiniz. )</label>
										<input type="text" readonly="" value="<?=seo('sayfa-'.$pagewrite["sayfa_baslik3"]).'-'.$pagewrite["sayfa_id"]?>">
									</div>
									<!-- TEMA ARKAPLAN -->
									<div class="form-group">
										<label>Başlık </label>
										<input type="text" name="sayfa_baslik3" value="<?php echo $pagewrite['sayfa_baslik3']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>İçerik</label>
										<textarea class="summernote" name="sayfa_icerik3"><?php echo $pagewrite['sayfa_icerik3']; ?></textarea>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="sayfa_title3" value="<?php echo $pagewrite['sayfa_title3']; ?>" class="form-control form-control-rounded">
									</div>							
									<div class="form-group">
										<label>Description </label>
										<input name="sayfa_descr3" type="text" value="<?php echo $pagewrite['sayfa_descr3']; ?>" class="form-control form-control-rounded">
									</div>						
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="sayfa_keyword3" value="<?php echo $pagewrite['sayfa_keyword3']; ?>" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
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
