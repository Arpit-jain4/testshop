<!Homepage of the user>
<html>
<head> 
<link rel="stylesheet" href="project.css">
</head>
    <header id='topheader'>
        <a href='homepage.php'>E-SHOPPING</a>
   
    <a href="viewcart.php"><img src="image/download.png" style="height: 70px;width: 70px;margin-top:0px;float:right;"></a>
    </header>
   <body>
       <aside style="float: left" id="dialogue_box">
       <form action="showitems.php" method="get">
      Category:
       <select name="item">
           <option>SELECT PRODUCTS CATEGORY</option>
           <option>CAMERA</option>
           <option>MOBILE</option>
           <option>BOOK</option>
       </select><br>
       <?php
       //To check whether the cookie is set or not. If cookie is set a user is already logged in.
       if(!isset($_COOKIE['user']))
       { //If cookie is not set then login option will be provided
           echo"<a href=login.php>Login</a><br>";
       }
       else
       { //If cookie is set. A user is already logged in hence logout will be the option
       echo "<a href=logout.php>Logout</a><br>";
       }
       ?>
       <a href="createaccount.php">Create Account</a><br>
       <a href="contactus.php">Contact Us</a><br>
       <input type="submit" value="Search">
       </form>
       </aside>
<?php
//To show the user details
if(isset($_COOKIE['user']))
{
echo "Welcome ".$_COOKIE['user']." to our shopping Mall<br>You can do purchasing by selecting items from the menu on left side";
}
?>



