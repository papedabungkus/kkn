<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Dosen Add</h3>
            </div>
            <?php echo form_open('dosen/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nip" class="control-label">Nip</label>
						<div class="form-group">
							<input type="text" name="nip" value="<?php echo $this->input->post('nip'); ?>" class="form-control" id="nip" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_dosen" class="control-label">Nama Dosen</label>
						<div class="form-group">
							<input type="text" name="nama_dosen" value="<?php echo $this->input->post('nama_dosen'); ?>" class="form-control" id="nama_dosen" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
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