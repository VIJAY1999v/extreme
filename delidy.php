<?php
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = "delete from sample where rno=103";
if(! $conn)
{
    die ("couldn't connect:".mysqli_error());

}
echo "delete successfully";
mysqli_query($conn,$sql);
?>
