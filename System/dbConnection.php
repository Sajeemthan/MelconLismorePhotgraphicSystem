<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "photographic";

// Create connection
$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $stmt = $conn->prepare("INSERT INTO upload (title, description, image) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("sss", $title, $description, $file);

    if ($stmt->execute()) {
        if (move_uploaded_file($tmp_name, $file)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Failed to insert record: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
