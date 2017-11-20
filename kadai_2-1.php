<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>sample</title>
</head>
<body>
<form action="kadai_2-1.php" method="post">
  名前：<br />
  <input type="text" name="name" size="30" value="" /><br />
  コメント：<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  削除：<br />
  <input type="text" name="delete" size="30" value="" /><br />
  編集：<br />
  <input type="text" name="edit" size="30" value="" /><br />
  <br />
  <input type="submit" value="送信" />
</form>
<?php
	$line = file("kadai_2-2.txt");
	$gyousuu = count($line)+1;

	$namae = $_POST["name"];
	$komento = $_POST["comment"];
	$hiniti = date("Y/m/d H:i:s");

	$fp_1 = fopen("kadai_2-2.txt", "a");
	fwrite($fp_1, "{$gyousuu}<>");
	fwrite($fp_1, "{$namae}<>");
	fwrite($fp_1, "{$komento}<>");
	fwrite($fp_1, "{$hiniti}");
	fwrite($fp_1, "\n");
	fclose($fp_1);

	$fp_2 = file('kadai_2-2.txt');
	foreach($fp_2 as $ar) {
	$exp = explode("<>",$ar);
	echo "<pre>";
	print_r($exp);
	echo "</pre>";
	}

  $delete = $_POST["delete"];

  if ($delete > 0){
    $fp_3 = file('kadai_2-2.txt');
    $fpn = fopen("kadai_2-2.txt", "w");
    foreach($fp_3 as $ar) {
      $exp = explode("<>",$ar);
      if ($exp[0] <> $delete){
        $atarashi = "$exp[0]<>$exp[1]<>$exp[2]<>$exp[3]";
        fwrite($fpn, $atarashi);
      }
      else {
      }
    }
    fclose($fpn);
  }

      $edit = $_POST["edit"];
      if ($edit > 0){
            $fp_4 = file("kadai_2-2.txt");
            foreach ($fp_4 as $hennsyuu) {
                  $edit_hennsyuu = explode("<>",$hennsyuu);
                  if ($edit_hennsyuu[0] == $edit ){
			echo '<input type="text" name="coment" value="'.$edit_hennsyuu[1].'"><br />';
                  }
            }
            
      }
?>
<a href="http://co-665.99sv-coco.com/kadai_2-5.php">課題2-5(編集番号入力フォーム)</a>

</body>
</html>

