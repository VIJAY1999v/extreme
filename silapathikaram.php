<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
 <style>b{
    font-family:
 }
 table,tr,td,{
    border: 2px solid black;
    font-size: 25px;
    font-family:MingLiU_HKSCS-ExtB;
    font-weight: 2px:
 }
    .checkboxes
    {
        font-size: 15px;
    }
 </style>
    </head>
    <body>
    <center>
    <table border="3" cellspacing="20">
        <form action="kovalan.php" method="post" >
                <b>enter the customer name want to update values</b>
        <tr><td>CUSTOMER NO :</td><td><input type="text" name="cusname" required=""></td></tr>
        <tr><td>SETUP-BOX NO :</td><td><input type="text" name="setupboxno" ></td></tr>
        <tr><td>NO OF CONNECTION :</td><td><input type="text" name="noconnect" ></td></tr>
        <tr><td>PHONE NO :</td><td><input type="text" name="phoneno" ></td></tr>
        <tr><td>PACKAGE :</td><td><div class="checkboxes">
            <input type="checkbox" name="package[]" value="hd">HD 
            <input type="checkbox" name="package[]" value="sports">SPORTS
            <input type="checkbox" name="package[]" value="religion">RELIGION
            <input type="checkbox" name="package[]" value="news">NEWS
            <input type="checkbox" name="package[]" value="all">ALL
            </div></td></tr>
        <tr><td>AMOUNT :</td><td><input type="text" name="amount" ></td></tr>
        <tr><td>DATE OF PAID :</td><td><input type="date" name="datepaid"></td></tr>
        <tr> <td>MODEM</td><td><input type="radio" name="modem" value="yes">YES &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="modem" value="no" >NO</td></tr>
        <tr><td> errorsetup</td><td><input type="text" name="errorsetup" ></td></tr>
         <tr><td>address</td><td><input type="text" name="address" ></td></tr>
        <tr><td colspan="2"><center><input type="submit"  style='font-size :20px'  class="btn btn-primary btn-lg btn-block"  name="update" value="update"></center></td></tr>
        </form>
    </table>
    </center>
            </body>
</html>