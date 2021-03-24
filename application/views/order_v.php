<style>
    .list-group-custom {
        width : 100%;
        min-height : 100px;
    }

    .list-group-item-custom{
        min-height : 50px;
        width : 100%;
        border:1px solid #aaa;
        padding:10px;
    }
</style>
<div class="container" style="margin-top : 15px;margin-bottom : 15px;min-height:85vh;">
    <div class="list-group-custom">
       <?php 
            foreach($orders as $row){
       ?>
            <div  class="list-group-item-custom">
                <div>
                    <div style="float:left;">
                       <div> Order ID : <?= $row['pemesanan_id']  ?> | <?= $row['nama_perahu']  ?> | <?= date_default_timezone_set("Asia/Bangkok"); date("d M Y", strtotime($row['booking_at']));  ?></div>
                       <div>
                        <h6><b>Rp. <?= number_format($row['biaya'],0,',','.'); ?> </b></h6>
                       </div>
                    </div>    
                    <?php if($row['order_status'] == 0){ ?>
                        <div style="float:right;margin-left: 10px;">
                            <form action="<?= base_url('orders/upload-bukti') ?>" method="post" enctype="multipart/form-data" >
                                <input required type="file" name="foto_path" />
                                <input type="hidden" name="pemesanan_id" value="<?= $row['pemesanan_id'] ?>" />
                                <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                            </form>
                        </div>   
                        <div style="float:right;margin-left: 10px;">
                            <form action="<?= base_url('orders/batal') ?>" method="post" enctype="multipart/form-data" >
                                <input type="hidden" name="pemesanan_id" value="<?= $row['pemesanan_id'] ?>" />
                                <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                            </form>
                        </div>  
                    <?php } ?>
                    <div style="float:right;">
                        <?php if($row['order_status'] == 0){ ?>
                            <span class="badge badge-warning">Menunggu Pembayaran</span>
                        <?php }else if($row['order_status'] == 1){ ?>
                            <span class="badge badge-info">Menunggu Verifikasi</span>
                        <?php }else if($row['order_status'] == 2){ ?>
                            <span class="badge badge-success">Terverifikasi</span>
                        <?php }else if($row['order_status'] == 3){ ?>
                            <span class="badge badge-danger">Batal</span>
                        <?php }else if($row['order_status'] == 4){ ?>
                            <span class="badge badge-secondary">Selesai</span>
                        <?php } ?>
                    </div>
                    <div style="float:left;"><br>
                        <?php if($row['order_status'] == 0){ ?>
                        <a style="font: 16px Helvetica, Sans-Serif; overflow: hidden; resize: none; width: 350px; height: 20px; float: left;">*Check Email Anda Untuk Melanjutkan Pembayaran</a>
            
                        <?php } ?>
                    </div>
                    <div style="clear:both"></div>
                    
                </div>
            </div>
        <?php } ?>
    </div>
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
        <?php if($this->session->flashdata('bukti') == 'berhasil'){ ?>
            swal("Berhasil!", "Bukti Pembayaran berhasil diupload", "success");
        <?php } else if($this->session->flashdata('bukti') == 'error_foto'){ ?>
            swal("Maaf!", "Bukti pembayaran gagal diupload, pastikan gambar jpg png atau jpeg", "error");
        <?php } ?>

		<?php if($this->session->flashdata('booking') == 'gagal'){ ?>
            swal("Sorry!", "Pemesanan anda gagal", "error");
        <?php } ?>
    </script>