<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header"><i class="fa fa-gears"></i> Maintenance</h1>
            
            <a href="<?php echo base_url('kunjungan/data_kunjungan') ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-chevron-left"></span> BACK TO DATA
            </a>
            <br><br>
        </div>
    </div>
</div>

<?php echo form_open('kunjungan/data_kunjungan/add_maintenance'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Primary Panel
                </div>
                <br>
                <ul><?php echo validation_errors('<li>', '</li>'); ?></ul>
                <div class="panel-body">
                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Kode Toko :</label>
                            
                            <select class="form-control" name="kode_toko">
                                <?php foreach ($list_toko as $data): ?>
                                    <option value="<?php echo $data['kode_toko'] ?>"><?php echo $data['nama_toko'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Tanggal Kunjungan :</label>
                            <input type="date" name="tgl_kunjungan"  class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->
                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Dispanser : </label>
                            <textarea class="form-control" rows="2" name="dispanser_ket"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Mixer :</label>
                            <textarea class="form-control" rows="2" name="mixer_ket"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Komputer: </label>
                            <textarea class="form-control" rows="2" name="komputer_ket"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Perlengkapan :</label>
                            <textarea class="form-control" rows="2" name="perlengkapan"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Catatan: </label>
                            <textarea class="form-control" rows="2" name="catatan"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->

                    <div class="col-lg-12">
                    <input type="submit" name="submit" value="SAVE" class="btn btn-primary col-xs-12 col-md-12">
                    </div>
                </div>
                <div class="panel-footer">
                    Panel Footer
                </div>
            </div>
        </div>
    </div>
</div>  
<?php echo form_close() ?>