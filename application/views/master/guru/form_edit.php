<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Perubahan Guru</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <div class="form-group">
        <label for="namaGuru">Nama Guru :</label>
        <input type="text" class="form-control" id="nama_guru" placeholder="Nama Guru"
        value="<?php echo $guru['nama'] ?>">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="gelar_depan" placeholder="Gelar Depan"
            value="<?php echo $guru['gelar_depan'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="gelar_belakang" placeholder="Gelar Belakang"
            value="<?php echo $guru['gelar_belakang'] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="nuptk">NUPTK :</label>
        <input type="text" class="form-control" id="nuptk" placeholder="NUPTK"
        value="<?php echo $guru['nuptk'] ?>">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Alamat"
            value="<?php echo $guru['alamat'] ?>">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan"
            value="<?php echo $guru['kelurahan'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan"
            value="<?php echo $guru['kecamatan'] ?>">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kota" placeholder="Kota"
            value="<?php echo $guru['kota'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="provinsi" placeholder="Provinsi"
            value="<?php echo $guru['provinsi'] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
            value="<?php echo $guru['tempat_lahir'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir"
            value="<?php echo $guru['tanggal_lahir'] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="listAgama">Agama :</label>
        <select class="form-control" id="listAgama">
          <option value="<?php echo $guru['agama'] ?>" hidden selected><?php echo $guru['agama'] ?></option>
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Nasrani">Nasrani</option>
          <option value="Buddha">Buddha</option>
          <option value="Hindu">Hindu</option>
          <option value="Konghucu">Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <label for="gender">Gender :</label>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" id="radioPria" name="gender"
                  <?php if($guru["gender"] == "Pria"){echo "checked";} ?>>
                </div>
              </div>
              <input type="text" class="form-control" value="Pria">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" id="radioWanita" name="gender"
                  <?php if($guru["gender"] == "Wanita"){echo "checked";} ?>>
                </div>
              </div>
              <input type="text" class="form-control" value="Wanita" >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="btnEdit"
      data-id_guru="<?php echo $guru["id_guru"] ?>">Ubah</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
