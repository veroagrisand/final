<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Tambah Siswa</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <div class="form-group">
        <label for="namaSiswa">Nama Siswa :</label>
        <input type="text" class="form-control" id="nama_siswa" placeholder="Nama Siswa">
      </div>
      <div class="form-group">
        <label for="nisn">NISN :</label>
        <input type="text" class="form-control" id="nisn" placeholder="NISN">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Alamat">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="kota" placeholder="Kota">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="provinsi" placeholder="Provinsi">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row mt-2">
          <label for="tempat_tanggal_lahir">Tempat/Tanggal Lahir : </label>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="listAgama">Agama :</label>
        <select class="form-control" id="listAgama">
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Nasrani">Nasrani</option>
          <option value="Buddha">Buddha</option>
          <option value="Hindu">Hindu</option>
          <option value="Konghucu">Konghucu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="listAgama">Semester :</label>
        <select class="form-control" id="listSemester">
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
        <label for="orang_tua">Orang Tua :</label>
        <input type="text" class="form-control" id="orang_tua" placeholder="Ketikkan NIK dari Salah Satu Orang Tua">
      </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="btnTambah">Tambah</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
