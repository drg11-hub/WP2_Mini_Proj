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

    $mail=$_POST['confirm_mail'];
    $password=$_POST['new_pwd1'];

    $sql = "UPDATE signup SET Pwd = '$password' where Email = '$mail' ";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        mysqli_close($conn);
        header('Location:index1.php');

    }
    else {
        echo "<script>alert('Error updating record!')</script>" . mysqli_error($conn);
        mysqli_close($conn);
        header('Location:new_pwd.php');
    }


?>  
</body>
</html>
