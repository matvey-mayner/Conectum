<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conectum - Register</title>
</head>
<body>
<?php
	include "../html/header.php";
?>
	 <div class="container">
	 <h2>Registration</h2>
         <ul>
          <form action="register.php" method="post">
		<center>
              <input type="text" placeholder="login" name="login">
              <input type="password" placeholder="password" name="pass">
              <input type="password" placeholder="repeat password" name="repeatepass">
              <input type="text" placeholder="email" name="email">
		<button type="submit">Register</button>
		</center>
            </form>
        </ul>
	</div>
</body>

<?php
    include "../html/footer.html";
?>
