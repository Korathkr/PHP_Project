<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <style>

    </style>
</head>

<body>

    <?php include "header.php"; ?>
    <!--콘텐트 영역-->
    <div id="content">
        <div id="sidemenu">
            <a href="../index.php"><img id="back" src="img/back.jpg" onmouseover="this.src='img/back_hover.jpg'"
                    onmouseout="this.src='img/back.jpg'"></a>
            <br><br>
            <a href="test.php"><img src="../img/test_hover.jpg" id="class_info"
                    onmouseover="this.src='../img/test_hover.jpg'"
                    onmouseout="this.src='../img/test_hover.jpg'"></a><br><br>
            <a href="test1.php"><img src="../img/test_1.jpg" id="class_info"
                    onmouseover="this.src='../img/test_1_hover.jpg'"
                    onmouseout="this.src='../img/test_1.jpg'"></a><br><br>
            <a href="test2.php"><img src="../img/test_2.jpg" id="class_info"
                    onmouseover="this.src='../img/test_2_hover.jpg'"
                    onmouseout="this.src='../img/test_2.jpg'"></a><br><br>
            <a href="test3.php"><img src="../img/test_3.jpg" id="class_info"
                    onmouseover="this.src='../img/test_3_hover.jpg'"
                    onmouseout="this.src='../img/test_3.jpg'"></a><br><br>
            <a href="test4.php"><img src="../img/test_4.jpg" id="class_info"
                    onmouseover="this.src='../img/test_4_hover.jpg'"
                    onmouseout="this.src='../img/test_4.jpg'"></a><br><br>
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