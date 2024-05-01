<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'http://sql8.freesqldatabase.com/';
$DATABASE_USER = 'sql8703310';
$DATABASE_PASS = 'Y365STTgIe';
$DATABASE_NAME = 'sql8703310';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, email FROM user_data WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RIGET ZOO ADVENTURES</title>
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
	<!-- <meta http-equiv="refresh" content="2"> -->
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>RIGET ZOO ADVENTURES PROFILE PAGE</h1>
			<a href="home.php">Home</a>
			<a href="profile.php">Profile</a>
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Profile Page</h2>
		<div>
			<p>Your account details are below:</p>
			<table>
				<tr>
					<td>Username:</td>
					<td><?= htmlspecialchars($_SESSION['name'], ENT_QUOTES) ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?= htmlspecialchars($password, ENT_QUOTES) ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?= htmlspecialchars($email, ENT_QUOTES) ?></td>
				</tr>
			</table>
		</div>
	</div>
</body>

</html>