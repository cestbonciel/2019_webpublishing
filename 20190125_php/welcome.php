

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>title</title>
</head>
<body>
<h1>입력내용입니다.</h1>
환영합니다. <?php echo $_POST["name"]; ?> 님<br>
이메일: <?php echo $_POST["email"]; ?><br>
핸드폰: <?php echo $_POST["phone"]; ?>

<hr>
<h3>개인정보</h3>
성별: <?php echo $_POST["user-s"]; ?><br>
생년월일 <?php echo $_POST["year"]; ?> / <?php echo $_POST["month"]; ?><br>


</body>
</html>