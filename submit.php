<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">

  	<!-- media queary support -->
  	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  	<!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "qrcodetest";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}


	$code = $_POST["code"];
	$name = $_POST["name"];
	$entrance_option = $_POST["entrance_option"];
	$mobile = $_POST["mobile"];
	$currentdate = $_POST["currentdate"];
	$currenttime = $_POST["currenttime"];


	$sql = "INSERT INTO EntranceData (code, name, entrance_option, mobile, currentdate, currenttime)
		VALUES ('$code', '$name', '$entrance_option', '$mobile', '$currentdate', '$currenttime')"
	;

	if ($conn->query($sql) === TRUE) {

		?>

		<div class="container">
			<div class="row-m-0 d-flex justify-content-center">
				<div class="col-xl-5 box" >
					<img src="check.jpg" class="d-flex mx-auto mt-5 mb-3" style="width: 100px;">
					<h3 class="text-center mb-5">
						Entry completed successfully
					</h3>
				</div>
			</div>
		</div>


		<?php

	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?>

</body>
<style type="text/css">
	body{
		background-image: url("backgroud.png");
		background-size: 100% ;
	}
	.box{
		background-color: white;
		margin-top: 16%;
		box-shadow:
		  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
		  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
		  0 12.5px 10px rgba(0, 0, 0, 0.06),
		  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
		  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
		  0 100px 80px rgba(0, 0, 0, 0.12)
		;
		border-radius: 10px;
	}
</style>
</html>

