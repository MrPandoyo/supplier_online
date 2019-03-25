<div class="col-md-12">
    <h3>Tambah items Form</h3>
<br><br>
<form action="" method="post">

    <div class="form-group">
        <label>Nama Items</label>
       <input class="form-control" type="text">
    </div>

     <div class="form-group">
        <label>Nama Perusahaan</label>
       <input class="form-control" type="text">
    </div>

    <div class="form-group">
        <label>Status</label>
       <input  type="radio" name="status">Aktif
       <input type="radio" name="status">Inaktif
    </div>

     <div class="table table-responsive">
         <table class="table table-bordered">
             <tr>
                 <th>Jenis Pembelian</th>
                 <th>Harga</th>
                 <th>Isi/pcs</th>
                 <th>Jumlah</th>
                 <th><button class="btn btn-primary" title="Tambah Jenis Pembelian"><i class="fa fa-plus"></i></button></th>
             </tr>
             <tr>
                 <td>
                     <select class="form-control">
                         <option>Kardus Kecil</option>
                         <option>kardus besar</option>
                         <option>Keranjang kecil</option>
                         <option>Keranjang Besar</option>
                     </select>
                 </td>
                 <td>
                     <input class="form-control" type="text">
                 </td>
                 <td>
                     <input class="form-control" type="text">
                 </td>
                 <td><input type="text" class="form-control"></td>
                 <td>
                     <button class="btn btn-danger" title="Hapus Jenis"><i class="fa fa-minus"></i></button>
                 </td>
             </tr>
         </table>
     </div>

     <div class="form-group">
         <label>Deskripsi</label>
         <textarea class="form-control">Tentang produk</textarea>
     </div>

    <div class="form-group">
        <input type="submit" value="Simpan Item" class="btn btnprimary">
    </div>
</div>
</form>
</div>