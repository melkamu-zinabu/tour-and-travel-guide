<?php

$connection=mysqli_connect("localhost","root","","travel");

if(isset($_POST['submit'])){
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $location=$_POST['location'];

    
    $request = "INSERT into feedback_form(name, email, phone, location) values
    ('$name','$email','$phone','$location')";
   $result= mysqli_query($connection, $request);
       if($result) {
      echo"thank you for your feedback";
        //header('location:feedback.html');
     }
     else{
        echo die(mysqli_error($connection));
     }
}
?>