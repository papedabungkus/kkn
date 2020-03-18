
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Berikut ini arsip laporan milik <span class="highlight"><strong><?php echo $this->session->userdata('nama');?></strong></span></h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="<?php echo site_url('aksesmahasiswa/uploadlaporan'); ?>">Upload Laporan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Laporan Kerja Praktek</h6>
                    <p>
                    <?php echo $lap_kp['judul_laporan'];?>
                    </p>
                    <a href="<?php echo site_url('aksesmahasiswa/kerjapraktek');?>">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <?php
                if($this->session->userdata('prodi')=="D3 Teknik Komputer") {
              ?>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Laporan Tugas Akhir</h6>
                    <p>
                    <?php echo $lap_tugasakhir['judul_laporan'];?>
                    </p>
                    <a href="<?php echo site_url('aksesmahasiswa/tugasakhir');?>">Selengkapnya</a>
                  </div>
                </div>
              </div>
              <?php
                } elseif($this->session->userdata('prodi')=="S1 Teknik Informatika") {
              ?>
              
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Laporan Skripsi</h6>
                    <p>
                      <?php echo $lap_skripsi['judul_laporan'];?>
                    </p>
                    <a href="<?php echo site_url('aksesmahasiswa/skripsi');?>">Selengkapnya</a>
                  </div>
                </div>
              </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>