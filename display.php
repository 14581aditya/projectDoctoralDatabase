<!--Aditya Mishra
1001663720
Jose Aguilar
1001128942
*/
---->

<html>
<body>

<?php

$StudentID = filter_input(INPUT_POST, 'StudentID');

$conn = new mysqli("localhost", "root", "", "DOCTOR");

if ($conn->connect_error) {
    die("Connection failed: ");
}

$sql = "SELECT GRANTS.GrantTitle, GRANTS.Type, GRANTS.AccountNo FROM GRANTS, GRA
WHERE GRA.StudentID = '$StudentID' AND GRANTS.AccountNo = GRA.AccountNO;";

if($conn->query($sql))
{
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        
        while($row = $result->fetch_assoc()) 
        {
            echo "GrantTitle: " . $row["GrantTitle"]. " \n Type:" . $row["Type"].  
            "\n AccountNo:". $row["AccountNo"].  "<br>";
        }
    } 
    else 
    {
        echo "NO results";
    }
}
else 
{
    echo "NO such records. <.<br>.";
    echo "Error: Try again".$sql."".$conn->error;
    
}



$conn->close();
?>

</body>
</html>
