<script type="text/javascript">
function reload_table() {
  var currentUrl = window.location.href;
  var tabel = $("#tabelMapel").DataTable();
  $.ajax({
    url : currentUrl,
    type : "GET",
    dataType : "html",
    success:function (data) {
      var reloadData = $(data).find("#tabelMapel tbody").html();
      tabel.clear().draw();
      $("#tabelMapel tbody").html(reloadData);
      tabel.rows.add($("#tabelMapel tbody tr")).draw();
    }
  });
}
$(document).ready(function() {
  $("#tabelMapel").DataTable();
  jQuery(document).on("click","#formTambah",function () {
    $.ajax({
      url : "<?php echo site_url('master/mata-pelajaran/form-tambah') ?>",
      type : "POST",
      data : { },
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#formEdit",function () {
    var id_mapel = $(this).data("id_mapel");
    $.ajax({
      url : "<?php echo site_url('master/mata-pelajaran/form-edit') ?>",
      type : "POST",
      data : {"id_mapel" : id_mapel},
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#btnTambah",function (e) {
    e.preventDefault();
    var kodeMapel = $("#kodeMapel").val();
    var namaMapel = $("#namaMapel").val();
    var listSemester = $("#listSemester").val();
    var listKategori = $("#listKategori").val();
    const data = [kodeMapel,namaMapel,listSemester,listKategori];
    const pesan = ["Kode Mata Pelajaran","Nama Mata Pelajaran","Semester","Kategori Ilmu"];
    var valid = true;
    for (var i = 0; i < data.length; i++) {
      if (data[i] == "") {
        alert("Ketikkan " + pesan[i] + " dari Mata Pelajaran!");
        valid = false;
        break;
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/mata-pelajaran/tambah-data") ?>",
        type : "POST",
        data : {
          "kode_mapel" : kodeMapel,
          "nama_mapel": namaMapel,
          "semester":listSemester,
          "kategori":listKategori,
        },
        success:function (response) {
          if (response.sukses === true) {
            $("#modalSaya").modal("toggle");
            Swal.fire("Data Mata Pelajaran telah Ditambahkan!");
            reload_table();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnEdit",function (e) {
    e.preventDefault();
    var id_mapel = $(this).data("id_mapel");
    var kodeMapel = $("#kodeMapel").val();
    var namaMapel = $("#namaMapel").val();
    var listSemester = $("#listSemester").val();
    var listKategori = $("#listKategori").val();
    const data = [kodeMapel,namaMapel,listSemester,listKategori];
    const pesan = ["Kode Mata Pelajaran","Nama Mata Pelajaran","Semester","Kategori Ilmu"];
    var valid = true;
    if (id_mapel == "") {
      valid = false;
      Swal.fire("Terjadi Kesalahan Sistem!");
    }else {
      for (var i = 0; i < data.length; i++) {
        if (data[i] == "") {
          alert("Ketikkan " + pesan[i] + " dari Siswa!");
          valid = false;
          break;
        }
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/mata-pelajaran/edit-data") ?>",
        type : "POST",
        data : {
          "id_mapel" : id_mapel,
          "kode_mapel" : kodeMapel,
          "nama_mapel": namaMapel,
          "semester":listSemester,
          "kategori":listKategori,
        },
        success:function (response) {
          if (response.sukses === true) {
            $("#modalSaya").modal("toggle");
            Swal.fire("Data Mata Pelajaran berhasil Diperbarui!");
            reload_table();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnDelete",function () {
    var id_mapel = $(this).data("id_mapel");
    if (id_mapel == null) {
      Swal.fire("Terjadi Kesalahan Sistem");
    }else {
      Swal.fire({
        title: "Konfirmasi Hapus?",
        text: "Kau tidak akan bisa mengembalikan data ini!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus Data ini!"
      }).then((result) => {
        if (result.value) {
          console.log("tombol yes");
          $.ajax({
            url : "<?php echo site_url("master/mata-pelajaran/hapus-data") ?>",
            type : "POST",
            data : {"id_mapel" : id_mapel },
            success : function (response) {
              if (response.sukses === true) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Data Mata Pelajaran berhasil dihapus!",
                  icon: "success"
                });
                reload_table();
              }else {
                Swal.fire({
                  title : "Failed",
                  text : "Terjadi Kesalahan Sistem!",
                  icon : "error"
                });
              }
            }
          });
        }else {
          console.log("tombol cancel");
        }
      });
    }
  });
});
</script>
