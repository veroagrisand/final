<script type="text/javascript">
function reload_table() {
  var currentUrl = window.location.href;
  var tabel = $("#tabelSiswa").DataTable();
  $.ajax({
    url : currentUrl,
    type : "GET",
    dataType : "html",
    success:function (data) {
      var reloadData = $(data).find("#tabelSiswa tbody").html();
      tabel.clear().draw();
      $("#tabelSiswa tbody").html(reloadData);
      tabel.rows.add($("#tabelSiswa tbody tr")).draw();
    }
  });
}
$(document).ready(function() {
  $("#tabelSiswa").DataTable();
  jQuery(document).on("click","#formTambah",function () {
    $.ajax({
      url : "<?php echo site_url('master/siswa/form-tambah') ?>",
      type : "POST",
      data : { },
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#formEdit",function () {
    var id_siswa = $(this).data("id_siswa");
    $.ajax({
      url : "<?php echo site_url('master/siswa/form-edit') ?>",
      type : "POST",
      data : {"id_siswa" : id_siswa},
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#btnTambah",function (e) {
    e.preventDefault();
    var nama = $("#nama_siswa").val();
    var nisn = $("#nisn").val();
    var alamat = $("#alamat").val();
    var kelurahan = $("#kelurahan").val();
    var kecamatan = $("#kecamatan").val();
    var kota = $("#kota").val();
    var provinsi = $("#provinsi").val();
    var tempat_lahir = $("#tempat_lahir").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var agama = $("#listAgama").val();
    var semester = $("#listSemester").val();
    var orang_tua = $("#orang_tua").val();
    const data = [nama,nisn,alamat,kelurahan,kecamatan,provinsi,kota,
    tempat_lahir,tanggal_lahir,agama,semester];
    const pesan = ["Nama","NISN","Alamat","Kelurahan","Kecamatan","Provinsi",
    "Kota","Tempat Lahir","Tanggal Lahir","Agama","Semester"];
    var valid = true;
    for (var i = 0; i < data.length; i++) {
      if (data[i] == "") {
        alert("Ketikkan " + pesan[i] + " dari Siswa!");
        valid = false;
        break;
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/siswa/tambah-siswa") ?>",
        type : "POST",
        data : {
          "nama" : nama,
          "nisn": nisn,
          "alamat":alamat,
          "kelurahan":kelurahan,
          "kecamatan":kecamatan,
          "kota" : kota,
          "provinsi":provinsi,
          "tempat_lahir":tempat_lahir,
          "tanggal_lahir":tanggal_lahir,
          "agama":agama,
          "semester":semester,
          "orang_tua":orang_tua
        },
        success:function (response) {
          if (response.sukses === true) {
            $("#modalSaya").modal("toggle");
            Swal.fire("Data Siswa telah Ditambahkan!");
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
    var id_siswa = $(this).data("id_siswa");
    var nama = $("#nama_siswa").val();
    var nisn = $("#nisn").val();
    var alamat = $("#alamat").val();
    var kelurahan = $("#kelurahan").val();
    var kecamatan = $("#kecamatan").val();
    var kota = $("#kota").val();
    var provinsi = $("#provinsi").val();
    var tempat_lahir = $("#tempat_lahir").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var agama = $("#listAgama").val();
    var semester = $("#listSemester").val();
    var nik_ayah = $("#nik_ayah").val();
    var nik_ibu = $("#nik_ibu").val();
    const data = [nama,nisn,alamat,kelurahan,kecamatan,provinsi,kota,
    tempat_lahir,tanggal_lahir,agama,semester];
    const pesan = ["Nama","NISN","Alamat","Kelurahan","Kecamatan","Provinsi",
    "Kota","Tempat Lahir","Tanggal Lahir","Agama","Semester"];
    var valid = true;
    if (id_siswa == "") {
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
        url : "<?php echo site_url("master/siswa/edit-siswa") ?>",
        type : "POST",
        data : {
          "id_siswa" : id_siswa,
          "nama" : nama,
          "nisn": nisn,
          "alamat":alamat,
          "kelurahan":kelurahan,
          "kecamatan":kecamatan,
          "kota" : kota,
          "provinsi":provinsi,
          "tempat_lahir":tempat_lahir,
          "tanggal_lahir":tanggal_lahir,
          "agama":agama,
          "semester":semester,
          "nik_ayah":nik_ayah,
          "nik_ibu":nik_ibu
        },
        success:function (response) {
          if (response.sukses === true) {
            $("#modalSaya").modal("toggle");
            Swal.fire("Data Siswa berhasil Diperbarui!");
            reload_table();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnDelete",function () {
    var id_siswa = $(this).data("id_siswa");
    if (id_siswa == null) {
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
            url : "<?php echo site_url("master/siswa/hapus-siswa") ?>",
            type : "POST",
            data : {"id_siswa" : id_siswa },
            success : function (response) {
              if (response.sukses === true) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Data Siswa berhasil dihapus!",
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
