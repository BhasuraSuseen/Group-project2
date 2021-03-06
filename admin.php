<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<script src="parsley.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
  function checkForm(form)
  {
    if(form.user_name.value == "") {
      alert("Error: Username cannot be blank!");
      form.user_name.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.user_name.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.user_name.focus();
      return false;
    }
    if(form.password.value != "" && form.password.value == form.passwordc.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.user_name.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
    alert(form.password.value + " was entered successfully");
    return true;
  }
</script>
</head>
<body>
<div id="header">
        <div class="logo"><a href="homs_home.php"><span1>#</span1><span2>OMS</span2>    panadura base hospital</a></div>
        <div class="user_name">
            <div id="icbar">
				<a href="login.php"><button class="button">Log Out</button></a>
					<a href="homs_home.php"><button class="button">Home</button></a>
			</div>
        </div>
        <div class="menu_icons">
         
          
          
        </div>
    </div>

<div id="log">

 <form name="new_user" action="admin.php" method="post" accept-charset="utf-8" onsubmit="return checkForm(this);">
			<table>
			<thead>
			<tr>
			<th colspan=2>Enter New User Details </th></thead>
			</tr>
			<tr><td>User Name</td><td> 
			<input type="text" name="user_name" size="20" required></td></tr>
			<tr><td>Password</td><td> 
			<input type="password" name="password" size="20" required></td></tr>
			<tr><td>Confirm Password</td><td> 
			<input type="password" name="passwordc" size="20" required></td></tr>
			<tr><td>NIC</td><td> 
			<input type="text" name="nic" size="20" required></td></tr>
			<tr><td>User Type</td><td><input type="radio" name="usertype" value="1"> Administrator
  			<input type="radio" name="usertype" value="0" required=""> User</td></tr>
			<tr><td colspan=2 align="center">
			<input type="submit" value="Add new user" name="submit">
			<input type="reset" value="Reset"></td>
			</tr></table>
			</form>
<?php
require "connect.php";
 session_start(); 
 
echo "Welcome ". $_SESSION['username'];
$sql = "SELECT USERNAME,ADMIN,NIC_NO FROM users WHERE USERNAME!='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table width=100%><tr><th>User Name</th>
	<th>Administrator</th><th>NIC</th></tr>";
   
	while($row = mysqli_fetch_assoc($result)) {
		
        echo "<tr><td>".$row["USERNAME"]."</td><td>" 
		. $row["ADMIN"]. "</td><td>" . $row["NIC_NO"].
		"</td></tr>" ;
		
	
	}
}
 echo"</table>";
 if(isset($_POST["submit"])){
 	 $user = $_POST['user_name'];
 	 $id = $_POST['nic'];	 
	 $pass = md5($_POST['password']);
 	 $admin = $_POST['usertype'];
 	 $passc = md5($_POST['passwordc']);
 	 if ($pass == $passc){
 	 /*checking if the user name is taken */
  $usernamecheck="select * from users where USERNAME='$user'";
  $result1=mysqli_query($conn,$usernamecheck);
if(mysqli_num_rows($result1)>=1){
   echo $user." is already taken";
  		
 }
 else{
 	/*checking if the user is in the database*/
 		$idcheck="select * from employee where NIC_NO='$id'";
   		$result2=mysqli_query($conn,$idcheck);
   		if(mysqli_num_rows($result2)>=1){
   			/*checking if the user has an account already*/
  				$idcheck2="select * from users where NIC_NO='$id'";
  				$result3=mysqli_query($conn,$idcheck2);
  				if(mysqli_num_rows($result3)>=1){
   				echo $user." has an account already";}
   				else{
   					$sql1="INSERT INTO users (USERNAME,PASSWORD,ADMIN,NIC_NO) VALUES ('$user','$pass','$admin','$id')";
   					mysqli_query($conn,$sql1);
   					echo $user . "was entered successfully";
   				}
   		}		
   		else{echo "Please enter a valid Employee ID number";}
		 
		 
 }
}
else{echo "passwords do not match";}
}
mysqli_close($conn);
?>
</div>
</body>
</html>