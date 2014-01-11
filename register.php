<?php 

	$register = $_GET['register'];

	if($register) {
		
		$username = $_GET['username'];
		$password = $_GET['password'];
		$retypepassword = $_GET['retypepassword']; 
		$email = $_GET['email'];
		
		if($username && $password && $retypepassword && $email) {
			
			if($password == $retypepassword) {
				
				if(strstr($email, "@") && strstr($email, ".")) {
					
					$connect = mysql_connect('localhost', 'username', 'password');
					mysql_select_db('database');
					
					$query1 = mysql_query("SELECT * FROM users WHERE username='$username'");
					$numrows1 = mysql_num_rows($query1);
					
					if($numrows1) {
						echo 'That user allready exists, choose another username.';
					}else {
					
					mysql_query("INSERT INTO users VALUES('', '$username', '$password', '$email')");
					
					echo 'You have been registered succesfully!';
					
					}
					
				}else {
					
					echo 'The inserted emailaddress isn not valid.';
					
				}
				
			}else {
			
				echo 'The two passwords aren not the same';
			
			}
			
		}else {
			
			echo 'You have to fill in all the boxes.';
		
		}
		
	}else {
		
	}
?>
<html>
	<form action='register.php' method='get'>
		Username:<input type='text' name='username'><br>
		Password:<input type='password' name='password'><br>
		Retype password:<input type='password' name='retypepassword'><br>
		Email:<input type='text' name='email'><br>
		<input type='submit' name='register' value='Submit!'><br>
	</form>
</html>
