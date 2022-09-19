<!--Aditya Mishra
1001663720
Jose Aguilar
1001128942
*/
---->

<html>
<body>
<?php

  $courID = filter_input(INPUT_POST, 'courID');
  $payAmo = filter_input(INPUT_POST, 'payAmo');
 
$conn = new mysqli("localhost", "root", "", "DOCTOR");

if ($conn->connect_error) {
    die("Connection failed: ");
}
$sql1 = "UPDATE GTA SET GTA.MontlyPay = '$payAmo' WHERE GTA.SectionId IN (SELECT GTA.SectionId FROM GTA, SECTION WHERE GTA.SectionId = SECTION.SectionId AND SECTION.CourseId = '$courID'); ";

if($conn->query($sql1))
{
	echo "After 20000 attempts, data updated! <br>";
}

else
{
	echo "Cannot UPDATE [ERROR!!!!]...<br>";
}
$conn->close();

?>
 </body>
 </html>
 
 