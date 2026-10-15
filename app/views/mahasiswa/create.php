
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>

    <h2>Tambah Mahasiswa</h2>

    <form action="index.php?page=mahasiswa&action=store"
          method="POST">

        <label for="nim">NIM</label><br>
        <input type="text"
               id="nim"
               name="nim"
               required>
        <br><br>

        <label for="nama">Nama</label><br>
        <input type="text"
               id="nama"
               name="nama"
               required>
        <br><br>

        <label for="program_studi">Program Studi</label><br>
        <input type="text"
               id="program_studi"
               name="program_studi"
               required>
        <br><br>

        <button type="submit">Simpan</button>

        <a href="index.php?page=mahasiswa&action=index">
            Kembali
        </a>

    </form>

</body>
</html>
