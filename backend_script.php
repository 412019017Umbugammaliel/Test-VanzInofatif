<?php
include 'db.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO pesan_kontak (nama, email, pesan) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Pesan error: " . $conn->error);
}

// Bind parameter ke pernyataan SQL
$stmt->bind_param("sss", $nama, $email, $pesan);

// Eksekusi pernyataan SQL
if ($stmt->execute() === TRUE) {
    echo "<h2>Pesan berhasil dikirim!</h2>";
    echo "<a href='case3.php'>Kembali</a>";
} else {
    echo "<h2>Error:</h2> " . $sql . "<br>" . $conn->error;
}

// Tutup prepared statement dan koneksi database
$stmt->close();
$conn->close();
?>