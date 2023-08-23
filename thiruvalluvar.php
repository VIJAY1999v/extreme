<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
            
 table,tr,timezone_identifiers_list{
    border: 2px solid black;
    font-size: 25px;
    font-family:MingLiU_HKSCS-ExtB;
    font-weight: 2px:
 }
    .checkboxes
    {
        font-size: 15px;
    }
    H1{
        font-family:Felix Titling;
    }
 </style>
    </head>
    <body>
    <center>
    <table border="3" cellspacing="30">
        <form action="thirukural.php" method="post">
                <h1> insert values</h1>
        <tr><td>cusname</td><td><input type="text" name="cusname" required=""></td></tr>
        <tr><td>setupboxno</td><td><input type="text" name="setupboxno" required=""></td></tr>
        <tr><td>noconnect</td><td><input type="text" name="noconnect" required=""></td></tr>
        <tr><td>phoneno</td><td><input type="text" name="phoneno" required=""></td></tr>
        <tr><td>package</td><td>
            <input type="checkbox" name="package[]" value="hd">HD
            <input type="checkbox" name="package[]" value="sports">SPORTS
            <input type="checkbox" name="package[]" value="news">NEWS
            <input type="checkbox" name="package[]" value="all">ALL
        </td></tr>
        <tr><td>amount</td><td><input type="text" name="amount" required=""></td></tr>
        <tr><td>datepaid</td><td><input type="date" name="datepaid" required=""></td></tr>
        <tr> <td>modem</td><td><input type="radio" name="modem" value="yes">YES &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="modem" value="no" >NO</td></tr>
        <tr><td> errorsetup</td><td><input type="text" name="errorsetup" required=""></td></tr>
         <tr><td>address</td><td><input type="text" name="address" required=""></td></tr>
        <tr><td colspan="2"><center><input type="submit" class="btn btn-primary btn-lg btn-block"   style='font-size :20px' name="insert" value="insert"></center></td></tr>
        </form>
    </table>
    </center>
            </body>
</html>