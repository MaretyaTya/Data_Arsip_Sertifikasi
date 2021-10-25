<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<div id="main">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-1"></div>
                    <h1 class="m-0">ABOUT</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-2">
                        <img src="<?= base_url('/public/assets/images/Maretya.jpeg') ?>" width="100%">
                    </div>
                    <div class="col-lg-8">
                        <p>Name : Maretyatianhar Gunsa <br>
                            NIM : 1831710043 <br>
                            Tanggal : 23 Oktober 2021 </p>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>


<?= $this->endsection('content'); ?>