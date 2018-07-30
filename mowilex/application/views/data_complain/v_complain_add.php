<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header"><i class="fa fa-gears"></i> Add Complain</h1>
            
            <a href="<?php echo base_url('complain/data_complain') ?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-chevron-left"></span> BACK TO DATA
            </a>
            <br><br>
        </div>
    </div>
</div>

<?php echo form_open('complain/data_complain/input_complain'); ?>
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
                            <label>ID Complain : </label>
                            <input type="text" name="id_complain" value="<?php echo $id_complain ?>" class="form-control" readonly>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- kiri -->
                    <!-- kanan -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Nomor Complain : </label>
                            <input type="text" name="no_complain" value="<?php echo $no_complain ?>" class="form-control" readonly>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- kanan -->

                    <!-- kiri -->
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label>Tanggal Complain :</label>
                            <input type="date" name="tgl_complain"  class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- kiri -->

                    <!-- kanan -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Perihal : </label>
                            <input type="text" name="perihal" value="" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- kanan -->

                    <!-- tengah -->
                    <div class="col-lg-12">
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
                    <!-- tengah -->
                    
                    <!-- kiri -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Produk : </label>
                            <input type="text" name="produk" value="" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- kiri -->

                    <!-- kanan -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Batch : </label>
                            <input type="text" name="batch" value="" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- kanan -->
                    
                    <!-- tengah -->
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label>Masalah :</label>
                            <textarea class="form-control" rows="2" name="masalah"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- tengah -->

                    <!-- tengah -->
                    <div class="col-lg-12">

                        <div class="form-group">
                            <label>Verifikasi :</label>
                            <textarea class="form-control" rows="5" name="verifikasi"></textarea>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        
                    </div>
                    <!-- tengah -->

                    <!-- tengah -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Kesimpulan: </label>
                            <input type="text" name="kesimpulan" class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- tengah -->

                    <!-- tengah -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>TTS KODE: </label>
                            <input type="text" name="username" class="form-control" value="<?php echo $this->session->userdata('username') ?>" readonly>
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- tengah -->
                    
                   
                    <!-- submit -->
                    <div class="col-lg-12">
                        <input type="submit" name="submit" value="SAVE" class="btn btn-primary col-xs-12 col-md-12">
                    </div>
                    <!-- submit -->
                </div>
                <div class="panel-footer">
                    Panel Footer
                </div>
            </div>
        </div>
    </div>
</div>  
<?php echo form_close() ?>