<!DOCTYPE html>
<html>
    <CENTER>
<head>
    <title>Flight Search</title>
</head>

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
    <h2>Search Flights</h2>
    <form method="POST" action="SearchFlight.php">
        <label for="LOC_FROM">Location From:</label>
        <input type="text" name="LOC_FROM" required><br><br>

        <label for="LOC_TO">Location To:</label>
        <input type="text" name="LOC_TO" required><br><br>

        <!-- <label for="journey_date">Date of Journey:</label>
        <input type="date" name="journey_date" required><br><br> -->

        <input type="submit" value="Search Flights">
    </form>
</body>

<?php
// Database Configuration
$host = 'localhost';
$db = 'Airline';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// PDO Connection
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
// ];

try {
    $pdo = new PDO($dsn, $user, $pass, );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle POST Request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $LOC_FROM = strtoupper(trim($_POST['LOC_FROM']));
    $LOC_TO = strtoupper(trim($_POST['LOC_TO']));
    // $journeyDate = $_POST['journey_date'];

    if (empty($LOC_FROM) || empty($LOC_TO)) {
        die("All fields are required.");
    }

    // Prepare SQL Query
    $sql = "SELECT * FROM Flight 
            WHERE LOC_FROM = :LOC_FROM 
              AND LOC_TO = :LOC_TO 
            -- AND departure_date = :journeyDate
            ORDER BY DEP_TIME ASC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'LOC_FROM' => $LOC_FROM,
        'LOC_TO' => $LOC_TO,
        // 'journeyDate' => $journeyDate
    ]);

    $flights = $stmt->fetchAll();

    // echo "<h2>Available Flights on " . htmlspecialchars($journeyDate) . ":</h2>";

    if (count($flights) > 0) {
        echo "<table border='1' cellpadding='5'>
                <tr>
                    <th>Flight Number</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                </tr>";
        foreach ($flights as $flight) {
            echo "<tr>
                    <td>{$flight['FLIGHT_NO']}</td>
                    <td>{$flight['DEP_TIME']}</td>
                    <td>{$flight['ARI_TIME']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No flights found for the selected route and date.";
    }
}
?>

</CENTER>
</html>
