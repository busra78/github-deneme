<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$yorumedit=$db->prepare("SELECT * from yorumlar where yorum_id=:yorum_id");
$yorumedit->execute(array(
	'yorum_id' => $_GET['yorum_id']
));
$yorumwrite=$yorumedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Yorum İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="yorumlar.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Yorum Düzenle
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<input type="hidden" name="yorum_id" value="<?php echo $yorumwrite['yorum_id']; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="eski_yol" value="<?php echo $yorumwrite['yorum_resim']; ?>">
						</div>						
						<div class="form-group">
							<label>Yorum Kısa Açıklama</label>
							<textarea style="height: 100px;" class="editor" name="yorum_kisaicerik"><?php echo $yorumwrite['yorum_kisa']; ?></textarea>
						</div>				
						<div class="form-group">
							<label>Yorum Açıklama</label>
							<textarea style="height: 100px;" class="summernote" name="yorum_icerik"><?php echo $yorumwrite['yorum_icerik']; ?></textarea>
						</div>
						<div class="form-group">
							<label>Yorum İsim</label>
							<input type="text" name="yorum_isim" value="<?php echo $yorumwrite['yorum_isim']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Firma Adı</label>
							<input type="text" name="yorum_link" value="<?php echo $yorumwrite['yorum_link']; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Yorum Resim</label>
							<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $yorumwrite['yorum_resim']; ?>"></p>
						</div>
						<div class="form-group">
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yeni Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file"  name="yorum_resim">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Vitrinde Göster</label>
							<select name="vitrin" class="form-control m-b">
								<?php if ($yorumwrite['vitrin']==1) { ?>
									<option value="1">Göster</option>
									<option value="0">Gizle</option>
									<?php
								} else {?>
									<option value="0">Gizle</option>
									<option value="1">Göster</option>
								<?php }?>
							</select>
							<small class="text-muted">Hizmetler ana sayfada gösterilecektir</small>
						</div>

						<hr>
						<div class="">
							<b style="color: red;">*SEO Meta Ayarları</b>
							<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" value="<?php echo $yorumwrite['title']; ?>" class="form-control form-control-rounded">
						</div>

						<div class="form-group">
							<label>Description</label>
							<input name="descr" type="text" value="<?php echo $yorumwrite['descr']; ?>" class="form-control form-control-rounded">
						</div>

						<div class="form-group">
							<label>Keywords</label>
							<input type="text" name="keyword" value="<?php echo $yorumwrite['keyword']; ?>" class="form-control form-control-rounded">
							<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
						</div>
						<button style="cursor: pointer;" type="submit" name="yorumduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
