<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>
      Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
    </title>
    <!-- Favicon -->
    <link href="<?= base_url('public/') ?>/assets/img/brand/favicon.png" rel="icon" type="image/png" />
    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Icons -->
    <link href="<?= base_url('public/') ?>/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link
      href="<?= base_url('public/') ?>/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link href="<?= base_url('public/') ?>/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />  
  </head>

  <body class="">
    <?php include "sidebar.php" ?>
    <div class="main-content">
      <!-- Navbar -->
      <?php include "navbar.php "?>
      <!-- End Navbar -->
      <!-- Header -->
    <?php echo $contents ?>
    </div>
    <!--   Core   -->
    <script src="<?= base_url('public/') ?>/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('public/') ?>/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <script src="<?= base_url('public/') ?>/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('public/') ?>/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
    <!--   Argon JS   -->
    <script src="<?= base_url('public/') ?>/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
        TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "argon-dashboard-free",
        });
    </script>
  </body>
</html>
