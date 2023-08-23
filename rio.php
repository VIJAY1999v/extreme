<?php
if(isset($_POST["INSERT"]))
{
    $rno=$_POST["b"];
    $name=$_POST["a"];
    $conn= mysqli_connect("localhost","root","","sathiya");
    $sql = "insert into sample(rno,name) values('$rno','$name')";
    echo"connect";
    mysqli_query($conn,$sql);
}
?>

<?php
if(isset($_POST["UPDATE"]))
{ 
    $rno=$_POST["b"];
    $name=$_POST["a"];
    $conn = mysqli_connect("localhost","root","","sathiya");
$sql ="Update sample set name='$name' where rno='$rno'";
echo"updated";
mysqli_query($conn,$sql);
}?>
 
<?php
if(isset($_POST["DELETE"]))
{ 
$rno=$_POST["b"];
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = "delete from sample where rno='$rno'";
echo "delete successfully";
mysqli_query($conn,$sql);
}
?>
 
<?php
if(isset($_POST["SELECT"]))
{ 
$conn = mysqli_connect("localhost","root","","sathiya");
$go= mysqli_query($conn,"select * from sample");
echo "<table border=5>
<tr><th>ROLL NO:</th><th>NAME:</TH></tr>";
while($r = mysqli_fetch_array($go))
{echo"<tr> <td>".$r["0"]."</td><td>".$r["1"]."</td> </tr>";
}
echo"</table>";}
?>
 
<?php
if(isset($_POST["ROWSELECT"]))
{ 
    $rno=$_POST["b"];
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = mysqli_query($conn,"select * from sample where rno='$rno'");
echo "<table border=5>
<tr><th>ROLL NO:</th><th>NAME:</TH></tr>";
while($s = mysqli_fetch_array($sql))
{echo"<tr> <td>".$s["0"]."</td><td>".$s["1"]."</td> </tr>";
}
echo"</table>";}
?>

<?php
if(isset($_POST["ASC"]))
{ 
    $name=$_POST["a"];
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = mysqli_query($conn,"select * from sample where name like'$name%'");
echo "<table border=5>
<tr><th>ROLL NO:</th><th>NAME:</TH></tr>";
while($t = mysqli_fetch_array($sql))
{echo"<tr> <td>".$t["0"]."</td><td>".$t["1"]."</td> </tr>";
} 
echo"</table>";}
?>

<?php
if(isset($_POST["view"]))
{ 
$conn = mysqli_connect("localhost","root","","sathiya");
$sql = mysqli_query($conn,"select count(*) from sample");
while($h = mysqli_fetch_array($sql))
{echo"the".$h["0"]."no of enteries";}
}
?>

