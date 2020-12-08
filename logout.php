<?php
session_start();
require_once('connect.php');
header("refresh:4;url=login.php");

session_unset();
session_destroy();
?>
<html>

<head>

    <meta charset="utf-8">
    <title>GameSurf</title>
    <link rel="stylesheet" type="text/css" href="style3.css">

</head>
<body>
</body>

</html>
