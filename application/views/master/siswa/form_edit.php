<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Perubahan Siswa</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <div class="form-group">
        <label for="namaSiswa">Nama Siswa :</label>
        <input type="text" class="form-control" id="nama_siswa" placeholder="Nama Siswa"
        value="<?php echo $siswa['nama_siswa'] ?>">
      </div>
      <div class="form-group">
        <label for="nuptk">NISN :</label>
        <input type="text" class="form-control" id="nisn" placeholder="NISN"
        value="<?php echo $siswa['nisn'] ?>">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Alamat"
            value="<?php echo $siswa['alamat'] ?>">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan"
            value="<?php echo $siswa['kelurahan'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan"
            value="<?php echo $siswa['kecamatan'] ?>">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kota" placeholder="Kota"
            value="<?php echo $siswa['kota'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="provinsi" placeholder="Provinsi"
            value="<?php echo $siswa['provinsi'] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
            value="<?php echo $siswa['tempat_lahir'] ?>">
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir"
            value="<?php echo $siswa['tanggal_lahir'] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="listAgama">Agama :</label>
        <select class="form-control" id="listAgama">
          <option value="<?php echo $siswa['agama'] ?>" hidden selected><?php echo $siswa['agama'] ?></option>
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Nasrani">Nasrani</option>
          <option value="Buddha">Buddha</option>
          <option value="Hindu">Hindu</option>
          <option value="Konghucu">Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="listSemester">Semester :</label>
        <select class="form-control" id="listSemester">
          <option value="<?php echo $siswa['semester'] ?>" hidden selected><?php echo $siswa['semester'] ?></option>
          <option value="">Pilih Semester</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <label for="orang_tua">NIK Ayah :</label>
            <input type="text" class="form-control" id="nik_ayah"
            value="<?php if($nik['nik_suami'] == null){echo "";}else{echo $nik['nik_suami'];}  ?>"
            placeholder="NIK Ayah">
          </div>
          <div class="col-lg-6">
            <label for="orang_tua">NIK Ibu :</label>
            <input type="text" class="form-control" id="nik_ibu"
            value="<?php if($nik['nik_istri'] == null){echo "";}else{echo $nik['nik_istri'];}  ?>"
            placeholder="NIK Ibu">
          </div>
        </div>
      </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="btnEdit"
      data-id_siswa="<?php echo $siswa["id_siswa"] ?>">Ubah</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
