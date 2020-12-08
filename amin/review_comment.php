<?php
session_start();

include('../connect.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $platform=$_POST['platform'];
    $game=$_POST['game'];
    $review=$_POST['review'];
    

    $query="INSERT INTO reviews(id,username,platform,game,review)VALUE(NULL,'$username','$platform','$game','$review')" ;
    $insert=mysqli_query($conn,$query);

    if ($insert) {
        ?>
        <script>
            alert("Success");
            window.location.href='reviews.php';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Please try again");
            window.location.href='reviews.php';
        </script>
        <?php
    }
}

?>

