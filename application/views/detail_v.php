
  <!-- Page Content -->
  <div class="container" style="min-height:100vh">

    <div class="row">

        <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <h1 style="margin-top:1px;">Detail Perahu</h1>
        <div class="card mt-4" style="margin-bottom:15px;">
          <img style="max-width : 500px;display:block;margin-left:auto;margin-right:auto;height:auto;max-height: 300px;width: auto;" class="card-img-top img-fluid" src="<?= base_url('perahu-admin/assets/'.$perahu[0]['foto_path']) ?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?= $perahu[0]['nama_perahu'] ?></h3>
            <h4>Rp. <?= number_format($perahu[0]['harga'],0,',','.'); ?> </h4>
            <p class="card-text"><?= $perahu[0]['spesifikasi_perahu'] ?></p>
            <small class="text-muted">No. Kapal : <?= $perahu[0]['no_perahu'] ?></small><br>
            <small class="text-muted">Pemilik Kapal : <?= $perahu[0]['nama_pemilik'] ?></small>
            
          </div>
          <form method="post" action="<?= base_url('/perahu/booking') ?>">
            <div class="form-group">
              <label for="usr">Tanggal Pemesanan:</label>
              <input type="date" class="form-control" id="usr" name="tanggal_pemesanan">
            </div>
            <input type="hidden" name="perahu_id" value="<?= $perahu[0]['perahu_id'] ?>" />

            <button type="submit" class="btn btn-success" style="width:100%">Booking!</button>
          </form>
        </div>
        <!-- /.card -->

       
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Booking Kapal 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/home/vendor') ?>/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/home/vendor') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
  <?php if($this->session->flashdata('booking') == 'berhasil'){ ?>
            swal("Berhasil", "Silahkan Check Email Anda Untuk Melanjutkan Pembayaran", "success");
        <?php } ?>
        </script>
</body>

</html>
