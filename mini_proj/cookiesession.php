<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>IPL Registration Form</title>
	<link rel="stylesheet" type="text/css" href="signUp.css">
</head>
<body>
<?php
if (isset($_POST["submit_s"])){
	$fname = "";
	$lname = "";
	$uname = "";
	$DOB = "";
	$email = "";
	$gender = $_POST["radiobutton"];
	$mobile = "";
	$pwd1 = "";
	$pwd2 = "";
	$fnameErr = $lnameErr = $unameErr = $emailErr = $bdayErr = $phoneErr = $pwdErr =  "";
	
	if (empty($_POST["F_name"])) {
        $fnameErr = "* First Name is required";
    } 
	else {
        $fname = $_POST["F_name"];
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
          $fnameErr = "* Invalid Format";
        }
	}
	
	if (empty($_POST["L_name"])) {
        $lnameErr = "* Last Name is required";
    } 
	else {
        $lname = $_POST["L_name"];
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
          $lnameErr = "* Invalid Format";
        }
	}
	
	if (empty($_POST["Uname"])) {
        $unameErr = "* Username is required";
    } 
	else {
        $uname = $_POST["Uname"];
        if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
          $unameErr = "* Invalid Format";
        }
	}
	
	if (empty($_POST["DOB"])) {
        $DOB = "* DOB is required";
    } 
	else {
        $DOB = $_POST['DOB'];
        $today = date("Y-m-d");
        $diff = date_diff(date_create($DOB), date_create($today));
        if($diff->format('%y%') < 10){
          $bdayErr = "* You are too young to register<br>";
        }
    }
	
	
	if (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", strtolower($_POST['emailaddress']))) {
		$email = $_POST["emailaddress"];
	}
	else{
		echo "Invalid Email. Please Re-fill the Form.";
	}
	
	if (preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $_POST['pwd'])) {
		if ($_POST["pwd1"]==$_POST["pwd2"]){
			$pwd = $_POST["pwd"];
		}
		else{
			$pwdErr = "Wrong Password entered in Confirm Password!";
		}
	}
	else{
		echo "Invalid Password. Please Re-fill the Form.";
	}
	
	if (empty($_POST['Mobile'])){
		$phoneErr = "Please enter Mobile Number!";
	}
	else if(strlen((string)$_POST['Mobile'])!=10){
		$phoneErr = "Invalid Mobile Number!";
	}
	else{
		$mobile = $_POST['Mobile'];
	}
	
	if (empty($fnameErr && $lnameErr && $unameErr && $emailErr && $bdayErr && $phoneErr && $pwdErr)){
		setcookie('uname',$uname,time()+(86400),"/");
	    setcookie('email',$email,time()+(86400),"/");
		
		$_SESSION['fname']=$fname;
		$_SESSION['uname']=$uname;
		$_SESSION['lname']=$lname;
		$_SESSION['gender']=$gender;
		$_SESSION['DOB']=$DOB;
		$_SESSION['mobile']=$mobile;
		$_SESSION['email']=$email;
	    header ('Location: LOGIN.php');

		//echo "<center><b><i>User Signup Details</b></i><br>Name: $fname $lname<br>DOB: $DOB<br>Gender: $gender<br>Mobile Number: $mobile<br></center>";
		//echo "<script>alert('Thank You! Have a Nice Day!')</script>";
	}
	else{
		echo "<hr><br>$fnameErr<br>$lnameErr<br>$unameErr<br>$emailErr<br>$bdayErr<br>$phoneErr";
	}
}
	/*else if (isset($_POST["submit_l"])){
		
	}*/
?>
<br><br>


</body>
</html>