<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
        require_once "menu.php";
    ?>

    <div class="container-fluid mt-03">
        <h3>Input Tahun Angkatan</h3>
        <form action="simpan-insert-angkatan.php" method="post">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="tahun" placeholder="input tahun" name="tahun">
                <label for="tahun">Tahun</label>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>