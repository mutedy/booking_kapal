<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Order Perahu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('order_perahu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Pemesanan Id</th>
						<th>Customer Id</th>
						<th>Perahu Id</th>
						<th>Booking At</th>
						<th>Order Status</th>
                        <th>Bukti Pembayaran</th>
						<th>Biaya</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($order_perahu as $o){ ?>
                    <tr>
						<td><?php echo $o['pemesanan_id']; ?></td>
						<td><?php echo $o['customer_id']; ?></td>
						<td><?php echo $o['perahu_id']; ?></td>
						<td><?php echo $o['booking_at']; ?></td>
						<td><?php if($o['order_status'] == 1){
							echo "Menunggu Verifikasi";
						}elseif($o['order_status'] == 0){
							echo "Menunggu Pembayaran";
						}elseif($o['order_status'] == 2){
							echo "Terverifikasi";
                        }elseif($o['order_status'] ==3 ){
                            echo "Batal";
                        }else{
                            echo "Selesai";
                        }
                         ?></td>
                         <td><a href="<?php echo 'https://perahu.codingseru.id/uploads/bukti_pembayaran/'.$o['bukti_pembayaran_path']; ?>" target="_blank"><img src="<?php echo 'https://perahu.codingseru.id/uploads/bukti_pembayaran/'.$o['bukti_pembayaran_path']; ?>" width="60" height="80" alt="gambar tidak ada"></a></td>
						<td><?php echo $o['biaya']; ?></td>
						<td>
                            <a href="<?php echo site_url('order_perahu/edit/'.$o['pemesanan_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
							<a href="<?php echo site_url('order_perahu/remove/'.$o['pemesanan_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							<?php if($o['order_status'] == 1){ ?>
                                <a href="<?= base_url('order_perahu/verifikasi/'.$o['pemesanan_id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-edit"></span> Verifikasi</a>
                            <?php } ?>
                            <?php if($o['order_status'] == 2){ ?>
                                <a href="<?= base_url('order_perahu/selesai/'.$o['pemesanan_id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-edit"></span> Selesai</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
