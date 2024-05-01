<?php


echo $current_adult_price = 16;
echo $current_child_price = 8;
echo $current_os_price = 12;
echo $current_family_price = 40;




echo $adult_ticket = $_POST['adult_ticket'];
echo $child_ticket = $_POST['child_ticket'];
echo $os_ticket = $_POST['os_ticket'];
echo $family_ticket = $_POST['family_ticket'];

$conn = new mysqli('http://sql8.freesqldatabase.com/','sql8703310','Y365STTgIe','sql8703310');
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into ticket_data(adult_ticket, current_adult_price,
    child_ticket, current_child_price,
    os_ticket, current_os_price,
    family_ticket, current_family_price)

    values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiiiii", $adult_ticket, $current_adult_price,
    $child_ticket, $current_child_price,
    $os_ticket, $current_os_price,
    $family_ticket, $current_family_price);


    $execval = $stmt->execute();
    echo "Tickets successfully...";
    $stmt->close();
    $conn->close();
}

header("Location: sql-ticket-data.php");
die();
?>
