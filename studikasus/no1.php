<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <form method="post" class="form-group">
        <label for="teks">Masukkan teks:</label><br>
        <input type="text" id="teks" name="teks" class="form-control mb-3" required>
        <input type="submit" value="input" class="btn btn-primary">
    </form>

    <?php
    if (isset($_POST['teks'])) { // Cek apakah form sudah disubmit

        $teks = $_POST['teks']; // Ambil input teks dari form
        
        $karakterdicari = 'a'; // Karakter yang akan dicari
        
        // Proses pencarian karakter yang ditentukan
        $kata = substr_count($teks, $karakterdicari);
        echo "Karakter '" . $karakterdicari . "' dalam kalimat muncul sebanyak " . $kata . " kali.";
    }
    ?>
</div>
</body>
</html>
