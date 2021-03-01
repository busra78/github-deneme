<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$projesor=$db->prepare("SELECT * from projeler order by proje_id DESC");
$projesor->execute(array(0));
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Kadro İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="kadro-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> Kadro Ekle</a>
					</div>
					Kadro
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-left">
									<strong>Kadro id</strong>
								</th>
								<th class="text-left">
									<strong>Kadro Resim</strong>
								</th>
								<th class="text-left">
									<strong>Kadro Adı</strong>
								</th>
								<th class="text-left">
									<strong>Resim Ayarları</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							while ($projecek=$projesor->fetch(PDO::FETCH_ASSOC)) {
								$projeicerik=mb_substr(strip_tags($projecek['proje_icerik']), 0, 40, 'UTF-8')."...";
								?>
								<tr>
									<td>#<?php echo $projecek['proje_id']; ?></td>
									<td><img style="max-height: 40px;max-width: 40px;" src="<?php echo $projecek['proje_resim']; ?>"></td>
									<td><?php echo $projecek['proje_baslik']; ?></td>
									<td class="text-center">
										<a href="kadro-resim-duzenle.php?proje_id=<?php echo $projecek['proje_id']; ?>" class="btn btn-primary btn-icon"><i class="icon-picture"></i> Resim Ayarları</a>
									</td>
									<td class="text-center">
										<a href="kadro-duzenle.php?kadro_id=<?php echo $projecek['proje_id']; ?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="controller/function.php?kadrosil=ok&proje_id=<?php echo $projecek['proje_id']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- İLETİŞİM MESAJLARI -->
	</div>

	<?php include 'footer.php'; ?>
