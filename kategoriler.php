<div class="kategoriler"> 
	<ul> 
		<li> Kategoriler </li>
		<?php 
		 $result = mysql_query("Select * From haberkategorileri");
			while($row = mysql_fetch_array($result)){
		?>
		<li><a href="?anasayfa&kategori=<?php echo $row['ID']; ?>"> <?php echo $row['KategoriAdi']; ?> </a></li> 
		<?php } ?>
	</ul> 
</div>