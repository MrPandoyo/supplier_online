
                <div class="col-md-12">
                    <h1>List Items</h1>
                    <a href="<?php echo base_url().'index.php/admin/form_produk'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Items Baru</a>
                    <br /><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Items</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Status</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Beng Beng (30g)</td>
                                        <td>10/12/2010 10:28</td>
                                        <td><span class="label label-info">Available</span></td>
                                        <td>210</td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-success" title="Tambah Jumlah" data-toggle="modal" href="#modalTambahJumlah"><i class="fa fa-plus"></i></button>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>1</td>
                                        <td>Beng Beng (43g)</td>
                                        <td>10/12/2010 10:28</td>
                                        <td><span class="label label-info">Available</span></td>
                                        <td>110</td>
                                        <td>
                                            <button class="btn btn-primary">Edit</button>
                                            <button class="btn btn-success" title="Tambah Jumlah" data-toggle="modal" href="#modalTambahJumlah"><i class="fa fa-plus"></i></button>
                                         </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
