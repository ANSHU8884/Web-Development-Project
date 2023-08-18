
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
<!--booking section starts-->

<section class="booking">
            <h1 class="heading-title">Update booking details</h1>
            <form action="update.php" method="post" class="book-form">
                <div class="flex">

                   

                    <div class="inputBox">
                        <span >name :</span>
                        <input type="text" placeholder="Enter your name" name="name" id="name">
                    </div>

                    <div class="inputBox">
                        <span >email :</span>
                        <input type="email" placeholder="Enter your email" name="email" id="email">
                    </div>

                    <div class="inputBox">
                        <span >phone :</span>
                        <input type="number" placeholder="Enter your number" name="phone" id="phone" onblur="myfun()"  >
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
                        <input type="number" placeholder="number of guests" name="guests">
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
                <input type="submit" value="update" class="btn3" name="modify">
                
            </form><br><br>
            <h1 class="heading-title">get booking id</h1><br>
            <div class="cen"><h2>you can get booking id only after filling above form</h2></div>
            
            <form action="id.php" method="post" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span >phone :</span>
                        <input type="number" placeholder="Enter your phone number for getting booking id " name="phone">
                    </div>
                
                </div>
                <input type="submit" value="get id" class="btn3" name="bookingid">
            </form>
</booking>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>