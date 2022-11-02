<?php
    include "../test/session.php";
?>
<?php
   //취미e 
   $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : false;
   //병역여부
   $army = isset($_POST['army']) ? $_POST['army'] : false;
   //자격증 기관명
   $license = isset($_POST['license']) ? $_POST['license'] : false;
   $license2 = isset($_POST['license2']) ? $_POST['license2'] : false;
   $license3 = isset($_POST['license3']) ? $_POST['license3'] : false;
   $license4 = isset($_POST['license4']) ? $_POST['license4'] : false;
   //자격증 이름
   $license_name = isset($_POST['license_name']) ? $_POST['license_name'] : false;
   $license_name2 = isset($_POST['license_name2']) ? $_POST['license_name2'] : false;
   $license_name3 = isset($_POST['license_name3']) ? $_POST['license_name3'] : false;
   $license_name4 = isset($_POST['license_name4']) ? $_POST['license_name4'] : false;
   //현재 거주지
   $live_address = isset($_POST['live_address']) ? $_POST['live_address'] : false;
   //전화번호
   $tell = isset($_POST['tell']) ? $_POST['tell'] : false;
   //거주 형태
   $live_type = isset($_POST['live_type']) ? $_POST['live_type'] : false;
   //통학 시간
   $commute_time = isset($_POST['commute_type']) ? $_POST['commute_type'] : false;
   
   //데이터 삽입
   if($userid){
        $jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
        $jb_sql = "UPDATE student_info SET hobby='$hobby', army='$army', license='$license', license_name='$license_name', live_address='$live_address', license2='$license2', license_name2='$license_name2', license3='$license3', license_name3='$license_name3', license4='$license4', license_name4='$license_name4', live_type='$live_type', commute_time='$commute_time' WHERE hakno = '$userhakno';"; 
        $check = mysqli_query($jb_conn, $jb_sql);  // $sql 에 저장된 명령 실행
        
        // $jb_sql = "INSERT INTO student_info VALUES ('$userhakno', '$hobby', '$army', '$license', '$license_name', '$live_address', '$license2', '$license_name2', '$license3', '$license_name3', '$license4', '$license_name4', '$live_type', '$commute_time');";
        // $check = mysqli_query($jb_conn, $jb_sql);  // $sql 에 저장된 명령 실행
    }    
      //쿼리가 제대로 실행됐을 경우
      if($check == true){
      echo("
                <script>
                alert('수정이 완료되었습니다.');
                 </script>
      ");
      }
      //쿼리에 오류가 생겼을 경우
      else if($check == false){
         echo("
            <script>
            alert('수정오류.');
            </script>
         ");
      }
      mysqli_close($jb_conn);
echo"
   <form method='POST' action='student_info.php' name='myform'>
      <script>
      document.myform.submit();
      </script>
   </form>
";
?>