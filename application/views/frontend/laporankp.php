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
              <li class="active">Kerja Praktek</li>
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
            <h4>Laporan Kerja Praktek</h4>
            <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Judul Laporan</th>
						<th>Tgl Upload</th>
						<th>Dospem 1</th>
						<th>Dospem 2</th>
						<th>Kategori Laporan</th>
                    </tr>
                    <?php 
                    $no=1;
                    foreach($lap_kerjapraktek as $l){ ?>
                    <tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $l['nim']; ?></td>
						<td><?php echo $l['judul_laporan']; ?></td>
						<td><?php echo $l['tgl_upload']; ?></td>
						<td><?php echo $l['dospem_1']; ?></td>
						<td><?php echo $l['dospem_2']; ?></td>
						<td><?php echo $l['kategori_laporan']; ?></td>
						
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>
<footer>