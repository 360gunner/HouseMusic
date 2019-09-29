<?php 



function sanitizeFormPassword($inputText) {
	$inputText = strip_tags($inputText);
	// strip_tags tna7i les tags html au cas wa7ed darhom fl input bch yb3thom l bdd ta3na
	return $inputText;
}

function sanitizeFormUsername($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	//hadi tbdl str louwl b 2eme
	return $inputText;
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	//str to lower bayna w ucfirst tkbr la lettre louwla
	return $inputText;
}



if(isset($_POST['registerButton'])) {
	//isset ta3 ki n3bzo 3al button ha reb hah
	$username = sanitizeFormUsername($_POST['username']);
	
	$firstName = sanitizeFormString($_POST['firstName']);

	$lastName = sanitizeFormString($_POST['lastName']);

	$email = sanitizeFormString($_POST['email']);

	$email2 = sanitizeFormString($_POST['email2']);

	$password = sanitizeFormPassword($_POST['password']);

	$password2 = sanitizeFormPassword($_POST['password2']);

	$account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

}


?>