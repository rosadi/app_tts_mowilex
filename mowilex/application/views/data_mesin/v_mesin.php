<!-- Menggunakan container-fluid -->
<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-database"></i> Data Mesin</h1>
        <p>PT. Mowilex Indonesia...</p>
    </div>
    <!-- end jumbroton class -->
</div>

<!-- notifikasi berhasil input data -->
<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">

            <?php if ( $this->session->flashdata('berhasil_input_mesin') == TRUE ): ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_input_mesin') ?>
                </a>.
            </div>
        <?php endif ?>

    </div>
</div>
</div>
<!-- notifikasi berhasil input data -->
<!-- notifikasi berhasil delete data -->
<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">

            <?php if ( $this->session->flashdata('berhasil_delete_mesin') == TRUE ): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_delete_mesin') ?>
                </a>.
            </div>
        <?php endif ?>

    </div>
</div>
</div>
<!-- notifikasi berhasil delete data -->


<!-- table -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>DATA MESIN</label>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <!-- dua bar -->
                    <div class="row">       
                        <div class="col-xs-6">
                        <a href="<?php echo base_url('asset/data_asset/tambah_mesin') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ADD MESIN </a>
                        </div>

                        <!-- form cari -->

                        <div class="col-xs-6 col-md-6">
                            <div class="input-group custom-search-form">
                                <input type="text" name="cari" class="form-control" placeholder="Search Mesin...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <!-- form cari -->
                    </div>

                </div>
                <!-- /.col-lg-12 -->
                <br>
                <!-- dua bar -->



                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Toko</th>
                                <th>Nama Toko</th>
                                <th>Tipe Dispanser</th>
                                <th>Tipe Mixer</th>
                                <th><center>OPSI</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data_mesin as $data): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['kode_toko'] ?></td>
                            <td><?php echo $data['nama_toko'] ?></td>
                            <td><?php echo $data['dispanser_tipe'] ?></td>
                            <td><?php echo $data['mixer_tipe'] ?></td>
                            <td>
                            <center>
                                <a href="<?php echo base_url('asset/data_asset/detail_mesin/'.$data['id_mesin']) ?>" class="btn btn-primary btn-xs"> <span class="fa fa-arrow-right"></span> Detail</a>
                                <a href="<?php echo base_url('asset/data_asset/update_mesin/'.$data['id_mesin']) ?>" class="btn btn-warning btn-xs" onclick="return confirm('are you sure?')"><span class="fa fa-edit"></span> Edit</a>
                                <a href="<?php echo base_url('asset/data_asset/delete_mesin/'.$data['id_mesin']) ?>" class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="fa fa-trash-o"></span> Delete</a>
                            </center>
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