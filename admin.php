<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="destination.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body>

    <section class="header">

        <a href="home.html" class="logo"><img src="contact-img.svg" alt="Logo" style="width:70px;height:70px"></a>

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




    <div class="heading" style="background:url(header-bg-3.png) ;">
        <h1>Welcome Admins</h1>
    </div>



    

    <section class="packages" id="umanage">



    

        <h1 class="heading-title">MANAGE USERS</h1>
        <h1 class="heading-title"> New users </h1>
        
            

            

            <div class="box">
               <!--- <div class="image">
                    <img src="images/index.jpeg" alt="">
                </div>

                <div class="content">
                    <h3>Name : </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a class="btn">Delete</a>
                    <h1 class="btn">u</h1>
                </div>

                <!-- /melkamu phpwn asgebabet -->
            </div>

            <a href="signup.php" class="btn">Add user</a>
        <table border="7px " >
            <tr>
                <th>id</th>
                <th>fristname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th>sex</th>
                <th>operation</th>
            </tr>
            <?php

$conn= mysqli_connect("localhost","root","","travel");

$sql="select*from users";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $email=$row['email'];
    $password=$row['password'];
    $sex=$row['sex'];
echo"<tr><td>$id</td>
<td>$firstname</td>
<td>$lastname</td>
<td>$email</td>
<td>$password</td>
<td>$sex</td>
<td>
<a href='updateusers.php?updateid=$id'><button style='background-color:red;'>update</button></a>
<a href='deleteusers.php?deleteid=$id'><button  style='background-color:green;'>delete</button></a>
</td>
</tr>";
}
}
else{
    die(mysqli_error($conn));
}

            ?>
        </table>


           
        
    </section> -->


    <section class="packages" id="bomana" >
        <h1 class="heading-title">MANAGE Booking</h1>
        <h1 class="heading-title"> New Booking </h1>
      
            

            

           
            <a href="book.html" class="btn">Add book</a>
        <table border="1">
            <tr>
                <th>id</th>
                <th>full name</th>
                <th>phone</th>
                <th>email</th>
                <th>location</th>
                <th>arraivals</th>
                <td>leavings</td>
                <th>operation</th>
            </tr>
            <?php

$conn= mysqli_connect("localhost","root","","travel");

$sql="select*from book_form";
$result=mysqli_query($conn,$sql);
if($result){
while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $fullname=$row['name'];
    $phone=$row['phone'];
    $email=$row['email'];
    $location=$row['location'];
    $arraivals=$row['arraivals'];
    $leavings=$row['leavings'];

echo"<tr><td>$id</td>
<td>$fullname</td>
<td>$phone</td>
<td>$email</td>
<td>$location</td>
<td>$arraivals</td>
<td>$leavings</td>
<td>
 <a href='deletebook.php?deleteid=$id'><button  style='background-color:green;'>delete</button></a>
</td>
</tr>";
}
}
else{
    die(mysqli_error($conn));
}

            ?>
        </table>



           
        <!-- <div class="load-more"><span class="btn"> Load More</span></div> -->
    </section>



    <section class="packages" id="post" >
        <h1 class="heading-title">MANAGE post</h1>
        <h1 class="heading-title"> Posts </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-10.jpg" alt="">
                </div>



                <div class="content">
                    <h3>Posts of Booking </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias earum est iusto quas aspernatur, commodi excepturi ullam quisquam ea ab tempore necessitatibus, ratione neque? Cum modi vel suscipit aliquid porro.</p>
                    <a href="post.php" class="btn">Add Post</a>
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
                                $id="id";
            
                                
                                while($results = mysqli_fetch_array($queryi)){
                              
                                print "<div class='boxx'>";
                                print "<a href='book.html'><img src='images/".$results[$im]. "' style='width:100px' ></a>";
                                print "
                                <p><b>destination: </b> $results[$de]</p>
                                <p><b>duration:</b> $results[$duu]</p>
                                <p><b>date:</b> $results[$date]</p>
                                <p><b>description:</b> $results[$desc]</p>
                                <p><b><a class='btn' href='deletepost.php?deleteid=$results[$id]';>delete</a>
                                </b></p>
                                <p><b><a class='btn' href='updatepost.php?updateid=$results[$id]';>update</a>
                                </b></p>
                               </div>
                                ";
                                }
                    
                            ?>

            </div>

    </section>
    <script src="script.js"></script>    
</body>
</html>