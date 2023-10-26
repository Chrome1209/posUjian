<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="gambar/logo tkj.png" type="image/x-icon">
    <title>Aplikasi POS (Point Of Sales)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <center><h1>Aplikasi POS</h1>
        <h3>Tabel Supplier dan Tabel Penjualan</h3></center>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" <?= ((isset($_GET['m']) and $_GET['m'] == 'home') ? 'active' : '')?> aria-current="page" href="?m=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?= ((isset($_GET['m']) and $_GET['m'] == 'supplier') ? 'active' : '')?> href="?m=supplier">Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?= ((isset($_GET['m']) and $_GET['m'] == 'penjualan') ? 'active' : '')?> href="?m=penjualan">penjualan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="konten container">
        <?php
        if (isset($_GET['m'])) {
            $m = $_GET['m'];
            switch ($m) {
                case 'home':
                    include 'home.php';
                    break;
                case 'supplier':
                    include 'supplier/index.php';
                    break;
                case 'penjualan':
                    include 'penjualan/index.php';
                    break;
                 
                default:
                    include 'home.php';
                    break;
            }
        } else {
            include 'home.php';
        }
        ?>
    </div>

    <footer class="bg-info">
        <center>&copy; Ujian Akhir WebDev <a href="https://muhidin.web.id" target="_blank" rel="noopener noreferrer">Kelas TKJ</a><br>
        TKJ Angkatan ke-XXIX - <a href="https://rumahgemilang.com" target="_blank" rel="noopener noreferrer">RGI</a></center>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>