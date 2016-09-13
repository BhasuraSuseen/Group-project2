<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<?php

require "connect.php";

if(isset($_POST["submit"])){
    $date =$_POST["date"];
    $s1=$_POST["subtype_1_count"];
    $s2=$_POST["subtype_2_count"];
    $s3=$_POST["subtype_3_count"];
    $pb=$_POST["subtype_1_pbreakfast"];
    $pl=$_POST["subtype_1_plunch"];
    $pd=$_POST["subtype_1_pdinner"];
    $sb=$_POST["subtype_1_sbreakfast"];
    $sl=$_POST["subtype_1_slunch"];
    $sd=$_POST["subtype_1_dbreakfast"];
    $db=$_POST["subtype_1_dbreakfast"];
    $dl=$_POST["subtype_1_dlunch"];
    $dd=$_POST["subtype_1_ddinner"];
$sql = "INSERT INTO diet_counts (date, S1, S2, S3, Patient_B, Patient_L, Patient_D, Staff_B, 
Staff_L, Staff_D, DD_B, DD_L, DD_D)
VALUES ('$date', '$s1', '$s2', '$s3', '$pb', '$pl'
, '$pd', '$sb', '$sl', '$sd', '$db', '$dl', '$dd')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br/>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


    $sql1 = "SELECT S1,S2,S3,Patients_B,Patients_L,Patients_D,Staff_B,Staff_L,Staff_D,DD_B,DD_L,DD_D FROM menu_1";
	$result = mysqli_query($conn, $sql1);
    
    $food=array("Milk","Eggs","Fish","Sprats","Bread","Butter","Sugar","Banana","Dhal","Cereal","Scraped Coconut","Rice","Carrot","Potato","Brinjol","Gotukola","Karawila","Cucuber","Beetroot","Beans");
      
        if (mysqli_num_rows($result) > 0) {
            $a=array();
        while($row = mysqli_fetch_array($result)){       
            $total = ($s1*$row[0])+($s2*$row[1])+($s3*$row[2])+($pb*$row[3])+($pl*$row[4])+($pd*$row[5])+($sb*$row[6])+($sl*$row[7])+($sd*$row[8])+($db*$row[9])+($dl*$row[10])+($dd*$row[11]);
            array_push($a,$total);
            }
            foreach ($food as $key => $value){
            echo "     {$food[$key]}".":- "."{$a[$key]} <br/>";
            }
            //$egg = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[1];
            //$fish = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[2];
            //$sprats = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[3];
            //$bread = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[4];
            //$butt = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[5];
            //$sug = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[6];
            //$ban = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[7];
            //$dhal = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[8];
            //$cer = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[9];
            //$scoco = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[10];
            //$rice = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[11];
            //$carrot = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[12];
            //$pot = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[13];
            //$brinj = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[14];
            //$gotu = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[15];
            //$kara = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[16];
            //$cucu  = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[17];
            //$beet = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[18];
            //$beans = ($s1+$s2+$s3+$pb+$pl+$pd+$sb+$sl+$sd+$db+$d;+$dd)*$row[19];
             //echo "<a> result : ".$result."</a><br>";

             //echo "<a> Milk : ".$milk."</a>";
            
        }
    
    else{
    echo "0 results";
        }

}

mysqli_close($conn);
?>
</body>
</html>
