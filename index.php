<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hero-section {
            background-image: url('assets/image/Le Motion Photo (1).jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            font-size: 2.5rem;
            color: #ffffff;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }
        .btn-hero {
            margin-top: 30px;
            background-color: #ffffff;
            border: none;
            font-weight: bold;
            padding: 10px 20px;
        }
        .btn-hero:hover {
            background-color: #ffffff;
        }

        /* About Section Styling */
        .about-section {
            padding: 50px;
            background-color: #f8f9fa;
            text-align: center;
        }
        .about-section h2 {
            color: #000000;
            margin-bottom: 20px;
        }
        .about-section p {
            color: #000000;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarNav">
                <div class="navbar-nav me-auto">
                    <a class="navbar-brand" href="index.php"></a>
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="tamu.php" class="nav-link">Tamu</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Selamat Datang Di Buku Tamu</h1>
            <a href="form.php" class="btn btn-primary btn-hero">Isi Buku Tamu</a>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kami menyediakan platform yang memungkinkan para tamu untuk menyampaikan pesan, kesan, dan informasi penting saat berkunjung. Di Buku Tamu ini, Anda dapat terhubung dengan kami dan meninggalkan jejak Anda dengan mudah dan praktis.</p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h4>Visi</h4>
                    <p>Membangun jaringan yang kuat melalui interaksi tamu dan tuan rumah.</p>
                </div>
                <div class="col-md-4">
                    <h4>Misi</h4>
                    <p>Menyediakan platform yang mudah diakses dan dapat digunakan oleh semua kalangan untuk berkomunikasi secara efektif.</p>
                </div>
                <div class="col-md-4">
                    <h4>Kontak Kami</h4>
                    <p>Email: info@bukutamu.com</p>
                    <p>Telepon: +62 123 456 7890</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
