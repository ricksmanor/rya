<?php

session_start();


if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rza";




$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RIGET ZOO ADVENTURES</title>
  <!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- <meta http-equiv="refresh" content="2"> -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/site.webmanifest">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>

<body class="loggedin">
  <nav class="navtop">
    <div>
      <h1 class="text-3xl">RIGET ZOO ADVENTURES ADMIN PANEL</h1>
      <a href="home.php">Home</a>
      <a href="profile.php">Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </nav>
  <div class="content">
    <h2>Home Page</h2>
    <p>Welcome back, <?= htmlspecialchars($_SESSION['name'], ENT_QUOTES) ?>!</p>
  </div>
  <section style="width: 300px;">
    <div>
      <?php








      $sql = "SELECT id, adult_ticket, adult_ticket*current_adult_price, child_ticket, child_ticket*current_child_price, 
os_ticket, os_ticket*current_os_price, family_ticket, family_ticket*current_family_price FROM `ticket_data` ORDER BY id DESC LIMIT 100";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
          echo  "<br><hr><b>Ticket Customer: " . $row["id"] . "</b><br><br>" . " Adult Ticket for: " . $row["adult_ticket"] . ", Tickets £" . $row["adult_ticket*current_adult_price"]

            . "<br> Child Ticket for: " . $row["child_ticket"] . ", Tickets £" . $row["child_ticket*current_child_price"]

            .  "<br> OAP/Student Ticket for: " . $row["os_ticket"] . ", Tickets £"
            .  $row["os_ticket*current_os_price"]

            . "<br> Family Ticket for: " . $row["family_ticket"] . ", Tickets £"
            . $row["family_ticket*current_family_price"] . "<hr>";
        }
      } else {
        echo "0 results";
      }
      ?>

    </div>
    <hr>
    <hr>

    <div>

      <?php

      $sqli = "SELECT id, reg_nights_hotel, reg_nights_hotel*current_regular_price, vip_nights_hotel, vip_nights_hotel*current_vip_price,
 reg_family_nights_hotel, reg_family_nights_hotel*current_family_regular_price, vip_family_nights_hotel,
  vip_family_nights_hotel*current_family_vip_price FROM `hotel_data` ORDER BY id DESC LIMIT 100";
      $result = $conn->query($sqli);

      if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
          echo "<br><hr><b>Hotel Customer: " . $row["id"] . "</b><br> "
            . "<br>Regular Hotel Price for: " . $row["reg_nights_hotel"] . " Nights"
            . $row["reg_nights_hotel*current_regular_price"]

            . "<br>Vip Hotel Price for: " . $row["vip_nights_hotel"] . " Nights"
            . $row["vip_nights_hotel*current_vip_price"]

            . "<br>Regular Family Hotel Price for: " . $row["reg_family_nights_hotel"] . " Nights"
            . $row["reg_family_nights_hotel*current_family_regular_price"]

            . "<br>Vip Family Hotel Price for: " . $row["vip_family_nights_hotel"] . " Nights"
            . $row["vip_family_nights_hotel*current_family_vip_price"] . "<hr>";
        }
      } else {
        echo "0 results";
      }


      ?>
    </div>
    <hr>
    <hr>
    <div>

      <?php

      $sqli = "SELECT * FROM `contact_data` ORDER BY id DESC LIMIT 100";
      $result = $conn->query($sqli);

      if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
          echo "<br><hr><b>People Contacted Us: " . $row["id"] . "</b><br> "
            . "<br>First Name: " . $row["firstname"]

            . "<br>Last Name: " . $row["lastname"]

            . "<br>Email: " . $row["email"]

            . "<br>Subject: " . $row["subject"];
        }
      } else {
        echo "0 results";
      }

      $conn->close();


      ?>
    </div>
  </section>
</body>

</html>