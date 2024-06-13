<?php  
@session_start();
include 'baglanti.php';

 
$dataPoints = array(
	array("label"=> "", "y"=> 10),
	array("label"=> "", "y"=> 15),
	array("label"=> "", "y"=> 20),
	array("label"=> "", "y"=> 25),
	array("label"=> "", "y"=> 30),
	array("label"=> "", "y"=> 35),
	array("label"=> "", "y"=> 40),
	array("label"=> "", "y"=> 45),
	array("label"=> "", "y"=> 50),
	array("label"=> "", "y"=> 55)
);
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"kds");

$test=array();

$count=0;
$res=mysqli_query($link,"SELECT* FROM elektrikli_arac_sayi");
while($row=mysqli_fetch_array($res))
{
    $test[$count]["y"]=$row["arac_sayisi"];
	$test[$count]["label"]=$row["ilce_ad"];
	$count=$count+1;


}
	
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	    <link href="grafik2.css" rel="stylesheet">
	    <link rel="shortcut icon" type="image/jpg" href="../img/icon_admin.png"/>
	    <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	    <title>Elektrikli Araç Şarj İstasyonu Konumlandırma Sistemi</title>
    <script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "İlçelere Göre Elektrikli Araç Sayısı"
            },
            axisY: {
		title: "Elektrikli Araç Sayıları"
	    },
	    data: [{
		    type: "column",
		    dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	    }]
    });
chart.render();
 
}
</script>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="logo.png" width="100px" height="auto"></img>
                </div>
                <nav>
                    <ul>
                        <li><a href="otopark.php">Anasayfa</a></li>
                        <li><a href="harita.php">Otopark Konum</a></li>
                        <li><a href="grafik2.php">Elektrikli Araç Sayıları</a></li>
                        <li><a href="tablo.php">Otoparklar</a></li>
                        <li><a href="ekleme.php">Otoparkların Kullanım Sayıları</a></li>
                        <li><a href="cikis.php">Çıkış</a></li>
                    </ul>   
                </nav>
            </div>
        </div>
    </div>
</body>

<body>
<div id="chartContainer" style="position:fixed;
  top: 200px;
  left: 100px;
  right: 0px;
  width: 1300px;
  height: 500px;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>