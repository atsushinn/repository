<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>sample</title>
</head>
<body>
<form action="kadai_1-5.php" method="post">
  �R�����g�F<br />
  <textarea name="comment" cols="30" rows="1"></textarea><br />
  <br />
  <input type="submit" value="���M" />
</form>
</body>
</html>
<?php

$hennsuu = $_POST["comment"];

file_put_contents("kadai_1-5.txt", $hennsuu);

?>