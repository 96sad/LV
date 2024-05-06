
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brand";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}    

$sql = "SELECT * FROM cloth WHERE username='$_POST[uname]' AND password='$_REQUEST[pass_word]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<script>window.location.href='http://localhost/clothebrand/index.html';</script>";
  }
  else
   {
    echo "<script>window.location.href='http://localhost/clothebrand/error.html';</script>";
}

mysqli_close($conn);
?>

</body>
</html>