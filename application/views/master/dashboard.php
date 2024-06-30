<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $jumlah_siswa ?></h3>

              <p>Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url("master/siswa") ?>" class="small-box-footer">Info Lanjut
              <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $jumlah_guru ?><sup style="font-size: 20px"></sup></h3>

              <p>Guru</p>
            </div>
            <div class="icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
            <a href="<?php echo site_url("master/guru") ?>" class="small-box-footer">
              Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $jumlah_ruangan ?></h3>

              <p>Ruangan</p>
            </div>
            <div class="icon">
              <i class="ion ion-class"></i>
            </div>
            <a href="<?php echo site_url("master/kelas") ?>" class="small-box-footer">
              Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $jumlah_mapel ?></h3>

              <p>Mata Pelajaran</p>
            </div>
            <div class="icon">
              <i class="ion ion-book"></i>
            </div>
            <a href="<?php echo site_url("master/mata-pelajaran") ?>" class="small-box-footer">
              Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>
