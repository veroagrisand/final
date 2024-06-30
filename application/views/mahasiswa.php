<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Data Mahasiswa</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Data Mahasiswa</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <button class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#mahasiswaModal"><i class="fas fa-plus"></i> Tambah Data Dosen</button>
          <table class="table">
              <tr>
                  <th>No</th>
                  <th>Nim Mahasiswa</th>
                  <th>Nama Mahasiswa</th>
                  <th>Alamat Mahasiswa</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Foto</th>
                  <th>Kode Kelas</th>
                  <th>Kode Prodi</th>
                  <th colspan="2">Aksi</th>
              </tr>
              <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) : ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $mhs->mhs_nim; ?></td>
                      <td><?php echo $mhs->mhs_nama; ?></td>
                      <td><?php echo $mhs->mhs_alamat; ?></td>
                      <td><?php echo $mhs->mhs_tempat_lahir; ?></td>
                      <td><?php echo $mhs->mhs_tgl_lahir; ?></td>
                      <td><?php echo $mhs->mhs_jenkel; ?></td>
                      <td><?php echo $mhs->mhs_agama; ?></td>
                      <td><?php echo $mhs->mhs_foto; ?></td>
                      <td><?php echo $mhs->kelas_kd; ?></td>
                      <td><?php echo $mhs->prodi_kd; ?></td>
                      <td><?php echo anchor('mahasiswa/detail_mhs/' . $mhs->mhs_nim, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div> ') ?></td>
                      <td><?php echo anchor('mahasiswa/hapus_mhs/' . $mhs->mhs_nim, '<div class="btn btn-danger btn-sm" onclick="return confirmHapus()"> <i class="fa fa-trash"></i></div>') ?></td>
                      <script>
                          function confirmHapus() {
                              if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                                  return true;
                              } else {
                                  return false;
                              }
                          }
                      </script>

                      <td><?php echo anchor('mahasiswa/edit_mhs/' . $mhs->mhs_nim, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                      </td>

                  </tr>
              <?php endforeach; ?>
          </table>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="mahasiswaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Data Mahasiswa</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="<?php echo base_url() . 'mahasiswa/tambah_aksi_mhs'; ?>">
                          <div class="form-group">
                              <label>Nim Mahasiswa</label>
                              <input type="text" name="mhs_nim" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Nama Mahasiswa</label>
                              <input type="text" name="mhs_nama" class="form-control">
                          </div>
                          <div class="form-group">
                              <label> Alamat </label>
                              <input type="text" name="mhs_alamat" class="form-control">
                          </div>
                          <div class="form-group">
                                <label>Tempat Lahir</label>
                              <input type="text" name="mhs_tempat_lahir" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="text" name="mhs_tgl_lahir" class="form-control">
                          </div>
                          <div class="form-group">

                              <label>Jenis Kelamin:</label>
                              <input type="radio" name="mhs_jenkel" value="Laki-Laki"> Laki - Laki
                              <input type="radio" name="mhs_jenkel" value="Perempuan"> Perempuan

                          </div>
                          <div class="form-group">
                              <label>Agama</label>
                              <input type="text" name="mhs_agama" class="form-control">
                            </div>
                            <div class="form-group">
                              <label>Foto</label>
                              <input type="img" name="mhs_foto" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Kode Kelas</label>
                              <input type="text" name="kelas_kd" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Kode Prodi</label>
                              <input type="text" name="prodi_kd" class="form-control">
                          </div>
                          <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>