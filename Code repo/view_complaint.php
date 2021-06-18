<?php

// Username is root
$servername='localhost';
$user = 'root';
$password = '';
$database = 'sudhaar';

$mysqli = new mysqli($servername, $user, $password, $database);

if ($mysqli->connect_error) {die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
}
$refid=$_POST['refid'];
$sql = "SELECT * FROM Complaints WHERE ReferenceId=='$refid' ";

$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Complaints | Sudhaar</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		table {
			margin: 10px auto;
			font-size: large;
			border: 1px solid #099ec8;
		}
		td {
			border: 1px solid #099ec8;
			font-weight: lighter;
		}
		th{
			font-weight: bold;
			background-color: #099ec8;
			color: white;
		}
	</style>
</head>

<body>
    <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a href="home.html"><img src="sudhaar.png" alt="sudhaar" style="width:110px; height: 51.48px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.html"><span class="glyphicon glyphicon-pencil"></span> <b>Register Complaint</b></a></li>
                        <li><a href="view_complaint.php"><span class="glyphicon glyphicon-search"></span> <b>View Complaint</b></a></li>
						<li><a href="contact.html"><span class="glyphicon glyphicon-envelope"></span> <b>Contact Us</b></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	
	<div>
		<img src="Header_Image.png" alt="header" width="100%" height="100%" >
	</div>

	<div style="background-color:#eaeaea">
		<div class="container">
		<br><h1 style="color:#f9c416"><b>View Complaint:</b></h1><br>
		<p style="font-size:18px">Enter the reference id of complaint to search it.<br>
		<center>
			<div class="col-xs-5 col-xs-offset-4">
                <form action="view.php" method="post">
					<input type="text" class="form-control"  placeholder="Enter Reference Id" name="refid" required = "true"><br>
					<button type="submit" name="search" class="btn btn-primary" style="background-color: #f9c416; border: none;">Search</button><br>
                </form>
            </div>
		</center>
		</div>

		<br><br><br><br>
	</div>
	<section style="background-color:#ffffff">
		<table>
			<tr>
                                <th>Reference Id</th><td>3</td>
			</tr>
                        <tr>
                            <th>Category</th><td>Water Issue</td>	
                        </tr>
			<tr>
				<th>Lane/Street Number</th><td>Lane No.-7</td>
			</tr>
                        <tr>
                            <th>Area/Locality</th><td>Testing Area</td>
                        </tr>
			<tr>
				<th>Landmark</th><td>Near Testing Landmark</td>
			</tr>
			<tr>
				<th>City</th><td>TestCity</td>
			</tr>
                        <tr>
                            <th>Pincode</th><td>000000</td>
                        </tr>
			<tr>
				<th>Description</th><td>This problem is to test the working of our app. I am having issue with Water. </td>
			</tr>
			<tr>
                            <th>Image</th><td><img src="sudhaar.png"></td>
			</tr>
		</table>
	</section>
	<footer>
		<div class="container">
			<center>
				<p>© Sudhaar | All Rights Reserved
			</center>
		</div>
	</footer>
</body>

</html>
