
<?php
$mahasiswa = $mahasiswa ?? [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>

    <h2>Edit Mahasiswa</h2>

    <form action="index.php?page=mahasiswa&action=update"
          method="POST">

        <input type="hidden"
               name="id"
               value="<?= htmlspecialchars((string) ($mahasiswa['id'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">

        <label for="nim">NIM</label><br>
        <input type="text"
               id="nim"
               name="nim"
               value="<?= htmlspecialchars($mahasiswa['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
               required>
        <br><br>

        <label for="nama">Nama</label><br>
        <input type="text"
               id="nama"
               name="nama"
               value="<?= htmlspecialchars($mahasiswa['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
               required>
        <br><br>

        <label for="prodi">Program Studi</label><br>
        <input type="text"
               id="prodi"
               name="prodi"
               value="<?= htmlspecialchars($mahasiswa['prodi'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
               required>
        <br><br>

        <button type="submit">Update</button>

        <a href="index.php?page=mahasiswa&action=index">
            Kembali
        </a>

    </form>

</body>
</html>
