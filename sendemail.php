<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact| Life Style Store</title>
        <link rel="shortcut icon" href="img/srtcticon.png" type="image/png">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div style="" align=center >
            <!-- <p> ThankYou for Giving Your FeedBack! We Will Contact You Shortly.</p> -->
        </div>
</body>
</html>
<?php
require("includes/common.php");
 

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con, $name);
    $email= $_POST['email'];
    $email = mysqli_real_escape_string($con, $email);
    $message= $_POST['message'];
    $message = mysqli_real_escape_string($con, $message);

    $query = "INSERT INTO contactusinfo(name, email,message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
      if($query)
      {
          echo "<p align=center style='color:green; '> ThankYou for Giving Your FeedBack! We Will Contact You Shortly.</p>";
      }
}


?>
