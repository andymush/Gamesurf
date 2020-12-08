<?php

include('../connect.php');

session_start();
if(!$_SESSION['isLogged']){
    header("location:../login.php");
    
}

$user_check=$_SESSION['login_user'];

$select=mysqli_query("select * from people where username='$user_check'",$conn);
$row = mysqli_fetch_assoc($select);
$login_session = $row['username'];

if(isset($login_session)){
    mysqli_close($conn);
    header('Location: index.php');
}

?>