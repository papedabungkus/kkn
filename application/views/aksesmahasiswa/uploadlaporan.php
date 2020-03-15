
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
          <h4>Upload  <strong>Laporan</strong></h4>
            <form action="<?php echo site_url('aksesmahasiswa/savelaporan');?>" method="post" role="form" class="contactForm" enctype="multipart/form-data">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span6 form-group">
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Laporan" />
                    
                    <select name="jenislaporan" class="form-control span6" >
                        <option value="">-- Pilih Jenis Laporan --</option>
                        <option value="kp">Kerja Praktek</option>
                        <option value="ta">Tugas Akhir</option>
                        <option value="kkn">KKN</option>
                        <option value="skripsi">Skripsi</option>
                    </select>
                    <input type="file" name="file" class="form-control" id="file" />
                </div>
                <div class="span6 form-group">
                    <select name="dospem1" class="form-control span6" >
                        <option value="">Pilih Dosen Pembimbing 1</option>
                        <?php foreach ($dosen as $dospem1){ ?>
                        <option value="<?php echo $dospem1['id_dosen'];?>"><?php echo $dospem1['nama_dosen'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="span6 form-group">
                    <select name="dospem2" class="form-control span6" >
                        <option value="">Pilih Dosen Pembimbing 2</option>
                        <?php foreach ($dosen as $dospem2){ ?>
                        <option value="<?php echo $dospem2['id_dosen'];?>"><?php echo $dospem2['nama_dosen'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="span12 margintop10 form-group">
                  <textarea class="form-control" name="abstrak" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Abstrak Laporan"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Simpan</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>