<?php
ini_set('display_errors', '0');
?>
<?php
    if (isset($_SESSION["hakno"])) $userhakno = $_SESSION["hakno"];
    else $userhakno = "";
?>

<?php
//arr1, arr2 변수에 교시와 요일을 할당
$arr1 = array(1,2,3,4,5,6,7,8);
$arr2 = array("월", "화", "수", "목", "금", "토");
$i = 0;
$j = 0;
$mon = array();
$tue = array();
$wed = array();
$thu = array();
$fri = array();
$sat = array();

//해당 학생의 수강신청한 강의 시간 추출
for($j = 0; $j < 6; $j++){
    for($i = 0; $i < 8; $i++){
$jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
$jb_sql = "SELECT SUBJECT FROM STUDENT_SUBJECT WHERE TIME LIKE '%$arr1[$i]%' AND TIME LIKE '%$arr2[$j]%'"; 
$jb_result = mysqli_query( $jb_conn, $jb_sql );

//강의 시간을 배열에 대입
while($jb_row = mysqli_fetch_array( $jb_result )) {
    if($arr2[$j] == '월'){
    $mon[$i] = $jb_row['SUBJECT'];   
    }
    if($arr2[$j] == '화'){
         $tue[$i] = $jb_row['SUBJECT'];
    }

    if($arr2[$j] == '수'){
    $wed[$i] = $jb_row['SUBJECT'];
    }

    if($arr2[$j] == '목'){
    $thu[$i] = $jb_row['SUBJECT'];
    }

    if($arr2[$j] == '금'){
    $fri[$i] = $jb_row['SUBJECT'];
    }

    if($arr2[$j] == '토'){
    $sat[$i] = $jb_row['SUBJECT'];
    }
}
}
}
    
?>
<table style="text-align='center'">
    <thead>
        <tr>
            <th>:)</th>
            <th>월</th>
            <th>화</th>
            <th>수</th>
            <th>목</th>
            <th>금</th>
            <th>토</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1교시</th>
            <th><?=$mon[0]?></th>
            <th><?=$tue[0]?></th>
            <th><?=$wed[0]?></th>
            <th><?=$thu[0]?></th>
            <th><?=$fri[0]?></th>
            <th><?=$sat[0]?></th>
        </tr>
        <tr>
            <th>2교시</th>
            <th><?=$mon[1]?></th>
            <th><?=$tue[1]?></th>
            <th><?=$wed[1]?></th>
            <th><?=$thu[1]?></th>
            <th><?=$fri[1]?></th>
            <th><?=$sat[1]?></th>
        </tr>
        <tr>
            <th>3교시</th>
            <th><?=$mon[2]?></th>
            <th><?=$tue[2]?></th>
            <th><?=$wed[2]?></th>
            <th><?=$thu[2]?></th>
            <th><?=$fri[2]?></th>
            <th><?=$sat[2]?></th>
        </tr>
        <tr>
            <th>4교시</th>
            <th><?=$mon[3]?></th>
            <th><?=$tue[3]?></th>
            <th><?=$wed[3]?></th>
            <th><?=$thu[3]?></th>
            <th><?=$fri[3]?></th>
            <th><?=$sat[3]?></th>
        </tr>
        <tr>
            <th>5교시</th>
            <th><?=$mon[4]?></th>
            <th><?=$tue[4]?></th>
            <th><?=$wed[4]?></th>
            <th><?=$thu[4]?></th>
            <th><?=$fri[4]?></th>
            <th><?=$sat[4]?></th>
        </tr>
        <tr>
            <th>6교시</th>
            <th><?=$mon[5]?></th>
            <th><?=$tue[5]?></th>
            <th><?=$wed[5]?></th>
            <th><?=$thu[5]?></th>
            <th><?=$fri[5]?></th>
            <th><?=$sat[5]?></th>
        </tr>
        <tr>
            <th>7교시</th>
            <th><?=$mon[6]?></th>
            <th><?=$tue[6]?></th>
            <th><?=$wed[6]?></th>
            <th><?=$thu[6]?></th>
            <th><?=$fri[6]?></th>
            <th><?=$sat[6]?></th>
        </tr>
        <tr>
            <th>8교시</th>
            <th><?=$mon[7]?></th>
            <th><?=$tue[7]?></th>
            <th><?=$wed[7]?></th>
            <th><?=$thu[7]?></th>
            <th><?=$fri[7]?></th>
            <th><?=$sat[7]?></th>
        </tr>
    </tbody>
</table>