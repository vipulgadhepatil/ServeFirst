<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Corporate</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="corporateHome.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
</head>
<body>
<div class="background">
	<img src="images/corporate_background.jpeg" style="height: 100%; width: 100%" alt="no background">
</div>
<div class="Fix-header">

	<div class="button">
		<a href="#">Profile</a>
		<div class="drop-button">
			<a style="background-color: rgb(111,111,111);" href="book_amc.php">Edit Profile</a>
			<a style="background-color: rgb(111,111,111);" href="index.html">Logout</a>
		</div>
	</div>

	<div class="button">
		<a href="#">Book</a>
		<div class="drop-button">
			<a style="background-color: rgb(111,111,111);" href="book_amc.php">AMC</a>
			<a style="background-color: rgb(111,111,111);" href="book_service.php">Single Service</a>
		</div>
	</div>

	<h1 class="lable">
		<i class="material-icons" style="font-size: 2vw">computer</i>
		&nbsp;Serve First...
		<small style="font-size: 1.5vw ;color:rgb(0,8,51)">we care for what you care</small>
	</h1>

	<div class="logo">
		<img src="images/logo.jpg">
	</div>

	<div class="nav">
		<ul><h2>
			<li style="margin-top: 15px"><a style ="background-color :red" href="corporateHome.php" >Home</a></li>
			<li class="dropdown" style="margin-top: 15px"><a href="#">Services</a>
				<div class="dropdown-content">
						<a href="#">Computer</a>
						<a href="#">Laptop</a>
						<a href="#">Printer</a>
				</div>
			</li>
			<li style="margin-top: 15px"><a href="#">AMC Services</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="aboutus.html">About Us</a></li></h2>
	</div>	
</div>
<div class="welcome">
	<?php
		$conn=pg_connect("host=localhost dbname=sidg user=sidg password=sidg") or die("Couldn't Connect");
		$Name="siddesh";
		$query="select * from customer where first_name= '$Name'";
		$Result=pg_query($conn,$query);

		$row=pg_fetch_assoc($Result);
		echo "Welcome ".$row['first_name']." ".$row['last_name']."!!!";	
		pg_close($conn);
	?>
</div>
<div class="services-head">
	<i class="material-icons" style="font-size: 2.5vw">build_circle</i>
	&nbsp;&nbsp;Your Service Requests&nbsp;&nbsp;
	<i class="material-icons" style="font-size: 2.5vw">build_circle</i>
</div>
<table class="services" border="1">
		<tr>
			<th>Sr. no</th>
			<th>Help For</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Printer</td>
			<td>12/12/2020</td>
			<td>12:30 PM</td>
			<td>Accepted</td>
		</tr>
			<!--?php
			$conn=pg_connect("host=localhost dbname=sidg user=sidg password=sidg") or die("Couldn't Connect");
			$Name="siddesh";
			$query="select * from customer where first_name= '$Name'";
			$Result=pg_query($conn,$query);

			$row=pg_fetch_assoc($Result);
			
			echo "<tr><td>".$row['reg_no']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td></tr>";
			pg_close($conn);
		?-->
</table>

<div class="services-head">
	<i class="material-icons" style="font-size: 2.5vw">build_circle</i>
	&nbsp;&nbsp;Active AMC &nbsp;&nbsp;
	<i class="material-icons" style="font-size: 2.5vw">build_circle</i>
</div>
<table class="services" border="1">
		<tr>
			<th>Sr. no</th>
			<th>Plan</th>
			<th>No. of Machines</th>
			<th>Type of Machine</th>
			<th>Start Date</th>
			<th>Bill</th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Plan 1</td>
			<td>30</td>
			<td>Desktop</td>
			<td>12/12/2020</td>
			<td><form action=register.php method="post">
							<input type="hidden" name="step" value="<?php echo $row["reg_no"];?>" />
							<input type="submit" value="Generate">
				</form>
			</td>
		</tr>
		
</table>

<div class="services-head">
	<i class="material-icons" style="font-size: 2.5vw">build_circle</i>
	&nbsp;&nbsp;Service History&nbsp;&nbsp;
	<i class="material-icons" style="font-size: 2.5vw">build_circle</i>
</div>
<table class="services" border="1">
		<tr>
			<th>Sr. no</th>
			<th>Help For</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
			<th>Bill</th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Laptop</td>
			<td>11/11/2020</td>
			<td>12:30 PM</td>
			<td>Completed</td>
			<td><form action=register.php method="post">
							<input type="hidden" name="step" value="<?php echo $row["reg_no"];?>" />
							<input type="submit" value="Generate">
				</form>
			</td>
		</tr>
</table>

<div class="footer">
	<p>
		Copyright <i class="material-icons" style="font-size: 1.3vw">copyright</i>
		PC Care Computing Services &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Made with 
		<i class="material-icons" style="color: red;font-size: 1.3vw">favorite</i>
		in Pune&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
		<a href="#">Contact us</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="aboutus.html">About us</a>
	</p>

</div>

</body>
</html>