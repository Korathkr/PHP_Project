<?php
   $option = isset($_POST['year_choose']) ? $_POST['year_choose'] : false;
   $option2 = isset($_POST['semester_choose']) ? $_POST['semester_choose'] : false;
   $option3 = isset($_POST['class_choose']) ? $_POST['class_choose'] : false;
   if (isset($_SESSION["hakno"])) $userhakno = $_SESSION["hakno"];
     else $userhakno = "";
?>
<?php
$jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
//각 학년 조회
if($userid){
    $jb_sql = "SELECT year, semester, division, subject, class, time, professor, grade FROM student_subject WHERE sno = '$userhakno' ORDER BY SEMESTER, SUBJECT";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo"<form method='POST' action='test4_action_db2.php'>"; 
      echo '<tr><td>' .'<input type="hidden" name ="year" value="'.$jb_row[ 'year' ].'">'.$jb_row['year']. 
      '</td><td>'. '<input type="hidden" name ="semester" value="'.$jb_row[ 'semester' ].'">'. $jb_row['semester'].
      '</td><td>'. '<input type="hidden" name ="division" value="'.$jb_row[ 'division' ].'">'. $jb_row['division'].
      '</td><td>'.'<input type="hidden" name ="sub" value="'.$jb_row[ 'subject' ].'">'. $jb_row['subject']. 
      '</td><td>'. '<input type="hidden" name ="class" value="'.$jb_row[ 'class' ].'">'. $jb_row[ 'class' ].
      '</td><td>'.'<input type="hidden" name ="time" value="'.$jb_row[ 'time' ].'">'. $jb_row[ 'time' ]. 
      '</td><td>'. '<input type="hidden" name ="professor" value="'.$jb_row[ 'professor' ].'">'. $jb_row[ 'professor' ].
      '</td><td>'.'<input type="hidden" name ="grade" value="'.$jb_row[ 'grade' ].'">'.$jb_row['grade'].
      '</td><td>';
      echo"<input type= 'submit' value='취소'>".
      '</td></tr>';
      echo"<input type ='hidden' name='option' value='$option'>
      <input type ='hidden' name='option2' value='$option2'>
      <input type ='hidden' name='option3' value='$option3'>";
      echo"</form>";
    }
}

mysqli_close($jb_conn);
?>
<br><br>