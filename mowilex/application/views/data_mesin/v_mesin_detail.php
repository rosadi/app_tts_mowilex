<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1>DATA MESIN</h1>
        <p>Applikasi untuk data asset mesin Anda.</p>
    </div>
    <!-- end jumbroton class -->
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Data Mesin Detail
                </div>
                <!-- panel-body -->
                <div class="panel-body">
                

                <div class="row">       
                    <div class="col-xs-6">
                        <a href="<?php echo base_url('asset/data_asset/data_mesin') ?>" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span> Data Mesin</a> 
                    </div>

                    <!-- form cari -->

                    <div class="col-xs-6 text-right">
                        <a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a> 
                    </div>

                    <!-- form cari -->
                </div>

                <br><br>
                <label> Nama Toko : <?php echo $data_detail_mesin['nama_toko'] ?></label><br>
                <label> Alamat Toko : <?php echo $data_detail_mesin['alamat'] ?></label><br>
                <label> Tanggal Installasi : <?php echo format_indo($data_detail_mesin['tgl_installasi']) ?></label><br><br>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Detail Data Mesin
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="20%">NAMA ASSET</th>
                                                <th></th>
                                                <th>TIPE </th>
                                                <th>SERIAL NUMBER</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><label>DISPANSER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['dispanser_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['dispanser_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>MIXER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['mixer_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['mixer_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>CPU / KOMPUTER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['cpu_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['cpu_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>MONITOR</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['monitor_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['monitor_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>UPS</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['ups_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['ups_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>STABILIZER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['stabilizer_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['stabilizer_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>PRINTER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $data_detail_mesin['printer_tipe'] ?></td>
                                                <td><?php echo $data_detail_mesin['printer_sn'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div> <!-- /.row -->

          
            </div>
        </div>
    </div>
</div>  