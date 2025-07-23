<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $work_id = $_POST['work_id'];
    $secret_code = $_POST['secret_code'];

    $sql = "INSERT INTO admins (work_id, secret_code) VALUES ('$work_id', '$secret_code')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ تم تسجيل المشرف بنجاح.";
    } else {
        echo "❌ خطأ: " . $conn->error;
    }

    $conn->close();
}
?>
