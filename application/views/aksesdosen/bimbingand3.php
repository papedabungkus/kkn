<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span8">
            <div class="inner-heading">
              <h2>Pembimbingan Laporan D3 Teknik Komputer </h2>
            </div>
          </div>
          <div class="span4">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Bimbingan Laporan</a><i class="icon-angle-right"></i></li>
              <li class="active">D3 Teknik Komputer</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">        
            <div class="span12">
            <form action="<?php echo site_url('aksesdosen/bimbingand3');?>" method="POST">
            <div class="btn-group">
                <select name="jenislaporan" class="btn">
                    <option>-- Pilih Jenis Laporan --</option>
                    <option value="kp" <?php if($jenislaporan=="kp") { echo 'selected="selected"'; } ?>>Kerja Praktek</option>
                    <option value="ta" <?php if($jenislaporan=="ta") { echo 'selected="selected"'; } ?>>Tugas Akhir</option>
                </select>
                <input type="submit" class="btn btn-primary" value="Tampilkan">
            </div>
            </form>
            <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Judul Laporan</th>
						<th>Tgl Upload</th>
						<th>Dospem 1</th>
						<th>Dospem 2</th>
						<th>File Laporan</th>
                    </tr>
                    <?php 
                    if($_POST)
                    {
                    $no=1;
                    foreach($laporan as $l){ ?>
                    <tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $l['nim']; ?></td>
						<td><?php echo $l['nama_mhs']; ?></td>
						<td><?php echo $l['judul_laporan']; ?></td>
						<td><?php echo $l['tgl_upload']; ?></td>
						<td><?php echo $l['dospem_1']; ?></td>
						<td><?php echo $l['dospem_2']; ?></td>
						<td><a class="btn btn-sm btn-theme btn-rounded" href="<?php echo base_url().$l['file']; ?>">Download</a></td>
						
                    </tr>
                    <?php } } else { ?>
                    <tr>
						<td style="text-align:center;" colspan="8">Pilih jenis laporan yang akan ditampilkan</td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</section>
<footer>