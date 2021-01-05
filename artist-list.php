

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "painting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,name,price FROM tblproduct";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Painting ID</th><th>Name</th><th>price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td> <td>" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<style>
    table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
/*table, th, td {
    border: 1px solid black;
} */
</style>
</head>
<body>


</body>
</html>