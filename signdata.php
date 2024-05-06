<?php
$con=mysqli_connect("localhost","root","","brand");
if(mysqli_connect_errno())
{
    echo "Faiiled to connect to MYSQL: " .mysqli_connect_errno();
}

$sql="INSERT INTO cloth (username,email,password,confirmpassword) VALUES
('$_REQUEST[user]', '$_REQUEST[mail]', '$_REQUEST[passwd]', '$_REQUEST[cpasswd]')";

if (mysqli_query($con,$sql))
{
    echo  "<script>window.location.href='http://localhost/clothebrand/index.html';</script>";                  
}
else 
{
    echo "<script>window.location.href='http://localhost/clothebrand/error.html';</script>";
}
mysqli_close($con)
?>
