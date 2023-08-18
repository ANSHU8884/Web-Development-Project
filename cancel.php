<?php
    $connection=mysqli_connect('localhost','root','root','book_database');
    if(isset($_POST['delete']))
    {
        
        $email=$_POST['email'];
        $phone=$_POST['phone'];

        $request="delete from book_forms where phone=$phone";
        $result = mysqli_query($connection,$request) or die ( mysqli_error($con));
        echo "<script type='text/javascript'>
            alert('booking is cancelled');
            window.location.href='index.php';
            window.location.href='book.php';
        </script>";
       
        //header('location:book.html');
    }
    else{
        echo 'something went wrong try again';
        echo "<script type='text/javascript'>
            alert('something went wrong try again');
            window.location.href='book.php';
        </script>";
       // header('location:book.html');
    }

?>