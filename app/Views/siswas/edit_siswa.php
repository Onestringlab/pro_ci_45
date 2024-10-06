<?= $this->include('templates/header') ?>

<h1>Edit Siswa</h1>

<form action="/siswa/update/<?= $siswa['id']; ?>" method="post">
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $siswa['email']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?= $siswa['alamat']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->include('templates/footer') ?>