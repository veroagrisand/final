<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Data Nilai</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Data Nilai</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <button class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#nilaiModal"><i class="fas fa-plus"></i> Tambah Data Dosen</button>
          <table class="table">
              <tr>
                  <th>No</th>
                  <th>Kode Nilai</th>
                  <th>Nilai Semester</th>
                  <th>Nim Mahasiswa</th>
                  <th>Nidn</th>
                  <th>Hadir</th>
                  <th>Tugas</th>
                  <th>Kuis</th>
                  <th>Uts</th>
                  <th>Uas</th>
                  <th colspan="2">Aksi</th>
              </tr>
              <?php
                $no = 1;
                foreach ($nilai as $nilai) : ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $nilai->nilai_kd; ?></td>
                      <td><?php echo $nilai->nilai_sem; ?></td>
                      <td><?php echo $nilai->mhs_nim; ?></td>
                      <td><?php echo $nilai->dsn_nidn; ?></td>
                      <td><?php echo $nilai->hadir; ?></td>
                      <td><?php echo $nilai->tugas; ?></td>
                      <td><?php echo $nilai->kuis; ?></td>
                      <td><?php echo $nilai->uts; ?></td>
                      <td><?php echo $nilai->uas; ?></td>
                      <td><?php echo anchor('nilai/detail_nilai/' . $nilai->nilai_kd, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div> ') ?></td>
                      <td><?php echo anchor('nilai/hapus_nilai/' . $nilai->nilai_kd, '<div class="btn btn-danger btn-sm" onclick="return confirmHapus()"> <i class="fa fa-trash"></i></div>') ?></td>
                      <script>
                          function confirmHapus() {
                              if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                                  return true;
                              } else {
                                  return false;
                              }
                          }
                      </script>

                      <td><?php echo anchor('nilai/edit_nilai/' . $nilai->nilai_kd, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                      </td>

                  </tr>
              <?php endforeach; ?>
          </table>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="nilaiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Data Nilai</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="<?php echo base_url() . 'nilai/tambah_aksi_nilai'; ?>">
                          <div class="form-group">
                              <label>Kode Nilai</label>
                              <input type="text" name="nilai_kd" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Nilai Semester</label>
                              <input type="text" name="nilai_sem" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Nim Mahasiswa</label>
                              <input type="text" name="mhs_nim" class="form-control">
                          </div>
                          <div class="form-group">
                                <label>Nidn</label>
                              <input type="text" name="dsn_nidn" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Hadir</label>
                              <input type="text" name="hadir" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Tugas</label>
                              <input type="text" name="tugas" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Kuis</label>
                              <input type="text" name="kuis" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Uts</label>
                              <input type="text" name="uts" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Uas</label>
                              <input type="text" name="uas" class="form-control">
                          </div>
                          <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>