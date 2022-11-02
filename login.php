<?php
     include "test/session.php";
?>

<!DOCTYPE PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <script>
    function check_input(){
    if (!document.login_form.id.value)
    {
        alert("아이디를 입력하세요");    
        document.login_form.id.focus();
        return;
    }

    if (!document.login_form.pass.value)
    {
        alert("비밀번호를 입력하세요");    
        document.login_form.pass.focus();
        return;
    }
    document.login_form.submit();
}
    </script>
    <style>
        #login_button{
            width: 170px;
            height: 30px;
        }
        #user_button{
            width: 170px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div style="margin-top: 230px;">
        <center>
            <img src="img/logo.jpg">
            <form  name="login_form" method="post" action="login_check.php">
            <table textborder="1" cellspacing="1">
            <tr>
                <td><input type="text" name="id" id="loginid1" placeholder="아이디" ></td>
            </tr>
            <tr>
                <td><input type="password" id="loginpw" name="pass" placeholder="비밀번호" ></td>
            </tr>
            </table>
            <br>
            <a href="#" id="login_btn" onclick="check_input()"><img src="img/login.jpg"></a>
            <br><br>
            <a href="member_form.php" id="login_btn" onclick="window.open(this.href, '_blank', 'width=500px,height=1000px,toolbars=no,scrollbars=no'); return false;"><img src="img/user.jpg"></a>          
            </form>
        </center>
    </div>
</body>
</html>