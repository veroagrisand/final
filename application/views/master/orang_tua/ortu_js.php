<script type="text/javascript">
function reload_table() {
  var currentUrl = window.location.href;
  var tabel = $("#tabelOrtu").DataTable();
  $.ajax({
    url : currentUrl,
    type : "GET",
    dataType : "html",
    success:function (data) {
      var reloadData = $(data).find("#tabelOrtu tbody").html();
      tabel.clear().draw();
      $("#tabelOrtu tbody").html(reloadData);
      tabel.rows.add($("#tabelOrtu tbody tr")).draw();
    }
  });
}
$(document).ready(function() {
  $("#tabelOrtu").DataTable();
  jQuery(document).on("click","#formTambah",function () {
    $.ajax({
      url : "<?php echo site_url('master/orang-tua/form-tambah') ?>",
      type : "POST",
      data : { },
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#formEdit",function () {
    var id_ortu = $(this).data("id_ortu");
    $.ajax({
      url : "<?php echo site_url('master/orang-tua/form-edit') ?>",
      type : "POST",
      data : {"id_ortu" : id_ortu},
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#btnTambah",function (e) {
    e.preventDefault();
    var nik_bapak = $("#nik_bapak").val();
    var nama_bapak = $("#nama_bapak").val();
    var tempat_lahir_1 = $("#tempat_lahir_1").val();
    var tanggal_lahir_1 = $("#tanggal_lahir_1").val();
    var pekerjaan_bapak = $("#pekerjaan_bapak").val();
    var nik_ibu = $("#nik_ibu").val();
    var nama_ibu = $("#nama_ibu").val();
    var tempat_lahir_2 = $("#tempat_lahir_2").val();
    var tanggal_lahir_2 = $("#tanggal_lahir_2").val();
    var pekerjaan_ibu = $("#pekerjaan_ibu").val();
    const data = [nik_bapak,nama_bapak,tempat_lahir_1,tanggal_lahir_1,pekerjaan_bapak,
    nik_ibu,nama_ibu,tempat_lahir_2,tanggal_lahir_2,pekerjaan_ibu];
    const pesan = ["NIK Bapak","Nama Bapak","Tempat Lahir Bapak","Tanggal Lahir Bapak","Pekerjaan Bapak",
    "NIK Ibu","Nama Ibu","Tempat Lahir Ibu","Tanggal Lahir Ibu","Pekerjaan Ibu"];
    var valid = true;
    for (var i = 0; i < data.length; i++) {
      if (data[i] == "") {
        alert("Ketikkan " + pesan[i] + " dari Orang Tua!");
        valid = false;
        break;
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/orang-tua/tambah-data") ?>",
        type : "POST",
        data : {
          "nik_bapak" : nik_bapak,
          "nama_bapak" : nama_bapak,
          "tempat_lahir_1" : tempat_lahir_1,
          "tanggal_lahir_1": tanggal_lahir_1,
          "pekerjaan_bapak": pekerjaan_bapak,
          "nik_ibu" : nik_ibu,
          "nama_ibu" : nama_ibu,
          "tempat_lahir_2" : tempat_lahir_2,
          "tanggal_lahir_2": tanggal_lahir_2,
          "pekerjaan_ibu": pekerjaan_ibu
        },
        success:function (response) {
          if (response.sukses === true) {
            Swal.fire("Data Orang Tua telah Ditambahkan!");
            $("#modalSaya").modal("toggle");
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
    var id_ortu = $(this).data("id_ortu");
    var nik_bapak = $("#nik_bapak").val();
    var nama_bapak = $("#nama_bapak").val();
    var tempat_lahir_1 = $("#tempat_lahir_1").val();
    var tanggal_lahir_1 = $("#tanggal_lahir_1").val();
    var pekerjaan_bapak = $("#pekerjaan_bapak").val();
    var nik_ibu = $("#nik_ibu").val();
    var nama_ibu = $("#nama_ibu").val();
    var tempat_lahir_2 = $("#tempat_lahir_2").val();
    var tanggal_lahir_2 = $("#tanggal_lahir_2").val();
    var pekerjaan_ibu = $("#pekerjaan_ibu").val();
    const data = [nik_bapak,nama_bapak,tempat_lahir_1,tanggal_lahir_1,pekerjaan_bapak,
    nik_ibu,nama_ibu,tempat_lahir_2,tanggal_lahir_2,pekerjaan_ibu];
    const pesan = ["NIK Bapak","Nama Bapak","Tempat Lahir Bapak","Tanggal Lahir Bapak","Pekerjaan Bapak",
    "NIK Ibu","Nama Ibu","Tempat Lahir Ibu","Tanggal Lahir Ibu","Pekerjaan Ibu"];
    var valid = true;
    if (id_ortu == "") {
      valid = false;
      Swal.fire("Terjadi Kesalahan Sistem!");
    }else {
      for (var i = 0; i < data.length; i++) {
        if (data[i] == "") {
          alert("Ketikkan " + pesan[i] + " dari Orang Tua!");
          valid = false;
          break;
        }
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/orang-tua/edit-data") ?>",
        type : "POST",
        data : {
          "id_ortu" : id_ortu,
          "nik_bapak" : nik_bapak,
          "nama_bapak" : nama_bapak,
          "tempat_lahir_1" : tempat_lahir_1,
          "tanggal_lahir_1": tanggal_lahir_1,
          "pekerjaan_bapak": pekerjaan_bapak,
          "nik_ibu" : nik_ibu,
          "nama_ibu" : nama_ibu,
          "tempat_lahir_2" : tempat_lahir_2,
          "tanggal_lahir_2": tanggal_lahir_2,
          "pekerjaan_ibu": pekerjaan_ibu,
        },
        success:function (response) {
          if (response.sukses === true) {
            Swal.fire("Data Orang Tua berhasil Diperbarui!");
            $("#modalSaya").modal("toggle");
            reload_table();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnDelete",function () {
    var id_ortu = $(this).data("id_ortu");
    if (id_ortu == null) {
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
            url : "<?php echo site_url("master/orang-tua/hapus-data") ?>",
            type : "POST",
            data : {"id_ortu" : id_ortu },
            success : function (response) {
              if (response.sukses === true) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Data Orang Tua berhasil dihapus!",
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
