<html>
	<head>
        	<title>PWN82</title>
	</head>
	<script language='javascript'>
		function goLoginCheck()
		{
			id = document.getElementById("id_loginID").value;
			pw = document.getElementById("id_loginPASSWORD").value;
			if(id.length > 20)
			{
				alert('아이디는 20글자 이하로 구성되어 있습니다.');
				exit(0);
			}else if(pw.length > 20)
			{
				alert('비밀번호는 20글자 이하로 구성되어 있습니다.');
				exit(0);
			}else
			{
				document.getElementById("id_login_form").submit();
			}
		}
	</script>
	<body>
		<fieldset>
        		<legend>로그인 하세요!</legend>
        		<table>
        			<form action=login_check.php method="POST" id='id_login_form'>
            				<tr>
                				<th>ID</th>
                				<td><input type="text" id='id_loginID' name="loginID" maxlength='20'></td>
            				</tr>
            				<tr>
                				<th>PASSWORD</th>
                				<td><input type="password" id='id_loginPASSWORD' name="loginPASSWORD" maxlength='20'></td>
					</tr>
					<tr>
						<td colspan='2' style='text-align:right;'>
        						<input type="button" value="로그인" onclick='goLoginCheck();'>
							<input type="button" value="회원가입" onclick="location.href='join.php'">
						</td>
					</tr>
        			</form>
        		</table>
		</fieldset>
	</body>
</html>

