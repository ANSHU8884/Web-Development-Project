
<!DOCTYPE html>
<html>
  <head>
    <title>get id</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php
   $mysqli = new mysqli("localhost", "root", "root", "book_database");
   $phone=$_POST['phone'];
if(isset($_POST['bookingid']))
{
   
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    if(!empty($phone))
    {
        $sqliQuery= "select id,name from book_forms where phone=$phone";
        
        if ($result = $mysqli->query($sqliQuery)) { 
               
            while ($row = $result->fetch_object()) {
                
                $id = $row->id;
                $name = $row->name;
            }
            
            
        
            echo '
            <center>
            <h1>
            <table class="tableid" style="margin-top: 350px;; " >
            
                <tr >
                <td style="1px solid black" >id: </td>
                <td style="1px solid black">'.$id.'</td>
            
                </tr>
                <tr>
                <td style="1px solid black">name: </td>
                <td style="1px solid black">'.$name.'</td>
                </tr>
            
            </table>
            </h1>
            </center>';
            $result->close();
        }
        else
        {
            echo 'something went wrong';
        }
    }
    else
    {
        echo "<script type='text/javascript'>
        alert('please enter phone number');
        window.location.href='book.php';
    </script>";
    }
    
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

