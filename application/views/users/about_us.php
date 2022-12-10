<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bayar1.css">
    <title>Tentang</title>
    <style>
        @import url('https://fonts.googlepis.com/css?family=poppins:300,400,500,600,700,800,900&display=swap');
        body{
            height: 100vh;
            background: linear-gradient(90deg,
                rgba(255,255,0,0.1) 0%, rgba(255,255,0,0.1) 25%,
                rgba(128,0,0,0.6) 25%, rgba(128,0,0,0.6) 75%,
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

        h1{
            margin-left: 45%;
        }

        .container-fluid {
            margin-top: 10%;
            margin-left: 33%;
        }

        label, input, select {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .row {
            margin-left: 18%;
        }

    </style>
</head>
<body>
    <header>
        <a href="<?= base_url('users/dashboard')?>" class="PRINTKE">PRINTKE</a>
        <ul>
            <li><a href="<?= base_url('users/dashboard')?>" class="active">Home</a></li>
            <li><a href="<?= base_url('users/harga')?>">Harga</a></li>
            <li><a href="<?= base_url('users/about_us')?>">About Us</a></li>
            <li><a href="<?= base_url('auth/login')?>"><img src="<?= base_url()?>/assets/img/login.png" id="grid"style="width: 40px; height: 40px;"></a></li>
        </ul>
    </header>
    <body>
        <div class="container-fluid">
        <font size="4">
    <pre>
       <p>Penyusun Website :
       <p>- Fakhri Raihan Alhafiz (09011281924030)
       <p>- M. Agil Arrifqi (09011181924008)
       <p>- M. Ridho Aditya Sulthan (09011181924002)
       <p>- Wahnuzyah Choiri Imanullah (09011281924039)

       <p>        Website PRINTKE ini diciptakan untuk membantu para mahasiswa 
       <p>khususnya untuk membantu para mahasiswa dalam menyelesaikan proses 
       <p>akademik tentunya dalam proses mengeprint. Semoga Website ini bisa      
       <p>bermanfaat untuk semuanya :)
                                                         
                                                         
            
    </pre>
    </font>
        </div>
    </body>
    <div class="rectangel"></div>
</body>
</html>