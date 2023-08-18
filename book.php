<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
   <!-- header section starts -->

    <section class="header">
        <a href="home.html" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.html">Home</a>
            <a href="about.html" >About</a>
            <a href="packageinitial.html">Package</a>
            <a href="book.html" >Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
     <!-- header section ends -->
    <div class="heading-about" style="background: url(images/header1.jpg) no-repeat">
        <h1>book now</h1>
    </div>
    <!--booking section starts-->

    <section class="booking">
            <h1 class="heading-title">Book your trip!</h1>
            <form action="book_form.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span >name :</span>
                        <input type="text" placeholder="Enter your name" name="name" id="name">
                    </div>

                    <div class="inputBox">
                        <span >email :</span>
                        <input type="email" placeholder="Enter your email" name="email" id="email" onblur="myid()">
                        <span id="mailid" style="color:red;"></span>
                    </div>

                    <div class="inputBox">
                        <span >phone :</span>
                        <input type="number" placeholder="Enter your number" name="phone" id="phone" onblur="myfun()"   >
                        <span id="messages" style="color:red;"></span>
                    </div>

                    <div class="inputBox">
                        <span >address :</span>
                        <input type="text" placeholder="Enter your address" name="address">
                    </div>

                    <div class="inputBox">
                        <span >where to :</span>
                        <input type="text" placeholder="where you want to go" name="location">
                    </div>

                    <div class="inputBox">
                        <span >how many :</span>
                        <input type="number" placeholder="number of guests" name="guests" >
                    </div>

                    <div class="inputBox">
                        <span >arrivals :</span>
                        <input type="date"  name="arrivals">
                    </div>

                    <div class="inputBox">
                        <span >leaving :</span>
                        <input type="date"  name="leaving">
                    </div>
                </div>
                <div class="cen"> <input type="submit" value="submit" class="btn3" name="send"></div>
               
            </form><br><br>
            <!--<h1 class="heading-title">get booking id</h1><br>-->
            <div class="cen"><h2>you can get booking id only after filling above form</h2></div>
            
            <form action="id.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span >Enter your phone number for getting booking id:</span>
                        <input type="number" placeholder="Enter phone no" name="phone" >
                    </div>
                
                </div>
                <div class="cen"><input type="submit" value="get id" class="btn3" name="bookingid"></div>
                
            </form>

            <br><br>


           <!-- <h1 class="heading-title">update the booking details</h1>-->
            <form action="update1.php" method="post" class="book-form">
                <div class="cen">
                <input type="submit" value="update the booking details" class="btn3" name="update">
                
                </div>
              
            </form><br><br>

            <!--<h1 class="heading-title">Cancel booking</h1>-->
            <form action="cancel.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span >phone :</span>
                        <input type="number" placeholder="Enter your phone number for cancelling booking " name="phone">
                    </div>
                
                </div>
                <div class="cen"><input type="submit" value="cancel booking" class="btn3" name="delete"></div>
                
            </form>

           
       
    </section>




     <!--booking section ends-->

     <!--footer section starts-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.html" ><i class="fas fa-angle-right"></i>About</a>
            <a href="packageinitial.html"><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.html" ><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>Extra links</h3>
            <a href=#><i class="fas fa-angle-right"></i>ask questions</a>
            <a href=#><i class="fas fa-angle-right"></i>about us</a>
            <a href=#><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href=#><i class="fas fa-angle-right"></i>terms of use</a>
            
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href=#><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href=#><i class="fas fa-phone"></i>+111-222-3333</a>
            <a href=#><i class="fas fa-envelope"></i>avcoe@gmail.com</a>
            <a href=#><i class="fas fa-map"></i>Sangamner-422605</a>
            
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit">created by <span> Miss. Aditi Kulkarni,Miss. Pratiksha Kuldharan,Miss. Priti Kharde,Miss. Anshu Kasar </span>| all rights reserved!</div>
</section>
<!--footer section ends-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>