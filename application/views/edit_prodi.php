<div class="content-wrapper">
    <section class="content">
        <?php foreach ($prodi as $prodi) { ?>
            <form action="<?php echo base_url() . 'prodi/update_prodi'; ?>" method="post">

                <div class="form-group">
                    <label>Nama Prodi</label>
                    <input type="hidden" name="prodi_kd" class="form-control" value="<?php echo $prodi->prodi_kd ?>">
                    <input type="text" name="prodi_nama" class="form-control" value="<?php echo $prodi->prodi_nama ?>">
                </div>
                <div class="form-group">
                    <label>Jenjang</label>
                    <input type="text" name="prodi_jenjang" class="form-control" value="<?php echo $prodi->prodi_jenjang ?>">
                </div>
                
                    <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php  } ?>
    </section>
</div>