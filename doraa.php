<?php
if(isset($_POST["update"]))
{ 
   $regno=$_POST['regno'];
    $sname=$_POST['sname'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $con=mysqli_connect("localhost","root","","nature");
   
$up ="Update tree set sname='$sname',dob='$dob',age='$age' where regno='$regno'";
echo"updated";
mysqli_query($con,$up);
}?>
 