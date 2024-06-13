<?php
@session_start();
include 'baglanti.php';
?>
<!DOCTYPE html>
<head>
	<title>Sistem Girişi</title>
	<meta charset="utf-8">
	<link href="giris.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h3><font size="7px" color="white">Elektikli Araç Şarj İstasyonu Konumlandırma Sistemi</font></h3>
	<div id="frm">
	
		<form action="otopark.php" method="POST">
		
		<h4><b>Yönetici Girişi</b></h4>
		
			<p>
				<label><b>Kullanıcı Adı<b></label>
				<input type="text" id="user" name="user">
			</p>
			<p>
				<label><b>Şifre</b></label>
				<input type="password" id="pass" name="pass">
			</p>
			
				<button type="submit" id="btn" value="login"><b>Giriş</b></button>
			</p>
		</form>
	</div>
</body>
</html>