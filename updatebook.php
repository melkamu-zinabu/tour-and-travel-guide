<?php

$connection=mysqli_connect('localhost','root','','travel');
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];}
if(isset($_POST['submit'])){
 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $location=$_POST['location'];

    $arraivals=$_POST['arraivals'];

    $leavings=$_POST['leavings'];
    $request = " UPDATE book_form set name='$name', email='$email', phone='$phone', location='$location', arraivals='$arraivals', leavings='$leavings' where id='$id' ";
    $result=mysqli_query($connection, $request);
      if($result){
        header('location:book.html');
      } 
      else{
        echo"you encountered some error";
      }
}
?>


<!DOCTYPE html>
<html>

</head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update ook</title>
    <link rel="stylesheet" href="book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


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

        function isEmpty(str) {
            return (str.length == 0 || !str.trim());
        }

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

            <a href="home.html">Home</a>
            <a href="book.html">Booking</a>
            <a href="destination.php">Destination</a>
            <a href="about.html"> About Us</a>
            <a href="feedback.html">Feedback</a>
            <a href="signup.php">Sign Up</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <table>
    <form action="updatebook.php" method="post" class="book-form" enctype="multipart/form-data">
                <h1 class="heading-title">Book Now</h1>
                <div class="flex">
                    <div class="inputbox">
                        <span>Full Name:</span>
                        <input type="text" placeholder="full name" name="name" value="" onkeypress="return /[a-zA-Z]/i.test(event.key)" required>

                    </div>

                    <div class="inputbox">
                        <span>Email:</span>
                        <input type="email" placeholder="Email" name="email" value="" required pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">>

                    </div>

                    <div class="inputbox">
                        <span>Phone:</span>
                        <input type="text" placeholder="Phone" name="phone" value="" onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}" required>

                    </div>

                    <div class="inputbox">
                        <span>Where To:</span>
                        <input type="text" placeholder="the place you wnat to visit" name="location" value="" onkeypress="return /[a-zA-Z]/i.test(event.key)" required>

                    </div>


                    <div class="inputbox">
                        <span>Arrivals:</span>
                        <input type="date" name="arraivals" required>

                    </div>

                    <div class="inputbox">
                        <span>leaving:</span>
                        <input type="text" name="leavings" required>

                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="submit">
            </form> 
</table> 
</body>
</html>