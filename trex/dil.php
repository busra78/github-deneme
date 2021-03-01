<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$diledit=$db->prepare("SELECT * from dil");
$diledit->execute(array());

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Dil İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Dil Düzenle
				</div>
				<div class="card-block">
					<?php while ($dilwrite=$diledit->fetch(PDO::FETCH_ASSOC)) { ?>
						<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group">
								<div class="row">
									<input type="hidden" name="dil_id" value="<?php echo $dilwrite['dil_id']; ?>"  class="form-control">
									<div class="col-md-2">
										<label>Dil Adı</label>
										<input type="text" name="dil_adi" value="<?php echo $dilwrite['dil_adi']; ?>" class="form-control">
									</div>
									<div class="col-md-1">
										<label>Dil Para Birimi</label>
										<input type="text" name="dil_birim" value="<?php echo $dilwrite['dil_birim']; ?>" class="form-control">
									</div>
									<div class="col-md-1">
										<label>Yüklü Resim</label>
										<p><img style="max-height: 100px;max-width: 100px;" src="<?php echo $dilwrite['dil_bayrak']; ?>"></p>

									</div>
									<div class="col-md-4">
										<label>Yüklü Resim</label>
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="dil_bayrak">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>
									<div class="col-md-2">
										<label>Dil Durum</label>
										<?php if ($dilwrite['dil_id']==1) { ?>
											<select name="dil_durum" readonly class="form-control m-b">
												<?php if ($dilwrite['dil_durum']==1) { ?>
													<option value="1">Aktif</option>
												<?php } ?>
											<?php } else { ?>
												<select name="dil_durum" class="form-control m-b">
													<?php if ($dilwrite['dil_durum']==1) { ?>
														<option value="1">Aktif</option>

														<?php
													} else {?>
														<option value="0">Pasif</option>

													<?php } ?>
												<?php } ?>
											</select>
										</div>
										<div class="col-md-2">

										</div>
									</div>
								</form>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<?php include 'footer.php'; ?>
