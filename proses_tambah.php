<?php
include 'koneksi.php';

$nim   = $_POST['nim'];
$nama   = $_POST['nama'];
$email     = $_POST['email'];
$jurusan    = $_POST['jurusan'];
$fakultas    = $_POST['fakultas'];
$gambar = $_FILES['gambar']['name'];


if ($gambar != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar;
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
    $query = "INSERT INTO data_mhs (nim, nama, email, jurusan, fakultas, gambar) VALUES ('$nim', '$nama', '$email', '$jurusan', '$fakultas', '$nama_gambar_baru')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {

      echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
  } else {
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
  }
} else {
  $query = "INSERT INTO data_mhs (nim, nama, email, jurusan, fakultas, gambar) VALUES ('$nim', '$nama', '$email', '$jurusan', '$fakultas', null)";
  $result = mysqli_query($koneksi, $query);
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
  }
}
