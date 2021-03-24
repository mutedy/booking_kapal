<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Order Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('order/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Pemesanan Id</th>
						<th>Customer Id</th>
						<th>Perahu Id</th>
						<th>Order Status</th>
						<th>Biaya</th>
						<th>Bukti Pembayaran Path</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($order as $o){ ?>
                    <tr>
						<td><?php echo $o['pemesanan_id']; ?></td>
						<td><?php echo $o['customer_id']; ?></td>
						<td><?php echo $o['perahu_id']; ?></td>
						<td><?php echo $o['order_status']; ?></td>
						<td><?php echo $o['biaya']; ?></td>
						<td><?php echo $o['bukti_pembayaran_path']; ?></td>
						<td>
                            <a href="<?php echo site_url('order/edit/'.$o['pemesanan_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('order/remove/'.$o['pemesanan_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php if($o['order_status'] == 1){ ?>
                                <a href="<?= base_url('order/verifikasi/'.$o['pemesanan_id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-edit"></span> Verifikasi</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
