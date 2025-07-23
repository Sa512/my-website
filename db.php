<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_admin_db"; // ← اسم القاعدة الصحيح

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ فشل الاتصال: " . $conn->connect_error);
}
?>
