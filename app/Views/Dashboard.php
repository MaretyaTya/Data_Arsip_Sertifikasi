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
    <h3><?= $title ?></h3>
    <p>
      Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>
      Klik "Lihat" pada kolom aksi untuk menampilkan surat.
    </p>
  </div>
  <div class="page-content">
    <div class="row mt-0">
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row mt-3">
          <div class="col-md-12">

            <table class="table table-striped table-bordered" id="tabel">
              <thead>
                <tr>
                  <th>No. Surat</th>
                  <th>Kategori</th>
                  <th>Judul</th>
                  <th>Waktu Pengarsipan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($surat as $srt) { ?>
                  <tr>
                    <td><?= $srt['nomor'] ?></td>
                    <td><?= $srt['kategori'] ?></td>
                    <td><?= $srt['judul'] ?></td>
                    <td><?= $srt['updated_at'] ?></td>
                    <td class="text-center">
                      <a type="button" style="font-size: 10px !important" class="btn btn-danger" href="<?= base_url(); ?>/delete/<?= $srt['id'] ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Arsip Surat Ini?')">
                        &nbsp; Hapus
                      </a> &nbsp;
                      <a href="<?= base_url(); ?>/unduh/<?= $srt['id'] ?>" style="font-size: 10px !important" class="btn btn-warning">
                        &nbsp; Unduh
                      </a> &nbsp;
                      <a href="<?= base_url(); ?>/detail/<?= $srt['id']; ?>" style="font-size: 10px !important" class="btn btn-info">
                        &nbsp; Lihat
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <div class="row">
    <div class="col-sm-3">
      <a href="<?= base_url('/add') ?>" style="color:white" class="btn bg-success btn-block"><i class="fa fa-plus-circle"></i> &nbsp;&nbsp; Arsipkan Surat..</a>
    </div>
  </div>

</div><!-- /.container-fluid -->

<?= $this->endsection('content'); ?>