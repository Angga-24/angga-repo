<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengguna</title>
</head>
<body>
    <h2>Form Siswa</h2>
    <form action="data.php" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="nisn">NISN:</label><br>
        <input type="text" id="nisn" name="nisn" required><br><br>
        
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>
