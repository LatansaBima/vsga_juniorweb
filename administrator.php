<!doctype html>
<html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Administrator Page</title>

    </head>
    <body>
    <div class="container">
        <a href="login.php"> Logout </a>
        <div class="text-bg-dark p-3"><h2 class="fs-1">List Berita</h2>
        <table border="1" class="table table-dark table-striped">
            <tr><th>NO</th>
                <th>Judul Berita</th>
                <th>Deskripsi Berita</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        <?php
        include 'koneksi.php';
        $berita = mysqli_query($koneksi, "SELECT * from berita_acara");
        $no=1;
        foreach ($berita as $row){
            echo "<tr>
                    <td>$no</td>
                    <td>".$row['judul_berita']."</td>
                    <td>".$row['deskripsi_berita']."</td>
                    <td> <img src='img/".$row['img']."' style='width: 150px';></td>
                    <td><a href='form-edit.php?id_berita=$row[id_berita]'>Edit</a>
                        <a href='delete.php?id_berita=$row[id_berita]'>Delete</a>
                    </td>
                </tr>";
                $no++;
        }
        ?>
        </table>
    </div>
    <form method="post" action="simpan.php">
        <div class="container p-2">
            <h2 class="fs-1"> Form Tambah Berita </h2><br>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Kegiatan</label>
                <input type="text" class="form-control" id="judul_berita" name="judul_berita">
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
                <textarea name="deskripsi_berita" id="deskripsi_berita" cols="30" rows="7"></textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Gambar Kegiatan</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <style>
        .container{
            height: 10px;
            padding: 20px;
        }
    </style>

    </body>
    </html>