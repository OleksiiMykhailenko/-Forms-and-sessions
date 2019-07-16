<?php 

session_start();

$user = [
	'login' => 'Alexey',
	'password' => '12345',
	'username' => 'Alexey'
];

if (empty($_POST)) {
	echo "Invalid data";
	return;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (($password == $user['password']) && ($login == $user['login'])) {
	$_SESSION['user'] = $user;
	header('Location: profile.html');
} else {
	echo "Invalid login or password";
	exit;
}


 ?>