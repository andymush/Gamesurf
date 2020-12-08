<?php

session_start();
if(!$_SESSION['isLogged']){
    header("location:../login.php");
    die();
    
}
header("refresh:1;url=index.php");
include('../connect.php');

?>

<head>

    <meta charset="utf-8">
    <title>GameSurf</title>
    <style>
        body{
        background: url(../loader.png) no-repeat;
        background-color: black;
        background-size: 50%;
        background-position: center;
        }
        h3{
            text-align: center;
            padding-top: 50%;
            color: white;
        }
    </style>

</head>
<body>
    <div class="username">
        <h3>NAmE</h3>
    </div>
</body>

</html>