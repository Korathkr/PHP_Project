<?php
    include "../test/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="../css/test.css">
</head>

<body>

    <!--헤더 영역-->
    <?php include "../test/header.php"; ?>
    <!--콘텐트 영역-->
    <div id="content">
        <div id="sidemenu">
            <a href="../index.php"><img id="back" src="../img/back.jpg" onmouseover="this.src='../img/back_hover.jpg'"
                    onmouseout="this.src='../img/back.jpg'"></a>
            <br><br>
            <a href="#"><img src="../img/grade_info_hover.jpg" id="class_info"
                    onmouseover="this.src='../img/grade_info_hover.jpg'"
                    onmouseout="this.src='../img/grade_info_hover.jpg'"></a><br><br>
            <a href="#"><img src="../img/semester_grade.jpg" id="class_info"
                    onmouseover="this.src='../img/semester_grade_hover.jpg'"
                    onmouseout="this.src='../img/semester_grade.jpg'"></a><br><br>
            <a href="#"><img src="../img/all_grade.jpg" id="class_info"
                    onmouseover="this.src='../img/all_grade_hover.jpg'"
                    onmouseout="this.src='../img/all_grade.jpg'"></a><br><br>
        </div>
        <img src="../hh222.png" id="test">
    </div>

    <!--푸터 영역-->
    <div>
        <footer class="footer">
            <br>
            <p>Copyright © 2022 Korath.co.,Ltd. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>