<?php

$servername = "localhost";
$username = "jadheer";
$password = "password";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>new feature</title>
</head>
<body>

<div class="name">
	<h1>New feature with name displayed</h1>
	<h3>My new feature</h3>
</div>

<div class="name2">
	<h1>New feature with name2 displayed</h1>
	<h3>My new feature</h3>
</div>

</body>
</html>
