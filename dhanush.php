<?php
if(isset($_POST["delete"]))
{ 
    $cusname=$_POST['cusname'];
$conn = mysqli_connect("localhost","root","","sakthi");
$sql = "delete from honey where cusname='$cusname'";
echo "delete successfully";
mysqli_query($conn,$sql);
}
?>