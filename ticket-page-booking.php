<?php

$origial_adult_price = 20;
$origial_child_price = 10;
$origial_os_price = 15;
$origial_family_price = 55;

$current_adult_price = 16;
$current_child_price = 8;
$current_os_price = 12;
$current_family_price = 40;


?>
<!DOCTYPE html>
<html lang="en">
<!-- ticket booking -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RZA</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <meta http-equiv="refresh" content="2"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>

<body>
    <?php include 'components/header.php'; ?>
    <h1 class="text-7xl text-center mt-10" style="font-family: Joti">BOOKING TICKETS</h1>
    <h1 class="text-4xl text-center mt-10 text-red-500" style="font-family: Joti">SALE NOW ON</h1>

    <section class="flex m-10">
        <div class="grid grid-cols-1 xl:grid-cols-2 grid-flow-row gap-32">

            <div class="grid grid-cols-1 xl:grid-cols-1 grid-flow-row">

                <div class="booking-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_adult_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_adult_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">Adult<br>
                        <p class="text-sm">age 16+</p>
                    </h2>
                    <p class="text-xl pl-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                </div>
                <div class="booking-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_child_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_child_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">Child<br>
                        <p class="text-sm">age 3-16</p>
                        <p class="text-xs">under 3's go free!</p>
                    </h2>
                    <p class="text-xl pl-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                </div>
                <div class="booking-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_os_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_os_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">OAP / Student<br>
                    </h2>
                    <p class="text-xl pl-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                </div>
                <div class="booking-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_family_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_family_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">Family<br>
                        <p class="text-sm">2 Adult's</p>
                        <p class="text-sm">2 Children</p>
                    </h2>
                    <p class="text-xl pl-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-1 grid-flow-row">

                <form action="booked-tickets.php" method="post">
                    <div class="cart-contain rounded-3xl flex-col">


                        <div class="booking-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_adult_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_adult_price; ?></s></h1>

                            <h2 class="text-4xl font-bold">Adult<br>
                                <p class="text-sm">age 16+</p>
                            </h2>

                            <label class="text-2xl font-bold pl-16" for="adult">Tickets Required<br>
                                <p class="text-sm">Qty 1 - 10:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="adult" name="adult_ticket" min="0" max="10" value="0">

                        </div>
                        <div class="booking-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_child_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_child_price; ?></s></h1>

                            <h2 class="text-4xl font-bold">Child<br>
                                <p class="text-sm">age 3-16</p>
                                <p class="text-xs">under 3's go free!</p>
                            </h2>

                            <label class="text-2xl font-bold pl-16" for="child">Tickets Required<br>
                                <p class="text-sm">Qty 1 - 5:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="child" name="child_ticket" min="0" max="5" value="0">

                        </div>
                        <div class="booking-contain rounded-3xl p-12 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_os_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_os_price; ?></s></h1>
                            <h2 class="text-4xl font-bold">OAP / Student</h2>

                            <label class="text-2xl font-bold pl-16" for="os">Tickets Required<br>
                                <p class="text-sm">Qty 1 - 10:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="os" name="os_ticket" min="0" max="10" value="0">

                        </div>
                        <div class="booking-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_family_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_family_price; ?></s></h1>
                            

                            <h2 class="text-4xl font-bold">Family<br>
                                <p class="text-sm">2 Adult's</p>
                                <p class="text-sm">2 Children</p>
                            </h2>

                            <label class="text-2xl font-bold pl-16" for="family">Tickets Required<br>
                                <p class="text-sm">Qty 1 - 2:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="family" name="family_ticket" min="0" max="2" value="0">

                        </div>
                    </div>
                    <div class="checkout-contain rounded-3xl p-4 text-center justify-center">
                        <h2 class="text-3xl font-bold"><input type="submit"><br>CHECK OUT</h2>
                    </div>
                </form>

            </div>

            <?php include 'components/footer.php'; ?>
</body>

</html>