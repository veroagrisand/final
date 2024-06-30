<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Data Admin</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Data Admin</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <button class=" btn btn-sm btn-primary" data-toggle="modal" data-target="#adminModal"><i class="fas fa-plus"></i> Tambah Data Dosen</button>
          <table class="table">
              <tr>
                  <th>No</th>
                  <th>Id Admin</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th colspan="2">Aksi</th>
              </tr>
              <?php
                $no = 1;
                foreach ($admin as $admin) : ?>
                  <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $admin->admin_id; ?></td>
                      <td><?php echo $admin->admin_nama; ?></td>
                      <td><?php echo $admin->username; ?></td>
                      <td><?php echo $admin->password; ?></td>
                      <td><?php echo anchor('admin/hapus_admin/' . $admin->admin_id, '<div class="btn btn-danger btn-sm" onclick="return confirmHapus()"> <i class="fa fa-trash"></i></div>') ?></td>
                      <script>
                          function confirmHapus() {
                              if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                                  return true;
                              } else {
                                  return false;
                              }
                          }
                      </script>

                      <td><?php echo anchor('admin/edit_admin/' . $admin->admin_id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                      </td>

                  </tr>
              <?php endforeach; ?>
          </table>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Data Admin</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="<?php echo base_url() . 'admin/tambah_aksi_admin'; ?>">
                          <div class="form-group">
                              <label>Id Admin</label>
                              <input type="text" name="admin_id" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Nama Admin</label>
                              <input type="text" name="admin_nama" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" name="username" class="form-control">
                          </div>
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control">
                          </div>

                        
                          <button type="buttonreset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>