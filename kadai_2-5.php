<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>sample</title>
</head>
<body>
<form action="kadai_2-5.php" method="post">
  編集：<br />
  <input type="text" name="edit" size="30" value="" /><br />
  <br />
  <input type="submit" value="送信" />
</form>
<?PHP
      $edit = $_POST["edit"];
      if ($edit > 0){
            $fp = file("kadai_2-2.txt");
            foreach ($fp as $hennsyuu) {
                  $edit_hennsyuu = explode("<>",$hennsyuu);
                  if ($edit_hennsyuu[0] == $edit ){
			echo '<input type="text" name="coment" value="'.$edit_hennsyuu[1].'"><br />';
                  }
            }
            
      }
      if ($edit > 0){
            $fp = file("kadai_2-2.txt");
            foreach ($fp as $hennsyuu){
                  $edit_hennsyuu = explode("<>",$hennsyuu);
                  if ($edit_hennsyuu[0] == $edit ){
                        
                  }
            }
      }
?>
</body>
</html>

