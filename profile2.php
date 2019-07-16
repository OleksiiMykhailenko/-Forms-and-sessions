<?php 

session_start();
 
$user = [
	'FIO' => 'Alexey Mykhailenko',
	'address' => 'Dnipro',
	'username' => 'Alexey'
];

if (empty($_POST)) {
	echo "Invalid data";
	return;
}

$FIO = $_POST['FIO'];
$address = $_POST['address'];

if (($FIO == $user['FIO']) && ($address == $user['address'])) {
	$_SESSION['user'] = $user;
	header('Location: profile3.php');
} else {
	echo "Invalid FIO or address";
	exit;
}

?>

