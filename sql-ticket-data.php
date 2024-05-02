<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rza";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, adult_ticket, adult_ticket*current_adult_price, child_ticket, child_ticket*current_child_price, 
os_ticket, os_ticket*current_os_price, family_ticket, family_ticket*current_family_price FROM `ticket_data` ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $id_cus = ": " . $row["id"] . "<br> <br> ";
         $adu_tick = "<br>Adult Ticket Price for: " . $row["adult_ticket"] . " Tickets";
         $prices_adu_tick = $row["adult_ticket*current_adult_price"];

         $chil_tick = "<br>Child Ticket Price for: " . $row["child_ticket"] . " Tickets";
         $prices_chil_tick = $row["child_ticket*current_child_price"];

         $os_tick = "<br>OAP/Student Ticket Price for: " . $row["os_ticket"] . " Tickets";
         $prices_os_tick = $row["os_ticket*current_os_price"];

         $fam_tick = "<br>Family Ticket Price for: " . $row["family_ticket"] . " Tickets";
         $prices_fam_tick = $row["family_ticket*current_family_price"];

         $total_hotel = $prices_adu_tick + $prices_chil_tick + $prices_os_tick + $prices_fam_tick;
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


<h1 class="text-5xl text-center mt-5 text-white">Order Number<?php echo $id_cus?></h1>

    <div class="mb-10 p-2">
        <div class="row">
            <div class="col-75">
                <div class="container rounded-2xl">
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

                        <input type="submit" value="Pay for Tickets" class="btn rounded-3xl hover:bg-green-600">
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container rounded-xl">
                    <h4>Cart <span class="price" style="color:black"> <b>4</b></span></h4>
                    <p><?php echo $adu_tick ?> <span class="price" style="color:black">£<?php echo $prices_adu_tick ?></span></p>
                    <p><?php echo $chil_tick ?> <span class="price" style="color:black">£<?php echo $prices_chil_tick ?></span></p>
                    <p><?php echo $os_tick ?> <span class="price" style="color:black">£<?php echo $prices_os_tick ?></span></p>
                    <p><?php echo $fam_tick ?> <span class="price" style="color:black">£<?php echo $prices_fam_tick ?></span></p><br>
                    <hr>
                    <p>Total <span class="price" style="color:black"><b>£<?php echo $total_hotel ?></b></span></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>