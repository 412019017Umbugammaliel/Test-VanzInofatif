<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesan Kontak</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Data Pesan Kontak</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Waktu Terkirim</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include file db.php untuk membuat koneksi ke database
                include 'db.php';

                // Query untuk mengambil data pesan kontak
                $sql = "SELECT * FROM pesan_kontak";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["pesan"] . "</td>";
                        echo "<td>" . $row["waktu_terkirim"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data pesan kontak.</td></tr>";
                }

                // Tutup koneksi database
                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="case3.php" class="btn btn-primary">Kembali</a>
    </div>
</body>

</html>