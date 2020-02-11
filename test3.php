

<style>table { border-collapse: collapse; } td { border-bottom: 1px solid #cccccc; text-align: center; } th { border-bottom: 3px double #cccccc; } </style>

<table>
<b>Isi Array Berurutan</b>
<br/><br/>
	<tr>
		<th>#</th>
		<th>isi array</th>
	</tr>



	<?php

	$array = array(20,10,100,30,15,5); 
	asort($array);
	$n=1;
	foreach($array as $ikey => $x_value){
	
	?>

	<tr>
		<td><?php echo $n++; ?></td>
		<td><?php echo $x_value; ?></td>
	</tr>



	<?php

		$ikey = $x_value;
	}

	?>



</table>
<br/>
<br/>
<body>
	<a href="3.php">
		<button style="background-color:red; heigh: 80px; width:80px">Back</button>
	</a>
</body>