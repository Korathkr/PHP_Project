<?php include "selected.php";?>
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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <style>
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
            <div>
                <h4>[ 개설과목조회 ]</h4>
                <form method="POST">
                    <select name="year_choose">
                        <option value="0" <?php if($option == '0'){echo "selected";} ?>>학년</option>
                        <option value="1" <?php if($option == '1'){echo "selected";} ?>>1학년</option>
                        <option value="2" <?php if($option == '2'){echo "selected";} ?>>2학년</option>
                        <option value="3" <?php if($option == '3'){echo "selected";} ?>>3학년</option>
                    </select>
                    <select name="semester_choose">
                        <option value="0" <?php if($option2 == '0'){echo "selected";} ?>>학기</option>
                        <option value="1" <?php if($option2 == '1'){echo "selected";} ?>>1학기</option>
                        <option value="2" <?php if($option2 == '2'){echo "selected";} ?>>2학기</option>
                    </select>
                    <select name="class_choose">
                        <option value="0" <?php if($option3 == '0'){echo "selected";} ?>>분반</option>
                        <option value="1" <?php if($option3 == '1'){echo "selected";} ?>>1분반</option>
                        <option value="2" <?php if($option3 == '2'){echo "selected";} ?>>2분반</option>
                        <option value="3" <?php if($option3 == '3'){echo "selected";} ?>>3분반</option>
                    </select>
                    <input type="submit" value="조회">
                </form>
                <br>
            </div>

            <div id="test" style="overflow:scroll; width:800px; height: 700px;">
                <br><br><br>
                <table style="text-align: center;">
                    <thead>
                        <tr>
                            <th>학년</th>
                            <th>학기</th>
                            <th>이수구분</th>
                            <th>과목명</th>
                            <th>사이버</th>
                            <th>분반</th>
                            <th>강의시간</th>
                            <th>담당교수</th>
                            <th>학점</th>
                        </tr>
                    </thead>
                    <div>
                        <tbody>
                            <?php
         include 'test_action.php';
        ?>
                        </tbody>
                    </div>
                </table>
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