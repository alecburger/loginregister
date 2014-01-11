<?php 

	session_start();

	$login = $_GET['login'];

	if($login) {
		
		$username = $_GET['username'];
		$password = $_GET['password'];
		
		if($username && $password) {
			
			$connect = mysql_connect('localhost', 'username', 'password');
			mysql_select_db('database');
						
			$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
			$numrows = mysql_num_rows($query);		
			
			if($numrows) {
				$_SESSION['username'] = $username;
				header('Location: member.php');
 			}else {
				echo'This user doesn't exist!';
			}
		}else {
		
			echo 'Please fill in all the forms.';
		
		}
		
		
	}else {}
?>

<html>
	<form action='index.php' method='get'>
		Username:<input type='text' name='username'><br>
		Password:<input type='password' name='password'><br>
		<input type='submit' name='login' value='Submit!'><br>
	</form>
	Want to register? Click <a href='register.php'>here</a>!<br>
</html>
