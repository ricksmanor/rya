<?php
// include 'hotel-page-booking.php';

echo $current_regular_price = 130;
echo $current_vip_price = 280;
// echo $current_family_room_price = 50;

echo $current_family_regular_price = 180;
echo $current_family_vip_price = 330;

echo $reg_nights_hotel = $_POST['reg_nights_hotel'];
echo $vip_nights_hotel = $_POST['vip_nights_hotel'];

echo $reg_family_nights_hotel = $_POST['reg_family_nights_hotel'];
echo $vip_family_nights_hotel = $_POST['vip_family_nights_hotel'];
// echo $family_room_bundle = $_POST['family_room_bundle'];


$conn = new mysqli('localhost','root','','rza');
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into hotel_data(reg_nights_hotel, current_regular_price, vip_nights_hotel, current_vip_price, reg_family_nights_hotel, current_family_regular_price, vip_family_nights_hotel, current_family_vip_price)
    values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiiiiii", $reg_nights_hotel, $current_regular_price, $vip_nights_hotel, $current_vip_price, $reg_family_nights_hotel, $current_family_regular_price, $vip_family_nights_hotel, $current_family_vip_price);

    $execval = $stmt->execute();
    echo "Hotel Booked successfully...";
    $stmt->close();
    $conn->close();
}

header("Location: sql-hotel-data.php");
die();
?>
