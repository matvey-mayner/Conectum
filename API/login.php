<?php

require_once('db.php');

$login=$_POST['login'];
$pass=md5($_POST['pass']);

if(empty($login) || empty($pass)){
	
echo"Fill in all fields!";	
	
} else {
	
 $sql="SELECT * FROM `users` WHERE login = '$login' AND pass='$pass'";	
 $result = $conn->query($sql);
 
	
 if($result->num_rows > 0){
	
	while($row=$result -> fetch_assoc()){
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $row['id'];		
		echo"Welcome ".$row['login'];
		echo"!";
}
}
}
?>
