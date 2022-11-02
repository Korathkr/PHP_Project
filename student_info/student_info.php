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
    <link rel="stylesheet" type="text/css" href="../css/student_info.css">
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
            <a href="student_info.php"><img src="../img/student_info.jpg" id="class_info"
                    onmouseover="this.src='../img/student_info_hover.jpg'"
                    onmouseout="this.src='../img/student_info.jpg'"></a><br><br>
            <a href="../grade/grade.php"><img src="../img/grade.jpg" id="class_info"
                    onmouseover="this.src='../img/grade_info_hover.jpg'"
                    onmouseout="this.src='../img/grade.jpg'"></a><br>
        </div>
        <?php
            $jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
            $jb_sql = "SELECT * FROM MEMBERS WHERE hakno = '$userhakno'";
            $jb_result = mysqli_query( $jb_conn, $jb_sql );
            while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        ?>
        <div>
            <center>
                <table>
                    <h4>학적정보</h4>
                    <tr>
                        <td>학년</td>
                        <td><?=$jb_row['YEAR']?></td>
                        <td>학번</td>
                        <td><?=$jb_row['hakno']?></td>
                    </tr>
                    <tr>
                        <td>학과</td>
                        <td><?=$jb_row['DEPARTMENT']?></td>
                        <td>전공</td>
                        <td><?=$jb_row['major']?></td>
                    </tr>
                    <tr>
                        <td>학점</td>
                        <td></td>
                        <td>이수학점</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>성별/생년월일</td>
                        <td><?=$jb_row['gender']?> / <?=$jb_row['birthday']?></td>
                        <td>집전화</td>
                        <td><?=$jb_row['tell']?></td>
                    </tr>
                    <tr>
                        <td>휴대폰</td>
                        <td><?=$jb_row['phone']?></td>
                        <td>E-Mail</td>
                        <td><?=$jb_row['email']?></td>
                    </tr>
                    <tr>
                        <td>집주소</td>
                        <td><?=$jb_row['address']?></td>
                        <td>출신고교</td>
                        <td><?=$jb_row['highschool']?></td>
                    </tr>
                </table>
                <?php } ?>
                <br>
                <table>
                    <h4>기본정보</h4>
                    <tr>
                        <td colspan="2">취미/특기</td>
                        <td></td>
                        <td colspan="2">병역사항</td>
                        <td></td>
                    <tr>
                        <td colspan="6">자격증</td>
                    <tr>
                        <td colspan="3">발급기관</td>
                        <td colspan="3">자격증 이름</td>
                    </tr>
                    <!-- 자격증 추가 기능 -->
                    <tr>
                        <td colspan="3"></td>
                        <td colspan="3"></td>
                        <!--  js로 추가 -->

                    </tr>
                    </tr>
                    </tr>
                </table>
                <br>
                <table>
                    <h4>거주/통학</h4>
                    <tr>
                        <td>거주지 주소</td>
                        <td></td>
                        <td>전화번호</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>거주형태</td>
                        <td></td>
                        <td>통학시간</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">거주여부</td>
                        <td></td>
                    </tr>
                </table>
                <br>
                <button><a href="student_info_modify.php">수정하기</a></button>
        </div>
        </center>
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