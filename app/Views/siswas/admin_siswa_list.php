<?= $this->include('templates/header') ?>

<h1>Daftar Siswa - Admin</h1>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $row): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nis']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td>
                    <a href="/siswa/edit/<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="/siswa/delete/<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('templates/footer') ?>