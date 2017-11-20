<?PHP

	$fp = file('kadai_2-2.txt');
	foreach($fp as $ar) {
	$exp = explode("<>",$ar);

	echo "<pre>";
	print_r($exp);
	echo "</pre>";
	}
?>