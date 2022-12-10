<!doctype html>
<html>
    <head>
        <title>PRINTKE</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/style_users.css">
    </head>  
    <body>
       <header>
        <a href="#" class="PRINTKE">PRINTKE</a>
        <ul>
            <li><a href="<?= base_url('users/dashboard')?>" class="active">Home</a></li>
            <li><a href="<?= base_url('users/harga')?>">Harga</a></li>
            <li><a href="<?= base_url('users/about_us')?>">About Us</a></li>
            <li><a href="<?= base_url('auth/login')?>"><img src="<?= base_url()?>/assets/img/login.png" id="grid"style="width: 40px; height: 40px;"></a></li>
        </ul>
       </header> 
       <section>
        <img src="<?= base_url()?>/assets/img/pngegg (1).png" id="grid"
        style="width: 1920px; height: 960px;">
        <h2 id="text">WELCOME!</h2>
        <a href="sec" id="btn">Pesan Sekarang</a>
       </section>
       <div class="sec" id="sec">
       <div id="our_services" class="container">
            <div id="try">
                <div id="product1">
                    <a href="<?= base_url('users/order_jilid/index');?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/Group 3 (1).png" id="grid"style="width: 180px; height: 150px;">
                </div>
                <div id="product2">
                    <a href="<?= base_url('users/order_scan/index');?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/Group 2 (1).png" id="grid"style="width: 180px; height: 150px;">
                </div>
                <div id="product3">
                    <a href="<?= base_url('users/order_print/index');?>" class="PRINTKE"><img src="<?= base_url()?>/assets/img/Group 1 (1).png" id="grid"style="width: 180px; height: 150px;">
                </div>
            </div>
        </div>

       <style>
            #our_services {
                /*height: 450px;*/
                text-align: center;
                overflow: auto;
                margin: auto;
            }

            #try {
                width: 50%;
                height: 50%;
                margin: auto;
            }

            #product1 {
                width: 30%;
                height: 75%;
                float: right;
                margin: 5px;
            }

            #product2 {
                width: 30%;
                height: 75%;
                float: right;
                margin: 5px;
            }

            #product3 {
                width: 30%;
                height: 75%;
                float: left;
                margin: 5px;
            }

       </style>

       <script>
        let grid = document.getElementById('grid');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let header = document.querySelector('header');
        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            grid.style.top = value * 0.25 + 'px';
            text.style.marginRight = value * 4 + 'px';
            text.style.marginTop = value * 0.5 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
        })
       </script>
    </body>  
</html>