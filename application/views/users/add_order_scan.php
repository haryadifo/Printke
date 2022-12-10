<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bayar1.css">
    <title>Order Scan</title>
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
            <form action="<?= base_url() . 'users/order_scan/add_order_scan' ?>" id="invoice_form" method="post">
                <div class="form-group">
                    <font size="+2"><label>File Scan</label>
                <input type="file" name="file_scan" class="form-control">
                </div>    
                <div class="form-group">
                    <font size="+2"><label>Jumlah Rangkap</label>
                    <input type="number" name="jml_scan" class="form-control">
                </div>   
                <div class="form-group">
                    <font size="+2"><label>Berat Kertas</label>
                    <select name="berat_scan" id="role" class="custom-select">
                        <option value="70">70 Gram</option>
                        <option value="80">80 Gram</option>
                    </select>
                </div>      
                <div class="form-group">
                    <font size="+2"><label>Ukuran Kertas</label>
                    <select name="ukuran_scan" id="role" class="custom-select">
                        <option value="A4">A4</option>
                        <option value="F4">F4</option>
                        <option value="Legal">Legal</option>
                        <option value="Letter">Letter</option>
                    </select>
                </div>  
                <div class="form-group">
                    <font size="+2"><label>No Telp</label>
                    <input type="text" name="no_telpon" class="form-control">
                </div>  
                <div class="form-group">
                    <font size="+2"><label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>  
                <div class="form-group">
                    <font size="+2"><label>Total Belanja</label>
                    <input type="text" name="total_belanja" class="form-control">
                </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                <font size="+2"><button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-plus"></i> Pesan Sekarang</button>
                <font size="+2"><a href="<?= base_url('users/dashboard/index');?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
    <div class="rectangel"></div>
</body>
</html>