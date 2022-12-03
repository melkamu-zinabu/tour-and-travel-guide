
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
<a href="signup.php">add user</a>
        <table border="1">
            <tr>
                <th>id</th>
                <th>fristname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th>sex</th>
                <th>operation</th>
            </tr>
            <?php

$conn= mysqli_connect("localhost","root","","travel");

$sql="select*from users";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $fristname=$row['fristname'];
    $lastname=$row['lastname'];
    $email=$row['email'];
    $password=$row['password'];
    $sex=$row['sex'];
echo"<tr><td>$id</td>
<td>$fristname</td>
<td>$lastname</td>
<td>$email</td>
<td>$password</td>
<td>$sex</td>
<td>
<a href='updateusers.php?updateid=$id'><button style='background-color:red;'>update</button></a>
<a href='deleteusers.php?deleteid=$id'><button  style='background-color:green;'>delete</button></a>
</td>
</tr>";
}
}
else{
    die(mysqli_error($conn));
}

            ?>
        </table>
        </body>

    </html>
