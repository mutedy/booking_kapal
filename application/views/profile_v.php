
<div class="container" style="margin-top : 30px">
    <form action="<?= base_url('profile/update') ?>" method="post" style="margin-bottom : 30px;"  enctype="multipart/form-data" >
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Foto Profile:</label><br/>
                    <img width="150px" src="<?= base_url('uploads/profile_user/'.$customer['foto_path']) ?>" class="img-rounded" alt="Foto Profile"><br/>
                    <br/>
                    <input type="file" name="foto_path" /> 
                </div>
                
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="email">Nama:</label>
                    <input type="text" class="form-control" id="email" name="nama" value="<?= $customer['nama'] ?>" /> 
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" disabled class="form-control" id="email" name="nama" value="<?= $customer['email'] ?>" /> 
                </div>
                <div class="form-group">
                    <label>No. Telp:</label>
                    <input type="text" class="form-control" name="no_telp"  value="<?= $customer['no_telp'] ?>"  />
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" rows="5" id="alamat" name="alamat"> <?= $customer['alamat'] ?> </textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">Jenis Kelamin:</label>
                    <div class="radio">
                        <label><input type="radio" name="jenis_kelamin" value="p" <?= $customer['jenis_kelamin'] == "p" ? " checked " : ""  ?> >Laki-laki</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="jenis_kelamin" value="w" <?= $customer['jenis_kelamin'] == "w" ? " checked " : ""  ?> >Perempuan</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </div>
    </form>
</div>
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
        <?php if($this->session->flashdata('profile') == 'berhasil'){ ?>
            swal("Berhasil!", "Profile Anda telah diperbarui", "success");
        <?php } else if($this->session->flashdata('profile') == 'error_foto'){ ?>
            swal("Maaf!", "Profile Anda gagal diperbarui", "error");
        <?php } ?>
    </script>