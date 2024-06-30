<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Tambah Ruang Kelas</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <div class="form-group">
        <label for="namaGuru">Kode Ruang Belajar :</label>
        <input type="text" class="form-control" id="kode_ruang" placeholder="Kode Ruang belajar">
      </div>
      <div class="form-group">
        <label for="listSemester">Sifat Semester :</label>
        <select class="form-control" id="listSemester">
          <option value="">Pilih Semester</option>
          <option value="Semester Awal">Semester Awal</option>
          <option value="Semester Menengah">Semester Menengah</option>
          <option value="Semester Akhir">Semester Akhir</option>
        </select>
      </div>
      <div class="form-group">
        <label for="nuptk">Jumlah Muatan :</label>
        <input type="number" class="form-control" id="jumlah_muatan" placeholder="Jumlah Ruangan">
      </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" id="btnTambah">Tambah</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
