<?php
    include "session.php";
?>
<?php include "selected.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="../css/test.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
    a:link {
        text-decoration: none;
        color: black;
    }

    table {
        border-top: 1px solid #444444;
        border-collapse: collapse;
    }

    th,
    td {
        border-bottom: 1px solid #444444;
        border-left: 1px solid #444444;
        padding: 8px;
    }

    th:first-child,
    td:first-child {
        border-left: none;
    }
    </style>
</head>

<body>
    <?php include "header.php"; ?>
    <!--콘텐트 영역-->
    <div id="content">
        <div id="sidemenu">
            <a href="../index.php"><img id="back" src="../img/back.jpg" onmouseover="this.src='../img/back_hover.jpg'"
                    onmouseout="this.src='../img/back.jpg'"></a>
            <br><br>
            <a href="../test.php"><img src="../img/test_hover.jpg" id="class_info"
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
        <center>
            <br><br>
            <div>
                <table style="width:460px; text-align:center;">
                    <th>학년</th>
                    <td>3</td>
                    <th>학번</th>
                    <td><?php echo"{$userhakno}"; ?></td>
                    <th>이름</th>
                    <td><?php echo"{$username}"; ?></td>
                    <th>학기</th>
                    <td>1</td>
                    <tr>
                        <th>학과</th>
                        <td>소프트웨어콘텐츠계열</td>
                        <th>전공</th>
                    </tr>
                </table>

            </div><br><br>
            <h4>[ 전체학기 수강정보 ]</h4>
            <div style="width:1000px; height:600px;">
                <table>
                    <thead style="text-align:center;">
                        <tr>
                            <th class="tg-0pky" rowspan="2">년도</td>
                            <th class="tg-0pky" rowspan="2">학기</th>
                            <th class="tg-0pky" rowspan="2">학년</th>
                            <th class="tg-0pky" rowspan="2">과목수</th>
                            <th class="tg-0pky" colspan="4">학점</th>
                            <th class="tg-0pky" rowspan="2">상세조회</th>
                        </tr>
                        <tr>
                            <th class="tg-0pky">교양</th>
                            <th class="tg-0pky">전공(전공핵심)</th>
                            <th class="tg-0pky">교직</th>
                            <th class="tg-0pky">계</th>
                        </tr>
                        <!--학년 별 칼럼-->
                        <?php include "test2_table.php" ?>
                </table>
            </div>
    </div>


    </center>
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