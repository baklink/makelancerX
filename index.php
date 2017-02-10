<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

<?php
//employer registration code
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
include "storescripts/connect_to_mysql.php";
if (isset($_POST['email'])) {
    $email = mysql_real_escape_string($_POST['email']);
    $username= mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $cpassword = mysql_real_escape_string($_POST['cpassword']);	
	if($password != $cpassword){
		echo 'Your passwords do not match., <a href="index.php">Refill here</a>';
		exit();
	}
	$sql = mysql_query("INSERT INTO employer_table (email,username, password,confirm_pass) 
        VALUES('$email', '$username','$password','$cpassword')") or die (mysql_error());
	header("location: index.php?success"); 
    exit();
}
?>
<script type="text/javascript" language="javascript"> 
<!--
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.userForm.email.value == "" ) { 
	    alert ( "Please provide Your email" ); 
	    isValid = false;
    } else if ( document.userForm.username.value == "" ) { 
	    alert ( "Please type Your Login Name" ); 
	    isValid = false;
    } else if ( document.userForm.password.value == "" ) { 
	    alert ( "Please type Your Password" ); 
	    isValid = false;
    } else if ( document.userForm.cpassword.value == "" ) { 
	    alert ( "Please confirm Your Password" ); 
	    isValid = false;
    }
    return isValid;
}

function validateloginForm ( ) { 
    var isValid = true;
     if ( document.userForm.loginusername.value == "" ) { 
	    alert ( "Please type Your User Name" ); 
	    isValid = false;
    } else if ( document.userForm.loginpassword.value == "" ) { 
	    alert ( "Please type Your Password" ); 
	    isValid = false;
    }
    return isValid;
}

//-->
</script>
</head>




<?php 
if (isset($_POST["loginusername"]) && isset($_POST["loginpassword"])) {	
	$user = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["loginusername"]);
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["loginpassword"]);

    include "storescripts/connect_to_mysql.php"; 
    $sql = mysql_query("SELECT id FROM employer_table WHERE username='$user' AND password='$password' LIMIT 1"); 
	
    $existCount = mysql_num_rows($sql);
    if ($existCount == 1) { 
	     while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
		 }
		 $_SESSION["id"] = $id;
		 $_SESSION["user"] = $user;
		 $_SESSION["password"] = $password;
		 header("location: user_login.php?userloginsuccess");

         exit();
    } else {
		echo 'That information is incorrect, try again <a href="index.php">Click Here</a>';
		exit();
	}
}
?>
 








  <div class="login-wrap">
	<div class="login-html">
	 <form action="" enctype="multipart/form-data" name="userForm" id="userForm" method="post">
   
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2"  method ="post" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="loginusername" type="text" class="input" name="loginusername">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="loginpassword" type="password" class="input" data-type="password" name="loginpassword">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="loginsubmit" onclick="javascript:return validateloginForm();">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</form>
			<div class="sign-up-htm">
			<form action="" enctype="multipart/form-data" name="userForm" id="loginForm" method="post">
   
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="text" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Username</label>
					<input id="pass" type="text" class="input" data-type="password" name="username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm password</label>
					<input id="pass" type="password" class="input" name="cpassword">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" name="submit" onclick="javascript:return validateMyForm();">
				</div>
				</form>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>

  
</body>
</html>
