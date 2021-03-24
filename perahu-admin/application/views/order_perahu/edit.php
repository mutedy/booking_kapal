<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Order Perahu Edit</h3>
            </div>
			<?php echo form_open('order_perahu/edit/'.$order_perahu['pemesanan_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="customer_id" class="control-label">Customer Id</label>
						<div class="form-group">
							<input type="text" name="customer_id" value="<?php echo ($this->input->post('customer_id') ? $this->input->post('customer_id') : $order_perahu['customer_id']); ?>" class="form-control" id="customer_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="perahu_id" class="control-label">Perahu Id</label>
						<div class="form-group">
							<input type="text" name="perahu_id" value="<?php echo ($this->input->post('perahu_id') ? $this->input->post('perahu_id') : $order_perahu['perahu_id']); ?>" class="form-control" id="perahu_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $order_perahu['created_at']); ?>" class="has-datetimepicker form-control" id="created_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="verified_at" class="control-label">Verified At</label>
						<div class="form-group">
							<input type="text" name="verified_at" value="<?php echo ($this->input->post('verified_at') ? $this->input->post('verified_at') : $order_perahu['verified_at']); ?>" class="has-datetimepicker form-control" id="verified_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="booking_at" class="control-label">Booking At</label>
						<div class="form-group">
							<input type="text" name="booking_at" value="<?php echo ($this->input->post('booking_at') ? $this->input->post('booking_at') : $order_perahu['booking_at']); ?>" class="has-datetimepicker form-control" id="booking_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="order_status" class="control-label">Order Status</label>
						<div class="form-group">
							<input type="text" name="order_status" value="<?php echo ($this->input->post('order_status') ? $this->input->post('order_status') : $order_perahu['order_status']); ?>" class="form-control" id="order_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="uploaded_at" class="control-label">Uploaded At</label>
						<div class="form-group">
							<input type="text" name="uploaded_at" value="<?php echo ($this->input->post('uploaded_at') ? $this->input->post('uploaded_at') : $order_perahu['uploaded_at']); ?>" class="has-datetimepicker form-control" id="uploaded_at" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="biaya" class="control-label">Biaya</label>
						<div class="form-group">
							<input type="text" name="biaya" value="<?php echo ($this->input->post('biaya') ? $this->input->post('biaya') : $order_perahu['biaya']); ?>" class="form-control" id="biaya" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bukti_pembayaran_path" class="control-label">Bukti Pembayaran Path</label>
						<div class="form-group">
							<textarea name="bukti_pembayaran_path" class="form-control" id="bukti_pembayaran_path"><?php echo ($this->input->post('bukti_pembayaran_path') ? $this->input->post('bukti_pembayaran_path') : $order_perahu['bukti_pembayaran_path']); ?></textarea>
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