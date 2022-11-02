<?php
    include "session.php";
?>

<?php
   //과목 
   $subject = isset($_POST['sub']) ? $_POST['sub'] : false;
   //과목번호
   $s_number = isset($_POST['snum']) ? $_POST['snum'] : false;
   //강의시간
   $time = isset($_POST['time']) ? $_POST['time'] : false;
   //학점
   $grade = isset($_POST['grade']) ? $_POST['grade'] : false;
   //학년
   $year = isset($_POST['year']) ? $_POST['year'] : false;
   //분반
   $class = isset($_POST['class']) ? $_POST['class'] : false;
   //학기
   $semester = isset($_POST['semester']) ? $_POST['semester'] : false;
   //이수구분
   $division = isset($_POST['division']) ? $_POST['division'] : false;
   //담당교수
   $professor = isset($_POST['professor']) ? $_POST['professor'] : false;

   $option =  isset($_POST['option']) ? $_POST['option'] : false;
   $option2 =  isset($_POST['option2']) ? $_POST['option2'] : false;
   $option3 =  isset($_POST['option3']) ? $_POST['option3'] : false;
   
   if($userid){
      $jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
      $jb_sql = "DELETE FROM student_subject WHERE SUBJECT = '$subject';";
      $check = mysqli_query($jb_conn, $jb_sql);  // $sql 에 저장된 명령 실행
      
      //쿼리가 제대로 실행됐을 경우
      if($check == true){
      echo("
                <script>
                alert('수강취소가 완료되었습니다.');
                 </script>
      ");
      }
      //쿼리에 오류가 생겼을 경우
      if($check == false){
         echo("
            <script>
            alert('수강취소 오류');
            </script>
         ");
      }
      mysqli_close($jb_conn);
   }
   
echo"
   <form method='POST' action='test4.php' name='myform'>
      <input type ='hidden' name='option' value='$option'>
      <input type ='hidden' name='option2' value='$option2'>
      <input type ='hidden' name='option3' value='$option3'>
      <input type ='hidden' name='num' value='1'>
      <script>
      document.myform.submit();
      </script>
   </form>
";
?>