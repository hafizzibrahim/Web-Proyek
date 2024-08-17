<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lokasi</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        a { text-decoration: none; color: #007BFF; }
        a:hover { text-decoration: underline; }
        h1 { color: #4CAF50; }
        label { font-weight: bold; }
        input[type="text"], input[type="submit"] { 
            padding: 10px; 
            margin-top: 5px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
        }
        input[type="submit"] { 
            background-color: #4CAF50; 
            color: white; 
            cursor: pointer; 
        }
        input[type="submit"]:hover { 
            background-color: #45a049; 
        }
        /* Menambahkan gaya untuk sejajarkan kolom input */
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: inline-block;
            width: 120px; /* Atur lebar label */
        }
        .form-group input[type="text"] {
            width: calc(100% - 160px); /* Menghitung lebar input */
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <a href="<?php echo site_url('lokasi/index'); ?>" >
        <i class="fas fa-arrow-left"></i> 
    </a>
    <h1>Tambah Lokasi</h1>
    <form action="<?php echo site_url('lokasi/store'); ?>" method="post">
        <div class="form-group">
            <label>Nama Lokasi:</label>
            <input type="text" name="namaLokasi" required>
        </div>
        
        <div class="form-group">
            <label>Negara:</label>
            <input type="text" name="negara" required>
        </div>
        
        <div class="form-group">
            <label>Provinsi:</label>
            <input type="text" name="provinsi" required>
        </div>
        
        <div class="form-group">
            <label>Kota:</label>
            <input type="text" name="kota" required>
        </div>
        
        <input type="submit" value="Simpan">
    </form>
</body>
</html>