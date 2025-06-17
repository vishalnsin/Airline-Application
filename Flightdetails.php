<html><head><title>Flight Details</title></head>

<style>
body{
			background-image:url('img16.jpg');
			height: 100vh;
			background-size: cover;
			background-position: center;
}
.tablec{
                       
            border: 1px solid #fff;
			padding: 10px 20px;
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
			color: blue;
			font-size: 70px;
}

</style>
    <body>
        <center>
            <div class="act">
			        <h1>FLIGHT DETAILS</h1>
		    </div>
        <div class=tablec>
            <?php
            $mycon=mysqli_connect("localhost","root","","airline");

            $sql="select * from flight";
            //$sql="select * from student where s_no = 1";
            
            // echo"Connection Success.<br>";
            $record=$mycon->query($sql);
            $n=mysqli_num_rows($record);
            // echo "Total Record ".$n."<br>";
            if($n>0){

            
                echo"<table border=1>";
                echo"<tr><th>S_NO</th><th>FLIGHT_NO</th><th>LOC_FROM</th><th>DEP_TIME</th><th>LOC_TO</th><th>ARI_TIME</th>
                <th>PILOT1</th><th>MOB_PILOT1</th><th>PILOT2</th><th>MOB_PILOT2</th><th>CREW1</th><th>MOB_CREW1</th>
                <th>CREW2</th><th>MOB_CREW2</th></tr>";
                    while($row=mysqli_fetch_assoc($record)){
                    echo"<tr>";
                        echo"<td>".$row['S_NO']."</td>";
                        echo"<td>".$row['FLIGHT_NO']."</td>";
                        echo"<td>".$row['LOC_FROM']."</td>";
                        echo"<td>".$row['DEP_TIME']."</td>";
                        echo"<td>".$row['LOC_TO']."</td>";
                        echo"<td>".$row['ARI_TIME']."</td>";
                        echo"<td>".$row['PILOT1']."</td>";
                        echo"<td>".$row['MOB_PILOT1']."</td>";
                        echo"<td>".$row['PILOT2']."</td>";
                        echo"<td>".$row['MOB_PILOT2']."</td>";
                        echo"<td>".$row['CREW1']."</td>";
                        echo"<td>".$row['MOB_CREW1']."</td>";
                        echo"<td>".$row['CREW2']."</td>";
                        echo"<td>".$row['MOB_CREW2']."</td>";
                    echo"</tr>"; 
                    }
                    echo"</table>";

            }
            else
                echo"<font color=red size=5>Record not found</font>";
            ?>

        </center>
        </div>
    </body>