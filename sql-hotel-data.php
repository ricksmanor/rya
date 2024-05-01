<?php


$servername = "http://sql8.freesqldatabase.com/";
$username = "sql8703310";
$password = "Y365STTgIe";
$dbname = "sql8703310";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, reg_nights_hotel, reg_nights_hotel*current_regular_price, vip_nights_hotel, vip_nights_hotel*current_vip_price, reg_family_nights_hotel, reg_family_nights_hotel*current_family_regular_price, vip_family_nights_hotel, vip_family_nights_hotel*current_family_vip_price FROM `hotel_data` ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $id_cus = ": " . $row["id"] . "<br> <br> ";
        $reg_hot = "<br>Regular Hotel Price for: " . $row["reg_nights_hotel"] . " Nights";
        $prices_reg_hot = $row["reg_nights_hotel*current_regular_price"];

        $vip_hot = "<br>Vip Hotel Price for: " . $row["vip_nights_hotel"] . " Nights";
        $prices_vip_hot = $row["vip_nights_hotel*current_vip_price"];

        $reg_fam_hot = "<br>Regular Family Hotel Price for: " . $row["reg_family_nights_hotel"] . " Nights";
        $prices_reg_fam_hot = $row["reg_family_nights_hotel*current_family_regular_price"];

        $vip_fam_hot = "<br>Vip Family Hotel Price for: " . $row["vip_family_nights_hotel"] . " Nights";
        $prices_vip_fam_hot = $row["vip_family_nights_hotel*current_family_vip_price"];

        $total_hotel = $prices_reg_hot + $prices_vip_hot + $prices_reg_fam_hot + $prices_vip_fam_hot;
    }
} else {
    echo "0 results";
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RZA</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <meta http-equiv="refresh" content="4"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<style>
    body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        flex: 25%;
    }

    .col-50 {
        flex: 50%;
    }

    .col-75 {
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
    }

    input[type=text],
    input[type=email],
    input[type=number] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .btn {
        background-color: #04AA6D;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        cursor: pointer;
    }

    hr {
        border: 1px solid grey;
    }

    span.price {
        float: right;
    }
</style>

<body>


    <h1 class="text-5xl text-center mt-5 text-white">Order Number<?php echo $id_cus ?></h1>

    <div class="mb-10 p-2">
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form action="confirm-pay.php">

                        <div class="row">
                            <div class="col-50">
                                <br>
                                <h3 class="text-center text-3xl font-bold">Name and Email</h3><br>
                                <label for="fname"> Full Name</label>
                                <input class="rounded-2xl" type="text" id="fname" name="firstname" placeholder="Full Name" value="Mark Zuckerberg">
                                <label for="email"> Email</label>
                                <input class="rounded-2xl" type="email" id="email" name="email" placeholder="john@example.com" value="riget.zoo.adventure@example.com">



                                <br>
                                <h3 class="text-center text-3xl font-bold">Payment</h3><br>
                                <label for="cname">Name on Card</label>
                                <input class="rounded-2xl" type="text" id="cname" name="cardname" placeholder="John More Doe" value="Mark Zuckerberg">
                                <label for="ccnum">Credit card number</label>
                                <input class="rounded-2xl" type="number" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" min="1000000000000000" max="9999999999999999" value="1111222233334444">

                                <div class="row">
                                    <div class="col-50">
                                        <label for="expmonthyear">Exp Month/Year</label>
                                        <input class="rounded-2xl" type="number" id="expmonthyear" name="expmonthyear" placeholder="09/28" max="1225" value="0928">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV</label>
                                        <input class="rounded-2xl" type="number" id="cvv" name="cvv" placeholder="3 digits on the back" max="999" value="835">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <input type="submit" value="Pay for Hotel" class="btn rounded-3xl hover:bg-green-600">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <h4>Cart <span class="price" style="color:black"> <b>4</b></span></h4>
                    <p><?php echo $reg_hot ?> <span class="price" style="color:black">£<?php echo $prices_reg_hot ?></span></p>
                    <p><?php echo $vip_hot ?> <span class="price" style="color:black">£<?php echo $prices_vip_hot ?></span></p>
                    <p><?php echo $reg_fam_hot ?> <span class="price" style="color:black">£<?php echo $prices_reg_fam_hot ?></span></p>
                    <p><?php echo $vip_fam_hot ?> <span class="price" style="color:black">£<?php echo $prices_vip_fam_hot ?></span></p><br>
                    <hr>
                    <p>Total <span class="price" style="color:black"><b>£<?php echo $total_hotel ?></b></span></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>