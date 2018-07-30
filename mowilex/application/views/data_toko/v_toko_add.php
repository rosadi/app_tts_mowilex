<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header"><i class="fa fa-shopping-cart"></i> Input Data Toko</h1>
            
            <a href="<?php echo base_url('asset/data_asset/data_toko') ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-chevron-left"></span> BACK TO DATA
            </a>
            <br><br>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Input Data Toko
                </div>
                <div class="panel-body">

                <?php echo form_open('asset/data_asset/tambah_toko') ?>
                <ul><?php echo validation_errors('<li>', '</li>'); ?></ul>

                    <div class="form-group">
                        <label>Kode Toko : </label>
                        <input type="text" name="kode_toko" class="form-control">
                        <p class="help-block">Kode toko mesin.</p>
                    </div>

                    <div class="form-group">
                        <label>Nama Toko :</label>
                        <input type="text" name="nama_toko" class="form-control">
                        <p class="help-block">Nama toko .</p>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Installasi :</label>
                        <input type="date" name="tgl_installasi" class="form-control">
                        <p class="help-block">Tanggal installasi mesin.</p>
                    </div>

                    <div class="form-group">
                        <label>Alamat :</label>
                        <input type="text" name="alamat" class="form-control">
                        <p class="help-block">Alamat toko.</p>
                    </div>

                    <div class="form-group">
                        <label>Kota :</label>
                        <input type="text" name="kota" class="form-control">
                        <p class="help-block">Kota toko dimana?.</p>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success col-xs-12 col-md-12 name="submit" value="SAVE">
                    </div>

                <?php echo form_close(); ?>

                </div>
                <div class="panel-footer">
                    Panel Footer
                </div>
            </div>
        </div>
    </div>
</div>  