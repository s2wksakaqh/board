<html>
	<head>
		<title>회원가입</title>
	</head>

	<script>
		function id_vaild_check()
		{
			id = document.getElementById("id_loginID").value;
			if(id)
			{
				url = "id_check.php?="+id;
				window.open(url,"chkid","width=300,height=100");
			}else
			{
				alert("아이디를 입력하세요");
			}
		}

		function nickname_vaild_check()
		{
			nickname = document.getElementById("id_nickname").value;
                        if(nickname)
                        {
                                url = "nickname_check.php?nickname="+nickname;
                                window.open(url,"chkid","width=300,height=100");
                        }else
                        {
                                alert("닉네임을 입력하세요");
                        }
		}

	</script>	

	<body>
	<fieldset>
		<legend>회원가입양식</legend>
		<form method="post" action="join_ok.php">
	        	<table>
		            <tr>
		                <th>이름</th>
				<td><input type="text" name="nm_name" maxlength='20'></td>
		            </tr>
		            <tr>
		                <th>닉네임</th>
		                <td><input type="text" id="id_nickname"  name="nm_nickname" maxlength='20'></td>
				<td><input type="button" value=" 닉네임 중복검사" OnClick="nickname_vaild_check();"></td>
		            </tr>
		            <tr>
		                <th>아이디</th>
		                <td><input type="text" id='id_loginID' name="nm_id" maxlength='20'></td>
				<td><input type="button" value="ID 중복검사" OnClick="id_vaild_check();"></td>
		            </tr>
		            <tr>
		                <th>비밀번호</th>
		                <td><input type="password" name="nm_pw" maxlength='20'></td>
		            </tr>
		            <tr>
		                <th>연락처</th>
		                <td><input type="tel" name="nm_mobile" maxlength='11'></td>
		            </tr>
		            <tr>
		                <th>이메일</th>
		                <td><input type="email" name="nm_email" maxlength='50'></td>
		            </tr>
		            <tr>
	        	        <th>집 주소</th>
	                	<td><input type="text" name="nm_addr" maxlength='20'></td>
		            </tr>
		            <tr>
	        	        <th>주민번호</th>
	                	<td><input type="text" name="nm_idnum" maxlength='13'></td>
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
