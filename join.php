<!DOCTYPE html>
<html>
<head>
    <title>회원가입</title>
</head>
<body>
    <fieldset>
	<legend>회원가입양식</legend>
	<form method="post" action="join_ok.php">
	        <table>
	            <tr>
	                <th>이름</th>
	                <td><input type="text" name="nm_name"></td>
	            </tr>
	            <tr>
	                <th>닉네임</th>
	                <td><input type="text" name="nm_nickname"></td>
	            </tr>
	            <tr>
	                <th>아이디</th>
	                <td><input type="text" name="nm_id"></td>
	            </tr>
	            <tr>
	                <th>비밀번호</th>
	                <td><input type="password" name="nm_pw"></td>
	            </tr>
	            <tr>
	                <th>연락처</th>
	                <td><input type="tel" name="nm_mobile"></td>
	            </tr>
	            <tr>
	                <th>이메일</th>
	                <td><input type="email" name="nm_email"></td>
	            </tr>
	            <tr>
	                <th>집 주소</th>
	                <td><input type="text" name="nm_addr"></td>
	            </tr>
	            <tr>
	                <th>주민번호</th>
	                <td><input type="text" name="nm_idnum"></td>
	            </tr>
       		    <tr>
	                <th></th>
                	<td><input type="submit"  value="가입"></td>
        	    </tr>
		</table>
	</form>
    </fieldset>
</body>
</html>
