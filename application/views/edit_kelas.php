<div class="content-wrapper">
    <section class="content">
        <?php foreach ($kelas as $kelas) { ?>
            <form action="<?php echo base_url() . 'kelas/update_kelas'; ?>" method="post">

                <div class="form-group">
                    <label>Kode Kelas</label>
                    <input type="text" name="kelas_kd" class="form-control" value="<?php echo $kelas->kelas_kd ?>">
                   
                </div>
                <div class="form-group">
                    <label>Nama_kelas</label>
                    <input type="text" name="kelas_nama" class="form-control" value="<?php echo $kelas->kelas_nama ?>">
                </div>
                
                    <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php  } ?>
    </section>
</div>