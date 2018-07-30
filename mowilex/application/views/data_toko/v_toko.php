<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-database"></i> Data Toko</h1>
        <p>PT. Mowilex Indonesia...</p>
    </div>
    <!-- end jumbroton class -->
</div>

<!-- notifikasi berhasil input data -->
<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">

            <?php if ( $this->session->flashdata('berhasil_input_toko') == TRUE ): ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_input_toko') ?>
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

            <?php if ( $this->session->flashdata('berhasil_delete_toko') == TRUE ): ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_delete_toko') ?>
                </a>.
            </div>
        <?php endif ?>

    </div>
</div>
</div>
<!-- notifikasi berhasil delete data -->

<!-- notifikasi berhasil update data -->
<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">

            <?php if ( $this->session->flashdata('berhasil_update_toko') == TRUE ): ?>
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('berhasil_update_toko') ?>
                </a>.
            </div>
        <?php endif ?>

    </div>
</div>
</div>
<!-- notifikasi berhasil update data -->


<div class="container">
    <div class="row">
        <!-- kiri -->                
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label>DATA TOKO</label> 
                </div>
                

                <!-- teks -->
                <div class="panel-body">
                    
                    <div class="row">       
                        <div class="col-xs-6">
                            <a href="<?php echo base_url('asset/data_asset/tambah_toko') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ADD SHOP </a>
                        </div>
                        
                        <!-- form cari -->
                        <?php echo form_open('asset/data_asset/cari_toko') ?>
                        <div class="col-xs-6 col-md-6">
                            <div class="input-group custom-search-form">
                            <input type="text" name="cari" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <!-- form cari -->
                    </div>
                    <br>

                    
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Toko</th>
                                    <th>Nama Toko</th>
                                    <th>Tanggal Installasi</th>
                                    <th>Alamat Toko</th>
                                    <th>Kota</th>
                                    <th><center>OPSI</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_toko as $data): ?>
                            <tr>    
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['kode_toko'] ?></td>
                                <td><?php echo $data['nama_toko'] ?></td>
                                <td><?php echo format_indo($data['tgl_installasi']) ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><?php echo $data['kota'] ?></td>
                                <td align="center">
                                    <a href="<?php echo base_url('asset/data_asset/edit_toko/'.$data['kode_toko']) ?>" class="btn btn-warning btn-xs" onclick="return confirm('Are you sure?')"><span class="fa fa-edit"></span> EDIT</a>
                                    <a href="<?php echo base_url('asset/data_asset/delete_toko/'.$data['kode_toko']) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><span class="fa fa-trash-o"></span> DELETE</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                </div>
                <!-- teks -->

            </div>
            <!-- /.panel -->
        </div>    
        <!-- kiri -->

    </div>
    <!-- end row -->
</div>