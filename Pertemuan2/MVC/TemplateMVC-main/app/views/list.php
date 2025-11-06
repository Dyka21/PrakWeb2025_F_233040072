<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
<div class="container">
    <h1>Daftar Pengguna</h1>

    <a href="<?= BASEURL; ?>/user/create" class="btn">Tambah Data User</a>
    <br><br>

    <table class="user-table">
        
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($data['users'] as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']); ?></td>
                <td><?= htmlspecialchars($user['email']); ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" class="btn-small">Detail</a>
                    <a href="<?= BASEURL; ?>/user/edit/<?= $user['id']; ?>" class="btn-small">Edit</a>
                    <a href="<?= BASEURL; ?>/user/destroy/<?= $user['id']; ?>" 
                       class="btn-small" onclick="return confirm('Yakin mau hapus?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
</body>
</html>