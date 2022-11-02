<?php
   $jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
   $option = isset($_GET['year_choose']);
   $option2 = isset($_GET['semester_choose']);
   $option3 = isset($_GET['class_choose']);

   // 3학년 1학기 1분반
   switch($option == "3" AND $option2 == "1" AND $option3 == "1"){
    case true :
      $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 1 AND CLASS = 1 ORDER BY PROFESSOR;";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
        $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
        '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
      }
    break;
    case false :
    break;
  }
   // 3학년 1학기 2분반
   switch($option == "3" AND $option2 == "1" AND $option3 == "1"){
    case true :
      $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 1 AND CLASS = 2 ORDER BY PROFESSOR;";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
        $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
        '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
      }
    break;
    case false :
    break;
  }
   // 3학년 1학기 3분반
   else if ($option == "3" AND $option2 == "1" AND $option3 == "3") {
    $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 1 AND CLASS = 3 ORDER BY PROFESSOR;";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
      $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
      '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
    }
   }

  // 3학년 2학기 전체조회
  else if ($option == "3" AND $option2 == "2" AND $option3 == "0") {
    $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 2 ORDER BY PROFESSOR;";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
      $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
      '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
    }
  }

  // 3학년 2학기 1분반
  else if ($option == "3" AND $option2 == "2" AND $option3 == "1") {
      $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 2 AND CLASS = 1 ORDER BY PROFESSOR;";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
        $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
        '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
      }
    } 
  // 3학년 2학기 2분반
  else if ($option == "3" AND $option2 == "2" AND $option3 == "2") {
      $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 2 AND CLASS = 2 ORDER BY PROFESSOR;";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
        $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
        '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
            }
      }
      // 3학년 2학기 3분반
  else  if ($option == "3" AND $option2 == "2" AND $option3 == "3") {
      $jb_sql = "SELECT YEAR, SEMESTER, DIVISION, SUBJECT, CYBER, CLASS, TIME, PROFESSOR FROM COMPUTER WHERE SEMESTER = 2 AND CLASS = 3 ORDER BY PROFESSOR;";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
        echo '<tr><td>' . $jb_row[ 'YEAR' ] . '</td><td>'. $jb_row[ 'SEMESTER' ] . '</td><td>' . $jb_row[ 'DIVISION' ] . '</td><td>' . 
        $jb_row[ 'SUBJECT' ] . '</td><td>' . $jb_row[ 'CYBER' ] . '</td><td>' . $jb_row[ 'CLASS' ] . '</td><td>' . $jb_row[ 'TIME' ]. 
        '</td><td>' . $jb_row[ 'PROFESSOR' ].'</td></tr>';
      }
    }
  else{
    
  }
?>
<br><br>