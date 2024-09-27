<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengguna</title>
</head>
<body>
    <h2>Hasil Volume Tabung</h2>
    <form action="volumeTabung.php" method="GET">
        <label for="r2">r2:</label><br>
        <input type="number" id="r2" name="r2" required><br><br>
        
        <label for="t">t:</label><br>
        <input type="number" id="t" name="t" required><br><br>
        
        <input type="submit" name="submit" value="HASIL">
    </form>
</body>