<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $enquiry = $_POST["enquiry"];

    $to = "cyprianmitheme2000@gmail.com"; // Enter your email address here
    $subject = "New Enquiry from $fullname";
    $message = "Full Name: $fullname\n";
    $message .= "Email: $email\n";
    $message .= "Enquiry:\n$enquiry";

    mail($to, $subject, $message);
    header("Location: thank_you.html");
    exit;
}
?> 
