<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$picsor=$db->prepare("SELECT * from valbumler order by kategori_sira ASC");
$picsor->execute(array(0));

?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Albüm İşlemleri</h2>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10" style="margin-right: 10px;">
						<a href="video-album-ekle.php" class="btn btn-warning btn-icon"><i class="fa fa-plus"></i>Albüm Oluştur</a>
					</div>
					Video Albümleri
				</div>
				<div class="card-block">

					<div class="row">             
						<?php while ($picprint=$picsor->fetch(PDO::FETCH_ASSOC)) { ?>
							<div class="col-md-3" style=" margin-bottom: 20px;"> <a href="video-galerisi.php?album=<?php echo $picprint['kategori_id']; ?>"><img style="width: 100%; margin-bottom: 20px;" src="<?php echo $picprint['kategori_resim']; ?>"><b style="text-align: center; color: #000; border-radius: 5px; border: 1px solid #000; padding: 8px;"><i class="fa fa-link"></i> <?php $karakter = strlen( $picprint['kategori_ad'] ); if ( $karakter > 35 ) { echo mb_substr( strip_tags($picprint['kategori_ad']), 0, 35, 'UTF-8' ) . '...'; } else { echo strip_tags($picprint['kategori_ad']); } ?></b></a>	
								<a href="video-album-duzenle.php?album_id=<?php echo $picprint['kategori_id']; ?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
								<a href="controller/function.php?video-valbumsil=ok&valbum_id=<?php echo $picprint['kategori_id']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>			
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--modal text end-->

	<?php include 'footer.php'; ?>
