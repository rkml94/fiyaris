<?php
$date=date_create("2020-11-23");
echo "<b>Praktek 2 point i</b><br/>";
echo date_format($date,"m-y-d");


echo "<br/><br/><b>Praktek 2 point ii</b><br/>";
$dates= date_format($date,"d-m-Y");
$addmonth = date('d-m-Y', strtotime('+6 month', strtotime($dates)));
echo "Tanggal yang diminta : $dates ";
echo "<br />";
echo "Tanggal setelah di tambah 6 bulan : $addmonth";

echo "<br/><br/><b>Praktek 2 point iii</b><br/>";
// tanggal lahir
$tanggal = new DateTime('1994-02-25');

// tanggal hari ini
$today = date_create("2020-11-23");

// tahun
$y = $today->diff($tanggal)->y;

// bulan
$m = $today->diff($tanggal)->m;

// hari
$d = $today->diff($tanggal)->d;
echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>
<br/>
<br/>
<body>
	<a href="home.php">
		<button style="background-color:red; heigh: 80px; width:80px">Back</button>
	</a>
</body>