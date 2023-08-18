<?php
    $insert=false;
    $flag=0;
    $connection=mysqli_connect('localhost','root','root','book_database');
    if(isset($_POST['send']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $guests=$_POST['guests'];
        $arrivals=$_POST['arrivals'];
        $leaving=$_POST['leaving'];
    

        if(!empty($phone)&& (strlen($_POST['phone'])==10) && !empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)
        && !empty($address) && !empty($location) && !empty($guests) && !empty($arrivals) && !empty($leaving))
        {
            $flag=1;
        }
        else 
        {
            $flag=0;
        }


        if($flag==1)
        {
            $request="insert into book_forms(name, email, phone, address, location, guests, arrivals, leaving) 
            values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";
            mysqli_query($connection,$request);
        
           

            echo '<script type="text/javascript">'; 
            echo 'alert("Your booking is done successfully" );'; 
            echo 'window.location.href = "book.php";';
            echo '</script>';
            //header('location:book.html');
        }
        else{
           echo "<script type='text/javascript'>
        alert('Please fill the form correctly');
        window.location.href='book.php';
        
        </script>";
        }
    }
    else{
       
        echo '<script type="text/javascript">'; 
        echo 'alert("something went wrong try again");'; 
        echo 'window.location.href = "book.php";';
        echo '</script>';
    }

?>