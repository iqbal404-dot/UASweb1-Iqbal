<?php
include 'session.php';
?>
<html>
    <head>
        <title>Jacket Shop | Menu Utama</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&family=Righteous&family=Texturina&display=swap" rel="stylesheet">
    <?php
    $username = $_SESSION['username'];
    ?>
    </head>
<style>
.background{
    background-image: url(images/bg4.jpg);
    background-size: cover;
    height: 100%;
    width: 100%;
}
ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
    padding-right: 70px;
}
li {
    float: right;
    font-weight: bold;
}
li a{
    display: block;
    color: white;
    text-align: center;
    padding: 35px 16px;
    text-decoration: none;
}
li a:hover{
    color: gold;
    text-decoration: none;
}
.text1{
    margin-top: 70px;
    color: gold;
    font-size: 60px;
    font-family: 'Hanalei Fill', cursive;
    text-align: justify;
    margin-left: 120px;
    line-height: 1.0;
}
.text2{
    color: white;
    font-family: 'Righteous', cursive;
    margin-left: 120px;
    margin-top: 40px;
}
.box{
    background-color: black;
    width: 100%;
    margin-top: 7%;
    height: 189px;
    opacity: 80%;
}
    </style>
    <body>
        <div class="background">
            <ul>
                <a href="index.php"><li style="float: left;"><img src="images/JS.png" style="margin-left: 20px;"></li></a>
                <li><a href="edit.php" style="color: black;"><?php echo $username; ?><i class="fa fa-user-circle" style="margin-left: 5px;"></i></a></li>
                <li><a href="config/logout.php">Logout</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="detailinformasi.php">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <p class="text1">
                            Stylish<br> 
                            Anywhere
                        </p>
                        <p class="text2">
                            introducing the work collection, a line of minimalistic<br>
                            jacket designed for <u>new generation specifically for<br>
                            the modern professional.</u>
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/produk1.webp" height="189" width="189">
                                </div>
                                <div class="col-md-6" style="margin-top: 30px;">
                                    <p style="color: white; font-weight: bold;">NEWS</p>
                                    <p style="color: whitesmoke; text-align: justify; font-family: 'Texturina', serif;">Fortklass Abstrak Sweater Hoodie, 
                                        tersedia dalam warna hitam</p>
                                    <p><a href="#" style="color: goldenrod;">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/produk2.jpg" height="189" width="189">
                                </div>
                                <div class="col-md-6" style="margin-top: 30px;">
                                    <p style="color: white; font-weight: bold;">NEWS</p>
                                    <p style="color: whitesmoke; text-align: justify; font-family: 'Texturina', serif;">Blezer Sweater pria Trend Line Adidas, 
                                        dengan warna hitam putih</p>
                                    <p><a href="#" style="color: goldenrod;">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer style="color: white; background-color: black; text-align: center; padding-top: 7px; padding-bottom: 7px; 
        font-size: 10px;">@Copyright by 18111113_Muhammad Iqbal_TIFRP18CIDB_UASWEB1</footer>
    </body>
</html>