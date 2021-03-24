<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Customer Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('customer/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Customer</th>
						<th>Password</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Token</th>
						<th>No Telp</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Verify At</th>
						<th>Jenis Kelamin</th>
						<th>Foto Path</th>
						<th>Alamat</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($customer as $c){ ?>
                    <tr>
						<td><?php echo $c['id_customer']; ?></td>
						<td><?php echo $c['password']; ?></td>
						<td><?php echo $c['nama']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['token']; ?></td>
						<td><?php echo $c['no_telp']; ?></td>
						<td><?php echo $c['created_at']; ?></td>
						<td><?php echo $c['updated_at']; ?></td>
						<td><?php echo $c['verify_at']; ?></td>
						<td><?php echo $c['jenis_kelamin']; ?></td>
						<td><a href="<?php echo 'https://perahu.codingseru.id/uploads/profile_user/'.$c['foto_path']; ?>" target="_blank"><img src="<?php echo 'https://perahu.codingseru.id/uploads/profile_user/'.$c['foto_path']; ?>" width="60" height="80" alt="gambar tidak ada"></a></td>
						<td><?php echo $c['alamat']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer/edit/'.$c['id_customer']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('customer/remove/'.$c['id_customer']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
