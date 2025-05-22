<h2>Tambah Buku</h2> 
 
<?php if (isset($validation)): ?> 
    <div style="color:red;"> 
        <?= $validation->listErrors() ?> 
    </div> 
<?php endif; ?> 
 
<form action="<?= base_url('buku/store') ?>" method="post"> 
    <label>Judul:</label><br> 
    <input type="text" name="judul"><br><br> 
 
    <label>Penulis:</label><br> 
    <input type="text" name="penulis"><br><br> 
 
    <label>Penerbit:</label><br> 
    <input type="text" name="penerbit"><br><br> 
 
    <label>Tahun Terbit:</label><br> 
    <input type="number" name="tahun_terbit"><br><br> 
 
    <button type="submit">Simpan</button> | 
    <a href="<?= base_url('buku') ?>">Kembali</a> 
</form>