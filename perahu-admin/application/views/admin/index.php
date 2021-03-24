<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Admin Id</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Created At</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin as $a){ ?>
                    <tr>
						<td><?php echo $a['admin_id']; ?></td>
						<td><?php echo $a['nama']; ?></td>
						<td><?php echo $a['email']; ?></td>
						<td><?php echo $a['created_at']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/edit/'.$a['admin_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/remove/'.$a['admin_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
