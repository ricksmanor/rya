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
        <div>
        <a href="animals.php" style="display: block; margin: auto"><svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 24 24" style="fill:grey; display: block; margin: auto">
                <path d="M24 22h-24l12-20z" /><text x="8.5" y="15" fill="white" font-size="2">Animals</text>
            </svg></a>
        </div>

        <div class="flex flex-row justifiy-center">
        <a href="attractions.php" style="display: block; margin: auto"><svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 24 24" style="fill:grey; display: block; margin: auto">
                <path d="M24 22h-24l12-20z" /><text x="7" y="15" fill="white" font-size="2">Attractions</text>
            </svg></a>
            <div class="rotate-180">
            <a href="map.php" style="display: block; margin: auto"><svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 24 24" style="fill:grey; display: block; margin: auto">
                <path d="M24 22h-24l12-20z" /><text x="12" y="15" fill="white" font-size="2" text-anchor="middle">dɐW</text>
            </svg></a>
            </div>
            <a href="facilities.php" style="display: block; margin: auto"><svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 24 24" style="fill:grey; display: block; margin: auto">
                <path d="M24 22h-24l12-20z" /><text x="8.5" y="15" fill="white" font-size="2">Facilities</text>
            </svg></a>
        </div>

        <div class="rotate-180">
        <a href="edu.php" style="display: block; margin: auto"><svg xmlns="http://www.w3.org/2000/svg" width="500" height="300" viewBox="0 0 24 24" style="fill:grey; display: block; margin: auto">
                <path d="M24 22h-24l12-20z" /><text x="7.5" y="15" fill="white" font-size="2">sʇᴉsᴉΛ ∩pƎ</text>
            </svg></a>
        </div>

    </section>
    <?php include 'components/footer.php'; ?>
</body>

</html>