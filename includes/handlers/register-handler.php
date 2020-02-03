<?php

function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$username = str_replace(" ", "", $username);
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$username = str_replace(" ", "", $username);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

if(isset($_POST['registerButton'])) {
	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$password = sanitizeFormPassword($_POST['password']);
	$passwordConfirm = sanitizeFormPassword($_POST['passwordConfirm']);

  $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $password, $passwordConfirm);

  if($wasSuccessful) {
    header('Location: index.php');
  }
}

?>
