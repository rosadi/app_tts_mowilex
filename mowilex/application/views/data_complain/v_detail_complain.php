<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-tasks"></i> Data Complain</h1>
        <p>PT. Mowilex Indonesia...</p>
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
                
                <!-- back edit print -->
                <div class="row ">
                <div class="col-xs-8 col-sm-6 col-md-10">
                    <a href="<?php echo base_url('complain/data_complain') ?>" class="btn btn-warning"><span class="fa fa-arrow-left"></span> Back</a> 

                    <a href="<?php echo base_url('complain/data_complain/edit_complain/'.$detail_complain['no_complain']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="fa fa-edit"></span> Edit</a> 
                </div>

                    <div class="col-xs-3 col-md-2" align="right">
                        <a href="#" class="btn btn-success"><span class="fa fa-print"></span> Print</a>
                    </div>
                </div>
                <!-- back edit print -->

                
                <br><br>
                <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td width="15%"><label>Nomor Complain</label> </td>
                        <td width="3%">:</td>
                        <td><label><?php echo $detail_complain['no_complain'] ?></label></td>
                    </tr>
                    <tr>
                        <td><label>Tanggal Complain</label> </td>
                        <td>:</td>
                        <td><?php echo format_indo($detail_complain['tgl_complain']) ?></td>
                    </tr>

                    <tr>
                        <td><label>Nama Toko</label> </td>
                        <td>:</td>
                        <td><?php echo $detail_complain['nama_toko'] ?></td>
                    </tr>
                    <tr>
                        <td><label>Perihal Kerusakan </label></td>
                        <td>:</td>
                        <td><?php echo $detail_complain['perihal'] ?></td>
                    </tr>
                    <tr>
                        <td><label>Produk</label></td>
                        <td>:</td>
                        <td><?php echo $detail_complain['produk'] ?></td>
                    </tr>
                    <tr>
                        <td><label>Batch</label></td>
                        <td>:</td>
                        <td><?php echo $detail_complain['batch'] ?></td>
                    </tr>
                </table>
                </div>
                <br><br>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Detail Data Complain
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <td width="10%"><label>Masalah</label></td>
                                                <td width="1%"><label>:</label></td>
                                                <td><?php echo $detail_complain['masalah'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>Verifikasi</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_complain['verifikasi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>Kesimpulan</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_complain['kesimpulan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label>TTS</label></td>
                                                <td><label>:</label></td>
                                                <td><?php echo $detail_complain['nama_lengkap'] ?></td>
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