<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Guru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Guru</li>
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
          <table class="table table-bordered table-bordered-secondary" id="tabelGuru">
            <thead class="bg-primary text-white">
              <tr class="text-center">
                <th width="2%">No.</th>
                <th>NUPTK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Agama</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="bg-white">
              <?php $number = 0; foreach ($list_guru as $key => $row) { $number++; ?>
                <tr>
                  <td width="2%"><?php echo $number . "." ?></td>
                  <td><?php echo $row["nuptk"] ?></td>
                  <td><?php echo $row["nama"] ?></td>
                  <td><?php echo $row["alamat"] ?></td>
                  <td><?php echo $row["kota"] ?></td>
                  <td><?php echo $row["provinsi"] ?></td>
                  <td><?php echo $row["agama"] ?></td>
                  <td class="text-center">
                    <div class="dropdown dropleft">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Aksi</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" id="formEdit"
                          data-id_guru="<?php echo $row['id_guru'] ?>">Edit</a>
                          <a class="dropdown-item" href="#" id="btnDelete"
                          data-id_guru="<?php echo $row['id_guru'] ?>">Delete</a>
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
