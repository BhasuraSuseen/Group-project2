
<html>
<head>
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<title>HOMS Employee Data</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
<div id="pop_background_login"></div>
<div id="login">
<div class="login_left"><a href="#"> <spana>#</spana><spanb>OMS</spanb></a> <br> <b>Hospital Office Management System<br> For Panadura Base Hospital</b>
<br>  T:P No: 038 2232261-62 <br>Fax: 038 2232770 <br> Address: Base Hospital, Panadura
</div>    
<div class="login_right">
<h1>Log in</h1>
<form action="" method="post">
    <label for="email">Username</label>
    <input type="text" placeholder="Username" name="username" required>
	  <br>
    <label for="password">Password</label>
    <input type="password"  placeholder="Password" name="password" required>
    <br>

    <input  type="submit" name="submit" value ="Log In" class="button">
      </form>
      
 <?php
    require "connect.php";
	session_start();
	if(isset($_POST["submit"])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$sql = "SELECT USERNAME, ADMIN FROM users WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
	$result = mysqli_query($conn,$sql);
    $count =mysqli_fetch_array($result);
        
        
        if(mysqli_num_rows($result)>0){
            $_SESSION['username']=$username;
            if($count[1]==0 ){
               
                header("Location: homs_home.php");
		          die();
	      
            }elseif($count[1]==1){
                header("Location: admin.php");
	        }else{
                echo "User not found";
            }
	}else{
            echo "Invalid user name or password"; 
        }
        
    }
	?>
    </div>
	</div>

</body>
</html>