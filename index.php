<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
          crossorigin="anonymous">
    <title>Data Mahasiswa</title>
  </head>

  <body>
      <div class="section1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Mahasiswa</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <li><a class="nav-link active" aria-curretn="page" href="create.php">Add Mahasiswa</a></li>
                  <li><a class="nav-link" href="#">Features</a></li>
                  <li><a class="nav-link" href="#">Pricing</a></li>
                  <li><a class="nav-link" href="#">About</a></li>
                </ul>
            </div>
          </div>
        </nav>
      </div>

      <div class="container data-mahasiswa mt-5">
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="store.php" name="form">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!--Input nama-->
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" required>
                  </div>
                  <!--Input nim-->
                  <div class="mb-3">
                    <label for="NIM" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM Mahasiswa" name="nim" required>
                  </div>
                  <!--Input alamat-->
                  <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <textarea type="texxt" class="form-control" id="Alamat" placeholder="Masukkan Alamat Mahasiswa" name="alamat" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" values="SIMPAN">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Akhir Modal-->
          <table class="table table-striped" id="tabelMahasiswa">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>

          <tbody>
            <?php
              include 'config.php';
              $no = 1;
              $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");

              while($data = mysqli_fetch_array($mahasiswa)){
              ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['nim']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda Yakin Akan Menghapus Data Mahasiswa Ini ?')">HAPUS</a>
                  </td>
                </tr>
              <?php
              }
              ?>
          </tbody>
          </table>
        </div>
      </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
          crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabelMahasiswa').DataTable();
    } );
  </script>
</html>