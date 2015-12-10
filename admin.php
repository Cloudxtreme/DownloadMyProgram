<?php

session_start();

if (isset($_SESSION)) {

	if ($_SESSION["login"] != "yes") {

		$_SESSION["login"] = "no";
		echo "Please login <a href=\"login.php\">here</a>.";
		die;

	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin - 
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
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="download.php">Download</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<?php

			// Do all things after click on update button.
			if (isset($_POST["update"])) {

				// Collect all input data.
				$website_name        = strip_tags($_POST["website_name"]);
				$website_description = strip_tags($_POST["website_description"]);
				$home                = $_POST["home"];
				$download            = $_POST["download"];

				// Connect to database.
				require("config.php");

				// Update admin table in DB.
				$sql = "UPDATE admin SET website_name='".$website_name."', website_description='".$website_description."', home_page_text='".$home."', download_page_text='".$download."'";
				$query = mysqli_query($con, $sql);
				echo "Update complete.";

			}

		?>
		<div id="form">
			<form action="admin.php" method="post">
				<label for="website_name">Website name (Program name):</label>
				<input type="text" name="website_name" value="<?php

					// Connect to DB
					require("config.php");

					// Extract Website name
					$sql = "SELECT website_name FROM admin";
					$query = mysqli_query($con, $sql);
					$array = mysqli_fetch_array($query);

					echo $array["website_name"];


				?>" />
				<label for="website_description">Website description (Program description):</label>
				<textarea name="website_description" rows="10" cols="30"><?php

					// Connect to DB
					require("config.php");

					// Extract Website description
					$sql = "SELECT website_description FROM admin";
					$query = mysqli_query($con, $sql);
					$array = mysqli_fetch_array($query);

					echo $array["website_description"];


				?></textarea>
				<label for="home">Home page text (HTML):</label>
				<textarea name="home" rows="10" cols="50"><?php

					// Connect to DB
					require("config.php");

					// Extract Home page text
					$sql = "SELECT home_page_text FROM admin";
					$query = mysqli_query($con, $sql);
					$array = mysqli_fetch_array($query);

					echo $array["home_page_text"];


				?></textarea>
				<label for="download">Download page text (HTML):</label>
				<textarea name="download" rows="10" cols="50"><?php

					// Connect to DB
					require("config.php");

					// Extract Download page text
					$sql = "SELECT download_page_text FROM admin";
					$query = mysqli_query($con, $sql);
					$array = mysqli_fetch_array($query);

					echo $array["download_page_text"];


				?></textarea>
				<input type="submit" name="update" value="Update" />
			</form>
		</div>
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