<?php

include_once "/opt/lampp/htdocs/src/php/connection.php";


if (isset($_POST['contact-name'], $_POST['contact-email'], $_POST['msg'])) {
    // Retrieve the values from the POST request and escape them
    $name = mysqli_real_escape_string($connection, $_POST['contact-name']);
    $email = mysqli_real_escape_string($connection, $_POST['contact-email']);
    $message = mysqli_real_escape_string($connection, $_POST['msg']);

    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO contact (name, email, message, date) VALUES (?, ?, ?, ?)";
    $statement = $connection->prepare($query);

    $statement->bind_param("ssss", $name, $email, $message, $date);
    $exe = $statement->execute();

    // Check if the execution was successful
    if ($exe) {

        $to = 'parsabe99@outlook.com';
        $subject = "Message Notification";


        // Email message with HTML formatting
        $msg = 'You got a new message';

        // Send email
        $mailer = mail($to, $subject, $msg);

        if ($mailer) {
            echo 'success';
        } else {
            echo 'Something went wrong';
        }
    } else {
        echo "Failed to insert data.";
    }
} else {
    echo 'Something is blocked.';
}
