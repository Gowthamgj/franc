<?php
$servername = "localhost";
$username = "dbms";
$password = "Gowtham7@";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$name = $_GET["username"];
$password=$_GET["password"];
$conn->query("use hk");
$sql = "SELECT reg_num, name, sec FROM rmk_student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["reg_num"]. " - Name: ". $row["name"]. " " . $row["sec"] . "<br>";
     }
} else {
     echo "0 results";
}
?>