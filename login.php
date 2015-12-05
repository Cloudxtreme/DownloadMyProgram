<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - 
	<?php

		// Connect to DB
		require("config.php");

		// Extract Website name
		$sql = "SELECT website_name FROM admin";
		$query = mysqli_query($con, $sql);
		$array = mysqli_fetch_array($query);

		echo $array["website_name"];


	?>
	</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="header">
		<h1>
			<?php

				// Connect to DB
				require("config.php");

				// Extract Website name
				$sql = "SELECT website_name FROM admin";
				$query = mysqli_query($con, $sql);
				$array = mysqli_fetch_array($query);

				echo $array["website_name"];


			?>
		</h1>
		<p>
			<?php

				// Connect to DB
				require("config.php");

				// Extract Website description
				$sql = "SELECT website_description FROM admin";
				$query = mysqli_query($con, $sql);
				$array = mysqli_fetch_array($query);

				echo $array["website_description"];


			?>
		</p>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="download.php">Download</a></li>
		</ul>
	</div>
	<div id="container">
		<form action="login.php" method="post">
			<?php

				// Do all things after click on login button
				if (isset($_POST["login"])) {

					// Username and Password in config.php
					require("config.php");

					// Collect data from input
					// NOTE: i char mean input
					$username_i = strip_tags($_POST["username"]);
					$password_i = strip_tags($_POST["password"]);

					// Check if input equals data in config.php
					if ($username_i == $username && $password_i == $password) {

						echo "Login complete, <a href=\"admin.php\">Admin page.</a>";
						session_start();
						$_SESSION["login"] = "yes";

					} else {

						echo "Login data is incorrect try again.";
						session_start();
						$_SESSION["login"] = "no";

					}

				}
			?>
			<br /><br />Username: <input type="text" name="username" /><br /><br />
			Password: <input type="password" name="password" /><br /><br />
			<input type="submit" name="login" value="Login" />
		</form>
	</div>
	<div id="footer">
		<p>Copyright <?php echo date("Y"); ?> 
			<?php

				// Connect to DB
				require("config.php");

				// Extract Website name
				$sql = "SELECT website_name FROM admin";
				$query = mysqli_query($con, $sql);
				$array = mysqli_fetch_array($query);

				echo $array["website_name"] . ", " . "<a href=\"https://www.facebook.com/Izzaldin2001\">Izzaldin Samir</a>.";


			?>
		</p>
	</div>
</body>
</html>