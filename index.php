<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link href="css/screen.css" rel="stylesheet" />
<link href="css/stil.css" type="text/css" media="all" rel="stylesheet">
<title></title>
</head>
<body>

<div id="ustBant">  
<div id="ustAlan">  
	<div id="logo">
		<img src="img/LOGO1.png" class="logo" />
	</div>
	
	<div class="menu">
		<a href="?istek=anasayfa">Ana Sayfa</a> 
		<a href="?istek=RobotNedir">Robot Programlama?</a> 
		<a href="?istek=iletisim">İletişim</a> 
	</div>
 </div>
 </div>

<div id="icerikAlani">
<div id="page">
	<?php
	include('baglan.php');
	$id = @$_GET['istek'];
	if ($id == "RobotNedir" ) 
		include('haber.php');
	else if ( $id == "iletisim" )
		include('iletisim.php');
	else
		include('anasayfa.php');
	?>
	<div class="temizle"></div>
	</div> 
</div>

<div id="altBant">
	<div id="altAlan">
		Her hakkı saklıdır.
	</div>
</div>
</body>
</html>