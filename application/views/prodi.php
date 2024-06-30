<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Data Prodi</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Data Prodi</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <button class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#prodiModal"><i class="fas fa-plus"></i> Tambah Data Dosen</button>
          <table class="table">
              <tr>
                  <th>No</th>
                  <th>Kode Prodi</th>
                  <th>Nama Prodi</th>
                  <th>Jenjang</th>
                  <th colspan="2">Aksi</th>
              </tr>
              <?php
                $no = 1;
                foreach ($prodi as $prodi) : ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $prodi->prodi_kd; ?></td>
                      <td><?php echo $prodi->prodi_nama; ?></td>
                      <td><?php echo $prodi->prodi_jenjang; ?></td>
                      <td><?php echo anchor('prodi/detail_prodi/' . $prodi->prodi_kd, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div> ') ?></td>
                      <td><?php echo anchor('prodi/hapus_prodi/' . $prodi->prodi_kd, '<div class="btn btn-danger btn-sm" onclick="return confirmHapus()"> <i class="fa fa-trash"></i></div>') ?></td>
                      <script>
                          function confirmHapus() {
                              if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                                  return true;
                              } else {
                                  return false;
                              }
                          }
                      </script>

                      <td><?php echo anchor('prodi/edit_prodi/' . $prodi->prodi_kd, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                      </td>

                  </tr>
              <?php endforeach; ?>
          </table>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="prodiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Data Prodi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="<?php echo base_url() . 'prodi/tambah_aksi_prodi'; ?>">
                          <div class="form-group">
                              <label>Kode Prodi</label>
                              <input type="text" name="prodi_kd" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Nama Prodi</label>
                              <input type="text" name="prodi_nama" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Jenjang</label>
                              <input type="text" name="prodi_jenjang" class="form-control">
                          </div>
                        
                          <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>