<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ruang Kelas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kelas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <button type="button" id="formTambah" class="btn btn-success mb-3">
            Tambah</button>
        </div>
      </div>
      <?php foreach ($list_kelas as $index => $row) { ?>
        <?php if ($index % 5 == 0) {
          if ($index != 0) {
            echo "</div>";
          }
          echo "<div class='row'>";
        } ?>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-header bg-primary text-white"><?php echo $row["kode_ruang_belajar"] ?></div>
            <div class="card-body">
              <?php $semester = null;
              if($row["sifat_semester"] == "Semester Awal"){
                $semester = "I & II";
              }elseif ($row["sifat_semester"] == "Semester Menengah") {
                $semester = "III & IV";
              }elseif ($row["sifat_semester"] == "Semester Akhir") {
                $semester = "V & VI";
              }
              ?>
              <?php echo $row["sifat_semester"] . ": " . $semester ?><br>
              <?php echo "Jumlah muatan : " . $row["jumlah_muatan"] ?>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-warning" id="formEdit"
              data-id_kelas="<?php echo $row["id_ruang_belajar"] ?>">Edit</button>
              <button type="button" class="btn btn-danger" id="btnDelete"
              data-id_kelas="<?php echo $row["id_ruang_belajar"] ?>">Delete</button>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php echo "</div>"; ?>
    </div>
  </section>
  <div class="modal fade" id="modalSaya">

  </div>
</div>
