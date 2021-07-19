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

  	<!-- font awsome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<?php
		$date = new DateTime("now", new DateTimeZone('Europe/London') );
	?>

	<div class="container">
		<div class="row-m-0 d-flex justify-content-center">
			<div class="col-xl-5 box" >
				<h2 class="text-center mt-5 mb-4">Penetration Form</h2>
				<form action="submit.php" method="POST" class="mx-3 mb-5">
					<div class="form-group">
						<label>Code</label>
						<input type="numeric" class="form-control" name="code" value="<?php echo $_GET["variable"] ?>" readonly>
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="numeric" class="form-control bg-light" name="name">
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="entrance_option" id="Radios1" value="Entering" checked  required>
						<label class="form-check-label" for="Radios1">
						Entering
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="entrance_option" id="Radios2" value="Leaving">
						<label class="form-check-label" for="Radios2">
						Leaving
						</label>
					</div>
					<div class="form-group mt-3">
						<label>Mobile Number</label>
						<input type="numeric" class="form-control bg-light" name="mobile">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" name="currentdate" value="<?php echo $date->format('Y-m-d'); ?>">
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" name="currenttime" value="<?php echo $date->format('H:i:s'); ?>">
					</div>
					<div class="text-center">
						<button type="submit" class="btn submit-btn mt-4">
						SUBMIT
						<i class="fa fa-angle-right submit-ico"></i>
					</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<style type="text/css">
	body{
		background-image: url("backgroud.png");
		background-size: 100% ;
	}
	.box{
		background-color: white;
		margin-top: 7%;
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
	.submit-btn{
		width: 240px;
		height: 50px;
		background-color: #68B8F7;
		border-radius: 25px;
		color: white;
		font-size: 20px;
		box-shadow:0 8px 40px rgba(0, 0, 0, 0.2) ;
	}
	.submit-ico{
		float: right;
		margin-top: 5px;
		margin-right: 10px;
		margin-left: -10px;
		font-size: 20px;
		font-weight: 600;
	}
	.submit-btn:hover{
		color: white;
		transform: scale(1.1);
	}
</style>

