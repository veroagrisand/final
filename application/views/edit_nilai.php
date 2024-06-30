<div class="content-wrapper">
    <section class="content">
        <?php foreach ($nilai as $nilai) { ?>
            <form action="<?php echo base_url() . 'nilai/update_nilai'; ?>" method="post">
            
            <div class="form-group">
                              <label>Nilai Semester</label>
                              <input type="hidden" name="nilai_kd" class="form-control"value="<?php echo $nilai->nilai_kd ?>">
                              <input type="text" name="nilai_sem" class="form-control"value="<?php echo $nilai->nilai_sem ?>">
                            </div>
                          <div class="form-group">
                              <label>Nim Mahasiswa</label>
                              <input type="text" name="mhs_nim" class="form-control"value="<?php echo $nilai->mhs_nim ?>">
                          </div>
                          <div class="form-group">
                                <label>Nidn</label>
                              <input type="text" name="dsn_nidn" class="form-control"value="<?php echo $nilai->dsn_nidn ?>">
                          </div>
                          <div class="form-group">
                              <label>Hadir</label>
                              <input type="text" name="hadir" class="form-control"value="<?php echo $nilai->hadir ?>">
                          </div>
                          <div class="form-group">
                              <label>Tugas</label>
                              <input type="text" name="tugas" class="form-control"value="<?php echo $nilai->tugas ?>">
                          </div>
                          <div class="form-group">
                              <label>Kuis</label>
                              <input type="text" name="kuis" class="form-control"value="<?php echo $nilai->kuis ?>">
                            </div>
                            <div class="form-group">
                              <label>Uts</label>
                              <input type="text" name="uts" class="form-control"value="<?php echo $nilai->uts?>">
                          </div>
                          <div class="form-group">
                              <label>Uas</label>
                              <input type="text" name="uas" class="form-control"value="<?php echo $nilai->uas?>">
                          </div>
                    <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php  } ?>
    </section>
</div>