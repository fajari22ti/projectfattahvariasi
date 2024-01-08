<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Kelola Data Layanan</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Layanan</h3>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="customerList" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Jenis Layanan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Motor</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($services as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama_layanan']; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['nama_hewan']; ?></td>
                                <td><?= $us['no_hp']; ?></td>
                                <td><?= $us['alamat']; ?></td>
                                
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Hapus Pelanggan?</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="#" id="deleteCustomer" method="POST">
        
            <input type="hidden" name="id" value="" class="deleteID">

          <div class="modal-body">
              <p>Yakin ingin pelanggan ini? Semua data seperti data profil, order dan pembayaran juga akan dihapus.</p>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
          </div>
          </form>
      </div>
  </div>
</div>

<link href="<?php echo get_theme_uri('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'argon'); ?>" rel="stylesheet">

<script src="<?php echo get_theme_uri('vendor/datatables.net/js/jquery.dataTables.min.js', 'argon'); ?>"></script>
<script src="<?php echo get_theme_uri('vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'argon'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.lang.js'); ?>"></script>
