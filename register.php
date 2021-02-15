<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Jacket Shop | Register</title>
</head>
<style>
*{
    box-sizing: border-box;
}
body{
    color: #555;
    background: #e3edf7;
}
.login-div{
    margin-top: 5%;
    margin-left: 37.5%;
    align-items: center;
    font-weight: 700;
    overflow: hidden;
    font-family: 'Lato', sans-serif;
    justify-content: center;
    width: 360px;
    height: 650px;
    padding: 60px 35px 35px 35px;
    border-radius: 40px;
    background:#e3edf7;
    box-shadow: 13px 13px 20px #cbced1,
                -13px -13px 20px #ffffff ;
}
.logo{
    width: 100px;
    height: 10px;
    border-radius: 50%;
    margin: 0 auto;
}
.title{
    text-align: center;
    font-size: 28px;
    padding-top: 24px;
    letter-spacing: 0.5px;
}
.sub-title{
    text-align: center;
    font-size: 15px;
    padding-top: 7px;
    letter-spacing: 3px;
}
.fields{
    width: 100%;
    padding: 75px 5px 5px 5px;
    margin-top: -30px;
    transition: .5s;
}
.fields input{
    border: none;
    outline: none;
    background: none;
    font-size: 12px;
    color: #555;
    padding: 20px 10px 20px 5px;
}
.username, .password, .email{
    margin-bottom: 30px;
    border-radius: 25px;
    box-shadow: inset 8px 8px 8px #cbced1,
                inset -8px -8px 8px #ffffff;                
}
.fields svg{
    height: 22px;
    margin: 0px 10px -2px 25px;
}

/* TOMBOL DAFTAR */
.daftar button a{
        width: 100%;
        text-align: center;
        display: inline-block;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 2px;
        padding: 10px 30px;
        font-weight: bold;
        color:#555; 
        font-size: 18px;
        text-decoration: none;
        border-radius: 40px;
        box-shadow: -2px -2px 8px rgba(255, 255, 255, 1),
                    -2px -2px 12px rgba(255, 255, 255, 0.5),
                    inset 2px 2px 4px rgba(255, 255, 255, 0.1),
                    2px 2px 8px rgba(0, 0, 0, 0.15);
}
.daftar button a:hover{
    box-shadow: inset -2px -2px 8px rgba(255, 255, 255, 1),
                    inset -2px -2px 12px rgba(255, 255, 255, 0.5),
                    inset 2px 2px 4px rgba(255, 255, 255, 0.1),
                    inset 2px 2px 8px rgba(0, 0, 0, 0.15);
    cursor: pointer;
}
.daftar button a:hover span{
        display: inline-block;
        transform: scale(0.98);
        color: #555;
}

/* LUPA PASSWORD DAN REGISTER */
.link{
    padding-top: 20px;
    text-align: center;
}
.link a{
    text-decoration: none;
    color: #aaa;
    font-size: 15px;
}


/* LOGIN DENGAN SOCIAL MEDIA */
.social-media{
    display: flex;
    justify-content: center;
    margin-top: 25px;
    margin-bottom: -40px;
}
.social-media a{
    display: flex;
    background: #e3edf7;
    height: 50px;
    width: 50px;
    margin: 0 15px;
    border-radius: 50%;
    justify-content: center;
    text-decoration: none;
    align-items: center;
    box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15), 
                -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
    border: 1px solid rgba(0, 0, 0, 0);
    transition: transform 0.5s;
}
.social-media a i{
    font-size: 25px;
    color: #777;
    transition: transform 0.5s;
}
.social-media a:hover{
    box-shadow: inset 4px 4px 6px -1px rgba(0, 0, 0, 0.2), 
                inset -4px -4px 6px -1px rgba(255, 255, 255, 0.7),
                -0.5px -0.5px 0px rgba(255, 255, 255, 1),
                0.5px 0.5px 0px rgba(0, 0, 0, 0.15),
                0px 12px 10px -10px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.01);
    transform: translateY(2px);
}
.social-media a:hover i{
    transform: scale(0.90);
}
a:hover .fa-facebook{
    color: #3b5998;
}
a:hover .fa-twitter{
    color: #00acee;
}
a:hover .fa-google-plus-g{
    color:  #f00;
}

/* HIDDEN PASSWORD */
.eye{
    position: absolute;
}
.eye i:hover{
    cursor: pointer;
}
.eye .fa-eye, .fa-eye-slash{
    margin-top: 22px;
    margin-left: 40px;
    color: #999;
}
#hide1{
    display: none;
}
</style>
<body>
    <div class="login-div">
        <a href="index.php"><img src="images/JS.png" title="Jacket Shop" alt="logo" style="margin-left: 33%; margin-bottom: -20px; margin-top: -30px;"></a>
        <div class="title">Registrasi</div>
        <form action="config/register.php" method="POST" class="fields">
            <div class="username"><svg fill="#999" viewBox="0 0 20 20">
                <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
            </svg>
                <input type="username" name="username" class="user-input" placeholder="Masukan Username" id="username">
            </div>
            <div class="email"><svg fill="#999" viewBox="0 0 20 20">
                <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
            </svg>
                <input type="email" name="email" class="user-input" placeholder="Masukan Email" id="email">
            </div>
            <div class="password"><svg fill="#999" viewBox="0 0 20 20">
                <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
            </svg>
                <input type="password" name="password" class="pass-input" placeholder="Masukan Password" id="password">
                <span class="eye" onclick="myFuction()">
                    <i id="hide1" class="fa fa-eye"></i>
                    <i id="hide2" class="fa fa-eye-slash"></i>
                </span>
            </div>
            <div class="daftar">
                <button style="border: none; width: 100%; border-radius: 40px; background: #e3edf7; color: #555; outline: none;"><a id="daftar"><span>DAFTAR</span></a></button>
            </div>
            <div class="link">
                <p>Sudah Punya Akun? <a href="login.php">Login</a></p> 
            </div>
        </form>
    </div>
    <footer style="color: white; background-color: gray; text-align: center; padding-top: 7px; padding-bottom: 7px; 
        font-size: 10px; margin-top: 30px;">@Copyright by 18111113_Muhammad Iqbal_TIFRP18CIDB_UASWEB1</footer>
</body>
<script>
        function myFuction(){
        var x = document.getElementById("password");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");

        if(x.type == 'password'){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none"
        }else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block"
        }
    }
</script>
</html>