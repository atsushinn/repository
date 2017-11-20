<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS" />
<title>sample</title>
</head>
<body>
<form action="kadai_1-4.php" method="post">
  コメント：<br />
  <textarea name="comment" cols="30" rows="1"></textarea><br />
  <br />
  <input type="submit" value="送信" />
</form>
  <tr>
    <td><?php echo $_POST["comment"] ?></td>
  </tr>
</body>
</html>