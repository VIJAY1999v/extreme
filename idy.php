<?php
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = "insert into sample values(105,'jothi')";
mysqli_query($conn,$sql);
?>
