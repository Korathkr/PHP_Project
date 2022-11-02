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
    <link rel="stylesheet" type="text/css" href="../css/board.css">
    <link rel="stylesheet" type="text/css" href="../css/notice.css">
</head>

<body>

    <?php include "../test/header.php"; ?>

    <!--콘텐트 영역-->
    <div id="content">
        <div id="sidemenu">
            <a href="../index.php"><img id="back" src="../img/back.jpg" onmouseover="this.src='../img/back_hover.jpg'"
                    onmouseout="this.src='../img/back.jpg'"></a>
            <br><br>
            <a href="../notice/notice.php"><img src="../img/notice.jpg" id="class_info"
                    onmouseover="this.src='../img/notice_hover.jpg'"
                    onmouseout="this.src='../img/notice.jpg'"></a><br><br>
            <a href="../test/test.php"><img src="../img/test.jpg" id="class_info"
                    onmouseover="this.src='../img/test_hover.jpg'" onmouseout="this.src='../img/test.jpg'"></a><br><br>
            <a href="../student_info/student_info.php"><img src="../img/student_info.jpg" id="class_info"
                    onmouseover="this.src='../img/student_info_hover.jpg'"
                    onmouseout="this.src='../img/student_info.jpg'"></a><br><br>
            <a href="../grade/grade.php"><img src="../img/grade.jpg" id="class_info"
                    onmouseover="this.src='../img/grade_info_hover.jpg'"
                    onmouseout="this.src='../img/grade.jpg'"></a><br>
        </div>


        <div id="borad_box">
            <center>
                <br>
                <?php include "notice_table.php" ?>
                <?php if($userid == '1234'){ ?>
                <br>
                <button>
                    <a href="notice_insert.php">글 쓰기</a>
                </button>
                <?php } ?>
            </center>
        </div>
    </div>

    <!--푸터 영역-->
    <div>
        <footer class=" footer">
            <br>
            <p>Copyright © 2022 Korath.co.,Ltd. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>