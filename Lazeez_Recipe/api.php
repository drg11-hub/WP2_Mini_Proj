
    <?php
	
	/*$fname="";
	$lname="";
	$mail="";
	$uname="";
	$gender="";
	$dob="";
	$mobile="";*/

		header("Content-Type:application/json");
        if (isset($_GET['mail']) && $_GET['mail']!="") {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "wp2_temp";
            // Create connection
            $con = mysqli_connect($servername, $username, $password,$dbname);
            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                die();
            }

        $mail = $_GET['mail'];
        
        $result = mysqli_query($con, "SELECT * FROM signup WHERE Email='$mail'");
        if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
			$mail=$row['Email'];
			//$pass1=$row['Pwd'];
			$fname=$row['Firstname'];
			$lname=$row['Lastname'];
			$uname=$row['Username'];
			$gender=$row['Gender'];
			$dob=$row['DOB'];
			$mobile=$row['Mobile'];

		}
        response($mail,$fname,$lname,$gender,$dob,$mobile,$uname);
        mysqli_close($con);
        }else{
        response(NULL, NULL,NULL,NULL,NULL,NULL,NULL);
        }
        }
		
        function response($mail,$fname,$lname,$gender,$dob,$mobile,$uname){
        $response['Email'] = $mail;
        $response['Firstname'] = $fname;
        $response['Lastname'] = $lname;
        $response['Gender'] = $gender;
        $response['DOB'] = $dob;
        $response['Mobile'] = $mobile;
        $response['Username'] = $uname;
        $json_response = json_encode($response);
        echo $json_response;
        }
    ?>
