<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Customer Edit</h3>
            </div>
			<?php echo form_open('customer/edit/'.$customer['id_customer']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $customer['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $customer['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $customer['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="token" class="control-label">Token</label>
						<div class="form-group">
							<input type="text" name="token" value="<?php echo ($this->input->post('token') ? $this->input->post('token') : $customer['token']); ?>" class="form-control" id="token" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_telp" class="control-label">No Telp</label>
						<div class="form-group">
							<input type="text" name="no_telp" value="<?php echo ($this->input->post('no_telp') ? $this->input->post('no_telp') : $customer['no_telp']); ?>" class="form-control" id="no_telp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $customer['created_at']); ?>" class="has-datetimepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="updated_at" class="control-label">Updated At</label>
						<div class="form-group">
							<input type="text" name="updated_at" value="<?php echo ($this->input->post('updated_at') ? $this->input->post('updated_at') : $customer['updated_at']); ?>" class="has-datetimepicker form-control" id="updated_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="verify_at" class="control-label">Verify At</label>
						<div class="form-group">
							<input type="text" name="verify_at" value="<?php echo ($this->input->post('verify_at') ? $this->input->post('verify_at') : $customer['verify_at']); ?>" class="has-datetimepicker form-control" id="verify_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
						<div class="form-group">
							<input type="text" name="jenis_kelamin" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $customer['jenis_kelamin']); ?>" class="form-control" id="jenis_kelamin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto_path" class="control-label">Foto Path</label>
						<div class="form-group">
							<input type="text" name="foto_path" value="<?php echo ($this->input->post('foto_path') ? $this->input->post('foto_path') : $customer['foto_path']); ?>" class="form-control" id="foto_path" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $customer['alamat']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>