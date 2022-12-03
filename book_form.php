<?php

    $connection=mysqli_conect('localhost','root','',' book_db');

    if(isset($_POST['send'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];

        $location=$_POST['location'];

        $arraivals=$_POST['arraivals'];

        $leaving=$_POST['leaving'];

        $request = " insert into book_form(name, email, phone, location, arraivals, leaving) values
        ('$name','$email','$phone','$location','$arraivals','$leaving')";

        mysqli_query($connection, $request);
        header('location:book.html');

    };

?>