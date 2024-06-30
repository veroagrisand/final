<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Data Dosen</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Data Dosen</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <button class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#dosenModal"><i class="fas fa-plus"></i> Tambah Data Dosen</button>
          <table class="table">
              <tr>
                  <th>No</th>
                  <th>NIDN</th>
                  <th>Nama Dosen</th>
                  <th>Alamat</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>No Hp</th>
                  <th colspan="2">Aksi</th>
              </tr>
              <?php
                $no = 1;
                foreach ($dosen as $dsn) : ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $dsn->dsn_nidn; ?></td>
                      <td><?php echo $dsn->dsn_nama; ?></td>
                      <td><?php echo $dsn->dsn_alamat; ?></td>
                      <td><?php echo $dsn->dsn_jenkel; ?></td>
                      <td><?php echo $dsn->dsn_agama; ?></td>
                      <td><?php echo $dsn->dsn_no_hp; ?></td>
                      <td><?php echo anchor('dosen/detail_dosen/' . $dsn->dsn_nidn, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div> ') ?></td>
                      <td><?php echo anchor('dosen/hapus_dsn/' . $dsn->dsn_nidn, '<div class="btn btn-danger btn-sm" onclick="return confirmHapus()"> <i class="fa fa-trash"></i></div>') ?></td>
                      <script>
                          function confirmHapus() {
                              if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                                  return true;
                              } else {
                                  return false;
                              }
                          }
                      </script>

                      <td><?php echo anchor('dosen/edit_dsn/' . $dsn->dsn_nidn, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                      </td>

                  </tr>
              <?php endforeach; ?>
          </table>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="dosenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Data Dosen</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="<?php echo base_url() . 'dosen/tambah_aksi_dsn'; ?>">
                          <div class="form-group">
                              <label>NIDN</label>
                              <input type="text" name="dsn_nidn" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Nama Dosen</label>
                              <input type="text" name="dsn_nama" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Alamat</label>
                              <input type="text" name="dsn_alamat" class="form-control">
                          </div>
                          <div class="form-group">

                              <label>Jenis Kelamin:</label>
                              <input type="radio" name="dsn_jenkel" value="Laki-Laki"> Laki - Laki
                              <input type="radio" name="dsn_jenkel" value="Perempuan"> Perempuan

                          </div>
                          <div class="form-group">
                              <label>Agama</label>
                              <select class="custom-select rounded-0" name="dsn_agama">
                                  <option value="Islam">Islam</option>
                                  <option value="Protestan">Protestan</option>
                                  <option value="Katolik">Katolik</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Budha">Budha</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>No Hp</label>
                              <input type="text" name="dsn_no_hp" class="form-control">
                          </div>
                          <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>