<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h2>Pratikum 1<h2>
<?php
// Mendefinisikan Variabel
	$nama = "Ahmad Fauzi Ramadhan";
	$umur = 19;
	$berat = 60;
	
	echo $nama;
	echo "<br>Umur " . $nama . " adalah " . $umur . "tahun";
	echo "<br>Berat Badan = " .$berat . "kg";


	
?>

<?php
require_once 'footer.html';
?>