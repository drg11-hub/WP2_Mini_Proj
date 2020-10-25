<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Change Password</h1>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    <p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
        <form method="post" action="./db_change_pwd.php">
            <input type="email" class="input-lg form-control" name="confirm_mail" placeholder="Enter Your Email">
            <input type="password" class="input-lg form-control" name="new_pwd1" placeholder="New Password" autocomplete="off">
            <div class="row">
            <div class="col-sm-6">
            <!--<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
            <span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter-->
            </div>
            <div class="col-sm-6">
            <!--<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
            <span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number-->
            </div>
            </div>
            <input type="password" class="input-lg form-control" name="new_pwd2" placeholder="Repeat Password" autocomplete="off">
            <div class="row">
            <div class="col-sm-12">
            <!--<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match-->
            </div>
            </div>
            <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
        </form>
    </div><!--/col-sm-6-->
</div><!--/row-->
</body>
</html>