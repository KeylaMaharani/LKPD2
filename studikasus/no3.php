<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container">
        <form class="form d-flex justify-content-center mt-5 flex-column w-50 p-3 border rounded bg-white shadow" action="" method="POST">
            <div class="mb-3">
                <label for="angka1" class="form-label">Masukkan Angka Pertama</label>
                <input type="number" class="form-control" id="angka1" name="angka1" required>
            </div>
            <div class="mb-3">
                <label for="angka2" class="form-label">Masukkan Angka Kedua</label>
                <input type="number" class="form-control" id="angka2" name="angka2" required>
            </div>
            <div class="mb-3">
                <label for="operator" class="form-label">Operator:</label>
                <select class="form-select" name="operator" id="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="proses">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        $angka1 = isset($_POST['angka1']) ? $_POST['angka1'] : 0;
        $angka2 = isset($_POST['angka2']) ? $_POST['angka2'] : 0;
        $operator = isset($_POST['operator']) ? $_POST['operator'] : 0;
            echo "<div class='container mt-3'><div class='alert alert-info'>Hasil dari $angka1 $operator $angka2 = ";
        if (is_numeric($angka1) && is_numeric($angka2)) {
            switch ($operator) {
                case 'tambah':
                    echo $angka1 + $angka2;
                    break;
                case 'kurang':
                    echo $angka1 - $angka2;
                    break;
                case 'kali':
                    echo $angka1 * $angka2;
                    break;
                case 'bagi':
                    echo $angka1 / $angka2;
                    break;
                default:
                    echo 'Operator tidak ditemukan';
            }
        } else {
            echo 'Input tidak valid';
        }
        echo "</div></div>";
    }
?>
