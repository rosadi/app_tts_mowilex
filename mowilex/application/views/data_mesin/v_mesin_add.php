<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header"><i class="fa fa-gears"></i> Input Data Mesin</h1>
            
            <a href="<?php echo base_url('asset/data_asset/data_mesin') ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-chevron-left"></span> BACK TO DATA
            </a>
            <br><br>
        </div>
    </div>
</div>

<?php echo form_open('asset/data_asset/tambah_mesin') ?>
<!-- form -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Primary Panel
                </div>
                <div class="panel-body">
                <ul><?php echo validation_errors('<li>', '</li>'); ?></ul>
                    <!-- kiri -->
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label>Nama Toko :</label>
                            <select name="kode_toko" class="form-control">
                                <?php foreach ($toko_mesin as $data): ?>
                                    <option value="<?php echo $data['kode_toko'] ?>"><?php echo $data['nama_toko'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Dispanser Tipe :</label>
                            <input type="text" name="dispanser_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Dispanser SN :</label>
                            <input type="text" name="dispanser_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Mixer Tipe :</label>
                            <input type="text" name="mixer_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Mixer SN :</label>
                            <input type="text" name="mixer_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>CPU TIPE :</label>
                            <input type="text" name="cpu_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>CPU SN :</label>
                            <input type="text" name="cpu_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Monitor Tipe</label>
                            <input type="text" name="monitor_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Monitor SN</label>
                            <input type="text" name="monitor_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>UPS Tipe :</label>
                            <input type="text" name="ups_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>UPS SN: </label>
                            <input type="text" name="ups_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Stabilizer Tipe : </label>
                            <input type="text" name="stabilizer_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Stabilizer SN : </label>
                            <input type="text" name="stabilizer_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->
                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Printer Tipe</label>
                            <input type="text" name="printer_tipe" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- kiri -->
                    
                    <!-- kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Printer SN</label>
                            <input type="text" name="printer_sn" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kanan -->
                    <div class="col-lg-12">
                    <input type="submit" name="submit" value="SAVE" class="btn btn-warning col-xs-12 col-md-12">
                    </div>
                </div>



                <div class="panel-footer">
                    Panel Footer
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- form -->
<?php echo form_close() ?>