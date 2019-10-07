<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
    <title>Grace</title>
</head>
<body>
    <!-- <div class = "container"> -->

            <div class = "logo">
                <a href = "index.php" ><img src = "img/logo.png" alt = "logo"></a>
            </div>
            <div class = "top-bar">
                <div class = "menu">
                    <ul>
                        <li><a href = "index.php" >STICKERS</a></li>
                        <li><a href = "#" >T-SHIRTS</a></li>
                        <li><a href = "#" >CANVAS</a></li>
                        <li><a href = "#" >ABOUT</a></li>
                    </ul>
                </div>

                <div class = "search">
                    <form action="search.php" method="GET">
                        <input type = "text" id = "search-bar" name = "search" placeholder="   Search...">
                        <!-- <input type= "submit" id = "search-button" value="Go" /> -->
                    </form>
                </div>

                <div class = "profile">
                    <a href = "cart.php"><img src = "img/shopping-cart.png" id = "cart-icon" alt = "cart" height = "20px"></a>
                    <?php if (isset($_SESSION['user']['username'])) {
                        echo '<a href="logout.php">Logout</a>';
                    } else {
                        echo '<a href = "profile.php"><img src = "img/profile.png" id = "profile-icon" alt = "profile" height = "20px"></a>';
                    } ?>
                </div>
            </div>

        <div class = "content">
            
            
                
