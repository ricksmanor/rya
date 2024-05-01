<?php

$origial_regular_price = 150;
$origial_vip_price = 320;
$origial_family_room_price = 60;

$current_regular_price = 130;
$current_vip_price = 280;
$current_family_room_price = 50;





?>

<!DOCTYPE html>
<html lang="en">
<!-- hotel booking -->

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
    <h1 class="text-7xl text-center mt-10" style="font-family: Joti">BOOKING HOTELS</h1>
    <h1 class="text-4xl text-center mt-10 text-red-500" style="font-family: Joti">SALE NOW ON</h1>

    <section class="flex m-10">
        <div class="grid grid-cols-1 xl:grid-cols-2 grid-flow-row gap-32">

            <div class="grid grid-cols-1 xl:grid-cols-1 grid-flow-row">

                <div class="hotel-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_regular_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_regular_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">Regular Hotel<br>
                        <p class="text-sm">1 Night</p>
                    </h2>
                    <p class="text-xl pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                    <img class="aspect-square ml-5 h-40 object-cover rounded-3xl" src="https://images.unsplash.com/photo-1671835245472-9b7d36155321?q=80&w=887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="hotel-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_vip_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_vip_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">VIP Hotel<br>
                        <p class="text-sm">1 Night</p>
                    </h2>
                    <p class="text-xl pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                    <img class="aspect-square ml-5 h-40 object-cover rounded-3xl" src="https://images.unsplash.com/photo-1657002865844-c4127d542c41?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="hotel-contain rounded-3xl p-4 text-center">
                    <h1 class="text-5xl font-bold pr-8 whitespace-nowrap">+£<?php echo  $current_family_room_price; ?><br><s class="text-red-500 text-3xl">+£<?php echo  $origial_family_room_price; ?></s></h1>

                    <h2 class="text-4xl font-bold">Family Room</h2>
                    <p class="text-xl pl-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis soluta nesciunt officia, nobis nostrum in amet, ex ut maxime provident praesentium exercitationem est quis, asperiores harum voluptatibus iste esse reprehenderit.</p>
                    <img class="aspect-square ml-5 h-40 object-cover rounded-3xl" src="https://images.unsplash.com/photo-1511895426328-dc8714191300?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-1 grid-flow-row">

                <form action="booked-hotels.php" method="post">
                    <div class="cart-contain rounded-3xl flex-col">


                        <div class="hotel-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_regular_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_regular_price; ?></s></h1>

                            <h2 class="text-4xl font-bold">Regular Hotel<br>
                                <p class="text-sm">1 Night</p>
                            </h2>

                            <label class="text-2xl font-bold pl-16" for="reg_nights">Nights Required<br>
                                <p class="text-sm">Nights 1 - 7:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="reg_nights" name="reg_nights_hotel" min="0" max="7" value="0">

                        </div>
                        
                        <div class="hotel-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_regular_price+$current_family_room_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_regular_price+$origial_family_room_price; ?></s></h1>

                            <h2 class="text-4xl font-bold">Regular Hotel<br>
                                <p class="text-sm"> + Family Room <br>1 Night</p>
                            </h2>

                            <label class="text-2xl font-bold pl-16" for="reg_nights">Nights Required<br>
                                <p class="text-sm">Nights 1 - 7:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="reg_nights" name="reg_family_nights_hotel" min="0" max="7" value="0">

                        </div>



                        <div class="hotel-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_vip_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_vip_price; ?></s></h1>

                            <h2 class="text-4xl font-bold">VIP Hotel<br>
                                <p class="text-sm">1 Night</p>
                            </h2>


                            <label class="text-2xl font-bold pl-16" for="vip_nights">Nights Required<br>
                                <p class="text-sm">Nights 1 - 7:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="vip_nights" name="vip_nights_hotel" min="0" max="7" value="0">

                        </div>

                        <div class="hotel-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8">£<?php echo  $current_vip_price+$current_family_room_price; ?><br><s class="text-red-500 text-3xl">£<?php echo  $origial_vip_price+$origial_family_room_price; ?></s></h1>

                            <h2 class="text-4xl font-bold">VIP Hotel<br>
                            <p class="text-sm"> + Family Room <br>1 Night</p>
                                                    </h2>


                            <label class="text-2xl font-bold pl-16" for="vip_nights">Nights Required<br>
                                <p class="text-sm">Nights 1 - 7:</p>
                            </label>
                            <input class="ml-10 pl-5" type="number" id="vip_nights" name="vip_family_nights_hotel" min="0" max="7" value="0">

                        </div>

                        <!-- <div class="hotel-contain rounded-3xl p-4 text-center">
                            <h1 class="text-5xl font-bold pr-8 whitespace-nowrap">+£<?php echo  $current_family_room_price; ?><br><s class="text-red-500 text-3xl">+£<?php echo  $origial_family_room_price; ?></s></h1>
                            <h2 class="text-4xl font-bold" for="family_room">Family Room</h2>

                            <label class="switch mt-3 ml-48">
                                <input type="checkbox" id="family_room" name="family_room_bundle" value="true">
                                <span class="slider round"></span>
                            </label>

                        </div> -->
                    </div>
                    <div class="checkout-contain rounded-3xl p-4 text-center justify-center">
                        <h2 class="text-3xl font-bold"><input type="submit"><br>CHECK OUT</h2>
                    </div>
                </form>

            </div>

            <?php include 'components/footer.php'; ?>
</body>

</html>