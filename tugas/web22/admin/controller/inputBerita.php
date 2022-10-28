<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid mt-03">
        <h3>Input Berita</h3>
        <form action="save-inputBerita.php" method="post">
            <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukan judul.." name="judul">
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" placeholder="Masukan deskripsi.."
                    name="deskripsi">
            </div>

            <div class="mb-3">
                <label for="tgl">Tanggal</label><br>
                <input type="datetime-local" id="tgl" name="tgl">
            </div>

            <div class="mb-3">
                <label for="gambar">Gambar</label><br>
                <input type="file" class="form-control" id="gambar" name="gambar"><br>

            </div>

            <div class="mb-3">
                <label for="isi">Isi Berita</label>
                <textarea class="form-control" id="isi" name="isi" rows="3"
                    placeholder="Masukan isi berita.."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>