<?php
// Simple contact form handler
// Note: In production, you should add proper validation, sanitization, and use a mail library

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $privacy = isset($_POST['privacy']) ? true : false;

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        header('Location: kontakti.php?error=missing_fields');
        exit;
    }

    // Privacy policy validation
    if (!$privacy) {
        header('Location: kontakti.php?error=privacy_required');
        exit;
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: kontakti.php?error=invalid_email');
        exit;
    }

    // Prepare email (you should configure this with your hosting provider)
    $to = 'office@riolit.bg'; // Change this to your email
    $email_subject = "Ново съобщение от сайта";
    $email_body = "Име: $name\n";
    $email_body .= "Имейл: $email\n";
    $email_body .= "Телефон: $phone\n\n";
    $email_body .= "Съобщение:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email (uncomment when ready to use)
    // mail($to, $email_subject, $email_body, $headers);

    // Redirect with success message
    header('Location: kontakti.php?success=1');
    exit;
} else {
    header('Location: kontakti.php');
    exit;
}
?>
