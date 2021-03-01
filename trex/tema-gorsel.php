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
					GÖRSEL AYARLAR
				</div>
				<div class="card-block">
					<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="controller/function.php">
						<div class="form-group">
							<input type="hidden" name="eayar_title1" value="<?php echo $settingsprint['ayar_title1']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eayar_title2" value="<?php echo $settingsprint['ayar_title2']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eayar_title3" value="<?php echo $settingsprint['ayar_title3']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eayar_title4" value="<?php echo $settingsprint['ayar_title4']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eayar_title5" value="<?php echo $settingsprint['ayar_title5']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eayar_title6" value="<?php echo $settingsprint['ayar_title6']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="ayar_resimparalax" value="<?php echo $settingsprint['ayar_resimparalax']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eskiyol_counter" value="<?php echo $settingsprint['ayar_resimcounter']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="ayar_title2" value="<?php echo $settingsprint['ayar_title2']; ?>">
						</div>
						<div class="form-group">
							<label>Sayfalar Başlık Arkaplan</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_title1']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_title1">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>İletişim Başlık Arkaplan</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_title3']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_title3">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Oda Başlık Arkaplan</label> 
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_title4']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_title4">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Galeri / Medya Başlık Arkaplan</label> 
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_title5']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_title5">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Blog & Genel Başlık Arkaplan</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_title6']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_title6">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Boxed Tema Arkaplan</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_resimcounter']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_resimcounter">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Ana Sayfa Bilgi Alan Görseli</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_resimparalax']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_resimparalax">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="arkaplan" value="Sign up">Güncelle</button>
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
