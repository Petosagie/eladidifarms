<?php
// ELADIDI contact form handler.
// IMPORTANT: Replace the address below with the company's monitored email address.
$recipient = 'info@eladidifarms.com';

function finish_page($title, $message, $success = false) {
    $safeTitle = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $safeMessage = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    $colour = $success ? '#d8ad58' : '#668d4b';
    echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>'.$safeTitle.' | ELADIDI</title><link rel="stylesheet" href="styles.css"></head><body style="background:#f6f5ef"><main style="min-height:100vh;display:grid;place-items:center;padding:24px"><section style="max-width:560px;background:white;padding:42px;border-top:5px solid '.$colour.'"><p style="letter-spacing:.15em;color:#668d4b;font-size:11px;font-weight:bold">ELADIDI INTEGRATED FARMS SERVICE LTD</p><h1 style="font:500 36px Georgia;color:#173f2a">'.$safeTitle.'</h1><p style="color:#68746a">'.$safeMessage.'</p><a class="button button-green" href="index.html#contact">Return to website →</a></section></main></body></html>';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html#contact');
    exit;
}
if (!empty($_POST['website'])) {
    finish_page('Thank you', 'Your enquiry has been received.', true);
}
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $subject === '' || $message === '') {
    finish_page('Please check your details', 'Please go back and complete all required fields using a valid email address.');
}
if (strlen($name) > 100 || strlen($email) > 150 || strlen($message) > 4000) {
    finish_page('Message too long', 'Please shorten your details and try again.');
}
if (strpos($recipient, 'REPLACE-WITH-YOUR-COMPANY-EMAIL') !== false || !filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
    finish_page('Website setup required', 'The enquiry form is not yet connected to the company email address. Please contact the website administrator.');
}
$cleanName = str_replace(array("\r", "\n"), ' ', $name);
$cleanSubject = str_replace(array("\r", "\n"), ' ', $subject);
$mailSubject = 'Website enquiry: ' . $cleanSubject;
$mailBody = "New enquiry from the ELADIDI website\n\nName: {$cleanName}\nEmail: {$email}\nEnquiry type: {$cleanSubject}\n\nMessage:\n{$message}\n";
$headers = "From: website@" . ($_SERVER['HTTP_HOST'] ?? 'eladidifarms.com') . "\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
if (mail($recipient, $mailSubject, $mailBody, $headers)) {
    finish_page('Thank you for contacting us', 'Your enquiry has been sent successfully. The ELADIDI team will review your message.', true);
}
finish_page('Message not sent', 'We could not send your enquiry at this time. Please try again later or contact the company by email.');
?>
