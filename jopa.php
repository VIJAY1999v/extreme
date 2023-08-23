<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>

    </head>
    <body>
    <center>
    <table border="3" cellspacing="20">
        <form action="unicorn.php" method="post">
                <h1> insert values</h1>
        <tr><td>reg no</td><td><input type="text" name="regno" required=""></td></tr>
        <tr> <td>stu name</td><td><input type="text" name="sname" required=""></td></tr>
        <tr><td> dob</td><td><input type="date" name="dob" required=""></td></tr>
<tr><td>age</td><td><input type="text" name="age" ></td></tr>
         <tr><td>hobbies</td><td><input type="checkbox" name="hobbies[]" value="singing">singing
<input type="checkbox" name="hobbies[]" value="game">game
<input type="checkbox" name="hobbies[]" value="yoga">yoga
<input type="checkbox" name="hobbies[]" value="reading">reading
</td></tr>
        <tr><td colspan="2"><input type="submit" name="insert" value="insert"></td></tr>
        </form>
    </table>
    </center>
            </body>
</html>