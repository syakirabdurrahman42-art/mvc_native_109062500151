
<?php
$mhs = $mhs ?? [];
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

    <form action="index.php?controller=mahasiswa&action=update"
          method="POST">

        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim"
               value="<?= htmlspecialchars($mhs['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
               readonly>
        <br><br>

        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama"
               value="<?= htmlspecialchars($mhs['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
               required>
        <br><br>

        <label for="program_studi">Program Studi</label><br>
        <input type="text" id="program_studi"
               name="program_studi"
               value="<?= htmlspecialchars($mhs['program_studi'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
               required>
        <br><br>

        <button type="submit">Update</button>

        <a href="index.php?controller=mahasiswa&action=index">
            Kembali
        </a>

    </form>

</body>
</html>
