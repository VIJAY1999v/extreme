<?php
if(isset($_POST["update"]))
{ 
    $cusname=$_POST['cusname'];
    $setupboxno=$_POST['setupboxno'];
    $noconnect=$_POST['noconnect'];
    $phoneno=$_POST['phoneno'];
    $package=join(",",$_POST['package']);
    $amount=$_POST['amount'];
    $datepaid=$_POST['datepaid'];
    $modem=$_POST['modem'];
    $errorsetup=$_POST['errorsetup'];
    $address=$_POST['address'];


  
    $con=mysqli_connect("localhost","root","","sakthi");
   
$up ="Update honey set setupboxno='$setupboxno',noconnect='$noconnect',phoneno='$phoneno',package='$package',amount='$amount',datepaid='$datepaid',modem='$modem',errorsetup='$errorsetup',address='$address' where cusname='$cusname'";
echo"updated";
mysqli_query($con,$up);
}?>