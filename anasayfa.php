<h2 class="page-title">Anasayfa</h2>
<?php include("kategoriler.php"); ?>
<div class="haberler">
	<?php 
		$kategoriID = @$_GET["kategori"]; 
		if(!empty($kategoriID))
		$sonuc = mysql_query("Select * From haberler Where KategoriID = ".$kategoriID);
		else
		$sonuc = mysql_query("Select * From haberler");
			
		while($satir = mysql_fetch_array($sonuc)){
	?> 
	<div class="haber">
	    <h2 class="page-title"><?php echo $satir["Baslik"]; ?></h2>
		<div><?php echo $satir["Icerik"]; ?></div>
		<div class="devami"> <a href="#">Devamı...</a></div>
	</div>   
	<?php } ?>
</div>