<!DOCTYPE html>
<html>
<head>
	<title>ADD FLIGHT DETAILS</title>

</head>
<body>

<style>
        
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		body{
			background-image:url('img11.jpg');
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
		.bef{
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
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
        </style>

<form method=post action=Addflightdetails.php>

            <div class="main">
                <!-- <div class="act">
			        <h1>FLIGHT DETAILS</h1>
		        </div> -->
                <table border = 1 class=choices>
                    <tr>
                    <th class=ab>S_NO</th>
                    <td><input type="text" name = S_NO class=aa></td>
                    </tr>
                    <tr>
                    <th class=bc>FLIGHT_NO</th>
                    <td><input type="text" name = FLIGHT_NO class=bb></td>
                    </tr>
                    <tr>
                    <th class=bc>LOC_FROM</th>
                    <td><input type="text" name = LOC_FROM class=c></td>
                    </tr>
                    <tr>
                    <th class=bc>DEP_TIME</th>
                    <td><input type="text" name = DEP_TIME class=c></td>
                    </tr>
                    <tr>
                    <th class=ab>LOC_TO</th>
                    <td><input type="text" name = LOC_TO class=d></td>
                    </tr>
                    <tr>
                    <th class=bc>ARI_TIME</th>
                    <td><input type="text" name = ARI_TIME class=c></td>
                    </tr>
                    <tr>
                    <th class=ab>PILOT1</th>
                    <td><input type="text" name = PILOT1 class=e></td>
                    </tr>
                    <th class=ab>MOB_PILOT1</th>
                    <td><input type="text" name = MOB_PILOT1 class=aa></td>
                    </tr>
                    <tr>
                    <th class=bc>PILOT2</th>
                    <td><input type="text" name = PILOT2 class=bb></td>
                    </tr>
                    <tr>
                    <th class=bc>MOB_PILOT2</th>
                    <td><input type="text" name = MOB_PILOT2 class=c></td>
                    </tr>
                    <tr>
                    <th class=ab>CREW1</th>
                    <td><input type="text" name = CREW1 class=d></td>
                    </tr>
                    <tr>
                    <th class=ab>MOB_CREW1</th>
                    <td><input type="text" name = MOB_CREW1 class=e></td>
                    </tr>
                    <tr>
                    <th class=ab>CREW2</th>
                    <td><input type="text" name = CREW2 class=d></td>
                    </tr>
                    <tr>
                    <th class=ab>MOB_CREW2</th>
                    <td><input type="text" name = MOB_CREW2 class=e></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type=submit value=Submit name =btnsubmit class=abc>
                            <input type="reset" value="Reset" class=bef>
                        </td>
                    </tr>
                </table>
            </div>

			<div class="main">
			<ul>
				<li class="active"><a href='1.2User.php'>Back</a></li>
				<li><a href='1HomePage.php'>Home</a></li>
			</ul>
		</div>
</form>

        <?php
        if(isset($_POST['btnsubmit'])){
            
            $S_NO = $_POST['S_NO'];
            $FLIGHT_NO = $_POST['FLIGHT_NO'];
            $LOC_FROM = $_POST['LOC_FROM'];
            $DEP_TIME = $_POST['DEP_TIME'];
            $LOC_TO = $_POST['LOC_TO'];
            $ARI_TIME = $_POST['ARI_TIME'];
            $PILOT1 = $_POST['PILOT1'];
            $MOB_PILOT1 = $_POST['MOB_PILOT1'];
            $PILOT2 = $_POST['PILOT2'];
            $MOB_PILOT2 = $_POST['MOB_PILOT2'];
            $CREW1 = $_POST['CREW1'];
            $MOB_CREW1 = $_POST['MOB_CREW1'];
            $CREW2 = $_POST['CREW2'];
            $MOB_CREW2 = $_POST['MOB_CREW2'];
            

            $mycon=mysqli_connect("localhost","root","","airline");
            echo"Connection Success";
            $sql="insert into flight values(?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $ps=$mycon->prepare($sql);
            $ps-> bind_param("issssssisisisi",$S_NO,$FLIGHT_NO,$LOC_FROM,$DEP_TIME,$LOC_TO,$ARI_TIME,$PILOT1,$MOB_PILOT1,$PILOT2,$MOB_PILOT2,$CREW1,$MOB_CREW1,$CREW2,$MOB_CREW2);
            $ps->execute();
            echo"<br>Record inserted sucessfully";
			//header("Location: Payment.php");
        }
        ?>
</body>
</html>