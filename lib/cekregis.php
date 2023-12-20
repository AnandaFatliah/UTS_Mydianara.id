

<?php
include "..config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama'];
    $username = $_POST['user'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO verif (nama_lengkap, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama_lengkap, $username, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Signup successful";
    } else {
        // Display more detailed error information
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>

