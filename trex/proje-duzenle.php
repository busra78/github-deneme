<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
include 'controller/seo.php';
$projeedit=$db->prepare("SELECT * from projeler where proje_id=:proje_id");
$projeedit->execute(array(
	'proje_id' => $_GET['proje_id']
));
$projewrite=$projeedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Proje İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="projeler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Proje Düzenle
				</div>
				<div class="card-block">
					<div class="form-group">
						<label><b style="color: red;">İçerik Linki</b></label> <b>Linki kopyalayarak özel üst menüye veya footer menüye ekleyebilirsiniz.</b>
						<input type="text" value="<?=seo('proje-'.$projewrite["proje_baslik"]).'-'.$projewrite["proje_id"]?>" readonly class="form-control">
					</div>
					<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="proje_id" value="<?php echo $projewrite['proje_id']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eski_yol" value="<?php echo $projewrite['proje_resim']; ?>">
						</div>
						<div class="form-group">
							<label>Proje Adı</label>
							<input type="text" name="proje_baslik" value="<?php echo $projewrite['proje_baslik']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select name="proje_kategori" class="form-control m-b">
								<?php 
								$kategoriedit=$db->prepare("SELECT * from kategorilerp where kategori_id=:kategori_id");
								$kategoriedit->execute(array(
									'kategori_id' => $projewrite['proje_kategori']
								));
								$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
								?>
								<option value="<?php echo $kategoriwrite['kategori_id'] ?>"><?php echo $kategoriwrite['kategori_ad'] ?></option>
								<?php 
								$kategorisor=$db->prepare("SELECT * from kategorilerp");
								$kategorisor->execute(array(0));
								while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
									?>
									<option value="<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote" name="proje_icerik"><?php echo $projewrite['proje_icerik']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Yüklü Resim</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $projewrite['proje_resim']; ?>"></p>
							
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="proje_resim">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Vitrinde Göster</label>
							<select name="proje_vitrin" class="form-control m-b">
								<?php if ($projewrite['proje_vitrin']==1) { ?>
									<option value="1">Göster</option>
									<option value="0">Gizle</option>
									<?php
								} else {?>
									<option value="0">Gizle</option>
									<option value="1">Göster</option>
								<?php }?>
							</select>
							<small class="text-muted">Projeler ana sayfada gösterilecektir</small>
						</div>

						<hr>
						<div class="">
							<b style="color: red;">*SEO Meta Ayarları</b>
							<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="proje_title" value="<?php echo $projewrite['proje_title']; ?>" class="form-control form-control-rounded">
						</div>

						<div class="form-group">
							<label>Description</label>
							<input name="proje_descr" type="text" value="<?php echo $projewrite['proje_descr']; ?>" class="form-control form-control-rounded">
						</div>

						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="proje_keyword" value="<?php echo $projewrite['proje_keyword']; ?>" class="form-control form-control-rounded">
							<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
						</div>
						<button style="cursor: pointer;" type="submit" name="projeduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
