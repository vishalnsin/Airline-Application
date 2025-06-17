<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<style>
        
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		body{
			background-image:url('img1.jpg');
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
			top: 40%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.act h1{
			color: red;
			font-size: 70px;
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
	 <form method=post  action='1.2User.php'>
            <div class="main">
                <div class="act">
			        <h1>PASSENGER LOGIN</h1>
		        </div>
                <table border = 1 class=choices>
                    <tr>
                    <th class=ab>User Name</th>
                    <td><input type="text" name = "txtuser" class=c></td>
                    </tr>
                    <tr>
                    <th class=bc>Password</th>
                    <td><input type="password" name = "txtpass" class=d></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Submit" name =submitbtn class=a>
                            <input type="reset" value="Reset" class=b>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
</body>
</html>

<?php

    if(isset($_POST['submitbtn'])){
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];
        if((strcmp($user,"user")==0) and (strcasecmp($pass,"1234")==0))
           // echo "<font color = green size=5> You are Valid user</font>";
            header("Location: 3Useroption.php");
           else
            echo "<font color=red size = 5> You are invalid user </font>";
    }

?>