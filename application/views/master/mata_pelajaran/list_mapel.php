<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <?php $semester = null;
          if ($list_mapel[0]["semester"] == 1
          || $list_mapel[0]["semester"] == 2) {
            $semester = "Semester Awal";
          }elseif ($list_mapel[0]["semester"] == 3
          || $list_mapel[0]["semester"] == 4) {
            $semester = "Semester Menengah";
          }elseif ($list_mapel[0]["semester"] == 5
          || $list_mapel[0]["semester"] == 6) {
            $semester = "Semester Akhir";
          } ?>
          <h1 class="m-0">
            <?php echo $list_mapel[0]["kategori"]." ".$semester  ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
            <li class="breadcrumb-item active">Mata Pelajaran</li>
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
      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered table-bordered-secondary" id="tabelMapel">
            <thead class="bg-primary text-white">
              <tr class="text-center">
                <th width="2%">No.</th>
                <th>Kode Pelajaran</th>
                <th>Mata Pelajaran</th>
                <th>Semester</th>
                <th>kategori</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="bg-white">
              <?php $number = 0; foreach ($list_mapel as $key => $row) { $number++; ?>
                <tr>
                  <td width="2%"><?php echo $number . "." ?></td>
                  <td><?php echo $row["kode_mapel"] ?></td>
                  <td><?php echo $row["nama_mapel"] ?></td>
                  <td><?php echo $row["semester"] ?></td>
                  <td><?php echo $row["kategori"] ?></td>
                  <td class="text-center">
                    <div class="dropdown dropleft">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Aksi</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" id="formEdit"
                          data-id_mapel="<?php echo $row['id_mata_pelajaran'] ?>">Edit</a>
                          <a class="dropdown-item" href="#" id="btnDelete"
                          data-id_mapel="<?php echo $row['id_mata_pelajaran'] ?>">Delete</a>
                        </div>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="modalSaya">

  </div>
</div>
