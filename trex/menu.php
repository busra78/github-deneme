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
		<h2>Header Menü İşlemleri</h2>
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
									Üst Özel Menü Düzenle
								</div>

								<div class="card-block">
									<h5 style="color: green;">Yeni Özel Menü Ekle</h5>
									<form method="POST" action="controller/function.php" class="form-horizontal">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label>Menü Adı</label>
													<input type="text" name="omenu_ad" placeholder="Menü adı giriniz." class="form-control">
												</div>
												<div class="col-md-3">
													<label>Menü Link</label>
													<input type="text" name="omenu_link" placeholder="Menü linki giriniz." class="form-control">
												</div>
												<div class="col-md-2">
													<label>Menü Sıra</label>
													<input type="text" name="omenu_sira" placeholder="Menü sıra giriniz." class="form-control">
												</div>
												<div class="col-md-2">
													<label>Üst Menü</label>
													<select name="omenu_ust" class="form-control m-b">
														<option value="0">-ÜST MENÜ YOK-</option>
														<?php  
														$menulist=$db->prepare("SELECT * from omenu where omenu_ust=0 order by omenu_sira DESC");
														$menulist->execute(); 
														while($menulistprint=$menulist->fetch(PDO::FETCH_ASSOC)) { ?>
															<option value="<?php echo $menulistprint['omenu_id']; ?>"><?php echo $menulistprint['omenu_ad']; ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-2">
													<label>*İşlem</label><div>
														<button style="cursor: pointer;" type="submit" name="omenuekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<br />
									<hr>
									<br />
									<h5 style="color: green;">Var Olan Menüler</h5>
									<?php
									$omenu=$db->prepare("SELECT * from omenu order by omenu_sira ASC");
									$omenu->execute(array(0));
									while ($omenuprint=$omenu->fetch(PDO::FETCH_ASSOC)) {
										?>
										<form method="POST" action="controller/function.php" class="form-horizontal">
											<div class="form-group">
												<div class="row">

													<input type="hidden" name="omenu_id" value="<?php echo $omenuprint['omenu_id']; ?>"  class="form-control">
													<div class="col-md-3">
														<label>Menü Adı</label>
														<input type="text" name="omenu_ad" value="<?php echo $omenuprint['omenu_ad']; ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Menü Link</label>
														<input type="text" name="omenu_link" value="<?php echo $omenuprint['omenu_link']; ?>" class="form-control">
													</div><div class="col-md-2">
														<label>Menü Sıra</label>
														<input type="text" name="omenu_sira" value="<?php echo $omenuprint['omenu_sira']; ?>" class="form-control">
													</div>
													<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
													<div class="col-md-2">
														<label>Üst Menü</label>
														<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
														<select name="omenu_ust" class="form-control m-b">
															<?php 
															$omenedit=$db->prepare("SELECT * from omenu where omenu_id=:omenu_id");
															$omenedit->execute(array(
																'omenu_id' => $omenuprint['omenu_ust']
															));

															$VarmiKont=$omenedit->rowCount();
															$omeneditwrite=$omenedit->fetch(PDO::FETCH_ASSOC);
															if ($VarmiKont>='1') {
																?><option value="<?php echo $omeneditwrite['omenu_id']; ?>"> <?php echo $omeneditwrite['omenu_ad']; ?></option> <?php
															} else {
																?><option value="0"> ÜST MENÜ YOK</option> <?php
															} 
															?><option value="0"> ÜST MENÜ YOK</option> <?php
															$menulistix=$db->prepare("SELECT * from omenu where omenu_ust=0 order by omenu_sira DESC");
															$menulistix->execute(); 
															while($menulistprintx=$menulistix->fetch(PDO::FETCH_ASSOC)) { ?>
																<option value="<?php echo $menulistprintx['omenu_id']; ?>"><?php echo $menulistprintx['omenu_ad']; ?></option>
															<?php } ?>
														</select>
													</div>
													<div class="col-md-2">
														<label>*İşlem</label><div>
															<button style="cursor: pointer;" type="submit" name="omenuduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
															<a href="controller/function.php?omenusil=ok&omenu_id=<?php echo $omenuprint['omenu_id']; ?>&omenu_ust=<?php echo $omenuprint['omenu_ust']; ?>" style="cursor: pointer;" type="submit" name="omenusil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
														</div>
													</div>
												</div>
											</div>
										</form>
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
									Üst Özel Menü Düzenle
								</div>

								<div class="card-block">
									<h5 style="color: green;">Yeni Özel Menü Ekle</h5>
									<form method="POST" action="controller/function.php" class="form-horizontal">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label>Menü Adı</label>
													<input type="text" name="omenu_ad" placeholder="Menü adı giriniz." class="form-control">
												</div>
												<div class="col-md-3">
													<label>Menü Link</label>
													<input type="text" name="omenu_link" placeholder="Menü linki giriniz." class="form-control">
												</div>
												<div class="col-md-2">
													<label>Menü Sıra</label>
													<input type="text" name="omenu_sira" placeholder="Menü sıra giriniz." class="form-control">
												</div>
												<div class="col-md-2">
													<label>Üst Menü</label>
													<select name="omenu_ust" class="form-control m-b">
														<option value="0">-ÜST MENÜ YOK-</option>
														<?php  
														$menulist=$db->prepare("SELECT * from omenu2 where omenu_ust=0 order by omenu_sira DESC");
														$menulist->execute(); 
														while($menulistprint=$menulist->fetch(PDO::FETCH_ASSOC)) { ?>
															<option value="<?php echo $menulistprint['omenu_id']; ?>"><?php echo $menulistprint['omenu_ad']; ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-2">
													<label>*İşlem</label><div>
														<button style="cursor: pointer;" type="submit" name="omenuekle2" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<br />
									<hr>
									<br />
									<h5 style="color: green;">Var Olan Menüler</h5>
									<?php
									$omenu=$db->prepare("SELECT * from omenu2 order by omenu_sira ASC");
									$omenu->execute(array(0));
									while ($omenuprint=$omenu->fetch(PDO::FETCH_ASSOC)) {
										?>
										<form method="POST" action="controller/function.php" class="form-horizontal">
											<div class="form-group">
												<div class="row">

													<input type="hidden" name="omenu_id" value="<?php echo $omenuprint['omenu_id']; ?>"  class="form-control">
													<div class="col-md-3">
														<label>Menü Adı</label>
														<input type="text" name="omenu_ad" value="<?php echo $omenuprint['omenu_ad']; ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Menü Link</label>
														<input type="text" name="omenu_link" value="<?php echo $omenuprint['omenu_link']; ?>" class="form-control">
													</div><div class="col-md-2">
														<label>Menü Sıra</label>
														<input type="text" name="omenu_sira" value="<?php echo $omenuprint['omenu_sira']; ?>" class="form-control">
													</div>
													<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
													<div class="col-md-2">
														<label>Üst Menü</label>
														<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
														<select name="omenu_ust" class="form-control m-b">
															<?php 
															$omenedit=$db->prepare("SELECT * from omenu2 where omenu_id=:omenu_id");
															$omenedit->execute(array(
																'omenu_id' => $omenuprint['omenu_ust']
															));

															$VarmiKont=$omenedit->rowCount();
															$omeneditwrite=$omenedit->fetch(PDO::FETCH_ASSOC);
															if ($VarmiKont>='1') {
																?><option value="<?php echo $omeneditwrite['omenu_id']; ?>"> <?php echo $omeneditwrite['omenu_ad']; ?></option> <?php
															} else {
																?><option value="0"> ÜST MENÜ YOK</option> <?php
															} 
															?><option value="0"> ÜST MENÜ YOK</option> <?php
															$menulistix=$db->prepare("SELECT * from omenu2 where omenu_ust=0 order by omenu_sira DESC");
															$menulistix->execute(); 
															while($menulistprintx=$menulistix->fetch(PDO::FETCH_ASSOC)) { ?>
																<option value="<?php echo $menulistprintx['omenu_id']; ?>"><?php echo $menulistprintx['omenu_ad']; ?></option>
															<?php } ?>
														</select>
													</div>
													<div class="col-md-2">
														<label>*İşlem</label><div>
															<button style="cursor: pointer;" type="submit" name="omenuduzenle2" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
															<a href="controller/function.php?omenu2sil=ok&omenu_id=<?php echo $omenuprint['omenu_id']; ?>&omenu_ust=<?php echo $omenuprint['omenu_ust']; ?>" style="cursor: pointer;" type="submit" name="omenusil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
														</div>
													</div>
												</div>
											</div>
										</form>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
						<div class="widget white-bg">
							<div class="card">
								<div class="card-heading card-default">
									Üst Özel Menü Düzenle
								</div>

								<div class="card-block">
									<h5 style="color: green;">Yeni Özel Menü Ekle</h5>
									<form method="POST" action="controller/function.php" class="form-horizontal">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3">
													<label>Menü Adı</label>
													<input type="text" name="omenu_ad" placeholder="Menü adı giriniz." class="form-control">
												</div>
												<div class="col-md-3">
													<label>Menü Link</label>
													<input type="text" name="omenu_link" placeholder="Menü linki giriniz." class="form-control">
												</div>
												<div class="col-md-2">
													<label>Menü Sıra</label>
													<input type="text" name="omenu_sira" placeholder="Menü sıra giriniz." class="form-control">
												</div>
												<div class="col-md-2">
													<label>Üst Menü</label>
													<select name="omenu_ust" class="form-control m-b">
														<option value="0">-ÜST MENÜ YOK-</option>
														<?php  
														$menulist=$db->prepare("SELECT * from omenu3 where omenu_ust=0 order by omenu_sira DESC");
														$menulist->execute(); 
														while($menulistprint=$menulist->fetch(PDO::FETCH_ASSOC)) { ?>
															<option value="<?php echo $menulistprint['omenu_id']; ?>"><?php echo $menulistprint['omenu_ad']; ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-2">
													<label>*İşlem</label><div>
														<button style="cursor: pointer;" type="submit" name="omenuekle3" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<br />
									<hr>
									<br />
									<h5 style="color: green;">Var Olan Menüler</h5>
									<?php
									$omenu=$db->prepare("SELECT * from omenu3 order by omenu_sira ASC");
									$omenu->execute(array(0));
									while ($omenuprint=$omenu->fetch(PDO::FETCH_ASSOC)) {
										?>
										<form method="POST" action="controller/function.php" class="form-horizontal">
											<div class="form-group">
												<div class="row">

													<input type="hidden" name="omenu_id" value="<?php echo $omenuprint['omenu_id']; ?>"  class="form-control">
													<div class="col-md-3">
														<label>Menü Adı</label>
														<input type="text" name="omenu_ad" value="<?php echo $omenuprint['omenu_ad']; ?>" class="form-control">
													</div>
													<div class="col-md-3">
														<label>Menü Link</label>
														<input type="text" name="omenu_link" value="<?php echo $omenuprint['omenu_link']; ?>" class="form-control">
													</div><div class="col-md-2">
														<label>Menü Sıra</label>
														<input type="text" name="omenu_sira" value="<?php echo $omenuprint['omenu_sira']; ?>" class="form-control">
													</div>
													<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
													<div class="col-md-2">
														<label>Üst Menü</label>
														<input type="hidden" name="eski_ust" value="<?php echo $omenuprint['omenu_ust']; ?>" class="form-control">
														<select name="omenu_ust" class="form-control m-b">
															<?php 
															$omenedit=$db->prepare("SELECT * from omenu3 where omenu_id=:omenu_id");
															$omenedit->execute(array(
																'omenu_id' => $omenuprint['omenu_ust']
															));

															$VarmiKont=$omenedit->rowCount();
															$omeneditwrite=$omenedit->fetch(PDO::FETCH_ASSOC);
															if ($VarmiKont>='1') {
																?><option value="<?php echo $omeneditwrite['omenu_id']; ?>"> <?php echo $omeneditwrite['omenu_ad']; ?></option> <?php
															} else {
																?><option value="0"> ÜST MENÜ YOK</option> <?php
															} 
															?><option value="0"> ÜST MENÜ YOK</option> <?php
															$menulistix=$db->prepare("SELECT * from omenu3 where omenu_ust=0 order by omenu_sira DESC");
															$menulistix->execute(); 
															while($menulistprintx=$menulistix->fetch(PDO::FETCH_ASSOC)) { ?>
																<option value="<?php echo $menulistprintx['omenu_id']; ?>"><?php echo $menulistprintx['omenu_ad']; ?></option>
															<?php } ?>
														</select>
													</div>
													<div class="col-md-2">
														<label>*İşlem</label><div>
															<button style="cursor: pointer;" type="submit" name="omenuduzenle3" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
															<a href="controller/function.php?omenu3sil=ok&omenu_id=<?php echo $omenuprint['omenu_id']; ?>&omenu_ust=<?php echo $omenuprint['omenu_ust']; ?>" style="cursor: pointer;" type="submit" name="omenusil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
														</div>
													</div>
												</div>
											</div>
										</form>
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




























</div>
</div>
<?php include 'footer.php'; ?>
