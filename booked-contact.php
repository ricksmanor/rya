<?php



echo $firstname = $_POST['firstname'];
echo $lastname = $_POST['lastname'];
echo $email = $_POST['email'];
echo $subject = $_POST['subject'];

$conn = new mysqli('http://sql8.freesqldatabase.com/','sql8703310','Y365STTgIe','sql8703310');
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into contact_data(firstname, lastname,
    email, subject)

    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname,
    $email, $subject);


    $execval = $stmt->execute();
    echo "Tickets successfully...";
    $stmt->close();
    $conn->close();
}

header("Location: contact.php");
die();
?>