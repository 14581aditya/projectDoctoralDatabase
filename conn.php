<!--Aditya Mishra
1001663720
Jose Aguilar
1001128942
*/
---->
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="DOCTOR";

$conn= mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
  echo "Failed to connect mysql:" . mysqli_connect_error();
}
?>

