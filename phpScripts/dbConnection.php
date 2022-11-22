<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "super_market";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error){
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Product_category";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "code: " . $row["code"]. " - description: " . $row["description"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 