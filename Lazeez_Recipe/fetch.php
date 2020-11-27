
    <?php
        if (isset($_POST['mail']) && $_POST['mail']!="") {
        $mail = $_POST['mail'];
        //$url = "http://localhost/WP-2_PHP/mini_proj/api.php?mail=".$mail;
        $url = "http://localhost/WP-2_PHP/mini_proj/api.php?mail=".$mail;
        $client = curl_init($url);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($client);
        
        $result = json_decode($response,true);
        
        $mail=$result['Email'];
		//$pass1=$result['Pwd'];
		$fname=$result['Firstname'];
		$lname=$result['Lastname'];
		$uname=$result['Username'];
		$gender=$result['Gender'];
		$dob=$result['DOB'];
		$mobile=$result['Mobile'];
        

        echo "<table>";
        echo "<tr><td>Username:</td><td>$uname</td></tr>";
        echo "<tr><td>Email ID:</td><td>$mail</td></tr>";
        echo "<tr><td>First Name:</td><td>$fname</td></tr>"; 
        echo "<tr><td>Last Name:</td><td>$lname</td></tr>";
        echo "<tr><td>Gender :</td><td>$gender</td></tr>";
        echo "<tr><td>Date of Birth:</td><td>$dob</td></tr>";
        echo "<tr><td>Mobile:</td><td>$mobile</td></tr>";
        echo "</table>";
    }
    ?>
