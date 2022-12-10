<div class="container-fluid">
<h2 class="mt-4 mb-3">Tambah Orderan Jilid</h2>
    <form action="<?= base_url() . 'admin/order_jilid/add_order_jilid' ?>" id="invoice_form" method="post">
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
            <label>Warna Kertas Kambing</label>
            <select name="warna_kamb" id="role" class="custom-select">
                <option value="Kuning">Kuning</option>
                <option value="Merah">Merah</option>
                <option value="Hijau">Hijau</option>
                <option value="Biru">Biru</option>
            </select>
        </div>  
        <div class="form-group">
            <label>Jumlah Rangkap</label>
            <input type="number" name="juml_rangkap" class="form-control">
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
            <label>File Jilid</label>
            <input type="file" name="file_jilid" class="form-control">
        </div>    
        <div class="form-group">
            <label>Total Belanja</label>
            <input type="number" name="total_belanja" class="form-control">
        </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-plus"></i> Add</button>
                    <a href="<?= base_url('admin/order_jilid/index');?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>