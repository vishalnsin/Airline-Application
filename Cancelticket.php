<html><head><title>Cancel ticket</title></head>
    <form method="post" action="CancelT.php">
    <label for="id">Enter User ID to Delete:</label>
    <input type="number" name="id" id="id" required>
    <button type="submit">Delete</button>
</form>
</html>
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

// Check if ID is provided via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = intval($_POST["id"]); // Sanitize input

    // Check if ID exists
    $checkQuery = "SELECT * FROM air WHERE id = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // ID exists, proceed to delete
        $deleteQuery = "DELETE FROM air WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteQuery);
        $deleteStmt->bind_param("i", $id);
        if ($deleteStmt->execute()) {
            echo "Record with ID $id has been deleted.";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $deleteStmt->close();
    } else {
        echo "No record found with ID $id.";
    }

    $stmt->close();
} else {
    echo "Please provide a valid ID.";
}

$conn->close();
?>
