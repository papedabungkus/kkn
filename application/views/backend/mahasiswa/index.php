<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Mahasiswa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('mahasiswa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nim</th>
						<th>Password</th>
						<th>Nama Mhs</th>
						<th>Thn Angkatan</th>
						<th>Username</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($mahasiswa as $m){ ?>
                    <tr>
						<td><?php echo $m['nim']; ?></td>
						<td><?php echo $m['password']; ?></td>
						<td><?php echo $m['nama_mhs']; ?></td>
						<td><?php echo $m['thn_angkatan']; ?></td>
						<td><?php echo $m['username']; ?></td>
						<td>
                            <a href="<?php echo site_url('mahasiswa/edit/'.$m['nim']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('mahasiswa/remove/'.$m['nim']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
