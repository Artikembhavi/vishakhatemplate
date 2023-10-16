<?php
$con=mysqli_connect("localhost","root","","dashbord1");
if($con)
{
    echo "connected";
}
else
{
    echo "Error".$con;
}
?>