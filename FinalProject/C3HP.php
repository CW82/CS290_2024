<!DOCTYPE HTML>
<html lang = "en">
<head>
  <title>C3 GameCon</title>
  <link rel="icon" type="image/x-icon" href="Pictures/c3icon.png">
  <meta charset = "UTF-8">
  <meta name = "keywords" content = "HTML">
  <meta name = "author" content = "Crystal Wolf">
  <meta name = "desc" content = "Assignment 6: Final">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
  <link rel = "stylesheet" href = "styles.css">
</head>
<body>

  <?php include "header.php";?>

  <!--thankyous -->
  <div class = "content">
    <div class = "thanks">
      <h2>Thank you for an amazing GameCon 2024!<br></h2>
      <p>♡ Stay tuned for next year's event, or check out what we had planned for 2024! ♡</p>
      <!-- countdown timer for next year -->
      <div id = "countdown"><script src = "C3JS.js"></script></div> 
    </div>

    <!-- image caroseul -->
    <div id = "imgCaro">
      <img src = "Pictures/caro1.webp" alt = "picture" width = "375" height = "250">
      <img src = "Pictures/caro2.jpg" alt = "picture2" width = "375" height = "250">
      <img src = "Pictures/caro3.webp" alt = "picture3" width = "375" height = "250">
      <img src = "Pictures/caro4.jpg_large" alt = "picture4" width = "375" height = "250">
      <img src = "Pictures/caro5.webp" alt = "picture5" width = "375" height = "250">
      <img src = "Pictures/caro6.webp" alt = "picture6" width = "375" height = "250">
    </div>

    <!-- con hours table, inspo from the one on the site the con already has -->
    <div id = "hours">
      <h1>Hours</h1>
      <table>
        <tr>
          <th colspan = "2">Gaming/Con</th>
          <th>Vendor Hall</th>
        </tr>
        <tr>
          <td>Friday, Feb 16</td>
          <td>1pm-11pm</td>
          <td>1pm-8pm</td>
        </tr>
        <tr>
          <td>Saturday, Feb 17</td>
          <td>10am-11pm</td>
          <td>10am-8pm</td>
        </tr>
      </table>
      <br>
      <a id = "schedual" href = "http://archives.corvallisoregon.gov/internal/ElectronicFile.aspx?dbid=0&docid=4056864">See the Full Game Schedual Here</a>
    </div>

    <!-- guest links -->
    <div id = "guests">
      <h1>Check Out Our Featured 2024 Guests!</h1>
      <a class = "honored" href = "guestinfo.php">
        <img src = "Pictures/tylerw.PNG" alt = "Tyler Welch" width = "175" height = "175">
      </a>
      <a class = "honored" href = "guestinfo.php">
        <img src = "Pictures/michelleN.PNG" alt = "Michelle Nguyen" width = "175" height = "175">
      </a>
      <a class = "honored" href = "guestinfo.php">
        <img src = "Pictures/buckP.PNG" alt = "Buck Potter" width = "175" height = "175">
      </a>
      <a class = "honored" href = "guestinfo.php">
        <img src = "Pictures/vedisO.PNG" alt = "Vedis Oberyn" width = "175" height = "175">
      </a>
      <a class = "honored" href = "guestinfo.php">
        <img src = "Pictures/playtest.PNG" alt = "Playtest Corvallis" width = "175" height = "175">
      </a>
    </div>
  </div>

  <br>

  <?php include "footer.php";?>

</body>
</html>