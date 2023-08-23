<?php
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = mysqli_query($conn,"select * from sample where rno=104");
echo "<table border=5>
<tr><th>ROLL NO:</th><th>NAME:</TH></tr>";
while($r = mysqli_fetch_array($sql))
{echo"<tr> <td>".$r["0"]."</td><td>".$r["1"]."</td> </tr>";
}
echo"</table>";
?>