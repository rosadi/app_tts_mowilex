<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1><i class="fa fa-database"></i> Data Asset</h1>
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
                    <label>Data Asset</label>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                <!-- button and search -->
                    <div class="row">       
                        <div class="col-xs-6">
                            <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Print </a>
                        </div>

                        <!-- form cari -->
                        <?php echo form_open('asset/data_asset/cari_asset'); ?>
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
                        <?php echo form_close() ?>

                        <!-- form cari -->
                    </div>

                </div>
                <!-- /.col-lg-12 -->
                <!-- button and search -->

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Toko</th>
                                    <th>Nama Toko</th>
                                    <th>Tipe Dispanser</th>
                                    <th>Tipe Mixer</th>
                                    <th><center>Detail</center></th>
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
                                       <center><a href="<?php echo base_url('asset/data_asset/detail_asset/'.$data['id_mesin']) ?>" class="btn btn-primary btn-xs"> <span class="fa fa-arrow-right"></span> View Detail</a></center>
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