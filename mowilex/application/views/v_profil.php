<div class="container">
    <!-- start jumbroton class -->
    <div class="jumbotron">
        <h1>Page Profil...</h1>
        <p> <?php echo $this->session->userdata('username') ?></p>
    </div>
    <!-- end jumbroton class -->
</div>

<!-- panel -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Primary Panel
                </div>
                <div class="panel-body">
                    <?php foreach ($data_profil as $data): ?>
                        
                        <table>
                            <tr>
                                <td><label>USERNAME</label></td>
                                <td>:</td>
                                <td><?php echo $data['username'] ?></td>
                            </tr>
                            <tr>
                                <td><label>NAMA LENGKAP</label></td>
                                <td>:</td>
                                <td><?php echo $data['nama_lengkap'] ?></td>
                            </tr>
                        </table>
                        
                    <?php endforeach ?>
                </div>
                <div class="panel-footer">
                    Panel Footer
                </div>
            </div>
        </div>
    </div>
</div> 