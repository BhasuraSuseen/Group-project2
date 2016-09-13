<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<?php

require "connect.php";

if(isset($_POST["submit"])){
$sql = "INSERT INTO diet_counts (date, S1, S2, S3, Patient_B, Patient_L, Patient_D, Staff_B, 
Staff_L, Staff_D, DD_B, DD_L, DD_D)
VALUES ('{$_POST["date"]}', '{$_POST["subtype_1_count"]}', '{$_POST["subtype_2_count"]}', '{$_POST["subtype_3_count"]}', '{$_POST["subtype_1_pbreakfast"]}', '{$_POST["subtype_1_plunch"]}'
, '{$_POST["subtype_1_pdinner"]}', '{$_POST["subtype_1_sbreakfast"]}', '{$_POST["subtype_1_slunch"]}', '{$_POST["subtype_1_sdinner"]}', '{$_POST["subtype_1_dbreakfast"]}', '{$_POST["subtype_1_dlunch"]}', '{$_POST["subtype_1_ddinner"]}')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

    $sql1 = "SELECT S2 FROM menu_1 WHERE Item = 'milk'";
	$result = mysqli_query($conn, $sql1);
    
    $milk;
    if(isset($_POST["submit"])){        
        $milk = $_POST["subtype_2_count"] * $result[0];
        echo "<a> result : ".$result."</a><br>";
        echo "<a> Milk : ".$milk."</a>";
    
}else{
   echo "0 results";
}



mysqli_close($conn);
?>
</body>
</html>
