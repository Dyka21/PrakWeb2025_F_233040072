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

    <h1>Selamat datang, <?= htmlspecialchars($data['user']['name']); ?></h1>
    <p>Email : <?= htmlspecialchars($data['user']['email']); ?></p>
    
    <a href="<?= BASEURL; ?>/user" class="btn">Kembali ke Daftar</a>

</div>
</body>
</html>