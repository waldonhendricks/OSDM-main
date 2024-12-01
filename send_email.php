<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $program = $_POST['program'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Recipient email address
    $to = "School@langabaptist.org";
    
    // Subject of the email
    $subject = "New Program Registration from $name";

    // Body of the email
    $message = "
    You have received a new registration for the program:

    Program: $program
    Name: $name
    Phone: $phone
    Email: $email
    ";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for registering! Your information has been submitted.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your information.";
    }
} else {
    echo "Invalid request.";
}
?>
