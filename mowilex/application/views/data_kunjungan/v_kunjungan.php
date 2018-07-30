<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-gear"></i> Data Kunjungan</h1>
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
                    <label> <?php echo count($data_kunjungan) ?> Data kunjungan</label>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <a href="<?php echo base_url('kunjungan/data_kunjungan/add_maintenance') ?>" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-plus"></span> ADD MAINTENANCE
                    </a>
                    <a href="<?php echo base_url('kunjungan/data_kunjungan/report_maintenance') ?>" class="btn btn-danger btn-sm" title="report">
                        <span class="fa fa-file-text-o"></span> DATA STATMENT
                    </a>
                    <br><br>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="20%">Nama Toko</th>
                                    <th width="15%">Tanggal Kunjungan</th>
                                    <th width="15%">Dispanser</th>
                                    <th width="15%">Mixer</th>
                                    <th width="15%">Komputer</th>
                                    <th width="10%">Perlengkapan</th>
                                    <th width="20%">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_kunjungan as $data): ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_toko'] ?></td>
                                <td><?php echo format_indo($data['tgl_kunjungan']) ?></td>
                                <td><?php echo $data['dispanser_ket'] ?></td>
                                <td><?php echo $data['mixer_ket'] ?></td>
                                <td><?php echo $data['komputer_ket'] ?></td>
                                <td><?php echo $data['perlengkapan'] ?></td>
                                <td><?php echo $data['catatan'] ?></td>
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
