<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div id="main">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <h1 class="m-0"><b>Arsip Surat &nbsp; >> &nbsp; Edit</b></h1>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-10">
                        <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan <br>
                            Catatan: <br>
                            - &nbsp;&nbsp;&nbsp; <b><i>Gunakan file berformat PDF</i></b>
                        </p>
                        <br><br>

                        <form action="update" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                            <div class="row form-group">
                                <input type="text" class="form-control" name="id" value="<?= $surat['id'] ?>" hidden>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    Nomor Surat
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="nomor" value="<?= $surat['nomor'] ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    Kategori
                                </div>
                                <div class="col-lg-10">
                                    <select class="custom-select rounded-0" name="kategori">
                                        <option value="Undangan" <?php if ($surat['kategori'] == "Undangan") : ?> selected <?php endif ?>>Undangan</option>
                                        <option value="Pengumuman" <?php if ($surat['kategori'] == "Pengumuman") : ?> selected <?php endif ?>>Pengumuman</option>
                                        <option value="Nota Dinas" <?php if ($surat['kategori'] == "Nota Dinas") : ?> selected <?php endif ?>>Nota Dinas</option>
                                        <option value="Nota Dinas" <?php if ($surat['kategori'] == "Pemberitahuan") : ?> selected <?php endif ?>>Pemberitahuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    Judul
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="judul" value="<?= $surat['judul'] ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-2">
                                    File Surat (PDF)
                                </div>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="file_surat" accept="application/pdf"> <br>
                                    <p>File saat ini : <?= $surat['file_surat'] ?></p>
                                    <input type="hidden" name="before" value="<?= $surat['file_surat'] ?>">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?= base_url(); ?>/detail/<?= $surat['id'] ?>" style="color:white" class="btn bg-info"><i class="fa fa-chevron-left"></i> &nbsp; Kembali</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" style="color:white" class="btn bg-warning"><i class="fa fa-save"></i> &nbsp;&nbsp;&nbsp; Update</button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="col-lg-1">

                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

<?= $this->endsection('content'); ?>