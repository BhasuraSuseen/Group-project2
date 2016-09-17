<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "homs";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO employee (F_Name, L_Name, B_Date, Adress, Contact_NO, Gender, NIC_NO, Salary)
VALUES ('{$_POST["fname"]}', '{$_POST["lname"]}', '{$_POST["bdate"]}', '{$_POST["address"]}', '{$_POST["cnumber"]}', '{$_POST["gender"]}', '{$_POST["nic"]}', '{$_POST["salary"]}')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//$sql = "SELECT EMP_ID, F_Name, L_Name FROM employee";
//$result = mysqli_query($conn, $sql);

//if (mysqli_num_rows($result) > 0) {
    // output data of each row
   // while($row = mysqli_fetch_assoc($result)) {
   //     echo "id: " . $row["EMP_ID"]. " - Name: " . $row["F_Name"]. " " . $row["L_Name"]. "<br>";
   // }
//} else {
 //   echo "0 results";
//}

mysqli_close($conn);
?>

</body>
</html>