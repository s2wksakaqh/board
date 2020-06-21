<html>
    <head>
        <title>PWN82</title>
    </head>
    <body>
     <fieldset>
        <legend>로그인 하세요!</legend>
        <table>
        <form action=login_check.php method="POST">
            <tr>
                <th>ID</th>
                <td><input type="text" name="loginID"></td>
            </tr>
            <tr>
                <th>PASSWORD</th>
                <td><input type="password" name="loginPASSWORD"></td>
            </tr>
        <input type="submit" value="로그인">
        <input type="button" value="회원가입" onclick="location.href='join.php'">
        </form>
        </table>
     </fieldset>
    </body>
</html>

