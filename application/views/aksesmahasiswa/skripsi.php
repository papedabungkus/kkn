    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><?php echo $lap_skripsi['judul_laporan'];?></h3>
                    </div>
                  </div>
                  <p>
                    <?php echo $lap_skripsi['abstrak_laporan'];?>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <div class="span4">
           
            <div class="comment-area">
              <?php if ($komentar->num_rows() > 0)
              {
                echo "<h4>".$komentar->num_rows()." Komentar</h4>";
              }
              ?>
              <?php foreach ($komentar->result_array() as $c) { ?>
              <div class="media">
                <a href="#" class="thumbnail pull-left"><img src="<?php echo site_url('resources/frontend/img/avatar.png');?>" alt="" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span><?php echo $c['tglwaktu'];?></span> <?php echo $c['nama_dosen'];?></h6>
                    <p>
                    <?php echo $c['komentar'];?>
                    </p>
                  </div>
                </div>
              </div>  
              <?php } ?>        
            </div>
          </div>
        </div>
      </div>
    </section>