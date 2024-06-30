<script type="text/javascript">
function reload_table() {
  var currentUrl = window.location.href;
  var tabel = $("#tabelGuru").DataTable();
  $.ajax({
    url : currentUrl,
    type : "GET",
    dataType : "html",
    success:function (data) {
      var reloadData = $(data).find("#tabelGuru tbody").html();
      tabel.clear().draw();
      $("#tabelGuru tbody").html(reloadData);
      tabel.rows.add($("#tabelGuru tbody tr")).draw();
    }
  });
}
$(document).ready(function() {
  $("#tabelGuru").DataTable();
  jQuery(document).on("click","#formTambah",function () {
    $.ajax({
      url : "<?php echo site_url('master/guru/form-tambah') ?>",
      type : "POST",
      data : { },
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#formEdit",function () {
    var id_guru = $(this).data("id_guru");
    $.ajax({
      url : "<?php echo site_url('master/guru/form-edit') ?>",
      type : "POST",
      data : {"id_guru" : id_guru},
      success : function (response) {
        $("#modalSaya").html(response);
        $("#modalSaya").modal("show");
      }
    });
  });
  jQuery(document).on("click","#btnTambah",function (e) {
    e.preventDefault();
    var nama = $("#nama_guru").val();
    var gelar_depan = $("#gelar_depan").val();
    var gelar_belakang = $("#gelar_belakang").val();
    var nuptk = $("#nuptk").val();
    var alamat = $("#alamat").val();
    var kelurahan = $("#kelurahan").val();
    var kecamatan = $("#kecamatan").val();
    var kota = $("#kota").val();
    var provinsi = $("#provinsi").val();
    var tempat_lahir = $("#tempat_lahir").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var agama = $("#listAgama").val();
    var gender = null;
    if ($("#radioPria").is(":checked")) {
      gender = "Pria";
    }else if ($("#radioWanita").is(":checked")) {
      gender = "Wanita";
    }
    const data = [nama,nuptk,alamat,kelurahan,kecamatan,provinsi,kota,
    tempat_lahir,tanggal_lahir,agama,gender];
    const pesan = ["Nama","NUPTK","Alamat","Kelurahan","Kecamatan","Provinsi",
    "Kota","Tempat Lahir","Tanggal Lahir","Agama","Gender"];
    var valid = true;
    for (var i = 0; i < data.length; i++) {
      if (data[i] == "") {
        alert("Ketikkan " + pesan[i] + " dari Guru!");
        valid = false;
        break;
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/guru/tambah-guru") ?>",
        type : "POST",
        data : {
          "nama" : nama,
          "gelar_depan" : gelar_depan,
          "gelar_belakang" : gelar_belakang,
          "nuptk": nuptk,
          "alamat":alamat,
          "kelurahan":kelurahan,
          "kecamatan":kecamatan,
          "kota" : kota,
          "provinsi":provinsi,
          "tempat_lahir":tempat_lahir,
          "tanggal_lahir":tanggal_lahir,
          "agama":agama,
          "gender":gender
        },
        success:function (response) {
          if (response.sukses === true) {
            Swal.fire("Data Guru telah Ditambahkan!");
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
    var id_guru = $(this).data("id_guru");
    var nama = $("#nama_guru").val();
    var gelar_depan = $("#gelar_depan").val();
    var gelar_belakang = $("#gelar_belakang").val();
    var nuptk = $("#nuptk").val();
    var alamat = $("#alamat").val();
    var kelurahan = $("#kelurahan").val();
    var kecamatan = $("#kecamatan").val();
    var kota = $("#kota").val();
    var provinsi = $("#provinsi").val();
    var tempat_lahir = $("#tempat_lahir").val();
    var tanggal_lahir = $("#tanggal_lahir").val();
    var agama = $("#listAgama").val();
    var gender = null;
    if ($("#radioPria").is(":checked")) {
      gender = "Pria";
    }else if ($("#radioWanita").is(":checked")) {
      gender = "Wanita";
    }
    const data = [nama,nuptk,alamat,kelurahan,kecamatan,provinsi,kota,
    tempat_lahir,tanggal_lahir,agama,gender];
    const pesan = ["Nama","NUPTK","Alamat","Kelurahan","Kecamatan","Provinsi",
    "Kota","Tempat Lahir","Tanggal Lahir","Agama","Gender"];
    var valid = true;
    if (id_guru == "") {
      valid = false;
      Swal.fire("Terjadi Kesalahan Sistem!");
    }else {
      for (var i = 0; i < data.length; i++) {
        if (data[i] == "") {
          alert("Ketikkan " + pesan[i] + " dari Guru!");
          valid = false;
          break;
        }
      }
    }
    if (valid) {
      $.ajax({
        url : "<?php echo site_url("master/guru/edit-guru") ?>",
        type : "POST",
        data : {
          "id_guru" : id_guru,
          "nama" : nama,
          "gelar_depan" : gelar_depan,
          "gelar_belakang" : gelar_belakang,
          "nuptk": nuptk,
          "alamat":alamat,
          "kelurahan":kelurahan,
          "kecamatan":kecamatan,
          "kota" : kota,
          "provinsi":provinsi,
          "tempat_lahir":tempat_lahir,
          "tanggal_lahir":tanggal_lahir,
          "agama":agama,
          "gender":gender
        },
        success:function (response) {
          if (response.sukses === true) {
            Swal.fire("Data Guru berhasil Diperbarui!");
            reload_table();
          }else {
            Swal.fire("Gagal,Terjadi Kesalahan Sistem!");
          }
        }
      });
    }
  });
  jQuery(document).on("click","#btnDelete",function () {
    var id_guru = $(this).data("id_guru");
    if (id_guru == null) {
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
            url : "<?php echo site_url("master/guru/hapus-guru") ?>",
            type : "POST",
            data : {"id_guru" : id_guru },
            success : function (response) {
              if (response.sukses === true) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Data Guru berhasil dihapus!",
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
