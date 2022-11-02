  <?php
$jb_conn = mysqli_connect( 'localhost', 'user1', '12345', 'sample' );
$jb_sql = "SELECT MON, TUE, WED, THU, FRI, SAT FROM MEMBERS";
$jb_result = mysqli_query( $jb_conn, $jb_sql );
    while($jb_row = mysqli_fetch_array( $jb_result )) {
      echo '<tr><td>' . $jb_row[ 'MON' ] . '</td><td>'. $jb_row[ 'TUE' ] . '</td><td>' . $jb_row[ 'WED' ] . '</td><td>' . 
      $jb_row[ 'THU' ] . '</td><td>' . $jb_row[ 'FRI' ] . '</td><td>' . $jb_row[ 'SAT' ].'</td></tr>';
    }
?>
<br><br>
