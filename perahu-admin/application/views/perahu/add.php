<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Perahu Add</h3>
            </div>
            <?php echo form_open('perahu/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_perahu" class="control-label">Nama Perahu</label>
						<div class="form-group">
							<input type="text" name="nama_perahu" value="<?php echo $this->input->post('nama_perahu'); ?>" class="form-control" id="nama_perahu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_pemilik" class="control-label">Nama Pemilik</label>
						<div class="form-group">
							<input type="text" name="nama_pemilik" value="<?php echo $this->input->post('nama_pemilik'); ?>" class="form-control" id="nama_pemilik" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="foto_path" class="control-label">Foto Path</label>
						<div class="form-group">
							<input type="text" name="foto_path" value="<?php echo $this->input->post('foto_path'); ?>" class="form-control" id="foto_path" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="no_perahu" class="control-label">No Perahu</label>
						<div class="form-group">
							<input type="text" name="no_perahu" value="<?php echo $this->input->post('no_perahu'); ?>" class="form-control" id="no_perahu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tahun" class="control-label">Tahun</label>
						<div class="form-group">
							<input type="text" name="tahun" value="<?php echo $this->input->post('tahun'); ?>" class="form-control" id="tahun" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kapasitas" class="control-label">Kapasitas</label>
						<div class="form-group">
							<input type="text" name="kapasitas" value="<?php echo $this->input->post('kapasitas'); ?>" class="form-control" id="kapasitas" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="harga" class="control-label">Harga</label>
						<div class="form-group">
							<input type="text" name="harga" value="<?php echo $this->input->post('harga'); ?>" class="form-control" id="harga" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" class="has-datetimepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="spesifikasi_perahu" class="control-label">Spesifikasi Perahu</label>
						<div class="form-group">
							<textarea name="spesifikasi_perahu" class="form-control" id="spesifikasi_perahu"><?php echo $this->input->post('spesifikasi_perahu'); ?></textarea>
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