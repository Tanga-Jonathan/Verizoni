<?php

if (isset($_POST['submit'])) { // Check if form is submitted

  // Get form data
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING); // Trim extra spaces
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

  // Validate data (add more validation as needed)
  if (empty($name) || empty($email) || empty($message)) {
    $error = "Please fill out all required fields.";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address.";
  } else {

    // Email content (modify as needed)
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name \nEmail: $email \nMessage: $message";

    // Set email headers
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";

    // Send email using mail function (replace with your email address)
    if (mail("jonathantanga96@gmail.com", $subject, $body, $headers)) {
      $success = "Thank you for contacting us! We will get back to you shortly.";
      // Redirect to homepage after successful email sending
    
    } else {
      $error = "There was an error sending your message. Please try again later. (Error: " . error_get_last() . ")"; // Add more specific error handling
    }
  }
}
header('Location: index.php'); // Redirect to homepage root

?>
