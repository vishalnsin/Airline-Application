<html><head><title>Our Customers</title></head>
<style>
body{
			background-image:url('img15.jpg');
			height: 100vh;
			background-size: cover;
			background-position: center;
}
.table{
                       
            border: 1px solid #fff;
			padding: 10px 30px;
			color: green;
            background-color:white;
			text-decoration: none;
			transition: 0.6s ease;

            position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
}
.act{
			position: absolute;
			top: 30%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.act h1{
			color: green;
			font-size: 70px;
}
</style>
    <body>
        <center>
            <div class="act">
			        <h1>REGISTER CUSTOMER DETAILS</h1>
		    </div>
            <div class = table>
            <?php
            $mycon=mysqli_connect("localhost","root","","airline");

            $sql="select * from customer";
            //$sql="select * from student where s_no = 1";
            
            // echo"Connection Success.<br>";
            $record=$mycon->query($sql);
            $n=mysqli_num_rows($record);
            echo "Total Record ".$n."<br>";
            if($n>0){


                echo"<table border=1>";
                echo"<tr><th>Name</th><th>Age</th><th>Mobile No</th><th>Email</th></tr>";
                    while($row=mysqli_fetch_assoc($record)){
                    echo"<tr>";
                        echo"<td>".$row['Name']."</td>";
                        echo"<td>".$row['Age']."</td>";
                        echo"<td>".$row['Mobile']."</td>";
                        echo"<td>".$row['Email']."</td>";
                    echo"</tr>"; 
                    }
                    echo"</table>";

            }
            else
                echo"<font color=red size=5>Record not found</font>";
            ?>
            </div>
        </center>
    </body>