<?php 
  $db = mysqli_connect('localhost', 'root', '', 'market');
  $username = "";
  $email = "";
  $password = "";
  $confirmPassword ="";

  if (isset($_POST['register'])) {
  	$username = $_POST["username"];
  	//$email = $_POST['email'];
  	$userPassword = $_POST["userPassword"];
  	$confirmPassword = $_POST["confirmPassword"];
	$account_role = $_POST["account_role"];
	$pin = $_POST["pin"];
    
	// username and emial validation
	$sql_u = "SELECT * FROM register WHERE username='$username'";
  	$sql_up = "SELECT * FROM register WHERE userPassword='$userPassword'";
	$sql_cp = "SELECT * FROM register WHERE confirmPassword=$confirmPassword'";
	$sql_e = "SELECT * FROM register WHERE email='$email'";
	$sql_ar = "SELECT * FROM register WHERE acoount_role='$account_role'";
	$sql_pin = "SELECT * FROM register WHERE pin='$pin'";
  	$res_u = mysqli_query($db, $sql_u);
  	
	$username= mysqli_real_escape_string($db, $_POST["username"]);
    
   
	// password must be greater than 8 characters
	$password_length_invalid = strlen($userPassword) < 6;
    
	// password and confirm password do not match validation
	$passwords_do_not_match = $userPassword !== $confirmPassword;
	
	$pinLengthInvalid = strlen($pin) < 4;
	$pinLengthLong = strlen($pin) > 4;
	// must contain a 1 special character
	
	// must contain at least 1 capital letter

	// date  and time example: 2022-12-1 12:30:00
	// todo: set timezone to local 
	date_default_timezone_set('Asia/Kolkata');
	$timestamp = time();
	$date_time = date("Y-m-d H:i:s");
	// Given password
     $userPassword = "";
	 $confirmPassword = "";
      $password = "";
     // Validate password strength
      $uppercase = preg_match('@[A-Z]@', $userPassword);
      $lowercase = preg_match('@[a-z]@', $userPassword);
      $number    = preg_match('@[0-9]@', $userPassword);
      $specialChars = preg_match('@[^\w]@', $userPassword);
      
     
	  if (mysqli_num_rows($res_u)) { 
		
  	  $name_error = "Sorry... username already taken"; 	
	  }
	
	
	
	   if($userPassword == md5($userPassword)){
		 $confirmPassword = "Test";
	   }else if ($passwords_do_not_match) {
		$confirmPassword_error = "The passwords must match";
	} else if ($password_length_invalid) {
		$password_error = "Password must be greater than 6 characters";
  	}else if ($pinLengthInvalid) {
		$pin_error = "Pin must be a minimum of 6 characters";
	} else if ($pinLengthLong) {
		$pin_error = "Pin can't be more than 4 characters in length";
	}  else if (!$uppercase || !$lowercase ||!$number || !$specialChars || strlen($userPassword) < 6) {
		$confirmPassword_error = 'Password should be at least 6 characters in length and should include at least one upper case letter, one number, and one special character.';

	} else if ($uppercase >= 1 && $lowercase >= 1  && $number >= 1  && $specialChars >=1 && strlen($userPassword)){
		      $password_error = "Success";
	} 
	
	
	else {
		$query = "INSERT INTO register (username, userPassword, confirmPassword, pin, account_role,dateJoined) 
		VALUES ('$username', '".md5($userPassword)."','".md5($confirmPassword)."','$pin','$account_role', '$date_time')";
        $results = mysqli_query($db, $query);
        header("Location: successful-registry.php");
        exit();

  	}
	}


	
  

?>