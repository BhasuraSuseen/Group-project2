<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div class="hr_body">
<?php

require "connect.php";

if(isset($_POST["submi1"])){
$sql = "INSERT INTO letter (Recieved_Date)
VALUES ('{$_POST['Recieved_date']}')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if(isset($_POST["search1"])){
	
	$sql1 = "SELECT * FROM employee WHERE F_Name ='{$_POST["search"]}'";
	$result = mysqli_query($conn, $sql1);
	
	
     //output data of each row
 if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "<a class='employee_detail'> First Name : " . $row["F_Name"]. "<br>". "Last Name : " . $row["L_Name"]. "<br>". "Birth Date : " .$row["B_Date"]. "<br>". "Address : " .$row["Address"]. "<br>". "Contact NO : " .$row["Contact_NO"]. "<br>". "Gender : " .$row["Gender"]. "<br>". "NIC NO : " .$row["NIC_NO"]. "<br>". "Salary : " .$row["Salary"]. "<br></a>";
    }
 }else{
   echo "0 results";
}
}



mysqli_close($conn);
?>
</div>
</body>
</html>

