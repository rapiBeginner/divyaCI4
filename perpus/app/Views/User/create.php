<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah User</strong></h3>
    </div>
    <div class="card-body">
        <form action="/user/tambah" method="post">
            <div class="form-group">
                <label for="Username" style="color: #007bff;">Username</label>
                <input type="text" name="Username" id="Username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Pasword" style="color: #007bff;">Pasword</label>
                <input type="text" name="Pasword" id="Pasword" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Email" style="color: #007bff;">Email</label>
                <input type="text" name="Email" id="Email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="NamaLengkap" style="color: #007bff;">Nama Lengkap</label>
                <input type="text" name="NamaLengkap" id="NamaLengkap" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Alamat" style="color: #007bff;">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
