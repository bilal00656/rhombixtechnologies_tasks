<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_messages (name, email, subject, message)
        VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {

    echo "<script>
            alert('Your response has been stored successfully!');
            window.location.href = 'index.html#contact';
          </script>";

} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>