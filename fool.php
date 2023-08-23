<?php
if(isset($_POST["select"]))
{ 
$conn = mysqli_connect("localhost","root","","sakthi");
$go = mysqli_query($conn,"select * from honey");
echo "<table border=5>
<tr><th>CUSTOMER NO:</th><th>SETUPBOX-NO:</TH><th>NO OF CONNECTION:</th><th>PHONE NO:</th><th>PACKAGE:</th><th>AMOUNT:</th><th>DATE OF PAID:</th><th>MODEM:</th><th>ERROR IN SETUPBOX:</th><th>ADDRESS:</th></tr>";
while($r = mysqli_fetch_array($go))
{echo"<tr> <td>".$r["0"]."</td><td>".$r["1"]."</td><td>".$r["2"]."</td><td>".$r["3"]."</td><td>".$r["4"]."</td><td>".$r["5"]."</td><td>".$r["6"]."</td><td>".$r["7"]."</td><td>".$r["8"]."</td><td>".$r["9"]."</td> </tr>";
}
echo"</table>";}
?>
 