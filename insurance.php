

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

$sql = "SELECT type_of_disaster,amount FROM insurance  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Type Of Disaster</th><th>Compensation Amount </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["type_of_disaster"]. "</td><td>" . $row["amount"]. "</td> </tr>";
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