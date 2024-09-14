<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asdas";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "UTF8")

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Verileri çek
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

echo "<h1>Admin Paneli</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Adı</th><th>E-posta</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 sonuç";
}

$conn->close();
?>
