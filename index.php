<?php
     include "test/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script>
    function alert_1() {
        alert("회원정보가 일치하지 않습니다.");
        window.history.back();
    }
    </script>
</head>

<body>

    <!--헤더 영역-->
    <div id="menu">
        <div id="session">
            <a href="index.php"><img src="img/logo.png" id="logo"></a>
            <div id="session2">
                <br><br><br>

                <?php  
        $con = mysqli_connect("localhost", "user1", "12345", "sample");
        if(!$userid){
    }else{
?>
                <a><?=$username?>님 환영합니다!</a>
                <a href="login.php">로그아웃</a>
            </div>
        </div>
        <ul id="nav" style="text-align: center;">

            <li><a href="#">개인설정</a></li>
            <li><a href="#">사용자검색</a></li>
            <li><a href="#">개인정보 수정</a></li>
            <li><a href="#">메일함</a></li>
        </ul>
    </div>
    <?php
    }
    mysqli_close($con);
?>
    <!--콘텐트 영역-->
    <div id=" content">
        <div id="sidemenu">
            <img src="img/logo2.jpg" id="logo2">
            <br>
            <br>
            <a href="notice/notice.php">
                <img src="img/notice.jpg" id="class_info" onmouseover="this.src='img/notice_hover.jpg'"
                    onmouseout="this.src='img/notice.jpg'">
            </a><br><br>
            <a href="test/test.php">
                <img src="img/test.jpg" id="class_info" onmouseover="this.src='img/test_hover.jpg'"
                    onmouseout="this.src='img/test.jpg'">
            </a><br><br>
            <a href="student_info/student_info.php">
                <img src="img/student_info.jpg" id="class_info" onmouseover="this.src='img/student_info_hover.jpg'"
                    onmouseout="this.src='img/student_info.jpg'">
            </a><br><br>
            <a href="grade/grade.php">
                <img src="img/grade.jpg" id="class_info" onmouseover="this.src='img/grade_info_hover.jpg'"
                    onmouseout="this.src='img/grade.jpg'">
            </a><br>
        </div>
        <img src="hh222.png" id="test">
    </div>

    <!--푸터 영역-->
    <div>
        <footer class="footer">
            <br>
            <p> Copyright© 2022
                Korath.co.,
                Ltd.All rights
                reserved. </p>
        </footer>
    </div>
</body>

</html>