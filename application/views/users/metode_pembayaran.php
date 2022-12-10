<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bayar1.css">
    <style>
        @import url('https://fonts.googlepis.com/css?family=poppins:300,400,500,600,700,800,900&display=swap');
        body{
            height: 100vh;
            background: linear-gradient(90deg,
                rgba(255,255,0,0.1) 0%, rgba(255,255,0,0.1) 25%,
                rgba(255,255,255,1) 25%, rgba(255,255,255,1) 75%,
                rgba(255,255,0,0.1) 75%, rgba(255,255,0,0.1) 100%
            );  
        }
        header{
            position: absolute;
            top: 0;
            left: 0;
            width: 85%;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items:  center;
            z-index: 10000;
        }
        header .PRINTKE{
            color: #000;
            font-weight: 700;
            text-decoration: none;
            font-size: 2em;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        header ul{
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 10%;
            left: 75%;
        }
        header ul li{
            list-style: none;
            margin-left: 20px;
        }
        header ul li a{
            text-decoration: none;
            padding: 6px 10px;
            color: black;
            border-radius: 20px;
        }
        header ul li a:hover{
            background: #fff;
            color: #97C1A9;
        }
    </style>
</head>
<body>
    <header>
        <a href="#" class="PRINTKE">PRINTKE </a>
        <ul>
        <li>
            <a href="<?= base_url('users/dashboard')?>" class="active">Home</a></li>
            <li><a href="<?= base_url('users/harga')?>">Harga</a></li>
            <li><a href="<?= base_url('users/about_us')?>">About Us</a></li>
            <li><a href="<?= base_url('auth/login')?>"><img src="<?= base_url()?>/assets/img/login.png" id="grid"style="width: 40px; height: 40px;"></a></li>
        </ul>
    </header>
    <body>
        <h1>Metode Pembayaran</h1>
            <div class="dana">
            <a href="<?= base_url('users/pembayaran')?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/dana.png" id="grid"style="width: 150px; height: 130px;">
            </div>
            <div class="ovo">
            <a href="<?= base_url('users/pembayaran')?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/ovo.png" id="grid"style="width: 150px; height: 130px;">
            </div>
            <div class="spay">
            <a href="<?= base_url('users/pembayaran')?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/spay.png" id="grid"style="width: 150px; height: 130px;">
            </div>
            <div class="cod">
            <a href="<?= base_url('users/pembayaran')?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/cod.png" id="grid"style="width: 150px; height: 130px;">
            </div>
    </body>
    <div class="rectangel"></div>
</body>
</html>