<?php
session_start();

$DATABASE_HOST = 'http://sql8.freesqldatabase.com/';
$DATABASE_USER = 'sql8703310';
$DATABASE_PASS = 'Y365STTgIe';
$DATABASE_NAME = 'sql8703310';


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {

    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}



if (!isset($_POST['username'], $_POST['password'])) {

    exit('Please fill both the username and password fields!');
}


if ($stmt = $con->prepare('SELECT id, password FROM user_data WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();


        if (password_verify($_POST['password'], $password)) {


            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: home.php');
        } else {

            echo 'Incorrect username and/or password!<br><br><a href="index.html">Back Home</a>';

        }
    } else {

        echo 'Incorrect username and/or password!<br><br><a href="index.html">Back Home</a>';
    }


    $stmt->close();
}
