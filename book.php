<?php

$connection=mysqli_connect('localhost','root','','travel');

if(isset($_POST['submit'])){
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $location=$_POST['location'];

    $arraivals=$_POST['arraivals'];

    $leavings=$_POST['leavings'];
    $request = " INSERT into book_form(name, email, phone, location, arraivals, leavings) values
    ('$name','$email','$phone','$location','$arraivals','$leavings')";
    $result=mysqli_query($connection, $request);
      if($result){
        header('location:book.html');
      } 
      else{
        echo"you encountered some error";
      }
}
?>
