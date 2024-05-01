<?php 
// echo password_hash("Riget@Admin", PASSWORD_DEFAULT)
?>
    
<!DOCTYPE html>
<html lang="en">

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

    <p class="text-lg text-center hover:underline mt-5 mr-10 text-white"><a href="loyaty.php">Loyalty Program</a></p>

    <section class="flex">
        <div class="grid grid-cols-1 xl:grid-cols-2 grid-flow-row gap-32">
            <img class="image-contain object-cover rounded-3xl" src="https://images.unsplash.com/photo-1568171277061-6f11c87eb0c2?q=80&w=1102&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="relative isolate flex flex-col justify-end overflow-hidden">
                <img class="image-contain object-cover rounded-3xl absolute inset-0" src="images/kelly.jpg" alt="">
                <p class="z-10 mt-32 ml-28 text-xl font-bold text-white text-wrap">Kelly says Hi</p>
                <p class="z-10 mb-32 ml-28 text-md font-bold text-white text-wrap">The Zoo is the best place to meet us and greet us<br>Plus get incredible selfies</p>
            </div>

            <div class="relative isolate flex flex-col justify-end overflow-hidden">
                <img class="image-contain object-cover rounded-3xl absolute inset-0" src="https://images.unsplash.com/photo-1626826248416-a899c24f4e07?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <p class="z-10 mt-32 ml-28 text-xl font-bold text-white text-wrap">Come get a Hotel and stay with us the night</p>
                <p class="z-10 mb-32 ml-28 text-md font-bold text-white text-wrap">We have over 100 plus hotel rooms on site and 200 hotel rooms<br> just a 2 minute walk away from the zoo</p>
            </div>
            <img class="image-contain object-cover rounded-3xl" src="https://images.unsplash.com/photo-1562599674-917d1adb0c4f?q=80&w=927&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">

            <img class="image-contain object-cover rounded-3xl" src="https://images.unsplash.com/photo-1557174362-0aa917ad92f6?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="relative isolate flex flex-col justify-end overflow-hidden">
                <img class="image-contain object-cover rounded-3xl absolute inset-0" src="https://images.unsplash.com/photo-1601544359642-c76c4f7c3221?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                <p class="z-10 mt-32 ml-28 text-xl font-bold text-white text-wrap">Book a ticket and come see us</p>
                <p class="z-10 mb-32 ml-28 text-md font-bold text-white text-wrap">We have a ticket Sale this weekend so don't hesitate to meet us</p>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

</body>

</html>