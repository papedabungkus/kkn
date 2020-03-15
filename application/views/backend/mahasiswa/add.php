<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Mahasiswa Add</h3>
            </div>
            <?php echo form_open('mahasiswa/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_mhs" class="control-label">Nama Mhs</label>
						<div class="form-group">
							<input type="text" name="nama_mhs" value="<?php echo $this->input->post('nama_mhs'); ?>" class="form-control" id="nama_mhs" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="thn_angkatan" class="control-label">Thn Angkatan</label>
						<div class="form-group">
							<input type="text" name="thn_angkatan" value="<?php echo $this->input->post('thn_angkatan'); ?>" class="form-control" id="thn_angkatan" />
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