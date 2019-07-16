<?php 

session_start();

$user = [
	'login' => 'Alexey',
	'password' => '12345',
	'FIO' => 'Alexey Mykhailenko',
	'address' => 'Dnipro',
	'username' => 'Alexey'
];

if (empty($_POST)) {
	echo "Invalid data";
	return;
}

$login = $_POST['login'];
$password = $_POST['password'];
$FIO = $_POST['FIO'];
$address = $_POST['address'];

if (($password == $user['password']) && ($login == $user['login']) && ($FIO == $user['FIO']) && ($address == $user['address'])) {
	$_SESSION['user'] = $user;
	header('Location: profile.php');
} else {
	echo "Invalid login or password";
	exit;
}

 ?>