<?php
session_start();

include('connect.php');

if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $password=$_POST['password'];
    $first=$_POST['first'];
    $second=$_POST['second'];
    $game=$_POST['game'];
    
    $query="INSERT INTO people(id,username,password,first,second,game)VALUE(NULL,'$name','$password','$first','$second','$game')" ;
    $insert=mysqli_query($conn,$query);

    if ($insert) {
             $_SESSION['username']=$rows2['username'];
			 $_SESSION['password']=$rows2['password'];
			 $_SESSION['isLogged']=true;
        ?>
        <script>
            alert("Success");
            window.location.href='amin/gameon.php';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("failed");
            window.location.href='register.php';
        </script>
        <?php
    }
}

?>


