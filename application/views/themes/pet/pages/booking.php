<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/catp.jpg'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Hubungi Kami</span></p>
          <h1 class="mb-0 bread">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </div>


 
                <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
          <form action="<?php echo site_url('pages/pesan'); ?>" class="bg-white p-5 contact-form" method="POST">
          <?php if ($flash) : ?>
          <div class="text-success text-center" style="margin-bottom: 25px;"><?php echo $flash; ?></div>
          <?php endif; ?>
          <h3 class="mb-4 billing-heading">Booking Layanan</h3>

        
          <div class="form-group">
            <label for="nama" class="form-control-label">Nama Layanan:</label>
            <select name="nama_layanan" value="<?= set_value('jenis_kelamin'); ?>" id="nama_layanan" class="form-control">
                                <option value="">Jenis Layanan</option>
                                <option value="Petgrooming">service</option>
                                <option value="Petclinic">Modifikasi</option>
                                <option value="Pethotel">Upgrade</option>
                            </select>
              <?php echo form_error('nama_layanan'); ?>
            </div>  
          <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pelanggan:</label>
              <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>" placeholder="Nama" required>
              <?php echo form_error('nama'); ?>
            </div>
            <div class="form-group">
            <label for="name" class="form-control-label">Jenis Motor:</label>
              <input type="nama_hewan" name="nama_hewan" class="form-control" value="<?php echo set_value('nama_hewan'); ?>" placeholder="Mochi" required>
              <?php echo form_error('nama_hewan'); ?>
            </div>
            <div class="form-group">
            <label for="name" class="form-control-label">No HP:</label>
              <input type="text" name="no_hp" class="form-control" value="<?php echo set_value('no_hp'); ?>" placeholder="0876785656" required>
              <?php echo form_error('no_hp'); ?>
            </div>

            <div class="form-group">
            <label for="name" class="form-control-label">Alamat:</label>
              <input type="text" name="alamat" class="form-control" value="<?php echo set_value('alamat'); ?>" placeholder="JL.Intisari" required>
              <?php echo form_error('alamat'); ?>
            </div>
            
            <div class="form-group">
              <input type="submit" value="Booking" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        
      </div>
    </div>
  </section>