<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>サンプル</title>
</head>
<body>
<?php

	$line = file("kadai_2-2.txt");
	$gyousuu = count($line)+1;

	$namae = $_POST["name"];
	$komento = $_POST["comment"];
	$hiniti = date("Y/m/d H:i:s");

	$fp = fopen("kadai_2-2.txt", "a");
	fwrite($fp, "{$gyousuu}<>");
	fwrite($fp, "{$namae}<>");
	fwrite($fp, "{$komento}<>");
	fwrite($fp, "{$hiniti}");
	fwrite($fp, "\n");
	fclose($fp);

?>
</body>
</html>