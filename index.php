<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIPERA - Sistem Informasi Penjualan Ternak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .header-banner {
            background: url('jpg/torajaland.jpg') center center/cover no-repeat;
            height: 300px;
            position: relative;
            border: 3px solid #007BFF;
            border-radius: 10px;
        }
        .header-overlay {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 30px;
            border-radius: 10px;
            text-align: center;
        }
        .header-overlay h2 {
            color: green;
            font-weight: bold;
        }
        .animal-card img {
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
        }
        .frame-box {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body class="p-4">

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5><button class="btn btn-outline-dark btn-sm">Dashboard sebelum masuk</button></h5>
    </div>

    <!-- Header dengan background image -->
    <div class="header-banner mb-4">
        <div class="header-overlay">
            <h2>SIPERA</h2>
            <p>Sistem Informasi Penjualan Ternak</p>
            <a href="/sipera/register.php" class="btn btn-success me-2">Daftar</a>
            <a href="/sipera/login.php" class="btn btn-light border">Login</a>
        </div>
    </div>

    <!-- Jenis Ternak -->
    <h4 class="text-center">Jenis Hewan Ternak Kami</h4>
    <p class="text-center text-muted mb-4">Temukan berbagai jenis hewan ternak berkualitas</p>

    <div class="row text-center">
        <div class="col-md-3 mb-3 animal-card">
            <img src="jpg/kerbau.jpg" class="img-fluid" alt="Kerbau">
            <h6 class="mt-2">Kerbau</h6>
        </div>
        <div class="col-md-3 mb-3 animal-card">
            <img src="jpg/Babi.jpg" class="img-fluid" alt="Babi">
            <h6 class="mt-2">Babi</h6>
        </div>
        <div class="col-md-3 mb-3 animal-card">
            <img src="jpg/kambing.jpg" class="img-fluid" alt="Kambing">
            <h6 class="mt-2">Kambing</h6>
        </div>
        <div class="col-md-3 mb-3 animal-card">
            <img src="jpg/ayam.jpg" class="img-fluid" alt="Ayam">
            <h6 class="mt-2">Ayam</h6>
        </div>
    </div>

    <!-- Frame Informasi -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="frame-box">
                <h6 class="text-muted"></h6>
                <div class="alert alert-success fw-bold">Selamat Datang di SIPERA</div>
                <p>
                    Sistem Informasi Penjualan Ternak (SIPERA) adalah platform yang memudahkan peternak untuk memasarkan hewan ternak mereka dan memudahkan pembeli untuk menemukan ternak berkualitas.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="frame-box">
                <h6 class="text-muted"></h6>
                <div class="alert alert-success fw-bold">Fitur SIPERA</div>
                <ul class="list-unstyled">
                    <li>🔍 Pencarian Ternak dengan Filter</li>
                    <li>💰 Sistem Pembayaran DANA & COD</li>
                    <li>📅 Jadwal Kunjungan</li>
                    <li>👨‍⚕️ Konsultasi dengan Dokter Hewan</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
