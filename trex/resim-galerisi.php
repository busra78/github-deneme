<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$picsor=$db->prepare("SELECT * from resimgaleri where resim_album=:album order by resim_id DESC");
$picsor->execute(array(
	'album' => $_GET['album']
));
if (!isset($_GET['album'])) {
	Header( "Location:albumler.php" );
}

$kategoriedit=$db->prepare("SELECT * from albumler where kategori_id=:kategori_id");
$kategoriedit->execute(array(
	'kategori_id' => $_GET['album']
));
$kategoriwrite=$kategoriedit->fetch(PDO::FETCH_ASSOC);
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Galeri İşlemleri</h2>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="resim-ekle.php?album=<?php echo $kategoriwrite['kategori_id'] ?>" class="btn btn-success btn-icon"><i class="fa fa-download"></i>Resim Yükle</a>
					</div>
					<div class="pull-right mt-10" style="margin-right: 20px;">
						<a href="resim-albumler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Resim Galerisi
				</div>
				<div class="card-block">
					<div class="lightboxGallery">

						<?php while ($picprint=$picsor->fetch(PDO::FETCH_ASSOC)) { ?>
							<a href="#" data-toggle="modal" data-target="#textModal<?php echo $picprint['resim_id']; ?>"><img style="max-width: 200px; max-height: 200px;" src="<?php echo $picprint['resim_link']; ?>" alt=""></a>
							<div class="modal fade bs-example-modal-lg" id="textModal<?php echo $picprint['resim_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="textModal">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-body">
											<p>
												<img style="max-width: 100%; max-height: 600px;" src="<?php echo $picprint['resim_link']; ?>">
											</p><br>
											<div class="text-center">
												<a href="controller/function.php?resimsil=ok&resim_id=<?php echo $picprint['resim_id']; ?>&resim_album=<?php echo $kategoriwrite['kategori_id'] ?>" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i> Resmi Sil</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div> 

	<!--modal text end-->

	<?php include 'footer.php'; ?>
