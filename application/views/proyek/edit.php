<!DOCTYPE html>
<html>
<head>
    <title>Edit Proyek</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        h1 { color: #4CAF50; }
        label { font-weight: bold; }
        input[type="text"], input[type="datetime-local"], textarea { 
            padding: 10px; 
            margin-top: 5px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            width: calc(100% - 160px); /* Menghitung lebar input */
        }
        input[type="submit"] { 
            padding: 10px; 
            margin-top: 5px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            background-color: #4CAF50; 
            color: white; 
            cursor: pointer; 
        }
        input[type="submit"]:hover { 
            background-color: #45a049; 
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: inline-block;
            width: 120px; /* Atur lebar label */
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <a href="<?php echo site_url('proyek/index'); ?>" >
        <i class="fas fa-arrow-left"></i> 
    </a>
    <h1>Edit Proyek</h1>
    <form action="<?php echo site_url('proyek/update/' . $proyek['id']); ?>" method="post">
        <div class="form-group">
            <label>Nama Proyek:</label>
            <input type="text" name="namaProyek" value="<?php echo $proyek['namaProyek']; ?>" required>
        </div>
        <div class="form-group">
            <label>Client:</label>
            <input type="text" name="client" value="<?php echo $proyek['client']; ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Mulai:</label>
            <input type="datetime-local" name="tglMulai" value="<?php echo date('Y-m-d\TH:i', strtotime($proyek['tglMulai'])); ?>" required>
        </div>
        <div class="form-group">
            <label>Tanggal Selesai:</label>
            <input type="datetime-local" name="tglSelesai" value="<?php echo date('Y-m-d\TH:i', strtotime($proyek['tglSelesai'])); ?>" required>
        </div>
        <div class="form-group">
            <label>Pimpinan Proyek:</label>
            <input type="text" name="pimpinanProyek" value="<?php echo $proyek['pimpinanProyek']; ?>" required>
        </div>
        <div class="form-group">
            <label>Keterangan:</label>
            <textarea name="keterangan" required><?php echo $proyek['keterangan']; ?></textarea>
        </div>
        <input type="submit" value="Update">
    </form>
</body>
</html>