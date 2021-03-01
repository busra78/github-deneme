<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$urunsor=$db->prepare("SELECT * from urunler order by urun_id ASC");
$urunsor->execute(array(0));
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Emlak İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="oda-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i>Emlak Ekle</a>
					</div>
					Emlaklar
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-left">
									<strong>Emlak Resim</strong>
								</th>
								<th class="text-left">
									<strong>Emlak İsmi</strong>
								</th>
								<th class="text-left">
									<strong>Emlak Açıklama</strong>
								</th>
								<th class="text-center">
									<strong>Resimler</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							while ($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
								$urunaciklama=mb_substr(strip_tags($uruncek['urun_aciklama']), 0, 40, 'UTF-8')."...";
								?>
								<tr>
									<td><img style="max-height: 40px;max-width: 40px;" src="<?php echo $uruncek['urun_resim']; ?>"></td>
									<td><?php echo $uruncek['urun_baslik']; ?></td>
									<td><?php echo $urunaciklama; ?></td>
									<td class="text-center">
										<a href="oda-resim-duzenle.php?urun_id=<?php echo $uruncek['urun_id']; ?>" class="btn btn-primary btn-icon"><i class="icon-picture"></i> Resim Ekle/Çıkar</a>
									</td>
									<td class="text-center">
										<a href="oda-duzenle.php?oda_id=<?php echo $uruncek['urun_id']; ?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="controller/function.php?odasil=ok&oda_id=<?php echo $uruncek['urun_id']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
