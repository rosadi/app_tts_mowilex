<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-tasks"></i> Data Complain</h1>
        <p>PT. Mowilex Indonesia...</p>
    </div>
    <!-- end jumbroton class -->
</div>
<!-- notifikasi berhasil input data -->
<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">

            <?php if ( $this->session->flashdata('berhasil_input_comp') == TRUE ): ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_input_comp') ?>
                </a>.
            </div>
        <?php endif ?>

    </div>
</div>
</div>
<!-- notifikasi berhasil input data -->
<!-- notifikasi berhasil update data -->
<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">

            <?php if ( $this->session->flashdata('berhasil_update_comp') == TRUE ): ?>
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_update_comp') ?>
                </a>.
            </div>
        <?php endif ?>

    </div>
</div>
</div>
<!-- notifikasi berhasil update data -->

<!-- table -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label><?php echo count($data_complain) ?> Data complain this month</label>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                <!--  -->
                    <a href="<?php echo base_url('complain/data_complain/input_complain') ?>" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-plus"></span> ADD COMPLAIN
                    </a>
                    <a href="<?php echo base_url('complain/data_complain/report_complain') ?>" class="btn btn-danger btn-sm" title="report">
                        <span class="fa fa-file-text-o"></span> DATA STATMENT
                    </a>
                    <br><br>
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