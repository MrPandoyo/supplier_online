			</div>			
		</div>
	</div>

	<div class="modal fade" id="modalTambahJumlah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	     <div class="modal-dialog" role="document">
	        <div class="modal-content">
		        <div class="modal-header">
		            <h4 class="modal-title" id="exampleModalLabel"><b>Jumlah</b></h4>
		          </div>
		          <div class="modal-body">
		            <form>
		                <div class="form-group">
		                    <label>Masukan Jumlah</label>
		                    <input class="form-control" type="text" value="20">
		                </div>
		            </form>
		          </div>
		          <div class="modal-footer">
		            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		            <button type="button" class="btn btn-primary">Kirim komplain</button>
		          </div>
		    </div>
	    </div>
    </div>

<div class="modal fade" id="modalDetailRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      	<div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h4 class="modal-title" id="exampleModalLabel"><b>Detail Request</b></h4>
	          </div>
	          <div class="modal-body">
	            <form>
	                <div class="form-group">
	                    <label>kode Request</label>
	                    <input class="form-control" type="text" readonly="true" value="RQ113">
	                </div>
	                <div class="form-group">
	                    <label>Tanggal Pesan</label>
	                    <input class="form-control" type="text" readonly="true" value="8/12/2018 11:38">
	                </div>
	                <div class="form-group">
	                     <label>Status</label>
	                    <input class="form-control" type="text" readonly="true" value="Dalam Pengiriman">
	                </div>
	               <div class="table-responsive">
	                   <table class="table table-bordered">
	                       <tr>
	                           <th>Nama Item</th>
	                           <th>Tipe Pembelian</th>
	                           <th>Harga</th>
	                           <th>Jumlah</th>
	                       </tr>
	                       <tr>
	                           <td>Beng Beng(30g)</td>
	                           <td>Kardus Kecil</td>
	                           <td>110.000</td>
	                           <td>1</td>
	                       </tr>
	                        <tr>
	                           <td>Magnum Ice Cream(100g)</td>
	                           <td>Kardus Kecil</td>
	                           <td>210.000</td>
	                           <td>2</td>
	                       </tr>
	                       <tr>
	                           <td colspan="3">Total Harga</td>
	                           <td>Rp. 530.000</td>
	                       </tr>
	                   </table>
	               </div>
	            </form>
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	          </div>
	        </div>
	    </div>
     </div>

	<div class="modal fade" id="modalDetailPengiriman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"><b>Detail Request</b></h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>kode Request</label>
                    <input class="form-control" type="text" readonly="true" value="RQ113">
                </div>
                 <div class="form-group">
                    <label>Jenis Kurir</label>
                    <input class="form-control" type="text" readonly="true" value="Sepeda Motor">
                </div>
                 <div class="form-group">
                    <label>Status</label>
                    <input class="form-control" type="text" readonly="true" value="Selesai">
                </div>
                <div class="form-group">
                    <label>Tanggal Kirim</label>
                    <input class="form-control" type="text" readonly="true" value="8/12/2018 11:38">
                </div>
                <div class="form-group">
                     <label>Tanggal Sampai</label>
                    <input class="form-control" type="text" readonly="true" value="8/12/2018 15:38">
                </div>
                 <div class="form-group">
                     <label>Nama Kurir</label>
                    <input class="form-control" type="text" readonly="true" value="Ucok">
                </div>
                 <div class="form-group">
                     <label>No. Telepon Kurir</label>
                    <input class="form-control" type="text" readonly="true" value="08473489230">
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
  	</div>
  </div>
  <div class="modal fade" id="modalComplaint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"><b>Complain Pesanan</b></h4>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>kode Request</label>
                    <input class="form-control" type="text" readonly="true" value="RQ113">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" disabled="true">
                        <option>Jumlah Barang</option>
                        <option>Kondisi Barang</option>
                        <option>Sikap Kurir</option>
                        <option>Masalah lainya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" readonly="true">Jumlah barang kelebihan</textarea> 
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Kirim komplain</button>
          </div>
        </div>
      </div>
    </div>

</div>
			<script type="text/javascript">
	$(document).ready(function(){
		$("#table-datatable").dataTable();
	});
	$('.alert-message').alert().delay(3000).slideUp('slow');
</script>
			
</body>
</html>