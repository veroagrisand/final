<div class="content-wrapper">
    <section class="content">
        <?php foreach ($mahasiswa as $mhs) { ?>
            <form action="<?php echo base_url() . 'mahasiswa/update_mhs'; ?>" method="post">

                <div class="form-group">
                    <label>Nim Mahasiswa</label>
                    <input type="hidden" name="mhs_nim" class="form-control" value="<?php echo $mhs->mhs_nim ?>">
                    <input type="text" name="mhs_nim" class="form-control" value="<?php echo $mhs->mhs_nim ?>">
                </div>
                <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="mhs_nama" class="form-control" value="<?php echo $mhs->mhs_nama ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="mhs_alamat" class="form-control" value="<?php echo $mhs->mhs_alamat ?>">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="mhs_tempat_lahir" class="form-control" value="<?php echo $mhs->mhs_tempat_lahir ?>">
                    </div>
                    <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="mhs_tgl_lahir" class="form-control"value="<?php echo $mhs->mhs_tgl_lahir ?>">
                    </div>
                <div class="form-group">

                    <label>Jenis Kelamin:</label>
                    <input type="radio" name="mhs_jenkel" value="Laki-Laki"> Laki - Laki
                    <input type="radio" name="mhs_jenkel" value="Perempuan"> Perempuan

                </div>
                <div class="form-group">
                    <label>Agama</label>
                    <select class="custom-select rounded-0" name="mhs_agama" value="<?php echo $mhs->mhs_agama ?>">
                        <option>Islam</option>
                        <option>Protestan</option>
                        <option >Katolik</option>
                        <option >Hindu</option>
                        <option >Budha</option>
                    </select>
                </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="img" name="mhs_foto" class="form-control" value="<?php echo $mhs->mhs_foto ?>">
                    </div>
                    <div class="form-group">
                        <label>Kode Kelas</label>
                        <input type="text" name="kelas_kd" class="form-control" value="<?php echo $mhs->kelas_kd ?>">
                    </div>
                    <div class="form-group">
                        <label>Kode_Prodi</label>
                        <input type="text" name="prodi_kd" class="form-control" value="<?php echo $mhs->prodi_kd ?>">
                    </div>
                    <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        <?php  } ?>
    </section>
</div>
