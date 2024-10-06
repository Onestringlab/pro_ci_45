<?= $this->include('templates/header') ?>

<h1>Daftar Siswa - User</h1>

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
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
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('templates/footer') ?>