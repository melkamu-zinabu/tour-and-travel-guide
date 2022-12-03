
<?php
 $conn= mysqli_connect("localhost","root","","travel");
 if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
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
		$sql="UPDATE posts SET image=$filename,destination=$destination,description=$description,duration=$duration,date=$date where id=$id";
        $query_run=mysqli_query($conn,$sql);
	
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
            $msg = "data updated";
			header("location:post.php");
		}else{
			$msg = "Failed to update";
	}
    echo $msg;

 }
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="post.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>


    <script>
		function validateForm() {
			if (isEmpty(document.getElementById('data_3').value.trim())) {
				alert('First name is required!');
				return false;
			}
			if (isEmpty(document.getElementById('data_4').value.trim())) {
				alert('Last name is required!');
				return false;
			}
			if (!validateEmail(document.getElementById('data_5').value.trim())) {
				alert('Email must be a valid email address!');
				return false;
			}
			return true;
		}
		function isEmpty(str) { return (str.length == 0 || !str.trim()); }
		function validateEmail(email) {
			var re = "";
			return isEmpty(email) || re.test(email);
		}
	</script>
    
</head>
<body>

    <section class="header">

        <a href="home.1.html" class="logo"><img src="contact-img.svg" alt="Logo" style="width:70px;height:70px"></a>

        <nav class="navbar">
            
            <a href="admin.php">Admin</a>
            <a href="Post.php">Post</a>
            <a href="#umanage">Manage User</a>
            <a href="#bomana">Manage Booking</a>
            <a href="#post">Manage Post</a>
            <a href="home.html">Sign out</a>


        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>




    <div class="heading" style="background:url(header-bg-2.png) ;">
        <h1>Admin Update your Post</h1>
    </div>




    

		



    <section class="booking">
        
        <form action="updatepost.php" method="POST" enctype="multipart/form-data" class="book-form">
            <h1 class="heading-title">Uptate Post</h1>
            <div class="flex">
                <div class="inputbox">
                    <span>Destination:</span>
                    <input type="text" name="destination" placeholder="type destination" onkeypress="return /[a-zA-Z]/i.test(event.key)" required>

                </div>

                <div class="inputbox">
                    <span>Image of the Destination place:</span>
                    <input type="file" name="image" placeholder="select image" >
                    
                </div>


                <div class="inputbox">
                    <span>Duration:</span>
                    <input type="number" name="duration" placeholder="duration">
                    
                </div>

                <div class="inputbox">
                    <span>Date:</span>
                    <input type="date" name="date" placeholder="date ..d-m-y">
                    
                </div>


                <div class="inputbox">
                    <span>Description of the Place:</span>
                    <textarea id="desc" name="description" rows="4" cols="50" placeholder="type description"></textarea>
                    
                </div>

               
            </div>

            <input type="submit" name="upload" class="btn" value="upload">
        </form>

        
    </section>



    <!-- <section class="booking">
   
     <form action="postpost.php" method="POST" enctype="multipart/form-data" >
                <input type="text" name="destination" placeholder="type destination">
                <input type="file" name="image" placeholder="select image" >
                <input type="number" name="duration" placeholder="duration">
                <input type="date" name="date" placeholder="date ..d-m-y">
                <textarea id="desc" name="description" rows="4" cols="50" placeholder="type description"></textarea>
                <input type="submit" name="upload" value="upload">
             </form>

    </section> -->



    <script src="script.js"></script>    
</body>
</html>




<!-- $sql="UPDATE posts SET image=$filename,destination=$destination,description=$description,duration=$duration,date=$date where id=$id"; -->
       