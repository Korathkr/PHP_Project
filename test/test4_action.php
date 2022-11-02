<?php
   $option = isset($_POST['year_choose']) ? $_POST['year_choose'] : false;
   $option2 = isset($_POST['semester_choose']) ? $_POST['semester_choose'] : false;
   $option3 = isset($_POST['class_choose']) ? $_POST['class_choose'] : false;
?>

<?php
$jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
//초기화면
if($option == '0' && $option2 == '0' && $option3 == '0'){
  echo "<br>", "[  수강신청 화면입니다.  ]";
  echo "<br>", "[  수강신청하실 학년, 학기, 분반을 선택해주세요.  ]";
}

//각 학년 조회
else if(!$option == '0' && $option2 == '0' && $option3 == '0'){
  $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR, GRADE, SUBJECT_NUMBER FROM COMPUTER WHERE YEAR = '$option' ORDER BY SEMESTER, SUBJECT";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo"<form method='POST' action='test4_action_db.php'>"; 
      echo '<tr><td>' .'<input type="hidden" name ="year" value="'.$jb_row[ 'YEAR' ].'">'.$jb_row['YEAR']. 
      '</td><td>'. '<input type="hidden" name ="semester" value="'.$jb_row[ 'SEMESTER' ].'">'. $jb_row['SEMESTER'].
      '</td><td>'. '<input type="hidden" name ="division" value="'.$jb_row[ 'DIVISION' ].'">'. $jb_row['DIVISION'].
      '</td><td>'.'<input type="hidden" name ="sub" value="'.$jb_row[ 'SUBJECT' ].'">'. $jb_row['SUBJECT']. 
      '</td><td>'. $jb_row[ 'CYBER' ]. '<input type="hidden" name ="snum" value="'.$jb_row[ 'SUBJECT_NUMBER' ].'">'.
      '</td><td>'. '<input type="hidden" name ="class" value="'.$jb_row[ 'CLASS' ].'">'. $jb_row[ 'CLASS' ].
      '</td><td>'.'<input type="hidden" name ="time" value="'.$jb_row[ 'TIME' ].'">'. $jb_row[ 'TIME' ]. 
      '</td><td>'. '<input type="hidden" name ="professor" value="'.$jb_row[ 'PROFESSOR' ].'">'. $jb_row[ 'PROFESSOR' ].
      '</td><td>'.'<input type="hidden" name ="grade" value="'.$jb_row[ 'GRADE' ].'">'.$jb_row['GRADE'].
      '</td><td>';
      echo"<input type= 'submit' value='신청'>".
      '</td></tr>';
      echo"<input type ='hidden' name='option' value='$option'>
      <input type ='hidden' name='option2' value='$option2'>
      <input type ='hidden' name='option3' value='$option3'>";
      echo"</form>";
    }
}

//각 학년, 학기 조회
else if(!$option == '0' && !$option2 == '0' && $option3 == '0'){
  $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR, GRADE, SUBJECT_NUMBER FROM COMPUTER WHERE YEAR = '$option' AND SEMESTER = '$option2' ORDER BY SEMESTER, SUBJECT";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo"<form method='POST' action='test4_action_db.php'>"; 
      echo '<tr><td>' .'<input type="hidden" name ="year" value="'.$jb_row[ 'YEAR' ].'">'.$jb_row['YEAR']. 
      '</td><td>'. '<input type="hidden" name ="semester" value="'.$jb_row[ 'SEMESTER' ].'">'. $jb_row['SEMESTER'].
      '</td><td>' . '<input type="hidden" name ="division" value="'.$jb_row[ 'DIVISION' ].'">'. $jb_row['DIVISION'].
      '</td><td>' .'<input type="hidden" name ="sub" value="'.$jb_row[ 'SUBJECT' ].'">'. $jb_row['SUBJECT']. 
      '</td><td>' . $jb_row[ 'CYBER' ] . '<input type="hidden" name ="snum" value="'.$jb_row[ 'SUBJECT_NUMBER' ].'">'.
      '</td><td>' . '<input type="hidden" name ="class" value="'.$jb_row[ 'CLASS' ].'">'. $jb_row[ 'CLASS' ].
      '</td><td>' .'<input type="hidden" name ="time" value="'.$jb_row[ 'TIME' ].'">'. $jb_row[ 'TIME' ]. 
      '</td><td>' . '<input type="hidden" name ="professor" value="'.$jb_row[ 'PROFESSOR' ].'">'. $jb_row[ 'PROFESSOR' ].
      '</td><td>' .'<input type="hidden" name ="grade" value="'.$jb_row[ 'GRADE' ].'">'.$jb_row['GRADE'].
      '</td><td>';
      echo"<input type= 'submit' value='신청'>".
      '</td></tr>';
      echo"<input type ='hidden' name='option' value='$option'>
      <input type ='hidden' name='option2' value='$option2'>
      <input type ='hidden' name='option3' value='$option3'>";
      echo"</form>";
    }
}
//각 학년, 학기, 분반 조회
else{
  $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR, GRADE, SUBJECT_NUMBER FROM COMPUTER WHERE YEAR = '$option' AND SEMESTER = '$option2' AND CLASS = '$option3' ORDER BY SEMESTER, SUBJECT;";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo"<form method='POST' action='test4_action_db.php'>"; 
      echo '<tr><td>' .'<input type="hidden" name ="year" value="'.$jb_row[ 'YEAR' ].'">'.$jb_row['YEAR']. 
      '</td><td>'. '<input type="hidden" name ="semester" value="'.$jb_row[ 'SEMESTER' ].'">'. $jb_row['SEMESTER'].
      '</td><td>' . '<input type="hidden" name ="division" value="'.$jb_row[ 'DIVISION' ].'">'. $jb_row['DIVISION'].
      '</td><td>' .'<input type="hidden" name ="sub" value="'.$jb_row[ 'SUBJECT' ].'">'. $jb_row['SUBJECT']. 
      '</td><td>' . $jb_row[ 'CYBER' ] . '<input type="hidden" name ="snum" value="'.$jb_row[ 'SUBJECT_NUMBER' ].'">'.
      '</td><td>' . '<input type="hidden" name ="class" value="'.$jb_row[ 'CLASS' ].'">'. $jb_row[ 'CLASS' ].
      '</td><td>' .'<input type="hidden" name ="time" value="'.$jb_row[ 'TIME' ].'">'. $jb_row[ 'TIME' ]. 
      '</td><td>' . '<input type="hidden" name ="professor" value="'.$jb_row[ 'PROFESSOR' ].'">'. $jb_row[ 'PROFESSOR' ].
      '</td><td>' .'<input type="hidden" name ="grade" value="'.$jb_row[ 'GRADE' ].'">'.$jb_row['GRADE'].
      '</td><td>';
      echo"<input type= 'submit' value='신청'>".
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