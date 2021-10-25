<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/vendors/iconly/bold.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/app.css">
  <link rel="shortcut icon" href="<?= base_url(); ?>/public/assets/images/logo/icon.png" type="image/x-icon">


</head>

<body>
  <!-- For calling sideabar (called modular with partial) -->
  <?= $this->include('Layout/sidebar'); ?>

  <!-- For calling section who call all the content -->
  <?= $this->renderSection('content');  ?>


  <!-- Optional JavaScript; choose one of the two! -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tabel').DataTable();
    });
  </script>

  <!-- -----------------------------------------------------BATAS FOOTER---------------------------------------------------- -->

  <footer>
    <div class="footer clearfix mb-0 text-muted">
      <div class="float-start">
      </div>
      <div class="float-end">
        <br>
        <p>2021 &copy;Maretyatianhar</p>
      </div>
    </div>
  </footer>

  <script src="<?= base_url(); ?>/public/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>/public/assets/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url(); ?>/public/assets/vendors/apexcharts/apexcharts.js"></script>
  <script src="<?= base_url(); ?>/public/assets/js/pages/dashboard.js"></script>

  <script src="<?= base_url(); ?>/public/assets/js/main.js"></script>

  <!-- -----------------------------------------------------BATAS FOOTER---------------------------------------------------- -->

</body>

</html>