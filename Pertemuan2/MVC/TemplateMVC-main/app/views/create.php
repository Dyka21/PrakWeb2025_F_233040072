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
    <h1>Tambah Data User</h1>
    
    <form action="<?= BASEURL; ?>/user/store" method="post">
        <ul>
            <li>
                <label for="name">Nama :</label>
                <input type="text" name="name" id="name" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <button type="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</div>
</body>
</html>