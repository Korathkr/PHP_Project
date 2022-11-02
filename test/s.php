<?php
    include "session.php";
    $year = isset($_POST['year']) ? $_POST['year'] : false;
    $semester = isset($_POST['semester']) ? $_POST['semester'] : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수강상세정보</title>
    <style>
    body {
        font-size: 13px;
    }

    table {
        border-top: 1px solid #444444;
        border-collapse: collapse;
    }

    tr,
    th,
    td {
        border-bottom: 1px solid #444444;
        border-left: 1px solid #444444;
        border-right: 1px solid #444444;
        border-top: 1px solid #444444;
        padding: 8px;
    }
    </style>
</head>

<body>
    <center>
        <h3>수강상세정보</h3>
        <br><br>
        <div>
            <table style=text-align:center;>
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
                    <th colspan="5"></th>
                </tr>
            </table>
        </div><br><br>
        <div>
            <table>
                <th colspan="7"><?=$year?>년도 <?=$semester?>학기 수강정보</th>
                <tr>
                    <td>이수구분</td>
                    <td>과목번호</td>
                    <td>과목명</td>
                    <td>담당교수</td>
                    <td>학점</td>
                    <td>개설학과</td>
                    <td>주간/야간</td>
                </tr>
                <?php
        $jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
        $jb_sql = "SELECT DIVISION, S_NUMBER, SUBJECT, PROFESSOR, GRADE, DEPARTMENT FROM STUDENT_SUBJECT";
        $jb_result = mysqli_query( $jb_conn, $jb_sql );
        while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            ?>
                <?php
                echo '<tr><td>' . $jb_row[ 'DIVISION' ]. '</td><td>'.$jb_row[ 'S_NUMBER' ]. 
                '</td><td>'.$jb_row['SUBJECT']. '</td><td>'.$jb_row['PROFESSOR'].'</td><td>'.
                $jb_row['GRADE']. '</td><td>'. $jb_row['DEPARTMENT']. "</td><td> 주간 </td></tr>";
        }
            ?>

            </table>

        </div>
    </center>
</body>

</html>