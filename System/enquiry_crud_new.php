<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_name = $_POST['Event Name'];
    $event_date = $_POST['date'];
    $location = $_POST['location'];
    $message = "Enquiry from $name";

    $sql = "INSERT INTO Enquiries (user_id, event_type, event_date, location, message, status) 
            VALUES (NULL, '$event_name', '$event_date', '$location', '$message', 'Pending')";

    if ($conn->query($sql) === TRUE) {
        echo "Enquiry submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
