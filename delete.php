<!--Aditya Mishra
1001663720
Jose Aguilar
1001128942
*/
---->

<?php

  include('conn.php');

  $studentid=filter_input(INPUT_POST,'studentid');

  $sql="DELETE FROM selfsupport WHERE StudentId NOT IN (SELECT StudentId FROM milestonespassed WHERE StudentId=StudentId)";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
?>
