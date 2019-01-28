<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>title</title>
</head>
<body>
<h1>자료폼보내기</h1>
<form action="welcome.php" method="post">
<fieldset>
	<label for="user-id">이름</label> <input type="text" name="name" id="user-id"><br>
	<label for="user-email">이메일</label> <input type="text" name="email" id="user-email"><br>
	<label for="user-phone">전화번호</label> <input type="text" name="phone" id="user-phone"><br>
</fieldset>
<fieldset>
	<legend>개인정보</legend>
	<label for="male">남자</label>
    <input type="radio" id="male" name="user-s" value="남자" checked>
    <label for="female">여자</label>
    <input type="radio" id="female" name="user-s" value="여자"><br>
    <label for="user-birth">생일</label>
    <input type="text" id="user-birth" placeholder="년(4자)" maxlength="4" title="년도를 4자리로 입력하세요" name="year">
                        
    <select title="월을 선택하세요" name="month">
        <option value="">월</option>
        <option value="1">1월</option>
        <option value="2">2월</option>
        <option value="3">3월</option>
        <option value="4">4월</option>
        <option value="5">5월</option>
        <option value="6">6월</option>
        <option value="7">7월</option>
        <option value="8">8월</option>
        <option value="9">9월</option>
        <option value="10">10월</option>
        <option value="11">11월</option>
        <option value="12">12월</option>
    </select>
</fieldset>
<br>
<input type="submit" value="보내기">
<input type="reset" value="다시작성하기">
</form>
</body>
</html>