<?php
// Inisialisasi array untuk menyimpan data penjualan
$data_penjualan = [];

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // Simpan data ke dalam array
    $data_penjualan[] = [
        'produk' => $produk,
        'jumlah' => $jumlah,
        'harga' => $harga,
        'total' => $jumlah * $harga
    ];
}
?>

<!DOCTYPE html>
<html lang="id">
    <body style="background-color: aquamarine;"></body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pencatatan Data Penjualan</title>
    <link rel="stylesheet" href="style.css"> <!-- Jika ada CSS tambahan -->
</head>
<body>
    <h1>Sistem Pencatatan Data Penjualan</h1>

    <form method="POST" action="">
        <label for="produk">Nama Produk:</label>
        <select name="produk" id="produk" required>
            <option value="Produk beng-beng">Produk BENG-BENG</option>
            <option value="Produk chitato">Produk CHITATO</option>
            <option value="Produk j.co donuts">Produk J.CO DONUTS</option>
        </select><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required><br><br>

        <label for="harga">Harga per Unit:</label>
        <input type="number" name="harga" id="harga" required><br><br>

        <input type="submit" value="Simpan Data">
    </form>

    <h2>Data Penjualan</h2>
    <table border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
        <?php
        // Tampilkan data penjualan jika ada
        if (!empty($data_penjualan)) {
            foreach ($data_penjualan as $penjualan) {
                echo "<tr>
                        <td>{$penjualan['produk']}</td>
                        <td>{$penjualan['jumlah']}</td>
                        <td>{$penjualan['harga']}</td>
                        <td>{$penjualan['total']}</td>
                    </tr>";
            }
        }
        ?>
    </table>
</body>
</html>