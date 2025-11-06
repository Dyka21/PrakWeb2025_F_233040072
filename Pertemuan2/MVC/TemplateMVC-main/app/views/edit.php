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
    <h1>Ubah Data User</h1>
    
    <form action="<?= BASEURL; ?>/user/update" method="post">
        <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
        <ul>
            <li>
                <label for="name">Nama :</label>
                <input type="text" name="name" id="name" required 
                       value="<?= $data['user']['name']; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required
                       value="<?= $data['user']['email']; ?>">
            </li>
            <li>
                <button type="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</div>
</body>
</html>