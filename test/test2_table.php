<?php
  if (isset($_SESSION["hakno"])) $userhakno = $_SESSION["hakno"];
  else $userhakno = "";
  $num1 = 0;
  $num2 = 0;
?>
<SCRIPT Language="javascript">
function postPopUp(viewerForm) {

    frm = document.getElementById(viewerForm);
    window.open('s.php', 'viewer', 'width=1000, height=700');
    frm.action = "s.php";
    frm.target = "viewer";
    frm.method = "post";
    frm.submit();
}
</SCRIPT>

<?php

if($userid){
    //해당 학생의 수강신청한 강의 시간 추출
    $jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
    $jb_sql = "SELECT STUDENT_YEAR, SEMESTER, YEAR, COUNT(SUBJECT) FROM STUDENT_SUBJECT WHERE SNO = '$userhakno' GROUP BY STUDENT_YEAR";

    // $jb_sql = "SELECT SEMESTER, YEAR, COUNT(SUBJECT) AS 'COUNT_SUBJECT', (SELECT SUBJECT FROM STUDENT_SUBJECT 
    // WHERE DIVISION = '교양') AS 'TEST',
    // FROM STUDENT_SUBJECT; ";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    // while($jb_row = mysqli_fetch_array( $jb_result )) {
    // echo'<tr><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>'. $jb_row[ 'YEAR' ] . '</td><td>' . $jb_row[ 'COUNT_SUBJECT' ]. '</td><td>'. 
    // .$jb_row[ 'TEST' ].'</td></tr>';
    // }
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'STUDENT_YEAR' ]. '</td><td>'.$jb_row[ 'SEMESTER' ]. 
        '</td><td>'.$jb_row['YEAR']. '</td><td>'.$jb_row['COUNT(SUBJECT)'].'</td>';
      }
    
    $jb_sql = "SELECT SUM(DIVISION) FROM STUDENT_SUBJECT WHERE SNO = '$userhakno' AND DIVISION LIKE '%교양%'";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '<td>'. $jb_row['SUM(DIVISION)'];
      if($jb_row['SUM(DIVISION)'] == ''){
        echo"0</td>";
      }
    }

    $jb_sql = "SELECT SUM(GRADE) FROM STUDENT_SUBJECT WHERE SNO = '$userhakno' AND DIVISION LIKE '%전공%'";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '<td>'. $jb_row['SUM(GRADE)'];
    }

    $jb_sql = "SELECT SUM(GRADE) FROM STUDENT_SUBJECT WHERE SNO = '$userhakno' AND DIVISION LIKE '%전공핵심%'";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '('. $jb_row['SUM(GRADE)'].')</td>';
    }

    $jb_sql = "SELECT SUM(DIVISION) FROM STUDENT_SUBJECT WHERE SNO = '$userhakno' AND DIVISION LIKE '%교직%'";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '<td>'. $jb_row['SUM(DIVISION)'];
      if($jb_row['SUM(DIVISION)'] == ''){
        echo"0</td>";
      }
    }

    $jb_sql = "SELECT SUM(GRADE) FROM STUDENT_SUBJECT WHERE SNO = '$userhakno'";
    $jb_result = mysqli_query( $jb_conn,   $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '<td>'. $jb_row['SUM(GRADE)']. '</td>';
      }
  ?>

<?php $jb_sql = "SELECT STUDENT_YEAR, SEMESTER FROM STUDENT_SUBJECT WHERE SNO = '$userhakno'";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result )){
      $num1 = $jb_row['STUDENT_YEAR'];
      $num2 = $jb_row['SEMESTER'];
    }
?>

<form name="viewerForm">
    <td><input type="button" value="상세확인" onClick="postPopUp('viewerForm')"></td>
    <input type="hidden" name="year" value='<?=$num1?>'>
    <input type="hidden" name="semester" value='<?=$num2?>'>
</form>
<?php
}
?>