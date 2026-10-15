
<?php
$mahasiswa = $mahasiswa ?? [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>

    <a href="index.php?page=mahasiswa&action=create">
        Tambah Data
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= htmlspecialchars($mhs['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>

                    <td><?= htmlspecialchars($mhs['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>

                    <td><?= htmlspecialchars($mhs['program_studi'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>

                    <td>
                        <a href="index.php?page=mahasiswa&action=edit&nim=<?= urlencode($mhs['nim'] ?? '') ?>">
                            Edit
                        </a>

                        <form action="index.php?page=mahasiswa&action=delete"
                              method="POST"
                              style="display:inline;"
                              onsubmit="return confirm('Yakin ingin menghapus data ini?');">

                            <input type="hidden"
                                   name="nim"
                                   value="<?= htmlspecialchars($mhs['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if (empty($mahasiswa)): ?>
                <tr>
                    <td colspan="4">Belum ada data mahasiswa.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
