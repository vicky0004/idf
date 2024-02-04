<?php
include("connection.php");
session_start();
    if(isset($_SESSION['loged'])){
    }
    else{
        echo '<script type="text/JavaScript"> 
            window.location.replace("./login.php");
        </script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="./image/logo.jpg" type="image/x-icon">
    <title>dashboard</title>
</head>

<style>
    .bigbox{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100vw;
    height: 100vh;
}
.leftbox{
    width: 20%;
    
}
.rightbox{
    width: 80%;
}
</style>
<body>


    <div class="bigbox " style="background: yellow;">
        <div class="leftbox" style="background: red;">
            <img src="./image/user.png" alt="" style="width:80%">
            <div class="item"><a href="profile.php">profile</a></div>
            <div class="item"><a href="history.php">history</a></div>
        </div>
        <div class="rightbox" style="background: blue;">
                <div class="name">
                    <h1>hi Vicky Kumar</h1>                </div>
        </div>
    </div>
</body>
</html>

