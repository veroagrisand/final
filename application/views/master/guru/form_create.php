<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Tambah Guru</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <div class="form-group">
        <label for="namaGuru">Nama Guru :</label>
        <input type="text" class="form-control" id="nama_guru" placeholder="Nama Guru">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="gelar_depan" placeholder="Gelar Depan">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="gelar_belakang" placeholder="Gelar Belakang">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="nuptk">NUPTK :</label>
        <input type="text" class="form-control" id="nuptk" placeholder="NUPTK">
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
                  <input type="radio" id="radioPria" name="gender">
                </div>
              </div>
              <input type="text" class="form-control" value="Pria">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="radio" id="radioWanita" name="gender">
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
      <button type="button" class="btn btn-success" id="btnTambah">Tambah</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
