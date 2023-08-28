<?php
    include 'koneksi.php';
    $id         = $_GET['id_berita'];
    $berita     = mysqli_query($koneksi, "SELECT * from berita_acara where id_berita='$id'");
    $row        = mysqli_fetch_array($berita);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Editing Page</title>

    </head>
    <body>
    <div class="container">
        <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $row['id_berita'];?>" name="id_berita">
            <div class="container p-2">
                <a href="administrator.php">Kembali</a>
                <h2 class="fs-1"> Form Edit Berita </h2><br>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Kegiatan</label>
                    <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="<?php echo $row['judul_berita'];?>">
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
                    <textarea id="deskripsi_berita" name="deskripsi_berita" cols="30" rows="7">
                        <?php echo $row['deskripsi_berita'];?>
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Gambar Kegiatan</label>
                    <input type="file" class="form-control" id="img" name="img" value="<?php echo $row['img'];?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    <style>
            .container{
                height: 10px;
	            padding: 20px;
            }
    </style>

    </body>
</html>