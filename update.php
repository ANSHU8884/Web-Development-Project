
<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
    $connection=mysqli_connect('localhost','root','root','book_database');
    
    if(isset($_POST['modify']))
    {
      
       $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $location=$_POST['location'];
        $guests=$_POST['guests'];
        $arrivals=$_POST['arrivals'];
        $leaving=$_POST['leaving'];

        $request="UPDATE book_forms SET  phone = '$phone', name = '$name', email='$email',address='$address',location='$location',
        guests='$guests',arrivals='$arrivals',leaving='$leaving'
        WHERE phone  = $phone;";
        $result = mysqli_query($connection,$request) or die ( mysqli_error($con));
        echo "<script type='text/javascript'>
            alert('booking details updated');
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
  </body>
</html>


