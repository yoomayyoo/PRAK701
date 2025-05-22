<h2>Tambah Buku</h2> 
 
<?php if (isset($validation)): ?> 
    <div style="color:red;"> 
        <?= $validation->listErrors() ?> 
    </div> 
<?php endif; ?> 
 
<form action="<?= base_url('buku/update/' . $buku['id_buku']) ?>" method="post"> 
    <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?>"> 
    <label>Judul:</label><br> 
    <input type="text" name="judul" value="<?= $buku['judul'] ?>"><br><br> 
    <label>Penulis:</label><br> 
    <input type="text" name="penulis" value="<?= $buku['penulis'] ?>"><br><br> 
    <label>Penerbit:</label><br> 
    <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?>"><br><br> 
    <label>Tahun Terbit:</label><br> 
    <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>"><br><br> 
    <button type="submit">Update</button> | 
    <a href="<?= base_url('buku') ?>">Kembali</a> 
</form>