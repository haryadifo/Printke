<div class="container-fluid">
<h2 class="mt-4 mb-3">Tambah Orderan Print</h2>
    <form action="<?= base_url() . 'super_admin/order_print/add_order_print' ?>" id="invoice_form" method="post">
    <div class="form-group">
    <div class="form-group">
            <label>File Print</label>
            <input type="hidden" name="id_order_print" class="form-control">
            <input type="file" name="file_print" class="form-control">
        </div>    
        <div class="form-group">
            <label>Jumlah Rangkap</label>
            <input type="number" name="jml_rangkap" class="form-control">
        </div>   
        <div class="form-group">
        <label>Berat Kertas</label>
            <select name="berat_kertas" id="role" class="custom-select">
                <option value="70">70 Gram</option>
                <option value="80">80 Gram</option>
            </select>
        </div>      
        <div class="form-group">
        <label>Ukuran Kertas</label>
            <select name="ukuran_kertas" id="role" class="custom-select">
                <option value="A4">A4</option>
                <option value="F4">F4</option>
                <option value="Legal">Legal</option>
                <option value="Letter">Letter</option>
            </select>
        </div>  
        <div class="form-group">
            <label>Jenis Tinta</label>
            <select name="jenis_tinta" id="role" class="custom-select">
                <option value="warna">Warna</option>
                <option value="grey scale">Greyscale</option>
            </select>
        </div>  
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="no_telp" class="form-control">
        </div>  
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>  
        <div class="form-group">
            <label>Total Belanja</label>
            <input type="text" name="total_belanja" class="form-control">
        </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-plus"></i> Add</button>
                    <a href="<?= base_url('super_admin/order_print/index');?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>