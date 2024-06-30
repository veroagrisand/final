<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Orang Tua</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
            <li class="breadcrumb-item active">Data Orang Tua</li>
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
          <table class="table table-bordered table-bordered-secondary" id="tabelOrtu">
            <thead class="bg-primary text-white">
              <tr class="text-center">
                <th width="2%">No.</th>
                <th>NIK Bapak/Ibu</th>
                <th>Nama Bapak</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan Bapak</th>
                <th>Pekerjaan Ibu</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="bg-white">
              <?php $number = 0; foreach ($list_ortu as $key => $row) { $number++; ?>
                <tr>
                  <td width="2%"><?php echo $number . "." ?></td>
                  <td><?php echo $row["nik_suami"] ." / ".$row["nik_istri"] ?></td>
                  <td><?php echo $row["nama_suami"] ?></td>
                  <td><?php echo $row["nama_istri"] ?></td>
                  <td><?php echo $row["pekerjaan_suami"] ?></td>
                  <td><?php echo $row["pekerjaan_istri"] ?></td>
                  <td class="text-center">
                    <div class="dropdown dropleft">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        Aksi</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" id="formEdit"
                          data-id_ortu="<?php echo $row['id_orang_tua'] ?>">Edit</a>
                          <a class="dropdown-item" href="#" id="btnDelete"
                          data-id_ortu="<?php echo $row['id_orang_tua'] ?>">Delete</a>
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
