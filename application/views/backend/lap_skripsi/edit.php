<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lap Skripsi Edit</h3>
            </div>
			<?php echo form_open('lap_skripsi/edit/'.$lap_skripsi['id_laporan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nim" class="control-label">Nim</label>
						<div class="form-group">
							<input type="text" name="nim" value="<?php echo ($this->input->post('nim') ? $this->input->post('nim') : $lap_skripsi['nim']); ?>" class="form-control" id="nim" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul_laporan" class="control-label">Judul Laporan</label>
						<div class="form-group">
							<input type="text" name="judul_laporan" value="<?php echo ($this->input->post('judul_laporan') ? $this->input->post('judul_laporan') : $lap_skripsi['judul_laporan']); ?>" class="form-control" id="judul_laporan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_laporan" class="control-label">Jenis Laporan</label>
						<div class="form-group">
							<input type="text" name="jenis_laporan" value="<?php echo ($this->input->post('jenis_laporan') ? $this->input->post('jenis_laporan') : $lap_skripsi['jenis_laporan']); ?>" class="form-control" id="jenis_laporan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tgl_upload" class="control-label">Tgl Upload</label>
						<div class="form-group">
							<input type="text" name="tgl_upload" value="<?php echo ($this->input->post('tgl_upload') ? $this->input->post('tgl_upload') : $lap_skripsi['tgl_upload']); ?>" class="has-datepicker form-control" id="tgl_upload" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dospem_1" class="control-label">Dospem 1</label>
						<div class="form-group">
							<input type="text" name="dospem_1" value="<?php echo ($this->input->post('dospem_1') ? $this->input->post('dospem_1') : $lap_skripsi['dospem_1']); ?>" class="form-control" id="dospem_1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dospem_2" class="control-label">Dospem 2</label>
						<div class="form-group">
							<input type="text" name="dospem_2" value="<?php echo ($this->input->post('dospem_2') ? $this->input->post('dospem_2') : $lap_skripsi['dospem_2']); ?>" class="form-control" id="dospem_2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="kategori_laporan" class="control-label">Kategori Laporan</label>
						<div class="form-group">
							<input type="text" name="kategori_laporan" value="<?php echo ($this->input->post('kategori_laporan') ? $this->input->post('kategori_laporan') : $lap_skripsi['kategori_laporan']); ?>" class="form-control" id="kategori_laporan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="upload_laporan" class="control-label">Upload Laporan</label>
						<div class="form-group">
							<input type="text" name="upload_laporan" value="<?php echo ($this->input->post('upload_laporan') ? $this->input->post('upload_laporan') : $lap_skripsi['upload_laporan']); ?>" class="form-control" id="upload_laporan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="notifikasi" class="control-label">Notifikasi</label>
						<div class="form-group">
							<input type="text" name="notifikasi" value="<?php echo ($this->input->post('notifikasi') ? $this->input->post('notifikasi') : $lap_skripsi['notifikasi']); ?>" class="form-control" id="notifikasi" />
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