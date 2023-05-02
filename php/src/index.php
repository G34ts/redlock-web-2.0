<?php
$servername = "redlock";
$username = "Geats";
$password = "KR";
$dbname = "redlock-db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM Users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["ID"]. " - Name: " . $row["Nama"]. " - Alamat: " . $row["Alamat"]. " - Jabatan: " . $row["Jabatan"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>