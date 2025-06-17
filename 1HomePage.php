<!DOCTYPE html>
<html>
<head>
	<title>Vishal Airline</title>
	<style>
        
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		body{
			background-image:url('img4.jpg');
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		ul{
			float: right;
			list-style-type: none;
			margin-top: 25px;
		}
		ul li{
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
            background-color:green;
		}
		ul li a:hover{
			background-color: red;
			color: #000;
		}
		ul li.active {
			background-color: green;
			color: black;
		}
		.title{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.title h1{
			color: red;
			font-size: 50px;
		}
		.choices{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.a{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:yellow;
			text-decoration: none;
			transition: 0.6s ease;
		}
		.b{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:yellow;
			text-decoration: none;
			transition: 0.6s ease;
		}
		.c{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:yellow;
			text-decoration: none;
			transition: 0.6s ease;
		}
		.a:hover{
			background-color: #fff;
			color: #000;
		}
		.b:hover{
			background-color: #fff;
			color: #000;
		}
		.c:hover{
			background-color: #fff;
			color: #000;
		}
	</style>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li><a href="BookTicket.php">Ticket Booking</a></li>
				<li class="active"><a href="SearchFlight.php">Search Flight</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Welcome to Vishal<sup>2</sup> Airline</h1>
		</div>
		<div class="choices">
			<a href="1.1Admin.php" class="a">Admin Login</a>
			<a href="1.2User.php" class="b">Customer Login</a>
			<a href="1.3Register.php" class="c">Register</a>
		</div>
	</header>
</body>
</html>