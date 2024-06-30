<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Mata Pelajaran</h1>
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
    <?php $semester = array('Semester Awal','Semester Menengah','Semester Akhir'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-sm">
            <div class="card-header bg-warning">Ilmu Alam</div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php for ($i=0; $i < 3; $i++) {?>
          <div class="col-lg-4">
            <div class="small-box bg-light">
              <div class="inner">
                <h5><?php echo $semester[$i] ?></h5>

                <p><?php echo $list_count[0][$i]["jumlah_mapel"] ?> Mata Pelajaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo site_url($url[0][$i]) ?>" class="small-box-footer">
                Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <?php } ?>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-sm">
            <div class="card-header bg-success">Ilmu Sosial</div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php for ($i=0; $i < 3; $i++) {?>
          <div class="col-lg-4">
            <div class="small-box bg-light">
              <div class="inner">
                <h5><?php echo $semester[$i] ?></h5>

                <p><?php echo $list_count[1][$i]["jumlah_mapel"] ?> Mata Pelajaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo site_url($url[1][$i]) ?>" class="small-box-footer">
                Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <?php } ?>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card card-sm">
            <div class="card-header bg-primary">Ilmu Umum</div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php for ($i=0; $i < 3; $i++) {?>
          <div class="col-lg-4">
            <div class="small-box bg-light">
              <div class="inner">
                <h5><?php echo $semester[$i] ?></h5>

                <p><?php echo $list_count[2][$i]["jumlah_mapel"] ?> Mata Pelajaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo site_url($url[2][$i]) ?>" class="small-box-footer">
                Info Lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <div class="modal fade" id="modalSaya">

  </div>
</div>
