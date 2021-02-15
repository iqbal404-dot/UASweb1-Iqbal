<html>
    <head>
        <title>Jacket Shop | Halaman Utama</title>
        <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&family=Langar&family=Nosifer&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>
    <style>
.background{
    background-image: url(images/background_halutama.jpg);
    background-size: cover;
    height: 100%;
    width: 100%;
}
.button-login{
        background-color: gray;
        height: 45px;
        font-weight: bold;
        width: 8%;
        color: black;
        display: inline-block;
        border-radius: 18px;
        text-align: center;
        padding-top: 10px;
        float: right;
        margin-top: 30px;
        margin-right: 50px;
        font-family: 'Lato', sans-serif;
    }
    .button-register{
        background-color: gray;
        height: 45px;
        font-weight: bold;
        width: 8%;
        color: black;
        display: inline-block;
        border-radius: 18px;
        text-align: center;
        padding-top: 10px;
        float: right;
        margin-top: 30px;
        margin-right: 20px;
        font-family: 'Lato', sans-serif;
    }
    .logo{
        margin-top: 8px;   
    }
    .text1{
        color: white;
        font-size: 50px;
        font-family: 'Hanalei Fill', cursive;
        text-align: center;
    }
    .text2{
        font-size: 20px;
        font-weight: normal;
    }
    .header{
        background: black;
        height: 28%;
    }
    .judul{
        font-family: 'Langar', cursive;
        color: white;
        font-size: 18px;
        margin-top: 35px;
        margin-bottom: 8px;
    }
    .tentang{
        font-family: 'Lato', sans-serif;
        color: white;
        text-align: justify;
    }
    .kontak{
        font-size: 13px;
        color: white;
        font-family: 'Lato', sans-serif;
        font-weight: lighter;
    }
    a:hover{
        color: black;
    }
    </style>
    <body>
        <div class="background">
            <img src ="images/logo.png" class="logo">
            <a href="login.php" class="button-login" style="text-decoration: none;">Login</a>
            <a href="register.php" class="button-register" style="text-decoration: none;">Register</a>

            <div class="container">
                <div class="row">
                    <div class="col-md-4" style="margin-top: 80px;">
                        <p class="text1">
                            "BE </span><span style="color: gray;">COOL</span><br> 
                            <span style="color: gray;">BE</span> GENTLE<br>
                            WITH <span style="color: gray;">US"</span>
                            <br>
                            <span class="text2">New jacket style, color and fabric</s>
                        </p>
                        <div class="row" style="color: white; text-align: center; font-family: 'Langar', cursive; cursor: pointer;">
                            <div class="col-md-4">
                                <p style="border: 2px solid white;">PARKA</p>
                            </div>
                            <div class="col-md-4">
                                <p style="border: 2px solid white;">HOODIE</p>
                            </div>
                            <div class="col-md-4">
                                <p style="border: 2px solid white">VARSITY</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="color: white; text-align: center ; font-family: 'Langar', cursive; cursor: pointer;">
                                <p style="border: 2px solid white;">MORE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="background: gray; height: 5px; margin-top: 0px; margin-bottom: 0px;">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="judul">JACKET <span style="color: gray;">SHOP</span></p>
                        <p class="tentang">Jacket shop adalah e-commerce penjualan jacket khusus pria, 
                        dengan harga yang terjangkau namun high quality.</p>
                        <a href="detailinformasi.php" style="font-family: 'Langar', cursive; font-size: 15px; 
                        color: gray; font-weight: bold;">ABOUT US</a>
                    </div>
                    <div class="col-md-8">
                        <p style="color: gray; font-family: 'Langar', cursive; font-size: 20px; font-weight: bold; 
                        float: right; margin-top: 15px; margin-right: 10px;">KONTAK
                        <br>
                        <span class="kontak">Whatsapp</span>
                        <br>
                        <span class="kontak">0895-3736-40460</span>
                        <br>
                        <span class="kontak">Email</span>
                        <br>
                        <span class="kontak">iqbal.xtab404@gmail.com</span>
                        <br>
                        <span class="kontak">Alamat</span>
                        <br>
                        <span class="kontak">Desa Cikaso, kec. Kramatmulya,</span>
                        <br>
                        <span class="kontak">kab. Kuningan, Jawa barat</span>   
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <footer style="color: white; background-color: gray; text-align: center; padding-top: 7px; padding-bottom: 7px; 
        font-size: 10px;">@Copyright by 18111113_Muhammad Iqbal_TIFRP18CIDB_UASWEB1</footer>
    </body>
</html>