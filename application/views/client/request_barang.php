
                <div class="col-md-12">
                    <h1>List Request Barang</h1>
                    <a href="<?php echo base_url().'index.php/client/request_form'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Request Baru</a>
                    <br /><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode pesanan</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>RQ111</td>
                                        <td>10/12/2018 10:28</td>
                                        <td><span class="label label-info">Request Diproses</span></td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalDetailRequest">Detail</button>
                                            <button class="btn btn-danger">Cancel Request</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>RQ112</td>
                                        <td>8/12/2018 11:38</td>
                                        <td><span class="label label-warning">Dalam Pengiriman</span></td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalDetailRequest">Detail</button>
                                            <button class="btn btn-info"  data-toggle="modal" data-target="#modalDetailPengiriman">Detail Pengiriman</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>RQ113</td>
                                        <td>2/12/2018 9:23</td>
                                        <td><span class="label label-success">Selesai</span></td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalDetailRequest">Detail</button>
                                            <button class="btn btn-info"  data-toggle="modal" data-target="#modalDetailPengiriman">Detail Pengiriman</button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
           