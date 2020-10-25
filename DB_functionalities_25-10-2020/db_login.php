<!DOCTYPE html>
<head>
<style>
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding-left: 100px;
    padding:20px;
    padding-right: 100px;
    align-content:center;
  }
</style>
</head>
<body>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="navy">
<?php
    include("Datasource.php");

    $mail=$_POST['mail'];
    $password=$_POST['inp_pwd'];

    $query1 = "SELECT Email ,Pwd from signup WHERE Email='$mail'";
    $result1 = mysqli_query($conn,$query1);
    $pass="";
    $count = mysqli_num_rows($result1);
    if($count>0){
       while($row=mysqli_fetch_assoc($result1)){
            $email=$row['Email'];
            $pass=$row['Pwd'];
       }
    
        if($password == $pass){
            $query2 = "SELECT * from signup WHERE Email='$mail'";
            $result2 = mysqli_query($conn,$query2);
            $count = mysqli_num_rows($result2);
            if($count>=0){
                while($row=mysqli_fetch_assoc($result2)){
                    $mail=$row['Email'];
                    $pass1=$row['Pwd'];
                    $fname=$row['Firstname'];
                    $lname=$row['Lastname'];
                    $uname=$row['Username'];
                    $gender=$row['Gender'];
                    $dob=$row['DOB'];
                    $mobile=$row['Mobile'];
                    //$address=$row['address'];
                    $usertype=$row['user'];
                    //$favteam=$row['favteam'];
    
                }
            }
            
            $_SESSION['F_name']=$fname;
            $_SESSION['L_name']=$lname;
            $_SESSION['Uname']=$uname;
            $_SESSION['gender']=$gender;
            $_SESSION['DOB']=$dob;
            $_SESSION['Mobile']=$mobile;
            $_SESSION['emailaddress']=$mail;
            setcookie('Uname',$uname,time()+(86400),"/");
            setcookie('emailaddress',$mail,time()+(86400),"/");

            if($usertype="User"){
                mysqli_close($conn);
                header('Location: index1.php');
            }
            elseif($usertype=="admin"){
                mysqli_close($conn);
                header('Location: index1.php');
            } 
        }
            else{
                echo"INCORRECT PASSWORD";
                echo"<br><br><a href='login2.php'>GO BACK</a>";
            }
        }
        else{
            echo"<div><h2> Account doesnot exist </h2><h3> Please Sign Up to continue...!</h3>";
            echo"<br><a href='login2.php'>GO BACK</a><a style='padding-left:30px;' href='signin.php'> Sign Up</a><br><br><br></div>";
        }

?>  
</body>
</html>
