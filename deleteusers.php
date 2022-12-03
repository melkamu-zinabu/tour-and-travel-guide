<?php
$conn= mysqli_connect("localhost","root","","travel");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $user_check_query = "DELETE FROM users WHERE id='$id';";
    $result = mysqli_query($conn, $user_check_query);
if($result){
    
   header("location:admin.php");
}}
?>
