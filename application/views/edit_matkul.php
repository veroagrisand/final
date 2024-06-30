<div class="content-wrapper">
    <section class="content">
        <?php foreach ($matkul as $matkul) { ?>
            <form action="<?php echo base_url() . 'matkul/update_matkul'; ?>" method="post">
                          <div class="form-group">
                              <label>Nama Matakuliah</label>
                              <input type="hidden" name="matkul_id" class="form-control" value="<?php echo $matkul->matkul_id ?>">
                              <input type="text" name="matkul_nama" class="form-control" value="<?php echo $matkul->matkul_nama ?>">
                          </div>
                          <div class="form-group">
                              <label>Sks</label>
                              <input type="text" name="matkul_sks" class="form-control" value="<?php echo $matkul->matkul_sks?>">
                          </div>
                        
                    <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php  } ?>
    </section>
</div>