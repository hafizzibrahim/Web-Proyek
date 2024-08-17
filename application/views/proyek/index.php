<!DOCTYPE html>
<html>
<head>
    <title>Daftar Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
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
    <a href="<?php echo site_url('dashboard'); ?>" >
        <i class="fas fa-arrow-left"></i> 
    </a>
    <h1>Daftar Proyek</h1>
    <a href="<?php echo site_url('proyek/create'); ?>">Tambah Proyek</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Proyek</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($proyek as $p): ?>
        <tr>
            <td><?php echo $p['id']; ?></td>
            <td><?php echo $p['namaProyek']; ?></td>
            <td>
                <a href="<?php echo site_url('proyek/edit/' . $p['id']); ?>">Edit</a>
                <a href="<?php echo site_url('proyek/delete/' . $p['id']); ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>