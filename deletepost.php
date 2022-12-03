<?php
$conn=mysqli_connect("localhost","root","","travel");
$sql= "DELETE from posts";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql = "SELECT image FROM posts WHERE id='$id';";
    $result1 = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result1)){
    $src="images/".$row['image'];
    unlink($src);
   header("location:destination.php");
}
    $user_check_query = "DELETE FROM posts WHERE id='$id';";
    $result = mysqli_query($conn, $user_check_query);
   
}

?>