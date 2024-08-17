<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s; /* Tambahkan efek transisi */
        }
        .card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }
        .card i {
            font-size: 50px;
            color: #28a745; /* Ubah warna ikon */
        }
        .card h3 {
            margin: 10px 0;
        }
        .card p {
            color: #666;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="grid">
            <div class="card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Jumlah Lokasi</h3>
                <p><?php echo $jumlah_lokasi; ?></p>
                <a class="link" href="<?php echo site_url('lokasi'); ?>">Lihat Lokasi</a>
            </div>
            <div class="card">
                <i class="fas fa-project-diagram"></i>
                <h3>Jumlah Proyek</h3>
                <p><?php echo $jumlah_proyek; ?></p>
                <a class="link" href="<?php echo site_url('proyek'); ?>">Lihat Proyek</a>
            </div>
        </div>
    </div>
</body>
</html>