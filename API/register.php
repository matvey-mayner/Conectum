require_once('./html/db.php');

$login = $_POST['login'];
$pass = md5($_POST['pass']);
$r_pass = md5($_POST['r_pass']);

if(empty($login)||empty($pass)||empty($r_pass)){
	echo "Fill in all fields!";
}else{
	if($pass != $r_pass){
		echo "The passwords don't match!";
	}else{
		$sql = "INSERT INTO `users`(login, pass) VALUES('$login', '$pass')";

if($conn -> query($sql)){
		
		echo"You have successfully registered!";
		
	}else{
			
			echo"An error occurred during registration!";
			
	}
}
}
