<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Tambah Mata Pelajaran</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <div class="form-group">
        <label for="kodeMapel">Kode Mata Pelajaran :</label>
        <input type="text" class="form-control" id="kodeMapel" placeholder="Kode Mata Pelajaran">
      </div>
      <div class="form-group">
        <label for="nisn">Nama Mata Pelajaran :</label>
        <input type="text" class="form-control" id="namaMapel" placeholder="namaMapel">
      </div>
        <div class="form-group">
          <div class="row mt-2">
            <div class="col-lg-6">
              <label for="listSemester">Semester : </label>
              <select class="form-control" id="listSemester">
                <option value="">Pilih Semester</option>
                <?php $num = 0;for ($i=0; $i < 6; $i++) { $num++;?>
                  <option value="<?php echo $num ?>"><?php echo $num ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="col-lg-6">
              <label for="listKategori">Kategori Ilmu :</label>
              <select class="form-control" id="listKategori">
                <option value="">Pilih Kategori</option>
                <option value="Ilmu Alam">Ilmu Alam</option>
                <option value="Ilmu Sosial">Ilmu Sosial</option>
                <option value="Ilmu Umum">Ilmu Umum</option>
              </select>
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
