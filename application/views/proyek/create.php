<!DOCTYPE html>
<html>
<head>
    <title>Tambah Proyek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .form-group input[type="text"], 
        .form-group input[type="datetime-local"],
        .form-group textarea {
            width: calc(100% - 160px); /* Menghitung lebar input */
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <a href="<?php echo site_url('proyek/index'); ?>" >
        <i class="fas fa-arrow-left"></i> 
    </a>
    <h1>Tambah Proyek</h1>
    <form action="<?php echo site_url('proyek/store'); ?>" method="post">
        <div class="form-group">
            <label>Nama Proyek:</label>
            <input type="text" name="namaProyek" required>
        </div>
        <div class="form-group">
            <label>Client:</label>
            <input type="text" name="client" required>
        </div>
        <div class="form-group">
            <label>Tanggal Mulai:</label>
            <input type="datetime-local" name="tglMulai" required>
        </div>
        <div class="form-group">
            <label>Tanggal Selesai:</label>
            <input type="datetime-local" name="tglSelesai" required>
        </div>
        <div class="form-group">
            <label>Pimpinan Proyek:</label>
            <input type="text" name="pimpinanProyek" required>
        </div>
        <div class="form-group">
            <label>Keterangan:</label>
            <textarea name="keterangan" required></textarea>
        </div>
        <div class="form-group">
            <label>Lokasi:</label>
            <?php if (isset($lokasi) && !empty($lokasi)): ?>
                <select name="lokasiList[]" multiple required>
                    <?php foreach ($lokasi as $l): ?>
                        <option value="<?php echo $l['id']; ?>"><?php echo $l['namaLokasi']; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php else: ?>
                <p>Tidak ada lokasi tersedia.</p>
            <?php endif; ?>
        </div>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>