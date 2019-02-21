<?php
header('Content-Type: text/html; charset=utf-8');


	
		echo  "обьем куба" ;
		$s = 15; // ширина стороны
		echo pow($s,3);
	?>
<br>
<br>

	<?php
 		 echo " длина вектора <br>" ;
		$ax = 0;
		$ay = 4;
		$az = 6;
		$a = (pow($ax,2)+pow($ay,2)+pow($az,2));
		$s = sqrt($a)
		echo($s);
	?>
<br>
<br>

	<?php
 		echo "перевод км/ч в м/с";
		$u = 35;
		echo "скорость = $u км/ч" . $U. '<br>';
		
		echo ($u * 1000 / 3600 . " м/с");
	?>
<br>
<br>

	<?php
	echo "получить число а^4"; 

	$a = 5;
	echo pow($a,4);
?>
?>
