<?php
  //inserting values
  if(isset($_POST['insert'])) 
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
 
  $ins="insert into honey(cusname,setupboxno,noconnect,phoneno,package,amount,datepaid,modem,errorsetup,address) values ('$cusname','$setupboxno','$noconnect','$phoneno','$package','$amount','$datepaid','$modem','$errorsetup','$address')";
  $r=mysqli_query($con,$ins);
  echo"values are inserted";
  mysqli_close($con);
  }
  ?>