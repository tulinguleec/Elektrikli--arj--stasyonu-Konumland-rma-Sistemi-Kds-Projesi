<?php 
    @session_start();
	include 'baglanti.php';?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	    <link href="tablo.css" rel="stylesheet">
	    <link rel="shortcut icon" type="image/jpg" href="../img/icon_admin.png"/>
	    <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	    <title>Şarj İstasyonu Olan Otoparklar</title>
	    <style>
	    </style>
    </head>
    <body>
    <section id="left-bar">
    <div id="container">
	
	    <div id="foto">
		    <div class="foto1">
		
			    <img src="migros3.png" width="240px" height="auto" title=""></img>
			
		    </div>
	
	    <div style="width:auto;height:auto">
    </div>
        <a href="otopark.php">Anasayfa</a>
		<a href="harita.php">Otopark Konum</a>
		<a href="grafik2.php">Elektrikli Araç Sayıları</a>
		<a href="tablo.php">Otoparklar</a>
        <a href="ekleme.php">Otoparkların Kullanım Sayıları</a>
		<a href="cikis.php">Çıkış</a>
	</section>
        
        
            <?php
                $magaza=$vt->query('SELECT * FROM sarj_istasyon')->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="container p-5 my-6 bg-grey text-white">
            <table class="table table-striped table-grey table-hover table-sm">
                <tr>
                    <th>İstasyon ID</th>
                    <th>Otopark Adı</th>
					<th>Adres</th>
                    <th>Şarj Sayısı</th>
                </tr>
            <?php
            foreach ($magaza as $magaza_ad) { ?>
                <tr>
                    <td><?=$magaza_ad['istasyon_id']?></td>
                    <td><?=$magaza_ad['otopark_ad']?></td>
					<td><?=$magaza_ad['adres']?></td>
                    <td><?=$magaza_ad['sarj_sayisi']?></td>
                </tr>
        <?php   }
                ?>
                         
            </body>