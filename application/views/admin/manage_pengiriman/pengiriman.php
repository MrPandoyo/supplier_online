
                <div class="col-md-12">
                    <h1>List Pengiriman</h1>
                    <a href="<?php echo base_url().'index.php/admin/kirim_request'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Kirim Request</a>
                    <br /><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="table-datatable">
                               <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Request</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Kurir</th>
                                        <th>No. Hp Kurir</th>
                                        <th>Tanggal Pengiriman</th>
                                        <th>Tanggal Sampai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>RQ112</td>
                                        <td><label class="label label-info">Proses Pengiriman</label></td>
                                         <td><label class="label label-info">Sepeda Motor</label></td>
                                        <td>Ucok</td>
                                        <td>088762382</td>
                                        <td>10/12/2018 11:50</td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-primary"  data-toggle="modal" data-target="#modalDetailPengiriman">Detail</button>
                                            <button class="btn btn-danger">Batalkan</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>RQ113</td>
                                        <td><label class="label label-success">Selesai</label></td>
                                         <td><label class="label label-warning">Mobil Pickup</label></td>
                                        <td>Udin</td>
                                        <td>088754453</td>
                                        <td>8/12/2018 11:38</td>
                                        <td>8/12/2018 21:18</td>
                                        <td>
                                            <button class="btn btn-primary"  data-toggle="modal" data-target="#modalDetailPengiriman">Detail</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
           