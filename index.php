<h2>Daftar Buku</h2> 
<a href="<?= base_url('buku/create') ?>">Tambah Buku</a> | 
<a href="<?= base_url('auth/logout') ?>">Logout</a> 
 
<table border="1" cellpadding="10" cellspacing="0"> 
    <tr> 
        <th>No</th> 
        <th>Judul</th> 
        <th>Penulis</th> 
        <th>Penerbit</th> 
        <th>Tahun</th> 
        <th>Aksi</th> 
    </tr> 
    <?php $no = 1; foreach ($buku as $b): ?> 
        <tr> 
            <td><?= $no++ ?></td> 
            <td><?= $b['judul'] ?></td> 
            <td><?= $b['penulis'] ?></td> 
            <td><?= $b['penerbit'] ?></td> 
            <td><?= $b['tahun_terbit'] ?></td> 
            <td> 
                <a href="<?= base_url('buku/edit/' . $b['id_buku']) ?>">Edit</a> | 
                <a href="<?= base_url('buku/delete/' . $b['id_buku']) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a> 
            </td> 
        </tr> 
    <?php endforeach; ?> 
</table> 