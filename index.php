<?php
include("./includes/config.php");

//session_destroy();

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header('Location: register.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Worshipfy!</title>
    <style>
        body {
            background-color: #31343f;
        }
    </style>
</head>

<body>

</body>

</html>