<!DOCTYPE HTML>
<html lang = "en">
<head>
  <!-- Do i need to include this on every page since i have a header linked on every page? ust wodnering -->
  <title>C3 GameCon</title>
  <link rel="icon" type="image/x-icon" href="Pictures/c3icon.png">
  <meta charset = "UTF-8">
  <meta name = "keywords" content = "HTML">
  <meta name = "author" content = "Crystal Wolf">
  <meta name = "desc" content = "Assignment 6: Final">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link rel = "stylesheet" href = "styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <div class = "navBarStyle" id = "navBar">
    <nav> 
      <a class = "logo" href = "C3HP.php">
        <img src = "Pictures/logo.png">
      </a>

      <div class = "dropdown">

        <i class = "fa fa-bars fa-lg" id = "hambmenuicon"></i>

        <a href="#info">Info ▽</a>
        <div class="dropdownLinks">
          <a href="aboutUs.php">About Us</a>
          <a href="guestInfo.php">Guest Info</a>
          <a href="vendors.php">Vendors</a>
        </div>
      </div>

      <div class="dropdown">
        <a href = "#attend">Attend ▽</a>
        <div class="dropdownLinks">
          <a href="register.php">Register Here</a>
          <a href="events.php">Events</a>
        </div>
      </div>

      <div class="dropdown">
        <a href = "#getInvolved">Get Involved ▽</a>
        <div class="dropdownLinks">
          <a href="volunteer.php">Volunteer!</a>
		      <a href="contacts.php">Contacts</a>
          <a href="guestRequest.php">Guest Request Form</a>
        </div>
      </div>
    </nav>
    
    <div id = "direct">
      <p>Feb 16-17</p>
      <a id = "address" href = "https://www.google.com/maps/dir//corvallis+community+center/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x54c040a27b70b935:0x59be7ee7a29094b5?sa=X&ved=1t:3061&ictx=111">Corvallis Community Center, Corvallis OR</a>
    </div>
  </div>

</body>
</html>