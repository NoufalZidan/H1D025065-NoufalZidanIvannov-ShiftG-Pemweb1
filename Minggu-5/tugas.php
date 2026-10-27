
<?php
$hasil = "";

if (isset($_POST['hitung'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    if ($angka1 === "" || $angka2 === "") {
        $hasil = "Masukkan kedua angka!";
    } else {
        $angka1 = (float) $angka1;
        $angka2 = (float) $angka2;

        switch ($operator) {
            case "+":
                $hasil = $angka1 + $angka2;
                break;
            case "-":
                $hasil = $angka1 - $angka2;
                break;
            case "*":
                $hasil = $angka1 * $angka2;
                break;
            case "/":
                $hasil = ($angka2 != 0)
                    ? $angka1 / $angka2
                    : "Tidak bisa dibagi nol!";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
</head>
<body>

    <h2>Kalkulator Sederhana</h2>

    <form method="POST">
        <input type="number" step="any"
               name="angka1" placeholder="Angka pertama"
               required>

        <br><br>

        <select name="operator">
            <option value="+">Penjumlahan (+)</option>
            <option value="-">Pengurangan (-)</option>
            <option value="*">Perkalian (*)</option>
            <option value="/">Pembagian (/)</option>
        </select>

        <br><br>

        <input type="number" step="any"
               name="angka2" placeholder="Angka kedua"
               required>

        <br><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if ($hasil !== ""): ?>
        <h3>Hasil: <?= htmlspecialchars((string) $hasil) ?></h3>
    <?php endif; ?>

</body>
</html>
