<?php
$jual = 80000;
$beli = 50000;
$untung = $jual - $beli;
$persenUntung = ($untung/$beli)*100;

echo "<p>
			Jual = $jual <br>
			Beli = $beli <br>
			keuntungan = ? <br>
			Jawaban : $persenUntung %
	 </p>";


?>