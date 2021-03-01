<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$slaytedit=$db->prepare("SELECT * from slayt where slayt_id=:slayt_id");
$slaytedit->execute(array(
	'slayt_id' => $_GET['slayt_id']
));
$slaytwrite=$slaytedit->fetch(PDO::FETCH_ASSOC);

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Slayt İşlemleri</h2>
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
									<a href="slayt.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
								</div>
								Slayt Düzenle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="slayt_id" value="<?php echo $slaytwrite['slayt_id']; ?>">
									</div>
									<div class="form-group">
										<input type="hidden" name="eski_yol" value="<?php echo $slaytwrite['slayt_resim']; ?>">
									</div>						
									<div class="form-group">
										<label>Slayt Başlık</label>
										<input type="text" name="slayt_baslik" value="<?php echo $slaytwrite['slayt_baslik']; ?>" class="form-control">
									</div>
									
									<div class="form-group">
										<label>Slayt Açıklama</label>
										<textarea style="height: 70px;" rows="5" name="slayt_aciklama"><?php echo $slaytwrite['slayt_aciklama']; ?></textarea>
									</div>
									<div class="form-group">
										<label>Yüklü Resim</label>
										<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $slaytwrite['slayt_resim']; ?>"></p>
									</div>
									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="slayt_resim">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>
									<div class="form-group">
										<label>Yazı Rengi</label>
										<input class="jscolor form-control form-control-rounded" name="slayt_renk" value="<?php echo $slaytwrite['slayt_renk']; ?>">

									</div>
									<div class="form-group">
										<label>Botun Adı</label>
										<input type="text" name="slayt_butonad" value="<?php echo $slaytwrite['slayt_butonad']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Botun Link</label>
										<input type="text" name="slayt_butonlink" value="<?php echo $slaytwrite['slayt_butonlink']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Slayt Sıra</label>
										<input type="text" name="slayt_sira" value="<?php echo $slaytwrite['slayt_sira']; ?>" class="form-control">
									</div>

									<button style="cursor: pointer;" type="submit" name="slaytduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="slayt.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Slayt Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<div class="form-group">
										<label>Slayt Başlık</label>
										<input type="text" name="slayt_baslik2" value="<?php echo $slaytwrite['slayt_baslik2']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Slayt Açıklama</label>
										<textarea style="height: 70px;" rows="5" name="slayt_aciklama2"><?php echo $slaytwrite['slayt_aciklama2']; ?></textarea>
									</div>
									<div class="form-group">
										<label>Botun Adı</label>
										<input type="text" name="slayt_butonad2" value="<?php echo $slaytwrite['slayt_butonad2']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Botun Link</label>
										<input type="text" name="slayt_butonlink2" value="<?php echo $slaytwrite['slayt_butonlink2']; ?>" class="form-control">
									</div>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
							<div class="widget white-bg">
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="slayt.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Slayt Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<div class="form-group">
										<label>Slayt Başlık</label>
										<input type="text" name="slayt_baslik3" value="<?php echo $slaytwrite['slayt_baslik3']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Slayt Açıklama</label>
										<textarea style="height: 70px;" rows="5" name="slayt_aciklama3"><?php echo $slaytwrite['slayt_aciklama3']; ?></textarea>
									</div>
									<div class="form-group">
										<label>Botun Adı</label>
										<input type="text" name="slayt_butonad3" value="<?php echo $slaytwrite['slayt_butonad3']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Botun Link</label>
										<input type="text" name="slayt_butonlink3" value="<?php echo $slaytwrite['slayt_butonlink3']; ?>" class="form-control">
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
</div>
</div>

<?php include 'footer.php'; ?>
