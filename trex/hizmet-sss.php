<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$ssssor=$db->prepare("SELECT * from hsss where sss_hizmet=:HizmetID order by sss_sira ASC");
$ssssor->execute(array('HizmetID' => $_GET['hizmet_id']));


if (!isset($_GET['hizmet_id'])) {
	Header( "Location:hizmetler.php" );
}

?>
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Sık Sorulan Sorular</h2>
	</div>
	
	
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="hizmet-sss-ekle.php?hizmet_id=<?php echo $_GET['hizmet_id']; ?>" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> SSS Ekle</a>
					</div>
					<div class="pull-right mt-10" style="margin-right: 20px;">
						<a href="hizmetler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Sık Sorulan Sorular
				</div>

				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-center">
									<strong>SSS Sira</strong>
								</th>
								<th class="text-left">
									<strong>Soru</strong>
								</th>
								<th class="text-left">
									<strong>Cevap</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							while ($ssscek=$ssssor->fetch(PDO::FETCH_ASSOC)) {
								$ssscevap= mb_substr(strip_tags($ssscek['sss_cevap']), 0, 80, 'UTF-8')."...";
								?>
								<tr>
									<td><?php echo $ssscek['sss_sira']; ?></td>
									<td><?php echo $ssscek['sss_soru']; ?></td>
									<td><?php echo $ssscevap; ?></td>
									<td class="text-center">
										<a href="hizmet-sss-duzenle.php?sss_id=<?php echo $ssscek['sss_id']; ?>&hizmet_id=<?php echo $_GET['hizmet_id']; ?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="controller/function.php?hssssil=ok&sss_id=<?php echo $ssscek['sss_id']; ?>&hizmet_id=<?php echo $_GET['hizmet_id']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
