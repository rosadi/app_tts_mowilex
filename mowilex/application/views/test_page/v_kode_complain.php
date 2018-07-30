<!DOCTYPE html>
<html>
<head>
    <title>TAMPIL KODE COMPLAIN</title>
</head>
<body>

<h3>DATA KOMPLAIN</h3>

<?php echo form_open('test/test_code'); ?>
<?php echo validation_errors() ?>
<table>
    <tr>
        <td colspan="3"><input type="text" name="id_complain" value="<?php echo $id_complain ?>"></td>
    </tr>
    <tr>
        <td>NO COMPLAIN</td>
        <td>:</td>
        <td><input type="text" name="no_complain" value="<?php echo $no_complain ?>"></td>
    </tr>
    <tr>
        <td>TGL COMPLAIN</td>
        <td>:</td>
        <td><input type="date" name="tgl_complain"></td>
    </tr>
    <tr>
        <td>PERIHAL</td>
        <td>:</td>
        <td><input type="text" name="perihal"></td>
    </tr>
    <tr>
        <td>KODE TOKO</td>
        <td>:</td>
        <td>
            <select name="kode_toko">
                <?php foreach ($list_toko as $data): ?>
                    <option value="<?php echo $data['kode_toko'] ?>"><?php echo $data['nama_toko'] ?></option>
                <?php endforeach ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>PRODUK</td>
        <td>:</td>
        <td><input type="text" name="produk"></td>
    </tr>
    <tr>
        <td>BATCH</td>
        <td>:</td>
        <td><input type="text" name="batch"></td>
    </tr>
    <tr>
        <td>MASALAH</td>
        <td>:</td>
        <td><input type="text" name="masalah"></td>
    </tr>
    <tr>
        <td>VERIFIKASI</td>
        <td>:</td>
        <td><input type="text" name="verifikasi"></td>
    </tr>
    <tr>
        <td>KESIMPULAN</td>
        <td>:</td>
        <td><input type="text" name="kesimpulan"></td>
    </tr>
    <tr>
        <td>TTS</td>
        <td>:</td>
        <td><input type="text" name="username" value="<?php echo $this->session->userdata('username') ?>" placeholder=""></td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="submit" name="save" value="SAVE">
        </td>
    </tr>
</table>
<?php echo form_close(); ?>
</body>
</html>