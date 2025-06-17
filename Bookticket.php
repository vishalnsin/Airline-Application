<!DOCTYPE html>
<html>
<head>
	<title>Book Ticket</title>
	<style>
        
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		body{
			background-image:url('img5.jpg');
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
		}
		ul li a:hover{
			background-color: green;
			color: #000;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		
		.title{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.title h1{
			color: #fff;
			font-size: 70px;
		}
        .ab{
            border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:yellow;
			text-decoration: none;
			transition: 0.6s ease;
        }
        .bc{
            border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:yellow;
			text-decoration: none;
			transition: 0.6s ease;
        }
        .act{
			position: absolute;
			top: 30%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.act h1{
			color: #fff;
			font-size: 70px;
		}
		
		.aa{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;
		}
		.bb{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;
		}
        .c{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;
		}
        .d{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;
		}
        .e{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;
		}
		.ef{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;
		}
        .abc{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
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
        .choices{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
	</style>
</head>
<body>

<form method=post action=Bookticket.php>

            <div class="main">
                <div class="act">
			        <h1>PASSENGER DETAILS</h1>
		        </div>
                <table border = 1 class=choices>
                    <tr>
                    <th class=ab>Passenger Name</th>
                    <td><input type="text" name = name class=aa></td>
                    </tr>
                    <tr>
                    <th class=bc>Age</th>
                    <td><input type="text" name = age class=bb></td>
                    </tr>
                    <tr>
                    <th class=bc>Mobile No</th>
                    <td><input type="text" name = mobile class=c></td>
                    </tr>
                    <tr>
                    <th class=ab>Email Id</th>
                    <td><input type="email" name = email class=d></td>
                    </tr>
                    <tr>
                    <th class=ab>Flight No</th>
                    <td><input type="text" name = flightno class=e></td>
                    </tr>
					<tr>
                    

                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type=submit value=Submit name =btnsubmit class=abc>
                            <input type="reset" value="Reset" class=abc>
                        </td>
                    </tr>
                </table>
            </div>

			<div class="main">
			<ul>
				<li class="active"><a href='SearchFlight.php'>Back</a></li>
				<li><a href='1HomePage.php'>Home</a></li>
			</ul>
		</div>
</form>

        <?php
        
		// Database connection
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "airline";

		$conn = new mysqli($host, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Check if form submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Sanitize input
			$name = trim($_POST["name"]);
			$age = intval($_POST["age"]);
			$mobile = trim($_POST["mobile"]);
			$email = trim($_POST["email"]);
			$flightno = $_POST["flightno"];
			// $date = $_POST["date"];

			// Prepare and bind
			$stmt = $conn->prepare("INSERT INTO air VALUES (?, ?, ?, ?, ?);");
			$stmt->bind_param("siiss", $name, $age, $mobile, $email, $flightno);

			if ($stmt->execute()) {
				echo "Passenger added successfully!";
			} else {
				echo "Error: " . $stmt->error;
			}

			$stmt->close();
		}

		$conn->close();

?>
</body>
</html>