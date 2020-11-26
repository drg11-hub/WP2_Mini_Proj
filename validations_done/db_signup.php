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
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        include("Datasource.php");
        
        $F_name = "";
        $L_name = "";
        $Uname = "";
        $DOB = "";
        $emailaddress = "";
        $gender = $_POST["radiobutton"];
        $Mobile = "";
        //$pwd1 = $_POST['pwd1'];
        //$pwd2 = $_POST['pwd2'];
        $pwd1 = "";
        $pwd2 = "";
        $usertype="User";
        $fnameErr = $lnameErr = $unameErr = $emailErr = $bdayErr = $phoneErr = $pwdErr =  "";
        
        //Validations:

        //First name:
        if (empty($_POST["F_name"])) {
            $fnameErr = "First Name is required";
        } 
        else {
            $F_name = test_input($_POST["F_name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$F_name) || str_word_count($F_name)>1) {
            $fnameErr = "Enter valid First name.";
            }
        }
        
        //Last name:
        if (empty($_POST["L_name"])) {
            $lnameErr = "Last Name is required";
        } 
        else {
            $L_name = test_input($_POST["L_name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$L_name) || str_word_count($L_name)>1) {
            $lnameErr = "Enter valid Last name.";
            }
        }
        
        //Username:
        if (empty($_POST["Uname"])) {
            $unameErr = "Username is required.";
        } 
        else {
            $Uname = test_input($_POST["Uname"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$Uname) || str_word_count($Uname)>1) {
            $unameErr = "Enter valid Username.";
            }
        }
        
        //Date of Birth:
        if (empty($_POST["DOB"])) {
            $DOB = "DOB is required";
        } 
        else {
            $DOB = $_POST['DOB'];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($DOB), date_create($today));
            if($diff->format('%y%') < 10){
            $bdayErr = "You are too young to register<br>";
            }
        }
        
        //Email:
        /*if (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", strtolower($_POST['emailaddress']))) {
            $emailaddress = $_POST["emailaddress"];
        }
        else{
            $emailErr = "Invalid Email. Please Re-fill the Form.";
        }*/


        if (empty($_POST["emailaddress"])) {
            $emailErr = "Email is required";
          } else {
            $emailaddress = test_input($_POST["emailaddress"]);
            if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }

        //Password:
        /*if (preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $_POST['pwd1'])) {
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
        }*/

        if(!empty($_POST["pwd1"])){
            if ($_POST["pwd1"]!=$_POST["pwd2"]) {
              $pwdErr .=  "Passowrd and Confirm Password does not match!"."<br>";
            }
            if (strlen($_POST["pwd1"]) < '8') {
              $pwdErr .= "Your Password Must Contain At Least 8 Characters!"."<br>";
            }
            elseif(!preg_match("#[0-9]+#",$_POST["pwd1"])) {
              $pwdErr .= "Your Password Must Contain At Least 1 Number!"."<br>";
            }
            elseif(!preg_match("#[A-Z]+#",$_POST["pwd1"])) {
              $pwdErr .= "Your Password Must Contain At Least 1 Uppercase Letter!"."<br>";
            }
            elseif(!preg_match("#[a-z]+#",$_POST["pwd1"])) {
              $pwdErr .= "Your Password Must Contain At Least 1 Lowercase Letter!"."<br>";
            }
            elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["pwd1"])) {
              $pwdErr .= "Your Password Must Contain At Least 1 Special Character!"."<br>";
            }
        }
        else{
        $pwdErr .= "Please Enter your password"."<br>";
        }

        if (empty($pwdErr)){
            $pwd1 = $_POST['pwd1'];
            $pwd2 = $_POST['pwd2'];
        }
        
        //Contact:
        /*if (empty($_POST['Mobile'])){
            $phoneErr = "Please enter Mobile Number!";
        }
        else if(strlen((string)$_POST['Mobile'])!=10){
            $phoneErr = "Invalid Mobile Number!";
        }
        else{
            $Mobile = $_POST['Mobile'];
        }*/

        if (preg_match("/^[1-9]{1}[0-9]{9}/", $_POST["Mobile"])) {
            $Mobile = test_input($_POST["Mobile"]);
        } elseif (empty($_POST["Mobile"])) {
            $phoneErr = "Contact information required";
        } else {
            $phoneErr = "Enter a valid phone number";
        }
        

        if (empty($fnameErr) && empty($lnameErr) && empty($unameErr) && empty($emailErr) && empty($bdayErr) && empty($phoneErr) && empty($pwdErr)){

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
                echo "<script>alert('User Data stored.')</script>";
            }
            else{
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        else{
            echo "<hr><br>$fnameErr<br>$lnameErr<br>$unameErr<br>$emailErr<br>$bdayErr<br>$phoneErr<br>$pwdErr<br>";
            echo "<a class='nav-link' href='./signup.php' > Go to Signup</a>";
        }
    }

?>

</body>
</html>