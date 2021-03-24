<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Perahu Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('perahu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Perahu Id</th>
						<th>Nama Perahu</th>
						<th>Nama Pemilik</th>
						<th>Foto Path</th>
						<th>No Perahu</th>
						<th>Tahun</th>
						<th>Kapasitas</th>
						<th>Harga</th>
						<th>Created At</th>
						<th>Spesifikasi Perahu</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($perahu as $p){ ?>
                    <tr>
						<td><?php echo $p['perahu_id']; ?></td>
						<td><?php echo $p['nama_perahu']; ?></td>
						<td><?php echo $p['nama_pemilik']; ?></td>
						<td><a href="<?php echo 'https://perahu.codingseru.id/perahu-admin/assets/'.$p['foto_path']; ?>" target="_blank"><img src="<?php echo 'https://perahu.codingseru.id/perahu-admin/assets/'.$p['foto_path']; ?>" width="60" height="80" alt="gambar tidak ada"></a></td>
						<td><?php echo $p['no_perahu']; ?></td>
						<td><?php echo $p['tahun']; ?></td>
						<td><?php echo $p['kapasitas']; ?></td>
						<td><?php echo $p['harga']; ?></td>
						<td><?php echo $p['created_at']; ?></td>
						<td><?php echo $p['spesifikasi_perahu']; ?></td>
						<td>
                            <a href="<?php echo site_url('perahu/edit/'.$p['perahu_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('perahu/remove/'.$p['perahu_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
