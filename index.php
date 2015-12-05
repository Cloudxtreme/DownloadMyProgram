<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home - 
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
			<?php

				// Connect to DB
				require("config.php");

				// Extract Home page text
				$sql = "SELECT home_page_text FROM admin";
				$query = mysqli_query($con, $sql);
				$array = mysqli_fetch_array($query);

				echo $array["home_page_text"];


			?>
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