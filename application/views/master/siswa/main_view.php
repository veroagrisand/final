<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Siswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Siswa</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>Semester-I</h3>

              <p><?php echo $semSatu["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url('master/list-siswa/1') ?>" class="small-box-footer">
              Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>Semester-II<sup style="font-size: 20px"></sup></h3>

              <p><?php echo $semDua["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
            <a href="<?php echo site_url('master/list-siswa/2') ?>" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Semester-III</h3>

              <p><?php echo $semTiga["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url('master/list-siswa/3') ?>" class="small-box-footer">
              Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Semester-IV<sup style="font-size: 20px"></sup></h3>
              <p><?php echo $semEmpat["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
            <a href="<?php echo site_url('master/list-siswa/4') ?>" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Semester-V</h3>

              <p><?php echo $semLima["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url('master/list-siswa/5') ?>" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Semester-VI<sup style="font-size: 20px"></sup></h3>
              <p><?php echo $semEnam["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
            <a href="<?php echo site_url('master/list-siswa/6') ?>" class="small-box-footer">
              Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Semua Siswa<sup style="font-size: 20px"></sup></h3>
              <p><?php echo $semSemua["jumlah_siswa"] ?> Siswa</p>
            </div>
            <div class="icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
            <a href="<?php echo site_url('master/list-siswa/7') ?>" class="small-box-footer">Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="modalSaya">

  </div>
</div>
