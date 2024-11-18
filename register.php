<head>
<link rel="stylesheet" href="../html/style/style.css" type="text/css" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Conectum - Register</title>
</head>
<body>

<?php
	include "../html/header.php"
?>

<center>
	 <div class="container">
        <ul>
          <form action="register.php" method="post">
              <input type="text" placeholder="login" name="login">
              <input type="password" placeholder="password" name="pass">
              <input type="password" placeholder="repeat password" name="repeatepass">
              <input type="text" placeholder="email" name="email">
              <button> type="submit">Register</button>
            </form>
        </ul>
</center>
</body>
