<!DOCTYPE html>
<html>
<head>
	<title>Register Yourself</title>
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
	 <form method=post action=1.3Register.php>

            <div class="main">
                <div class="act">
			        <h1>USER REGISTRATION</h1>
		        </div>
                <table border = 1 class=choices>
                    <tr>
                    <th class=ab>Name</th>
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
				<li class="active"><a href='1HomePage.php'>Back</a></li>
				<!-- <li><a href='1HomePage.php'>Home</a></li> -->
			</ul>
		</div>
</form>

</body>
</html>

<?php

    if(isset($_POST['btnsubmit'])){
            
            $name = $_POST['name'];
            $age = $_POST['age'];
            $mob = $_POST['mobile'];
            $email = $_POST['email'];

            $mycon=mysqli_connect("localhost","root","","airline");
            echo"Connection Success";
            $sql="insert into customer values(?,?,?,?);";
            $ps=$mycon->prepare($sql);
            $ps-> bind_param("siis",$name,$age,$mob,$email);
            $ps->execute();
            echo"<br>Record inserted sucessfully";
			// header("Location: 1.3Register Success.php");
        }

?>