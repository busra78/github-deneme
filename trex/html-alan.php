<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$html=$db->prepare("SELECT * from widget");
$html->execute(array());
$htmlwrite=$html->fetch(PDO::FETCH_ASSOC);
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Ana Sayfa HTML Alan İşlemleri</h2>
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
							<div class="card-heading card-default">
								Biz Kimiz? HTML Alan Düzenle
							</div>
							<div class="card-block">
								<form method="POST" action="controller/function.php" class="form-horizontal">
									<input type="hidden" name="widget_id" value="1">
									<div class="form-group">
										<textarea class="summernote" name="widget_html"><?php echo $htmlwrite['widget_html']; ?></textarea>
									</div>
									<button style="cursor: pointer;" type="submit" name="htmlduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Güncelle</button>

								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil2print['dil_id']; ?>">
							<div class="widget white-bg">
								<!-- FORM BAŞLA -->
								<div class="card-heading card-default">
									Biz Kimiz? HTML Alan Düzenle
								</div>
								<div class="card-block">
									<div class="form-group">
										<textarea class="summernote" name="widget_html2"><?php echo $htmlwrite['widget_html2']; ?></textarea>
									</div>
								</div>
								<!-- FORM SON -->
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="settings<?php echo $dil3print['dil_id']; ?>">
							<div class="widget white-bg">
								<div class="card-heading card-default">
									Biz Kimiz? HTML Alan Düzenle
								</div>
								<div class="card-block">
									<div class="form-group">
										<textarea class="summernote" name="widget_html3"><?php echo $htmlwrite['widget_html3']; ?></textarea>
									</div>
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

<?php include 'footer.php'; ?>
