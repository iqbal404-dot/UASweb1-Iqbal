<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Jacket Shop | About Us</title>
</head>
<style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #e3edf7;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.container{
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    width: 1100px;
}
.container .card{
    width: 320px;
    margin: 20px;
    padding: 40px 30px;
    background:#e3edf7;
    border: none;
    border-radius: 40px;
    box-shadow: -6px -6px 20px rgba(255, 255, 255, 1),
                6px 6px 20px rgba(0, 0, 0, 0.1);
}
.container .card:hover{
    box-shadow: inset -6px -6px 10px rgba(255, 255, 255, 0.5),
                inset 6px 6px 20px rgba(0, 0, 0, 0.05);
}
.container .card .gambar{
    position: relative;
    text-align: center;
}
.container .card .gambar img{
    max-width: 120px;
}
.container .card .box{
    position: relative;
    margin-top: 20px;
    text-align: center;
}
.container .card .box h2{
    color: #32a3b1;
    font-weight: 700;
    font-size: 1.4em;
    letter-spacing: 2px;
}
.container .card .box p{
    color: #32a3b1;
    text-align: justify;
}
.container .card .box a{
    display: inline-block;
    padding: 10px 20px;
    margin-top: 15px;
    border-radius: 40px;
    color: #32a3b1;
    font-size: 16px;
    text-decoration: none;
    box-shadow: -4px -4px 15px rgba(255, 255, 255, 1),
                4px 4px 15px rgba(0, 0, 0, 0.1);
}
.container .card .box a:hover{
    box-shadow: inset -4px -4px 10px rgba(255, 255, 255, 0.5),
                inset 4px 4px 10px rgba(0, 0, 0, 0.1);
}
.container .card .box a:hover span{
    display: block;
    transform: scale(0.98);
}
.container .card:hover .gambar,
.container .card:hover .box{
    transform: scale(0.98);
    cursor: pointer;
}
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin-right: -20px;">
                <div class="card">
                    <div class="gambar">
                        <img src="images/design.png" alt="">
                    </div>
                    <div class="box">
                        <h2>Visi & Misi</h2>
                        <p>Visi : Menjadi perusahaan jacket ternama dan no 1 di Indonesia</p>
                        <p> Misi : <br>
                            1. Menawarkan produk jacket yang uptodate<br>
                            2. Memberikan pelayanan yang baik kepada konsumen sehingga banyak yang menjadi pelanggan tetap<br>
                            3. Menawarkan pada keunggulan produk dari segi kualitas barang sehingga menambah nilai pelanggan</p>
                        <a href="#"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-right: -20px">
                <div class="card">
                    <div class="gambar">
                        <img src="images/JS.png" alt="">
                    </div>
                    <div class="box">
                        <h2 style="padding-top: 20px;">Jacket Shop</h2>
                        <p>Jacket shop adalah e-commerce penjualan jacket khusus pria, 
                            dengan harga yang terjangkau namun high quality. JacketShop.com ini pertama dibuka dan ditemukan oleh Muhammad Iqbal,
                            dengan adanya website ini diharapkan akan menjadi e-commerce dengan produk yang terkenal dan branded dikalangan para
                            pria, khususnya di Indonesia. Juga siap menerima pelanggan dari luar negeri.
                        </p>
                        <a href="#"><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="gambar">
                        <img src="images/launch.png" alt="">
                    </div>
                    <div class="box">
                        <h2>Branding</h2>
                        <p>
                            Produk yang Jacket Shop sediakan ini merupakan produk yang terbuat dari bahan yang mewah dan nyaman,
                            bahan yang dibuat dari produk impor luar negeri berkualitas tinggi, 
                            Banyak tipe dan jenis jacket yang di sediakan oleh kami. mulai dari jacket Parka, Hoodie, Sport jacket,
                            Biker jacket dan masih banyak lagi. Stok jacket kami sediakan lengkap dengan kualitas yang mantap mantap ashiaap.                     
                        </p>
                        <a href="#"><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
        <footer style="color: white; background-color: gray; text-align: center; padding-top: 7px; padding-bottom: 7px; 
        font-size: 10px; margin-top: 20px; width: 100%;">@Copyright by 18111113_Muhammad Iqbal_TIFRP18CIDB_UASWEB1</footer>
    </div>
</body>
</html>