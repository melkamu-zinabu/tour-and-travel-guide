<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
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




    <div class="heading" style="background:url(header-bg-1.png) ;">
        <h1>Destinations</h1>
    </div>

    <section class="packages">
        <h1 class="heading-title">New Destinations</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/im-1.jpg" alt="">
                </div>



                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>

                <?php
                $conn= mysqli_connect("localhost","root","","travel") or die("could not connect to db");
            
                $qryi="SELECT * FROM posts";
                $queryi=mysqli_query($conn, $qryi);
            
            
            
            ?>
            
                            <?php
                                $im = "image";
                                $de = "destination";
                                $duu = "duration";
                                $date="date";
                                $desc = "description";
            
                                
                                while($results = mysqli_fetch_array($queryi)){
                              
                                print "<div class='boxx'>";
                                print "<a href='book.html'><img src='images/".$results[$im]. "' style='width:100px' ></a>";
                                print "
                                <p><b>destination: </b> $results[$de]</p>
                                <p><b>duration:</b> $results[$duu]</p>
                                <p><b>date:</b> $results[$date]</p>
                                <p><b>description:</b> $results[$desc]</p>
                               </div>
                                ";
                                }
                    
                            ?>

            </div>
        </div>
    </section>




    <section class="packages">
        <h1 class="heading-title">Top Destinations</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/im-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>


<div class="box">
                <div class="image">
                    <img src="images/im-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>




            <div class="box">
                <div class="image">
                    <img src="images/im-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>




            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>




            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>




            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>




            <div class="box">
                <div class="image">
                    <img src="images/eiffel2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>


<div class="box">
                <div class="image">
                    <img src="images/img-6.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="images/img-9.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-8.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-10.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/img-11.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="images/img-12.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="images/eiffel1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Advanture </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="booking.html" class="btn">Book Now</a>
                </div>
            </div>


</div>
        <div class="load-more"><span class="btn"> Load More</span></div>
    </section>





    <section class="footer">

        <div class="box-container">
            <div class="box">
                 <h3>Quick links</h3>
                 <a href="home.html">Home</a>
                 <a href="book.html">Booking</a>
                 <a href="destination.php">Destination</a>
                 <a href="about.html"> About Us</a>
                 <a href="feedback.html">Feedback</a>
                 <a href="signup.php">Sign Up</a>

            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#" class="fas fa-angle-right"><i>Ask Quesion</i></a>
                <a href="#" class="fas fa-angle-right"><i>About Us</i></a>
                <a href="#" class="fas fa-angle-right"><i>Privacy Policy</i></a>
                <a href="#" class="fas fa-angle-right"><i>Terms of use</i></a>

            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#" class="fas fa-phone"><i>0947301844</i></a>
                <a href="#" class="fas fa-phone"><i>+251 90 063 1287</i></a>
                <a href="#" class="fas fa-email"><i>tinsaebirhan7@gmail.com</i></a>
                <a href="#" class="fas fa-address"><i>Addis Ababa, Ethiopia</i></a>

            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#" class="fas fa-feacbook"><i>feacbook</i></a>
                <a href="#" class="fas fa-twitter"><i>twitter</i></a>
                <a href="#" class="fas fa-instagram"><i>instagram</i></a>
                <a href="#" class="fas fa-linkedin"><i>linkedin</i></a>

            </div>
                  <div class="credit">Gora Hikers:<span> Copyright © 2022 All rights reserved</span> </div>

        </div>



    </section>
    <script src="script.js"></script>    
</body>
</html>