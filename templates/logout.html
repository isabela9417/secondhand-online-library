<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['password1']);
    $user_type = $_POST['user_type'];

    // Hash passwords securely
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if user already exists
    $select_user = mysqli_query($conn, "SELECT * FROM `students` WHERE email = '$email'") or die(mysqli_error($conn));

    if(mysqli_num_rows($select_user) > 0) {
        $message[] = 'User already exists!';
    } else {
        if($password != $cpassword) {
            $message[] = 'Passwords do not match!';
        } else {
            // Insert new user into database
            $insert_query = "INSERT INTO `students` (name, email, password, user_type) VALUES ('$name', '$email', '$hashed_password', '$user_type')";
            mysqli_query($conn, $insert_query) or die(mysqli_error($conn));
            $message[] = 'Registered Successfully!';
        }
    }
}
?>
