<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dosen Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('dosen/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Dosen</th>
						<th>Password</th>
						<th>Nip</th>
						<th>Nama Dosen</th>
						<th>Username</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($dosen as $d){ ?>
                    <tr>
						<td><?php echo $d['id_dosen']; ?></td>
						<td><?php echo $d['password']; ?></td>
						<td><?php echo $d['nip']; ?></td>
						<td><?php echo $d['nama_dosen']; ?></td>
						<td><?php echo $d['username']; ?></td>
						<td>
                            <a href="<?php echo site_url('dosen/edit/'.$d['id_dosen']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('dosen/remove/'.$d['id_dosen']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
