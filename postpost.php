<?php
 $conn= mysqli_connect("localhost","root","","travel");
if(isset($_POST['upload'])){
	$filename=$_FILES["image"]["name"];
    $destination=$_POST['destination'];
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $description=$_POST['description'];
	$tempname= $_FILES['image']['tmp_name'];
		$folder = "images/".$filename;
	
	$conn = mysqli_connect("localhost", "root", "", "travel");

		// Get all the submitted data from the form
		$sql="INSERT INTO posts(image,destination,description,duration,date)values('$filename','$destination','$description','$duration','$date')";
        $query_run=mysqli_query($conn,$sql);
	
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
            $msg = "image uploaded";
			header("location:post.php");
		}else{
			$msg = "Failed to upload image";
	}
    echo $msg;

 }
  
?>