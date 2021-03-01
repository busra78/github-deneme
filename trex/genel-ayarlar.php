
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
					GENEL AYARLAR
				</div>
				<div class="card-block">
					<form id="signupForm" method="POST" enctype="multipart/form-data" class="form-horizontal" action="controller/function.php">
						<div class="form-group">
							<input type="hidden" name="eskiyol_logo" value="<?php echo $settingsprint['ayar_logo']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eskiyol_fav" value="<?php echo $settingsprint['ayar_fav']; ?>">
						</div>
						<div class="form-group">
							<label>Yüklü Logo</label> 
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_logo']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_logo">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Yüklü Favicon</label> <small> Fav Logo max 36x36 olmalıdır.</small>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $settingsprint['ayar_fav']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="ayar_fav">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label for="ayar_siteurl">Site Link <small>Belirtilen linke <b style="color: red;">http://</b> veya <b style="color: red;">https://</b> ve sonuna <b style="color: red;">/</b> işaretini dahil ediniz.</small></label>
							<input type="text" class="form-control" id="ayar_siteurl" name="ayar_siteurl" value="<?php echo $settingsprint['ayar_siteurl']; ?>" />
						</div>
						<div class="form-group">
							<label>Tema</label>
							<select name="ayar_harita" class="form-control m-b">
								<?php if ($settingsprint['ayar_harita']==1) { ?>
									<option value="1">Dar Ekran Tema (BOXED)</option>
									<option value="0">Geniş Ekran Tema (WIDE)</option>
									<?php
								} else {?>
									<option value="0">Geniş Ekran Tema (WIDE)</option>
									<option value="1">Dar Ekran Tema (BOXED)</option>
								<?php }?>
							</select>
							<small class="text-muted">Web sitesini (WIDE/BOXED) olarak ayarlayabilirsiniz.</small>
						</div>
							<input type="hidden" class="form-control" id="ayar_firmaadi" name="ayar_firmaadi" value="<?php echo $settingsprint['ayar_firmaadi']; ?>" />
						<div class="form-group">
							<label for="ayar_mail">Email</label>
							<input type="text" class="form-control" id="ayar_mail" name="ayar_mail" value="<?php echo $settingsprint['ayar_mail']; ?>" />
						</div>
						<div class="form-group">
							<label for="ayar_tel">Telefon</label>
							<input type="text" class="form-control" id="ayar_tel" name="ayar_tel" value="<?php echo $settingsprint['ayar_tel']; ?>" />
						</div>
						<div class="form-group">
							<label for="ayar_kod">Canlı Destek Kodu</label>
							<textarea style="height: 100px;" class="form-control" name="ayar_kod" rows="5" id="ayar_harita"><?php echo htmlspecialchars($settingsprint['ayar_kod']); ?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="genelayar" value="Sign up">Güncelle</button>
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
