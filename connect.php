<?php
$con=mysqli_connect("localhost","root","","instaclone");

if($con){ ?>
     <script type="text/javascript"> 
        alert("Connection Successfully");
    </script> <?php
}
else{
   die ("Connection Failed");
}
?>