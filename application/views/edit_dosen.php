<div class="content-wrapper">
    <section class="content">
        <?php foreach ($dosen as $dsn) { ?>
            <form action="<?php echo base_url() . 'dosen/update_dsn'; ?>" method="post">

                <div class="form-group">
                    <label>Nama Dosen</label>
                    <input type="hidden" name="dsn_nidn" class="form-control" value="<?php echo $dsn->dsn_nidn ?>">
                    <input type="text" name="dsn_nama" class="form-control" value="<?php echo $dsn->dsn_nama ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="dsn_alamat" class="form-control" value="<?php echo $dsn->dsn_alamat ?>">
                </div>

                <div class="form-group">

                    <label>Jenis Kelamin:</label>
                    <input type="radio" name="dsn_jenkel" value="Laki-Laki"> Laki - Laki
                    <input type="radio" name="dsn_jenkel" value="Perempuan"> Perempuan

                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="custom-select rounded-0" name="dsn_agama" value="<?php echo $dsn->dsn_agama ?>">
                        <option>Islam</option>
                        <option>Protestan</option>
                        <option >Katolik</option>
                        <option >Hindu</option>
                        <option >Budha</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="text" name="dsn_no_hp" class="form-control" value="<?php echo $dsn->dsn_no_hp ?>">
                    </div>
                    <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php  } ?>
    </section>
</div>