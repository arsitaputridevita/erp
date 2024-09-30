<?= $this->extend('layout/page/pageLayout') ?>
<?= $this->section('content') ?>

<div class="container">
    <h4>Form Tambah Jenis Tes</h4>
        <a href="/masterdata/jenistes" class="button">kembali</a>
    <hr class="garis-lurus">
    <br>
    <form class="form-inline">
    <div class="form-group">
    <label for="nama">Nama Tes</label>
        <input type="text" name="name" class="form-control mx-sm-3" aria-describedby="nama">
        <small class="text-muted">
        </small>
    </div>
    </form>
    <br>
        <div class="switch-container">
            <span>online</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </div>
    <br>
    <div class="switch-container">
        <span>wawancara</span>&nbsp;
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
        <br>
   </div>
   <br>
   <form class="form-inline">
    <div class="form-group">
        <label for="status">Status</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="status"  class="form-control mx-sm-3" aria-describedby="status">
        <small class="text-muted">
        </small>
    </div>
    </form>
   <br>
   <br>
   <button type="button" class="button btn-outline-success">Simpan</button>
</div>
<?= $this->endSection() ?>