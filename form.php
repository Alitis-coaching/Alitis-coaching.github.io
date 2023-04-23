<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["FULLname"]);
  $name = test_input($_POST["téléphone"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["Votre message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>