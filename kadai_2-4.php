<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>sample</title>
</head>
<body>
<form action="kadai_2-4.php" method="post">
  削除：<br />
  <input type="text" name="delete" size="30" value="" /><br />
  <br />
  <input type="submit" value="送信" />
</form>
<?PHP
  $delete = $_POST["delete"];

  if ($delete > 0){
    $fp = file('kadai_2-2.txt');
    $fpn = fopen("kadai_2-2.txt", "w");
    foreach($fp as $ar) {
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
?>
</body>
</html>

