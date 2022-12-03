  <?php
$fname = "";
$fname = "";
$email = "";
$sex = "";
$pass1   = "";
$pass2   = "";
$err= array(); 
$congra="";

$conn= mysqli_connect("localhost","root","","travel");


 if(isset($_POST['update'])){
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $id=mysqli_real_escape_string($conn, $_POST['id']);

  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $sex = mysqli_real_escape_string($conn, $_POST['sex']);
  $pass1= mysqli_real_escape_string($conn, $_POST['pass1']);
  $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);

  //validation
  if ($pass1 != $pass2) {
    
    array_push($err, "The two passwords do not match");
    }
  
    $user_check_query = $sql= "UPDATE users set firstname='$fname',lastname='$lname', email='$email',password='$pass1', sex='$sex'where id='$id' ";
    $result = mysqli_query($conn, $user_check_query);
    if($result){
        echo"success";
    }
    else{
        echo(die(mysqli_connect_error($conn)));
    }
  
    }

    
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Sign up system</title>
  <link rel="stylesheet" href="signup_style.css">
</head>
<body>
  <div class="box2">
    <h1>SIGN UP Here</h1>
    <div class="err">
    <?php include('err.php'); 
    ?>
    </div>
    <?php
    echo $congra;
    ?>
    <form action="updateusers.php" method="post" enctype="multipart/form-data">
    <input type="text" name="id" id="" placeholder="Enter id"required >
      <input type="text" name="fname" id="" placeholder="Enter First name"required >

      <input type="text" name="lname" id="" placeholder="Enter Last name"required>
      <input type="email" name="email" id="" placeholder="Enter Email"required>
      <label>Sex</label>
      <input type="radio" name="sex" id="" value="Male"required>Male
      <input type="radio" name="sex" id="" value="Female"required>Female
      <input type="password" name="pass1" id="" placeholder="Enter Password"required>
      <input type="password" name="pass2" id="" placeholder="confirm Password"required>
      <input type="submit" name="update" value="update">
       </form>
  </div>
</body>
</html>