<?php 
	session_start();
	
	$username = $_SESSION['username'];
	
	if($username) {
		echo 'Hello '.$username.', welcome to the member page. Want to logout? Click <a href="logout.php">here</a>!';
       
        $connect = mysql_connect('localhost', 'username', 'password');
		mysql_select_db('database');
        
        $joins = mysql_query("SELECT amount FROM users where username='$username'");
	}else {
		header('Location: index.php');
	}
?>
