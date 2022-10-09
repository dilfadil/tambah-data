<?php
include('koneksi.php');

?>

<!DOCTYPE html>
<html>

<head>
  <title>DATA MAHASISWA</title>
  <style type="text/css">
    * {
      font-family: "comic";
      background-color: grey;
    }

    h1 {
      text-transform: uppercase;
      color: white;
      background-color: midnightblue;
    }

    table {
      border: solid 1px midnightblue;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 15px auto 15px auto;
    }

    table thead th {
      background-color: midnightblue;
      border: solid 2px white;
      color: white;
      padding: 10px;
      text-align: center;
      text-decoration: none;
    }

    table tbody td {
      background-color: midnightblue;
      border: solid 2px white;
      color: white;
      padding: 10px;
    }

    a {
      background-color: white;
      color: midnightblue;
      padding: 4px;
      text-decoration: none;
      font-size: 12px;
    }
  </style>
</head>

<body>
  <center>
    <h1>Data Mahasiswa</h1>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>E-Mmail</th>
          <th>Jurusan</th>
          <th>Fakultas</th>
          <th>Gambar</th>
          <th>Action </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM data_mhs ORDER BY nim ASC";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
          die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
        }
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['jurusan']; ?></td>
            <td><?php echo $row['fakultas']; ?></td>
            <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
            <td>
              <a href="edit.php?nim=<?php echo $row['nim']; ?>">Edit</a>

              <a href="proses_hapus.php?nim=<?php echo $row['nim']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php
          $no++;
        }
        ?>

      </tbody>
    </table>
    <center>
      <a href="tambah.php">+ Tambah Data Mahasiswa</a>
      <center>
</body>

</html>