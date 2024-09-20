<?= $this->extend('layout/asset') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="color:#000000;"><strong>Tambah Buku</strong></h3>
    </div>
    <div class="card-body">
        <form action="/buku/simpanan" method="post">
            <div class="form-group">
                <label for="Judul" style="color: #007bff;">judul</label>
                <input type="text" name="Judul" id="Judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Penulis" style="color: #007bff;">penulis</label>
                <input type="text" name="Penulis" id="Penulis" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Penerbit" style="color: #007bff;">penerbit</label>
                <input type="text" name="Penerbit" id="Penerbit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Tahun_terbit" style="color: #007bff;">Tahun Terbit</label>
                <input type="text" name="Tahun_terbit" id="Tahun_terbit" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
