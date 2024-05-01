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
    <section>
        <h1 class="text-7xl text-center" style="font-family: Joti">CONTACT US</h1>
        <div class="relative text-center">
            <img class="aspect-video object-cover mt-10" src="https://images.unsplash.com/photo-1586769852044-692d6e3703f0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="glass-box absolute top-32 left-28 mx-48">
                <p class="text-3xl text-black font-bold my-5">Contact Us At Riget Zoo</p>
                <div class="m-10">
                    <div class="contact-form">
                        <form action="booked-contact.php" method="post">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..." maxLength="100" required>

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..." maxLength="100" required>
                            
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email..." maxLength="100" required>



                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something..." maxLength="1000" style="height:200px" required></textarea>

                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <p class="text-xl text-white font-bold my-5">Email: info@riget-zoo-adventures.com <br> Phone Number: 01234 567890</p>

                </div>
            </div>
        </div>
    </section>
    <?php include 'components/footer.php'; ?>
</body>

</html>