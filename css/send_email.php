<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST['subject'];
  $message = $_POST["message"];
  
  $to = "recipient@example.com";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  // Send the email
  mail($to, $subject, $body);
  
  // Redirect to a thank you page
  header("Location: thank_you.html");
  exit();
}
?>