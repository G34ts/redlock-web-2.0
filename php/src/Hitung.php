<?php
$servername = "redlock";
$username = "Geats";
$password = "KR";
$dbname = "redlock-db";
$hitung = 0;


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM Users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $hitung++;
  }
}

echo "Total Users: ". $hitung;
mysqli_close($conn);
?>