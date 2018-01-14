<!DOCTYPE html>
<html>
<head>
	<title>
		Kolorpikkeres háttérszínváltoztatós
	</title>
	<script src="jscolor.js"></script>
	</head>
<body>
	<button class="jscolor {onFineChange:'update(this)'}"  value="FFFFFF" ></button>
	<?php

	$nev = 'ゲットだぜ';
	$datum = new \DateTime();
	$datumStr = $datum->format('Y-m-d\TH:i:s');
	$szin = '#dd22dd';

	require 'contents.php';
	?>
</body>
<script>
function update(jscolor) {
    // 'jscolor' instance can be used as a string
    document.body.style.backgroundColor = '#' + jscolor;
}
</script>
</html>


