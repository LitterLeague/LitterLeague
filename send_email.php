<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $description = $_POST["description"];
  
  // Recipient email address
  $to = "test@test.com";
  
  // Subject
  $subject = "New Contact Form Submission";
  
  // Compose the email message
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Description:\n$description";
  
  // Send email
  mail($to, $subject, $message);
  
  // Redirect back to the contact page
  header("Location: contact.php?status=success");
  exit;
} else {
  // If the form is not submitted, redirect back to the contact page
  header("Location: contact.php");
  exit;
}
?>
