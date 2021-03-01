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
		<h2>Seo İşlemleri</h2>
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
							<div class="card">
								<div class="card-heading card-default">
									Seo Meta Düzenle
								</div>

								<div class="card-block">
									<?php
									$metakey=$db->prepare("SELECT * from meta order by meta_id ASC");
									$metakey->execute(array(0));
									while ($metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC)) { ?>
										<!-- AYAR  -->
										<form method="POST" action="controller/function.php" class="form-horizontal">
											<div class="form-group">
												<div class="row">
													<input type="hidden" name="meta_id" value="<?php echo $metakeyprint['meta_id'] ?>"  class="form-control">
													<div class="col-md-2">
														<label>Sayfa Adı</label>
														<input type="text" placeholder="<?php echo $metakeyprint['meta_ad'] ?>" readonly class="form-control">
													</div>
													<div class="col-md-2">
														<label>Title</label>
														<input type="text" name="meta_title" value="<?php echo $metakeyprint['meta_title'] ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Description</label>
														<input type="text" name="meta_descr" value="<?php echo $metakeyprint['meta_descr'] ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Keyword</label>
														<input type="text" name="meta_keyword" value="<?php echo $metakeyprint['meta_keyword'] ?>" class="form-control">
													</div>
													<div class="col-md-2">
														<label>İşlemler</label><br />
														<button style="cursor: pointer;" type="submit" name="metaduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
														<div class="col-md-6">
														</div>
													</div>
												</div>
											</div>
										</form>
										<!--#AYAR  -->
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
						<div class="widget white-bg">
							<!-- FORM BAŞLA -->
							<div class="card">
								<div class="card-heading card-default">
									Seo Meta Düzenle
								</div>

								<div class="card-block">
									<?php
									$metakey=$db->prepare("SELECT * from meta2 order by meta_id ASC");
									$metakey->execute(array(0));
									while ($metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC)) { ?>
										<!-- AYAR  -->
										<form method="POST" action="controller/function.php" class="form-horizontal">
											<div class="form-group">
												<div class="row">
													<input type="hidden" name="meta_id" value="<?php echo $metakeyprint['meta_id'] ?>"  class="form-control">
													<div class="col-md-2">
														<label>Sayfa Adı</label>
														<input type="text" placeholder="<?php echo $metakeyprint['meta_ad'] ?>" readonly class="form-control">
													</div>
													<div class="col-md-2">
														<label>Title</label>
														<input type="text" name="meta_title" value="<?php echo $metakeyprint['meta_title'] ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Description</label>
														<input type="text" name="meta_descr" value="<?php echo $metakeyprint['meta_descr'] ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Keyword</label>
														<input type="text" name="meta_keyword" value="<?php echo $metakeyprint['meta_keyword'] ?>" class="form-control">
													</div>
													<div class="col-md-2">
														<label>İşlemler</label><br />
														<button style="cursor: pointer;" type="submit" name="metaduzenle2" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
														<div class="col-md-6">
														</div>
													</div>
												</div>
											</div>
										</form>
										<!--#AYAR  -->
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
						<div class="widget white-bg">
							<div class="card">
								<div class="card-heading card-default">
									Seo Meta Düzenle
								</div>

								<div class="card-block">
									<?php
									$metakey=$db->prepare("SELECT * from meta3 order by meta_id ASC");
									$metakey->execute(array(0));
									while ($metakeyprint=$metakey->fetch(PDO::FETCH_ASSOC)) { ?>
										<!-- AYAR  -->
										<form method="POST" action="controller/function.php" class="form-horizontal">
											<div class="form-group">
												<div class="row">
													<input type="hidden" name="meta_id" value="<?php echo $metakeyprint['meta_id'] ?>"  class="form-control">
													<div class="col-md-2">
														<label>Sayfa Adı</label>
														<input type="text" placeholder="<?php echo $metakeyprint['meta_ad'] ?>" readonly class="form-control">
													</div>
													<div class="col-md-2">
														<label>Title</label>
														<input type="text" name="meta_title" value="<?php echo $metakeyprint['meta_title'] ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Description</label>
														<input type="text" name="meta_descr" value="<?php echo $metakeyprint['meta_descr'] ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Keyword</label>
														<input type="text" name="meta_keyword" value="<?php echo $metakeyprint['meta_keyword'] ?>" class="form-control">
													</div>
													<div class="col-md-2">
														<label>İşlemler</label><br />
														<button style="cursor: pointer;" type="submit" name="metaduzenle3" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
														<div class="col-md-6">
														</div>
													</div>
												</div>
											</div>
										</form>
										<!--#AYAR  -->
									<?php } ?>
								</div>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
