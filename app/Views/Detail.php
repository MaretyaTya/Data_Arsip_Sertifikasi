<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <h1 class="m-0"><b>Arsip Surat &nbsp; >> &nbsp; Lihat</b></h1> <br>
        <p>Nomor : <?= $detail['nomor'] ?></p>
        <p>Kategori : <?= $detail['kategori'] ?></p>
        <p>Judul : <?= $detail['judul'] ?></p>
        <p>Waktu Unggah : <?= $detail['updated_at'] ?></p>

    </div>
    <div class="col-md-12">
        <iframe width="100%" height="600px" src="<?= base_url(); ?>/surat/<?= $detail['file_surat'] ?>"></iframe>
    </div>

    <br>
    <div class="d-flex justify-content">
        <a href="<?= base_url(); ?>/" style="color:white" class="btn bg-info btn-block me-1 mb-1"><i class="fa fa-chevron-left"></i>&nbsp; &nbsp; Kembali</a>
        <a href="<?= base_url(); ?>/unduh/<?= $detail['id'] ?>" style="color:white" class="btn bg-success btn-block me-1 mb-1"><i class="fa fa-download"></i> &nbsp;&nbsp; Unduh</a>
        <a href="<?= base_url(); ?>/edit/<?= $detail['id'] ?>" style="color:white" class="btn bg-warning btn-block me-1 mb-1"><i class="fa fa-plus-circle"></i> &nbsp;&nbsp; Edit Surat..</a>
    </div>

</div><!-- /.container-fluid -->

<?= $this->endsection('content'); ?>