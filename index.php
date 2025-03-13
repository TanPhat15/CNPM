<?php require 'account/login_submit.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JS dùng để làm AJAX -->
    <script src="./js/jquery-3.7.0.min.js">

    </script>

    <link rel="stylesheet" href="./css/main.css">

    <!-- products -->
    <link rel="stylesheet" href="./css/products.css">
    <script src="./js/index.js">

    </script>
    <script src="./js/login.js">

    </script>

    <!-- slider -->
    <link rel="stylesheet" href="./css/slider.css">
    <script src="./js/slider.js"></script>
    <script src="./js/QuenMatKhau.js"></script>

    </script>

    <!-- header -->
    <link rel="stylesheet" href="./css/top_menu.css">
    <link rel="stylesheet" href="./fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/header.css">

    <!-- footer -->
    <link rel="stylesheet" href="./css/footer.css">

    <!-- post -->
    <link rel="stylesheet" href="./css/post.css">

    <!-- login -->
    <link rel="stylesheet" href="./css/formDN.css">


</head>

<body>
    <div id="wrapper">


        <div id="message">
            <div id="content_mess">

            </div>
        </div>

        <span>Location: account/login.php</span>
        <?php include('account/login.php'); ?>

        <span>Location: account/quenmatkhau.php</span>
        <?php include('account/quenmatkhau.php'); ?>

        <span>Location: account/register.php</span>
        <?php include('account/register.php'); ?>

        <span>Location: template/header.php</span>
        <?php include('template/header.php'); ?>

        <span>Location: template/top_menu.php</span>
        <?php include('template/top_menu.php'); ?>

        <div id="main">
            <span>Location: template/slider.php</span>
            <?php include('template/slider.php'); ?>

            <span>Location: template/products.php</span>
            <?php include('template/products.php'); ?>

            <?php
            // include('template/post.php');
            ?>
        </div>

        <div id="footer">
            <span>Location: template/footer.php</span>
            <?php include('template/footer.php'); ?>
        </div>
    </div>



</body>

</html>