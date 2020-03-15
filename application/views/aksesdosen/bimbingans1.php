<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Arsip Laporan </h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Laporan</a><i class="icon-angle-right"></i></li>
              <li class="active">Skripsi</li>
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
            <form action="<?php echo site_url('aksesdosen/bimbingans1');?>" method="POST">
            <div class="btn-group">
                <select name="jenislaporan" class="btn">
                    <option>-- Pilih Jenis Laporan --</option>
                    <option value="kp" <?php if($jenislaporan=="kp") { echo 'selected="selected"'; } ?>>Kerja Praktek</option>
                    <option value="skripsi" <?php if($jenislaporan=="skripsi") { echo 'selected="selected"'; } ?>>Skripsi</option>
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
						<td><?php echo $l['file']; ?></td>
						
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