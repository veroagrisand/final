<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route["default_controller"] = "Admin";
$route["404_override"] = "";
$route["translate_uri_dashes"] = FALSE;

$route["admin/login"] = "Admin/admin_login";
$route["master/guru"] = "master/Guru";
$route["master/guru/form-tambah"] = "master/Guru/formTambah";
$route["master/guru/form-edit"] = "master/Guru/formEdit";
$route["master/guru/tambah-guru"] = "master/Guru/tambahGuru";
$route["master/guru/edit-guru"] = "master/Guru/editGuru";
$route["master/guru/hapus-guru"] = "master/Guru/hapusGuru";

$route["master/siswa"] = "master/Siswa";
$route["master/list-siswa/(:num)"] = "master/Siswa/listSiswa/$1";
$route["master/siswa/form-tambah"] = "master/Siswa/formTambah";
$route["master/siswa/form-edit"] = "master/Siswa/formEdit";
$route["master/siswa/tambah-siswa"] = "master/Siswa/tambahSiswa";
$route["master/siswa/edit-siswa"] = "master/Siswa/editSiswa";
$route["master/siswa/hapus-siswa"] = "master/Siswa/hapusSiswa";

$route["master/kelas"] = "master/Kelas";
$route["master/kelas/form-tambah"] = "master/Kelas/formTambah";
$route["master/kelas/form-edit"] = "master/Kelas/formEdit";
$route["master/kelas/tambah-kelas"] = "master/Kelas/tambahKelas";
$route["master/kelas/edit-kelas"] = "master/Kelas/editKelas";
$route["master/kelas/hapus-kelas"] = "master/Kelas/hapusKelas";

$route["master/mata-pelajaran"] = "master/Mapel";
$route["master/mata-pelajaran/(:any)/(:any)"] = "master/Mapel/listMapel/$1/$2";
$route["master/mata-pelajaran/form-tambah"] = "master/Mapel/formTambah";
$route["master/mata-pelajaran/form-edit"] = "master/Mapel/formEdit";
$route["master/mata-pelajaran/tambah-data"] = "master/Mapel/tambahMapel";
$route["master/mata-pelajaran/edit-data"] = "master/Mapel/editMapel";
$route["master/mata-pelajaran/hapus-data"] = "master/Mapel/hapusMapel";

$route["master/orang-tua"] = "master/Ortu";
$route["master/orang-tua/form-tambah"] = "master/Ortu/formTambah";
$route["master/orang-tua/form-edit"] = "master/Ortu/formEdit";
$route["master/orang-tua/tambah-data"] = "master/Ortu/tambahOrtu";
$route["master/orang-tua/edit-data"] = "master/Ortu/editOrtu";
$route["master/orang-tua/hapus-data"] = "master/Ortu/hapusOrtu";
