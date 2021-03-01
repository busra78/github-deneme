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
		<h2>Ürün İşlemleri</h2>
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
									<a href="oda.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
								</div>
								Emlak Düzenle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<input type="hidden" name="urun_kategori" value="1">
										<input type="hidden" name="urun_kisaaciklama" value="1">
									</div>

									<div class="form-group">
										<label>Emlak Başlık </label>
										<input type="text" name="urun_baslik" placeholder="Başlık giriniz" class="form-control">
									</div>

									<div class="form-group">
										<label>Emlak Fiyat</label>
										<div class="input-group col-md-4">
											<span class="input-group-addon"><?php echo $dil1print['dil_birim']; ?></span>
											<input type="text" name="urun_fiyat" placeholder="Fiyat giriniz" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label>Açıklama </label>
										<textarea class="summernote" name="urun_aciklama"></textarea>
									</div>

									<input type="hidden" name="eski_yol" value="<?php echo $urunwrite['urun_resim']; ?>">

									<div class="form-group">
										<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
											<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
											<span class="input-group-addon btn btn-primary btn-file ">
												<span class="fileinput-new">Yeni Yükle</span>
												<span class="fileinput-exists">Değiştir</span>
												<input type="file"  name="urun_resim">
											</span>
											<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
										</div>
									</div>

									<div class="form-group">
										<label>Vitrinde Göster</label>
										<select name="urun_vitrin" class="form-control m-b">
											<?php if ($urunwrite['urun_vitrin']==1) { ?>
												<option value="1">Göster</option>
												<option value="0">Gizle</option>
												<?php
											} else {?>
												<option value="0">Gizle</option>
												<option value="1">Göster</option>
											<?php }?>
										</select>
										<small class="text-muted">Ürünler ana sayfada gösterilecektir</small>
									</div>

                                    <div class="form-group">
                                        <label>Adres Detayları </label>
                                        <input type="text" name="urun_title3"  placeholder="Adres Giriniz."  class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label>m² (Brüt) </label>
                                        <input type="text" name="urun_baslik2"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>m² (Net) </label>
                                        <input type="text" name="urun_baslik3"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Oda Sayısı </label>
                                        <input type="text" name="urun_keyword2"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Bina Yaşı </label>
                                        <input type="text" name="urun_fiyat2"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>


                                    <div class="form-group">
										<label>Balkon </label>
										<select name="urun_fiyat3" class="form-control m-b">

												<option value="Var">Var</option>
												<option value="Yok">Yok</option>

										</select>
                                    </div>

                                    <div class="form-group">
                                        <label>Bulunduğu Kat </label>
                                        <input type="text" name="urun_aciklama3"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label>Kat Sayısı </label>
                                        <input type="text" name="urun_title2"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>

									<div class="form-group">
                                        <label>Isıtma </label>
                                        <input type="text" name="araba_motor_gucu"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>

									<div class="form-group">
                                        <label>Banyo Sayısı </label>
                                        <input type="text" name="araba_motor_hacim"  placeholder="Başlık giriniz"  class="form-control">
                                    </div>

									<div class="form-group">
                                        <label>Eşyalı </label>
                                        <select name="araba_model" class="form-control m-b">
                                            <?php if ($urunwrite['araba_model']=="Evet") { ?>
                                                <option value="Evet">Evet</option>
                                                <option value="Hayır">Hayır</option>
                                                <?php
                                            }
                                            else{?>
                                                <option value="Hayır">Hayır</option>
                                                <option value="Evet">Evet</option>
                                            <?php }?>
                                        </select>
                                    </div>

									<div class="form-group">
                                        <label>Site İçerisinde </label>
                                        <select name="araba_cekis" class="form-control m-b">
                                            <?php if ($urunwrite['araba_cekis']=="Evet") { ?>
                                                <option value="Evet">Evet</option>
                                                <option value="Hayır">Hayır</option>
                                                <?php
                                            } else{?>
                                                <option value="Hayır">Hayır</option>
                                                <option value="Evet">Evet</option>
                                            <?php }?>
                                        </select>
                                    </div>

									<div class="form-group">
                                        <label>Aidat </label>
                                        <input type="text" name="araba_renk"  placeholder="Aidat giriniz"  class="form-control">
                                    </div>

									<div class="form-group">
                                        <label>Krediye Uygun Mu? </label>
                                        <select name="araba_durum" class="form-control m-b">
                                            <?php if ($urunwrite['araba_durum']=="Evet") { ?>
                                                <option value="Evet">Evet</option>
                                                <option value="Hayır">Hayır</option>
                                                <?php
                                            } else{?>
                                                <option value="Hayır">Hayır</option>
                                                <option value="Evet">Evet</option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Görüntülü Arama İle Gezilebilir Mi?  </label>
                                        <select name="urun_descr2" class="form-control m-b">
                                            <?php if ($urunwrite['urun_descr2']=="Evet") { ?>
                                                <option value="Evet">Evet</option>
                                                <option value="Hayır">Hayır</option>
                                                <?php
                                            } else{?>
                                                <option value="Hayır">Hayır</option>
                                                <option value="Evet">Evet</option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Takas </label>
                                        <select name="urun_descr3" class="form-control m-b">
                                            <?php if ($urunwrite['urun_descr3']=="Evet") { ?>
                                                <option value="Evet">Evet</option>
                                                <option value="Hayır">Hayır</option>
                                                <?php
                                            } else{?>
                                                <option value="Hayır">Hayır</option>
                                                <option value="Evet">Evet</option>
                                            <?php }?>
                                        </select>
                                    </div>




									<hr>

									<div class="">
										<b style="color: red;">*SEO Meta Ayarları</b>
										<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
									</div>
									<div class="form-group">
										<label>Title </label>
										<input type="text" name="urun_title" placeholder="Title giriniz"  class="form-control form-control-rounded">
									</div>
									<div class="form-group">
										<label>Description </label>
										<input name="urun_descr" type="text" placeholder="Description giriniz"  class="form-control form-control-rounded">
									</div>
									
									<div class="form-group">
										<label>Keywords </label>
										<input type="text" name="urun_keyword" placeholder="Keywords giriniz" class="form-control form-control-rounded">
										<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
									</div>

									<button style="cursor: pointer;" type="submit" name="odaekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>KAYDET</button>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="oda.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Araç Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->
									<?php
									if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Araç Başlık </label>
											<input type="text" name="urun_baslik2"  placeholder="Başlık giriniz"  class="form-control">
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Araç Fiyat </label>
											<div class="input-group col-md-4">
												<span class="input-group-addon"><?php echo $dil2print['dil_birim']; ?></span>
												<input type="text" name="urun_fiyat2"  placeholder="Fiyat giriniz"  class="form-control">
											</div>     	
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>

										<div class="form-group">
											<label>Açıklama </label> 
											<textarea class="summernote" name="urun_aciklama2"></textarea>
										</div>	
									<?php }   if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="urun_title2" placeholder="Title giriniz" class="form-control form-control-rounded">
										</div>
									<?php }  if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="urun_descr2" type="text" placeholder="Description giriniz" class="form-control form-control-rounded">
										</div>
									<?php } if ($dil2print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="urun_keyword2" placeholder="Keywords giriniz" class="form-control form-control-rounded">
											<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
										</div>
									<?php } ?> 
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
							<div class="widget white-bg">
								<div class="card-heading card-default">
									<div class="pull-right mt-10">
										<a href="oda.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
									</div>
									Araç Düzenle
								</div>
								<div class="card-block">
									<!-- TEMA ARKAPLAN -->

									<?php if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Araç Başlık </label>
											<input type="text" name="urun_baslik3" placeholder="Başlık giriniz" class="form-control">
										</div>
									<?php }  if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Araç Fiyat </label>
											<div class="input-group col-md-4">
												<span class="input-group-addon"><?php echo $dil3print['dil_birim']; ?></span>
												<input type="text" name="urun_fiyat3" placeholder="Fiyat giriniz" class="form-control">
											</div>     	
										</div>
									<?php }  if ($dil3print['dil_durum']==1) { ?>

										<div class="form-group">
											<label>Açıklama </label> 
											<textarea class="summernote" name="urun_aciklama3"></textarea>
										</div>	
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Title </label>
											<input type="text" name="urun_title3" placeholder="Title giriniz" class="form-control form-control-rounded">
										</div>							
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Description </label>
											<input name="urun_descr3" type="text" placeholder="Description giriniz" class="form-control form-control-rounded">
										</div>						
									<?php } if ($dil3print['dil_durum']==1) { ?>
										<div class="form-group">
											<label>Keywords </label>
											<input type="text" name="urun_keyword3" placeholder="Keywords giriniz" class="form-control form-control-rounded">
											<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
										</div>					
									<?php } ?>

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
