<!DOCTYPE html>
<html>
<head>
	<title>Array dengan PHP</title>
</head>
<body>

	<?php 
		$ar_a=array("Bola","Kucing","Pesawat","Jagung","Komputer","Mars",1,5,25,8,12,10,17,20,34);
		print"Isi Array \$ar_a <br>" ;
        print_r($ar_a);
        print" <br>" ;
		$ar_b=array("Jaka","Basket","Supermarket","Pesawat","Sekolah","Seragam","Kucing",23,34,10);
		print("Isi Array \$ar_b<br>");
		print_r($ar_b);
		print("<br>");
		$diff=array_diff($ar_a,$ar_b);
		print("Isi Array \$diff <br>");
		print_r($diff);
		print("<br>");
		$diff=array_diff($ar_b,$ar_a);
		print("Isi Array \$diff <br>");
		print_r($diff);
		print("<br>");
	 ?>

</body>
</html>
