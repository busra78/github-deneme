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
		<h2>Anasayfa Modül İşlemleri</h2>
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
									$widget=$db->prepare("SELECT * from widget");
									$widget->execute(array(0));
									$widgetprint=$widget->fetch(PDO::FETCH_ASSOC);
									?>

									<form method="POST" action="controller/function.php" class="form-horizontal">	

										<input type="hidden" name="widget_id" value="1"  class="form-control">	

										<hr>


										<hr>
										<div class="form-group">
											<label>Footer Menü Başlıkları</label>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_bwelcome1" value="<?php echo htmlspecialchars($widgetprint['widget_bwelcome1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_byorum" value="<?php echo htmlspecialchars($widgetprint['widget_byorum']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_burun" value="<?php echo htmlspecialchars($widgetprint['widget_burun']); ?>" class="form-control">
												</div>						
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>SweeAlert Uyarı Pencereleri</label>
											<div class="row">
												<div class="col-md-3">
													<input type="text" name="widget_ceviri4" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri4']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri5" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri5']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri6" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri6']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri7" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri7']); ?>" class="form-control">
												</div>						
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>Çeviri Alanları</label>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_ceviri3" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri3']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_welcome1" value="<?php echo htmlspecialchars($widgetprint['widget_welcome1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ufiyat" value="<?php echo htmlspecialchars($widgetprint['widget_ufiyat']); ?>" class="form-control">
												</div>
											</div><br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_usatinal" value="<?php echo htmlspecialchars($widgetprint['widget_usatinal']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_yorum" value="<?php echo htmlspecialchars($widgetprint['widget_yorum']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_ara" value="<?php echo htmlspecialchars($widgetprint['widget_ara']); ?>" class="form-control">
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_bara" value="<?php echo htmlspecialchars($widgetprint['widget_bara']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_bproje" value="<?php echo htmlspecialchars($widgetprint['widget_bproje']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_hizmetyo" value="<?php echo htmlspecialchars($widgetprint['widget_hizmetyo']); ?>" class="form-control">
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_projeyo" value="<?php echo htmlspecialchars($widgetprint['widget_projeyo']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_urunyo" value="<?php echo htmlspecialchars($widgetprint['widget_urunyo']); ?>" class="form-control">
												</div>			
												<div class="col-md-4">
													<input type="text" name="widget_blogyo" value="<?php echo htmlspecialchars($widgetprint['widget_blogyo']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_proje" value="<?php echo htmlspecialchars($widgetprint['widget_proje']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_referans" value="<?php echo htmlspecialchars($widgetprint['widget_referans']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_bbilgi" value="<?php echo htmlspecialchars($widgetprint['widget_bbilgi']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_counter" value="<?php echo htmlspecialchars($widgetprint['widget_counter']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_diger" value="<?php echo htmlspecialchars($widgetprint['widget_diger']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_bdiger" value="<?php echo htmlspecialchars($widgetprint['widget_bdiger']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_breferans" value="<?php echo htmlspecialchars($widgetprint['widget_breferans']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ceviri1" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ceviri2" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri2']); ?>" class="form-control">
												</div>						
											</div>
											<br>
										</div>		

										<hr>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Modül Adı</label>
													<input type="text" name="widget_bhizmet" value="<?php echo htmlspecialchars($widgetprint['widget_bhizmet']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Modül Durum</label>
													<select name="widget_hizmet" class="form-control m-b">
														<?php if ($widgetprint['widget_hizmet']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text"  placeholder="Bilgi / İnfo Alanı" readonly class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_bilgi" class="form-control m-b">
														<?php if ($widgetprint['widget_bilgi']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bblog" value="<?php echo htmlspecialchars($widgetprint['widget_bblog']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_blog" class="form-control m-b">
														<?php if ($widgetprint['widget_blog']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>									
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bgaleri" placeholder="Html Alan" readonly="" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_galeri" class="form-control m-b">
														<?php if ($widgetprint['widget_galeri']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bwelcome" value="<?php echo htmlspecialchars($widgetprint['widget_bwelcome']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_welcome" class="form-control m-b">
														<?php if ($widgetprint['widget_welcome']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>	



										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text"  placeholder="Sayfalar Yorum Modülü" readonly class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_sayfayo" class="form-control m-b">
														<?php if ($widgetprint['widget_sayfayo']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>			
										<button style="cursor: pointer;" type="submit" name="widgetduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
									</form>




























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
									$widget=$db->prepare("SELECT * from widget2");
									$widget->execute(array(0));
									$widgetprint=$widget->fetch(PDO::FETCH_ASSOC);
									?>

									<form method="POST" action="controller/function.php" class="form-horizontal">	

										<input type="hidden" name="widget_id" value="1"  class="form-control">	
										<div class="form-group">
											<div class="row">								
												<div class="col-md-6">
													<label>Rezervasyon formunda bulunan sözleşmeyi seçiniz. <small style="color: red;">Oluşturduğunuz sayfalardan seçim yapabilirsiniz.</small> </label>
													<select name="widget_btwitter" class="form-control m-b">
														<?php 
														$kategoriedit=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id");
														$kategoriedit->execute(array(
															'sayfa_id' => $widgetprint['widget_btwitter']
														));
														$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
														?>
														<option value="<?php echo $kategoriwrite['sayfa_id'] ?>"><?php echo $kategoriwrite['sayfa_baslik'] ?></option>
														<?php 
														$kategorisor=$db->prepare("SELECT * from sayfalar");
														$kategorisor->execute(array(0));
														while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
															?>
															<option value="<?php echo $kategoricek['sayfa_id'] ?>"><?php echo $kategoricek['sayfa_baslik'] ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-6">
													<label>Modül Durum</label>
													<select name="widget_twitter" class="form-control m-b">
														<?php if ($widgetprint['widget_twitter']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<hr>

										<div class="form-group">
											<label>Rezervasyon Alanı</label>
											<div class="row">
												<div class="col-md-2">
													<label>Başlık</label>
													<input type="text" name="widget_urun" value="<?php echo htmlspecialchars($widgetprint['widget_urun']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezgidis" value="<?php echo htmlspecialchars($widgetprint['widget_rezgidis']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezdonus" value="<?php echo htmlspecialchars($widgetprint['widget_rezdonus']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezyetiskin" value="<?php echo htmlspecialchars($widgetprint['widget_rezyetiskin']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezcocuk" value="<?php echo htmlspecialchars($widgetprint['widget_rezcocuk']); ?>" class="form-control">
												</div>
												<div class="col-md-1">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezbuton" value="<?php echo htmlspecialchars($widgetprint['widget_rezbuton']); ?>" class="form-control">
												</div>
												<div class="col-md-1">
													<label>Modül Durum</label>
													<select name="widget_rez" class="form-control m-b">
														<?php if ($widgetprint['widget_rez']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>Footer Menü Başlıkları</label>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_bwelcome1" value="<?php echo htmlspecialchars($widgetprint['widget_bwelcome1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_byorum" value="<?php echo htmlspecialchars($widgetprint['widget_byorum']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_burun" value="<?php echo htmlspecialchars($widgetprint['widget_burun']); ?>" class="form-control">
												</div>						
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>SweeAlert Uyarı Pencereleri</label>
											<div class="row">
												<div class="col-md-3">
													<input type="text" name="widget_ceviri4" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri4']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri5" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri5']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri6" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri6']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri7" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri7']); ?>" class="form-control">
												</div>						
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>Çeviri Alanları</label>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_ceviri3" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri3']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_welcome1" value="<?php echo htmlspecialchars($widgetprint['widget_welcome1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ufiyat" value="<?php echo htmlspecialchars($widgetprint['widget_ufiyat']); ?>" class="form-control">
												</div>
											</div><br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_usatinal" value="<?php echo htmlspecialchars($widgetprint['widget_usatinal']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_yorum" value="<?php echo htmlspecialchars($widgetprint['widget_yorum']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_ara" value="<?php echo htmlspecialchars($widgetprint['widget_ara']); ?>" class="form-control">
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_bara" value="<?php echo htmlspecialchars($widgetprint['widget_bara']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_bproje" value="<?php echo htmlspecialchars($widgetprint['widget_bproje']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_hizmetyo" value="<?php echo htmlspecialchars($widgetprint['widget_hizmetyo']); ?>" class="form-control">
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_projeyo" value="<?php echo htmlspecialchars($widgetprint['widget_projeyo']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_urunyo" value="<?php echo htmlspecialchars($widgetprint['widget_urunyo']); ?>" class="form-control">
												</div>			
												<div class="col-md-4">
													<input type="text" name="widget_blogyo" value="<?php echo htmlspecialchars($widgetprint['widget_blogyo']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_proje" value="<?php echo htmlspecialchars($widgetprint['widget_proje']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_referans" value="<?php echo htmlspecialchars($widgetprint['widget_referans']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_bbilgi" value="<?php echo htmlspecialchars($widgetprint['widget_bbilgi']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_counter" value="<?php echo htmlspecialchars($widgetprint['widget_counter']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_diger" value="<?php echo htmlspecialchars($widgetprint['widget_diger']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_bdiger" value="<?php echo htmlspecialchars($widgetprint['widget_bdiger']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_breferans" value="<?php echo htmlspecialchars($widgetprint['widget_breferans']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ceviri1" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ceviri2" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri2']); ?>" class="form-control">
												</div>						
											</div>
											<br>
										</div>		

										<hr>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Modül Adı</label>
													<input type="text" name="widget_bhizmet" value="<?php echo htmlspecialchars($widgetprint['widget_bhizmet']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Modül Durum</label>
													<select name="widget_hizmet" class="form-control m-b">
														<?php if ($widgetprint['widget_hizmet']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text"  placeholder="Bilgi / İnfo Alanı" readonly class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_bilgi" class="form-control m-b">
														<?php if ($widgetprint['widget_bilgi']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bblog" value="<?php echo htmlspecialchars($widgetprint['widget_bblog']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_blog" class="form-control m-b">
														<?php if ($widgetprint['widget_blog']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>									
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bgaleri" placeholder="Html Alan" readonly="" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_galeri" class="form-control m-b">
														<?php if ($widgetprint['widget_galeri']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bwelcome" value="<?php echo htmlspecialchars($widgetprint['widget_bwelcome']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_welcome" class="form-control m-b">
														<?php if ($widgetprint['widget_welcome']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>	



										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text"  placeholder="Sayfalar Yorum Modülü" readonly class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_sayfayo" class="form-control m-b">
														<?php if ($widgetprint['widget_sayfayo']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>			
										<button style="cursor: pointer;" type="submit" name="widgetduzenle2" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
									</form>





















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
									$widget=$db->prepare("SELECT * from widget3");
									$widget->execute(array(0));
									$widgetprint=$widget->fetch(PDO::FETCH_ASSOC);
									?>

									<form method="POST" action="controller/function.php" class="form-horizontal">	

										<input type="hidden" name="widget_id" value="1"  class="form-control">	
										<div class="form-group">
											<div class="row">								
												<div class="col-md-6">
													<label>Rezervasyon formunda bulunan sözleşmeyi seçiniz. <small style="color: red;">Oluşturduğunuz sayfalardan seçim yapabilirsiniz.</small> </label>
													<select name="widget_btwitter" class="form-control m-b">
														<?php 
														$kategoriedit=$db->prepare("SELECT * from sayfalar where sayfa_id=:sayfa_id");
														$kategoriedit->execute(array(
															'sayfa_id' => $widgetprint['widget_btwitter']
														));
														$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
														?>
														<option value="<?php echo $kategoriwrite['sayfa_id'] ?>"><?php echo $kategoriwrite['sayfa_baslik'] ?></option>
														<?php 
														$kategorisor=$db->prepare("SELECT * from sayfalar");
														$kategorisor->execute(array(0));
														while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {
															?>
															<option value="<?php echo $kategoricek['sayfa_id'] ?>"><?php echo $kategoricek['sayfa_baslik'] ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col-md-6">
													<label>Modül Durum</label>
													<select name="widget_twitter" class="form-control m-b">
														<?php if ($widgetprint['widget_twitter']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<hr>

										<div class="form-group">
											<label>Rezervasyon Alanı</label>
											<div class="row">
												<div class="col-md-2">
													<label>Başlık</label>
													<input type="text" name="widget_urun" value="<?php echo htmlspecialchars($widgetprint['widget_urun']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezgidis" value="<?php echo htmlspecialchars($widgetprint['widget_rezgidis']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezdonus" value="<?php echo htmlspecialchars($widgetprint['widget_rezdonus']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezyetiskin" value="<?php echo htmlspecialchars($widgetprint['widget_rezyetiskin']); ?>" class="form-control">
												</div>
												<div class="col-md-2">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezcocuk" value="<?php echo htmlspecialchars($widgetprint['widget_rezcocuk']); ?>" class="form-control">
												</div>
												<div class="col-md-1">
													<label>Modül Adı</label>
													<input type="text" name="widget_rezbuton" value="<?php echo htmlspecialchars($widgetprint['widget_rezbuton']); ?>" class="form-control">
												</div>
												<div class="col-md-1">
													<label>Modül Durum</label>
													<select name="widget_rez" class="form-control m-b">
														<?php if ($widgetprint['widget_rez']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>Footer Menü Başlıkları</label>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_bwelcome1" value="<?php echo htmlspecialchars($widgetprint['widget_bwelcome1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_byorum" value="<?php echo htmlspecialchars($widgetprint['widget_byorum']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_burun" value="<?php echo htmlspecialchars($widgetprint['widget_burun']); ?>" class="form-control">
												</div>						
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>SweeAlert Uyarı Pencereleri</label>
											<div class="row">
												<div class="col-md-3">
													<input type="text" name="widget_ceviri4" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri4']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri5" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri5']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri6" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri6']); ?>" class="form-control">
												</div>
												<div class="col-md-3">
													<input type="text" name="widget_ceviri7" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri7']); ?>" class="form-control">
												</div>						
											</div>
										</div>
										<hr>
										<div class="form-group">
											<label>Çeviri Alanları</label>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_ceviri3" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri3']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_welcome1" value="<?php echo htmlspecialchars($widgetprint['widget_welcome1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ufiyat" value="<?php echo htmlspecialchars($widgetprint['widget_ufiyat']); ?>" class="form-control">
												</div>
											</div><br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_usatinal" value="<?php echo htmlspecialchars($widgetprint['widget_usatinal']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_yorum" value="<?php echo htmlspecialchars($widgetprint['widget_yorum']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_ara" value="<?php echo htmlspecialchars($widgetprint['widget_ara']); ?>" class="form-control">
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_bara" value="<?php echo htmlspecialchars($widgetprint['widget_bara']); ?>" class="form-control">
												</div>	
												<div class="col-md-4">
													<input type="text" name="widget_bproje" value="<?php echo htmlspecialchars($widgetprint['widget_bproje']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_hizmetyo" value="<?php echo htmlspecialchars($widgetprint['widget_hizmetyo']); ?>" class="form-control">
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_projeyo" value="<?php echo htmlspecialchars($widgetprint['widget_projeyo']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_urunyo" value="<?php echo htmlspecialchars($widgetprint['widget_urunyo']); ?>" class="form-control">
												</div>			
												<div class="col-md-4">
													<input type="text" name="widget_blogyo" value="<?php echo htmlspecialchars($widgetprint['widget_blogyo']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_proje" value="<?php echo htmlspecialchars($widgetprint['widget_proje']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_referans" value="<?php echo htmlspecialchars($widgetprint['widget_referans']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_bbilgi" value="<?php echo htmlspecialchars($widgetprint['widget_bbilgi']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_counter" value="<?php echo htmlspecialchars($widgetprint['widget_counter']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_diger" value="<?php echo htmlspecialchars($widgetprint['widget_diger']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_bdiger" value="<?php echo htmlspecialchars($widgetprint['widget_bdiger']); ?>" class="form-control">
												</div>						
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<input type="text" name="widget_breferans" value="<?php echo htmlspecialchars($widgetprint['widget_breferans']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ceviri1" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri1']); ?>" class="form-control">
												</div>
												<div class="col-md-4">
													<input type="text" name="widget_ceviri2" value="<?php echo htmlspecialchars($widgetprint['widget_ceviri2']); ?>" class="form-control">
												</div>						
											</div>
											<br>
										</div>		

										<hr>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<label>Modül Adı</label>
													<input type="text" name="widget_bhizmet" value="<?php echo htmlspecialchars($widgetprint['widget_bhizmet']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<label>Modül Durum</label>
													<select name="widget_hizmet" class="form-control m-b">
														<?php if ($widgetprint['widget_hizmet']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text"  placeholder="Bilgi / İnfo Alanı" readonly class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_bilgi" class="form-control m-b">
														<?php if ($widgetprint['widget_bilgi']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bblog" value="<?php echo htmlspecialchars($widgetprint['widget_bblog']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_blog" class="form-control m-b">
														<?php if ($widgetprint['widget_blog']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>									
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bgaleri" placeholder="Html Alan" readonly="" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_galeri" class="form-control m-b">
														<?php if ($widgetprint['widget_galeri']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text" name="widget_bwelcome" value="<?php echo htmlspecialchars($widgetprint['widget_bwelcome']); ?>" class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_welcome" class="form-control m-b">
														<?php if ($widgetprint['widget_welcome']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>	



										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="text"  placeholder="Sayfalar Yorum Modülü" readonly class="form-control">
												</div>
												<div class="col-md-6">
													<select name="widget_sayfayo" class="form-control m-b">
														<?php if ($widgetprint['widget_sayfayo']==1) { ?>
															<option value="1">Aktif</option>
															<option value="0">Pasif</option>
															<?php
														} else {?>
															<option value="0">Pasif</option>
															<option value="1">Aktif</option>
														<?php }?>
													</select>
												</div>							
											</div>
										</div>			
										<button style="cursor: pointer;" type="submit" name="widgetduzenle3" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>
									</form>




								</div>
							</div>
							<!-- FORM SON -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>














































	<div class="card">
		<div class="card-heading card-default">
			Modül Düzenle
		</div>
		<div class="card-block">




			<!-- AYAR  -->

			<!--#AYAR  -->






		</div>
	</div>
</div>
</div>
<?php include 'footer.php'; ?>
