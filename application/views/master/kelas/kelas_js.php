<script type="text/javascript">

$(document).ready(function() {
  jQuery(document).on("click","#formTambah",function () {
    $.ajax({
      url : "<?php echo site_url('master/kelas/form-tambah') ?>",
      type : "POST",
      data : { },
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#formEdit",function () {
    var id_kelas = $(this).data("id_kelas");
    $.ajax({
      url : "<?php echo site_url('master/kelas/form-edit') ?>",
      type : "POST",
      data : {"id_kelas" : id_kelas},
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#btnTambah",function (e) {
    e.preventDefault();
    var kode_ruang = $("#kode_ruang").val();
    var semester = $("#listSemester").val();
    var muatan = $("#jumlah_muatan").val();
    const data = [kode_ruang,semester,muatan];
    const pesan = ["Kode Ruang","Semester","Jumlah Muatan"];
    var valid = true;
    for (var i = 0; i < data.length; i++) {
      if (data[i] == "") {
        alert("Ketikkan " + pesan[i] + " dari Kelas!");
        valid = false;
        break;
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/kelas/tambah-kelas") ?>",
        type : "POST",
        data : {
          "kode_ruang" : kode_ruang,
          "semester" : semester,
          "muatan" : muatan
        },
        success:function (response) {
          if (response.sukses === true) {
            location.reload();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnEdit",function (e) {
    e.preventDefault();
    var id_kelas = $(this).data("id_kelas");
    var kode_ruang = $("#kode_ruang").val();
    var semester = $("#listSemester").val();
    var muatan = $("#jumlah_muatan").val();
    const data = [kode_ruang,semester,muatan];
    const pesan = ["Kode Ruang","Semester","Jumlah Muatan"];
    var valid = true;
    if (id_kelas == "") {
      valid = false;
      Swal.fire("Terjadi Kesalahan Sistem!");
    }else {
      for (var i = 0; i < data.length; i++) {
        if (data[i] == "") {
          alert("Ketikkan " + pesan[i] + " dari Ruang Belajar!");
          valid = false;
          break;
        }
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/kelas/edit-kelas") ?>",
        type : "POST",
        data : {
          "id_kelas" : id_kelas,
          "kode_ruang" : kode_ruang,
          "semester" : semester,
          "muatan" : muatan
        },
        success:function (response) {
          if (response.sukses === true) {
            location.reload();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnDelete",function () {
    var id_kelas = $(this).data("id_kelas");
    if (id_kelas == null) {
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
            url : "<?php echo site_url("master/kelas/hapus-kelas") ?>",
            type : "POST",
            data : {"id_kelas" : id_kelas },
            success : function (response) {
              if (response.sukses === true) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Data Kelas berhasil dihapus!",
                  icon: "success"
                });
                location.reload();
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
