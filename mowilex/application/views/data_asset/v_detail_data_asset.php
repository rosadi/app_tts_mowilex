<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1>DATA ASSET</h1>
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
                        <a href="<?php echo base_url('asset/data_asset') ?>" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span> Data Asset</a> 
                    </div>

                    <!-- form cari -->

                    <div class="col-xs-6 text-right">
                        <a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a> 
                    </div>

                    <!-- form cari -->
                </div>
                
                <br><br>
                <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td width="15%"><label>Nama Toko</label> </td>
                        <td width="3%">:</td>
                        <td><?php echo $detail_asset['nama_toko'] ?></td>
                    </tr>
                    <tr>
                        <td><label>Alamat Toko </label></td>
                        <td>:</td>
                        <td><?php echo $detail_asset['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td><label>Tgl Installasi Toko</label> </td>
                        <td>:</td>
                        <td><?php echo format_indo($detail_asset['tgl_installasi'])?></td>
                    </tr>
                </table>
                </div>
                <br><br>
                


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
                                                <td><?php echo $detail_asset['dispanser_tipe'] ?></td>
                                                <td><?php echo $detail_asset['dispanser_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>MIXER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_asset['mixer_tipe'] ?></td>
                                                <td><?php echo $detail_asset['mixer_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>CPU / KOMPUTER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_asset['cpu_tipe'] ?></td>
                                                <td><?php echo $detail_asset['cpu_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>MONITOR</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_asset['monitor_tipe'] ?></td>
                                                <td><?php echo $detail_asset['monitor_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>UPS</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_asset['ups_tipe'] ?></td>
                                                <td><?php echo $detail_asset['ups_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>STABILIZER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_asset['stabilizer_tipe'] ?></td>
                                                <td><?php echo $detail_asset['stabilizer_sn'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>PRINTER</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_asset['printer_tipe'] ?></td>
                                                <td><?php echo $detail_asset['printer_sn'] ?></td>
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