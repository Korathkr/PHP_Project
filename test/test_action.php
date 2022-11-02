<?php
   $option = isset($_POST['year_choose']) ? $_POST['year_choose'] : false;
   $option2 = isset($_POST['semester_choose']) ? $_POST['semester_choose'] : false;
   $option3 = isset($_POST['class_choose']) ? $_POST['class_choose'] : false;
?>
  
<?php
$jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
//초기화면
if($option == '0' && $option2 == '0' && $option3 == '0'){
  echo "[  각 학년 별 개설과목 조회 화면입니다.  ]";
  echo "<br>", "[  조회하실 학년, 학기, 분반을 선택해주세요.  ]";
}
//각 학년 조회
else if(!$option == '0' && $option2 == '0' && $option3 == '0'){
  $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR, GRADE FROM COMPUTER WHERE YEAR = '$option' ORDER BY SUBJECT, CLASS, SEMESTER;";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo'<form method="POST" action="test4_action_db.php">';
      echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td name="sub">' . 
      $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
      '</td><td>' . $jb_row[ 'PROFESSOR' ]. '</td><td>' . $jb_row['GRADE'].'</td><tr>';
    }
}
//각 학년, 학기 조회
else if(!$option == '0' && !$option2 == '0' && $option3 == '0'){
    $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR, GRADE FROM COMPUTER WHERE YEAR = '$option' AND SEMESTER = '$option2' ORDER BY SUBJECT, CLASS;";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
      $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
      '</td><td>' . $jb_row[ 'PROFESSOR' ]. '</td><td>' . $jb_row['GRADE'].'</td></tr>';
    }
}
//각 학년, 학기, 분반 조회
else{
  $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR, GRADE FROM COMPUTER WHERE YEAR = '$option' AND SEMESTER = '$option2' AND CLASS = '$option3' ORDER BY CLASS, SUBJECT;";
  $jb_result = mysqli_query( $jb_conn, $jb_sql );
  while($jb_row = mysqli_fetch_array( $jb_result )) {
    echo '<tr><td>'. $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
    $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
    '</td><td>' . $jb_row[ 'PROFESSOR' ]. '</td><td>' . $jb_row['GRADE'].'</td></tr>';
  }
}

mysqli_close($jb_conn);
?>
<br><br>
