<?= $this->extend('Template/Template'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<div class="container-fluid">

    <!-- Small boxes (Stat box) -->
    <form action="<?= base_url('Arsip') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="row">
            <div class="col-lg-1">
                <h5>Cari Surat:</h5>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" name="cari" placeholder="Cari" <?php if (isset($_POST['cari'])) : ?> value="<?= $_POST['cari'] ?>" <?php endif ?>>
            </div>
            <div class="col-lg-2">
                <button type="submit" class="btn btn-block bg-secondary">Cari &nbsp; <i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center table-secondary">
                        <th>No. Surat</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Waktu Pengarsipan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
        </div>
    </div>
</div>

<?= $this->endsection('content'); ?>