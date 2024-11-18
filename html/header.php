<?php
  include '../html/db.php';
?>
    <style>
        body {
            background: linear-gradient(to bottom, #f0f8ff, #e6f7ff);
            font-family: Arial, Helvetica, sans-serif;
            color: #000;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: #fff;
            padding: 10px 15px;
            border-bottom: 3px solid #00ccff;
        }

        a {
            color: #00ccff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background: linear-gradient(to bottom, #4caf50, #2e7d32);
            border: 1px solid #006400;
            color: #fff;
            padding: 5px 15px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background: linear-gradient(to bottom, #2e7d32, #4caf50);
        }

        .container {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border: 2px solid #00ccff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        footer {
            background: #003366;
            color: #fff;
            text-align: center;
            padding: 10px 15px;
            border-top: 3px solid #00ccff;
            font-size: 12px;
        }

        h1, h2, h3 {
            color: #003366;
            text-shadow: 1px 1px 1px #999;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }
	
	lefttxt {
	   text-align: left;
	}

	righttxt {
	   text-align: right;
	}
    </style>

<header>
  <lefttxt>
  <h>Conectum</h>
  <lefttxt>

  <a href="../login.php">Login</a>
  <a href="../register.php">Register</a>
</header>
