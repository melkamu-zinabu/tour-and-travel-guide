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
            <a href="home.html">Sign out</a>


        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>




    <div class="heading" style="background:url(header-bg-2.png) ;">
        <h1>Admin Add your Destination</h1>
    </div>




    

		



    <section class="booking">
        
        <form action="postpost.php" method="POST" enctype="multipart/form-data" class="book-form">
            <h1 class="heading-title">Post</h1>
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