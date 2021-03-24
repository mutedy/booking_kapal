

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div> -->
      <!-- /.col-lg-3 -->

      <div class="col-lg-1"></div>

      <div class="col-lg-10">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <!-- ISI DISINI GAMBAR PROMO -->
              <a href="<?= base_url('assets') ?>/detail_event1.jpeg"><img class="d-block img-fluid" src="<?= base_url('assets') ?>/event1.jpg" alt="First slide"></a>
            </div>
            <div class="carousel-item">
            <a href="<?= base_url('assets') ?>/detail_event2.jpeg"><img class="d-block img-fluid" src="<?= base_url('assets') ?>/event2.jpg" alt="Second slide"></a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

        <?php foreach($perahu as $row){?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?= base_url('perahu/detail/'.$row['perahu_id']) ?>"><img class="card-img-top" src="<?= base_url('perahu-admin/assets/'.$row['foto_path']) ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?= base_url('perahu/detail/'.$row['perahu_id']) ?>"><?= $row['nama_perahu'] ?></a>
                </h4>
                <h5><?= "Rp. ".$row['harga'] ?></h5>
                <p class="card-text"><?= $row['spesifikasi_perahu'] ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">No. Kapal : <?= $row['no_perahu'] ?></small>
              </div>
            </div>
          </div>
        <?php } ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

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

</body>

</html>
