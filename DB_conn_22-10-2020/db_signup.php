<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
    if (isset($_POST["submit_s"])){
        
        include("Datasource.php");
        
        $F_name = "";
        $L_name = "";
        $Uname = "";
        $DOB = "";
        $emailaddress = "";
        $gender = $_POST["radiobutton"];
        $Mobile = "";
        $pwd1 = "";
        $pwd2 = "";
        $usertype="User";
        $fnameErr = $lnameErr = $unameErr = $emailErr = $bdayErr = $phoneErr = $pwdErr =  "";
        
        if (empty($_POST["F_name"])) {
            $fnameErr = "* First Name is required";
        } 
        else {
            $F_name = $_POST["F_name"];
            if (!preg_match("/^[a-zA-Z ]*$/",$F_name)) {
            $fnameErr = "* Invalid Format";
            }
        }
        
        if (empty($_POST["L_name"])) {
            $lnameErr = "* Last Name is required";
        } 
        else {
            $L_name = $_POST["L_name"];
            if (!preg_match("/^[a-zA-Z ]*$/",$L_name)) {
            $lnameErr = "* Invalid Format";
            }
        }
        
        if (empty($_POST["Uname"])) {
            $unameErr = "* Username is required";
        } 
        else {
            $Uname = $_POST["Uname"];
            if (!preg_match("/^[a-zA-Z ]*$/",$Uname)) {
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
            $emailaddress = $_POST["emailaddress"];
        }
        else{
            echo "Invalid Email. Please Re-fill the Form.";
        }
        
        if (preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $_POST['pwd1'])) {
            if ($_POST["pwd1"]==$_POST["pwd2"]){
                $pwd1 = $_POST["pwd1"];
                $pwd2 = $_POST["pwd2"];
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
            $Mobile = $_POST['Mobile'];
        }
        
        if (empty($fnameErr && $lnameErr && $unameErr && $emailErr && $bdayErr && $phoneErr && $pwdErr)){

            $_SESSION['F_name']=$F_name;
            $_SESSION['L_name']=$L_name;
            $_SESSION['Uname']=$Uname;
            $_SESSION['gender']=$gender;
            $_SESSION['DOB']=$DOB;
            $_SESSION['Mobile']=$Mobile;
            $_SESSION['emailaddress']=$emailaddress;
            setcookie('Uname',$Uname,time()+(86400),"/");
            setcookie('email',$emailaddress,time()+(86400),"/");

            $query1 = "INSERT INTO signup (Firstname,Lastname,Username,Gender,DOB,Mobile,Email,Pwd,user) VALUES ('$F_name','$L_name','$Uname','$gender','$DOB','$Mobile','$emailaddress','$pwd1','$usertype')";
            $result1 = mysqli_query($conn,$query1);
            if ($result1){
                header('Location:login.php');
            }
            else{
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        else{
            echo "<hr><br>$fnameErr<br>$lnameErr<br>$unameErr<br>$emailErr<br>$bdayErr<br>$phoneErr";
        }
    }

?>

</body>
</html>