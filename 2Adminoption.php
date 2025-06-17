<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
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
		}
		ul li a:hover{
			background-color: green;
			color: #000;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		body{
			background-image:url(img5.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		.title{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
            	
		}
		.title h1{
			color: Green;
			font-size: 60px;
		}
		.choices{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
            
		}
		.choicess{
			position: absolute;
			top: 70%;
			left: 50%;
			transform: translate(-50%,-50%);
            
		}
		.a{
			border: 1px solid #fff;
			padding: 10px 20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
            background-color:orange;
		}
		.b{
			border: 1px solid #fff;
			padding: 10px 20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
            background-color:orange;
		}
		.a:hover{
			background-color: #fff;
			color: #000;
		}
		.b:hover{
			background-color: #fff;
			color: #000;
		}
		.c{
			border: 1px solid #fff;
			padding: 10px 20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
            background-color:orange;
		}
		.c:hover{
			background-color: #fff;
			color: #000;
		}
        .d{
			border: 1px solid #fff;
			padding: 10px 20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
            background-color:orange;
		}
		.d:hover{
			background-color: #fff;
			color: #000;
		}
		.e{
			border: 1px solid #fff;
			padding: 10px 20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
            background-color:orange;
		}
		.e:hover{
			background-color: #fff;
			color: #000;
		}
		.f{
			border: 1px solid #fff;
			padding: 10px 20px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
            background-color:orange;
		}
		.f:hover{
			background-color: #fff;
			color: #000;
		}
        
	</style>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href='1.1Admin.php'>Back</a></li>
				<li><a href='1HomePage.php'>Home</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Welcome Vishal<sup>2</sup></h1>
		</div>
		<div class="choices">
			<a href="Bookticket.php" class="a">Book Tickets</a>
			<a href="Cancelticket.php" class="b">Cancel Tickets</a>
			<a href="PassengerDetails.php" class="c">Passenger Details</a>
            <a href="Addflightdetails.php" class="d">Add Flight</a>
		</div>

		<div class="choicess">
			<a href="RegCustomer.php" class="e">Register Customer</a>
			<a href="Flightdetails.php" class="f">Flight Details</a>
		</div>
	</header>
</body>
</html>