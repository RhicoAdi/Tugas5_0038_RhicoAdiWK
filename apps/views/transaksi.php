
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>

  <!-- Style -->
  <style>
    .content-wrapper {
      margin-bottom: 56px;
    }
  </style>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?pindah" class="brand-link">
      <img src="public/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rhico Adi WK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="index.php?page=barang" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Barang</p>

              
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=pelanggan" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=transaksi" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Aplikasi Toko</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Transaksi</h3>
        </div>
        <div class="card-body">
        <div class="container">

        <a href="index.php?page=tambah_transaksi" class="btn btn-info btn-sm bg-success font-weight-bold
        <?php echo (isset($_GET['page']) && $_GET['page'] == 'tambah_transaksi') ? 'active' : ''; ?>" >Tambahkan Data</a>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>ID Pelanggan</th>
                    <th>KD Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Total</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1; // Inisialisasi variabel nomor
                    if (!empty($transaksi) && is_array($transaksi)): 
                ?>
                    <?php foreach ($transaksi as $index => $item): ?>
                        <tr>
                            <th scope="row"><?php echo $nomor++; ?></th>
                            <td><?= htmlspecialchars($item['id_transaksi']); ?></td>
                            <td><?= htmlspecialchars($item['id_pelanggan']); ?></td>
                            <td><?= htmlspecialchars($item['kd_barang']); ?></td>
                            <td><?= htmlspecialchars($item['jumlah']); ?></td>
                            <td><?= htmlspecialchars($item['harga_total']); ?></td>
                            <td><?= htmlspecialchars($item['tanggal']); ?></td>
                            <td>
                                <a href="index.php?controller=transaksi&page=delete&id_transaksi=<?= urlencode($item['id_transaksi']); ?>" 
                                class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" class="text-center font-weight-bold">Transaksi tidak tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
    </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            INSTITUT WIDYA PRATAMA
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>