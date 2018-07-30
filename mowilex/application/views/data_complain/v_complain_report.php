<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-tasks"></i> Data Complain</h1>
        <p>PT. Mowilex Indonesia...</p>
    </div>
    <!-- end jumbroton class -->
</div>

<!-- table -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Complain
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <!--  -->
                    <a href="<?php echo base_url('complain/data_complain') ?>" class="btn btn-primary btn-sm">
                        <span class="fa fa-chevron-left"></span> BACK
                    </a>


                    <a href="#" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-print"></span> PRINT
                    </a>
                    <br><br>

                    <!-- form -->
                    <?php echo form_open('complain/data_complain/report_complain'); ?>
                    <div class="row">
                        <div class="form-group col-xs-6 col-md-5">
                            <input type="date" name="date_1" class="form-control">
                        </div>

                        <div class="form-group col-xs-6 col-md-5">
                            <input type="date" name="date_2" class="form-control">
                        </div>

                        <div class="form-group col-xs-12 col-md-2">
                            <input type="submit" name="btnSave" value="SHOW" class="btn btn-warning col-xs-12 col-md-12">
                        </div>
                    </div>
                    <?php echo form_close() ?>
                    <!-- form -->

                    <!-- notifikasi select data tanggal -->        
                    <?php if ( $this->input->POST('date_1') == TRUE && $this->input->POST('date_2') == TRUE ): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <label>Data Kunjungan :</label>
                            <label><?php echo format_indo($this->input->POST('date_1')); ?></label><b> s/d </b><label><?php echo format_indo($this->input->POST('date_2')); ?></label></a>.
                         </div>
                    <?php endif ?>
                    <!-- notifikasi select data tanggal -->     

                    <!-- notifikasi form tanggal kosong -->        
                    <?php if ( validation_errors() == TRUE): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <label><?php echo validation_errors('<li>', '</li>'); ?></label></a>.
                        </div>
                    <?php endif ?>
                    <!-- notifikasi form tanggal kosong -->   



            <!--  -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="1%">#</th>
                            <th width="5%">No Complain</th>
                            <th width="5%">Tanggal</th>
                            <th width="15%">Perihal</th>
                            <th width="15%">Toko</th>
                            <th width="10%"><center>OPSI</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data_complain as $data): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['no_complain'] ?></td>
                            <td><?php echo $data['tgl_complain'] ?></td>
                            <td><?php echo $data['perihal'] ?></td>
                            <td><?php echo $data['nama_toko'] ?></td>
                            <td>
                                <center><a href="<?php echo base_url('complain/data_complain/detail_complain/'.$data['no_complain']) ?>" class="btn btn-primary btn-xs"><span class="fa fa-arrow-right"></span> View Detail</a></center>
                            </td>
                        </tr>
                    <?php endforeach ?>
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