<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lap Ta Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('lap_ta/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Laporan</th>
						<th>Nim</th>
						<th>Judul Laporan</th>
						<th>Tgl Upload</th>
						<th>Dospem 1</th>
						<th>Dospem 2</th>
						<th>Kategori Laporan</th>
						<th>Upload Laporan</th>
						<th>Notifikasi</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($lap_ta as $l){ ?>
                    <tr>
						<td><?php echo $l['id_laporan']; ?></td>
						<td><?php echo $l['nim']; ?></td>
						<td><?php echo $l['judul_laporan']; ?></td>
						<td><?php echo $l['tgl_upload']; ?></td>
						<td><?php echo $l['dospem_1']; ?></td>
						<td><?php echo $l['dospem_2']; ?></td>
						<td><?php echo $l['kategori_laporan']; ?></td>
						<td><?php echo $l['upload_laporan']; ?></td>
						<td><?php echo $l['notifikasi']; ?></td>
						<td>
                            <a href="<?php echo site_url('lap_ta/edit/'.$l['id_laporan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('lap_ta/remove/'.$l['id_laporan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>