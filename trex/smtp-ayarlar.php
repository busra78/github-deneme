<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';

$mail=$db->prepare("SELECT * from mail where mail_id=?");
$mail->execute(array(0));
$mailprint=$mail->fetch(PDO::FETCH_ASSOC);
?>	
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">

	<div class="page-header">
		<h2>Genel Ayarlar</h2>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="widget white-bg">
				<!-- FORM BAŞLA -->
				<div class="card-heading card-default">
					SMTP AYARLARI
				</div>
				<div class="card-block">
					<form id="signupForm" method="post" class="form-horizontal" action="controller/function.php">
						<div class="form-group">
							<label>Bildirim Yapılacak Mail</label>
							<input type="text" name="mail_bildirim" value="<?php echo $mailprint['mail_bildirim']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Mail Adresi</label>
							<input type="text" name="mail_user" value="<?php echo $mailprint['mail_user']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Mail Şifre</label>
							<input type="text" name="mail_pass" value="<?php echo $mailprint['mail_pass']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Mail Sunucu</label>
							<input type="text" name="mail_host" value="<?php echo $mailprint['mail_host']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Mail Port</label>
							<input type="text" name="mail_port" value="<?php echo $mailprint['mail_port']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Mail Gönderici</label>
							<input type="text" name="mail_sender" value="<?php echo $mailprint['mail_sender']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Mail Adı</label>
							<input type="text" name="mail_name" value="<?php echo $mailprint['mail_name']; ?>" class="form-control form-control-rounded">
						</div>
						<div class="form-group">
							<label>Durum</label>
							<select name="mail_secure" class="form-control m-b">
								<?php if ($mailprint['mail_secure']=='ssl') { ?>
									<option value="ssl">SSL</option>
									<option value="tls">TLS</option>
									<?php
								} else {?>
									<option value="tls">TLS</option>
									<option value="ssl">SSL</option>
								<?php }?>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="mailayarlari" value="Sign up">Güncelle</button>
						</div>
					</form>
				</div>
				<!-- FORM SON -->
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- 						Content End 							-->
	<!-- ============================================================== -->

	<?php include 'footer.php'; ?>
