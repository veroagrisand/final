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
        <label for="namaGuru">NIK Bapak :</label>
        <input type="text" class="form-control" id="nik_bapak" placeholder="NIK Bapak"
        value="<?php echo $ortu["nik_suami"] ?>">
      </div>
      <div class="form-group">
        <label for="namaGuru">Nama Bapak :</label>
        <input type="text" class="form-control" id="nama_bapak" placeholder="Nama Bapak"
        value="<?php echo $ortu["nama_suami"] ?>">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="tempat_lahir_1" placeholder="Tempat Lahir"
            value="<?php echo $ortu["tempat_lahir_suami"] ?>">
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control" id="tanggal_lahir_1" placeholder="Tanggal Lahir"
            value="<?php echo $ortu["tanggal_lahir_suami"] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="pekerjaanBapak">Pekerjaan Bapak :</label>
        <input type="text" class="form-control" id="pekerjaan_bapak" placeholder="Pekerjaan Bapak"
        value="<?php echo $ortu["pekerjaan_suami"] ?>">
      </div>
      <div class="row">
        <hr width="100%" style="border:1px solid;">
      </div>
      <div class="form-group">
        <label for="namaGuru">NIK Ibu :</label>
        <input type="text" class="form-control" id="nik_ibu" placeholder="NIK Ibu"
        value="<?php echo $ortu["nik_istri"] ?>">
      </div>
      <div class="form-group">
        <label for="namaGuru">Nama Ibu :</label>
        <input type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu"
        value="<?php echo $ortu["nama_istri"] ?>">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" class="form-control" id="tempat_lahir_2" placeholder="Tempat Lahir"
            value="<?php echo $ortu["tempat_lahir_suami"] ?>">
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control" id="tanggal_lahir_2" placeholder="Tanggal Lahir"
            value="<?php echo $ortu["tanggal_lahir_suami"] ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="pekerjaanBapak">Pekerjaan Ibu :</label>
        <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu"
        value="<?php echo $ortu["pekerjaan_istri"] ?>">
      </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="btnEdit"
      data-id_ortu="<?php echo $ortu["id_orang_tua"] ?>">Ubah</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
