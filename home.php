<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <h1 class="heading">Home</h1>
      <div id="menu" class="fas fa-bars"></div>
      <nav class="navbar">
        <ul>
          <li><a href="home.php">home</a></li>
          <li><a href="devices.php">devices</a></li>
          <li><a href="room.php">rooms</a></li>
          <li><a href="about.php">about</a></li>
          <li><a href="contact.php">contact</a></li>
        </ul>
      </nav>
    </header>

    <!--home section starts-->

    <section class="home">
      <div class="content">
        <h1>Useful home automation webapp</h1>
        <p>
          This useful home automation webapp is here for you. You can use to
          manage your devices.
        </p>
        <a href="room.php"> <button class="btn">get started</button></a>
      </div>

      <div class="image">
        <img src="images/p1.png" alt="alt" />
      </div>
    </section>
    <!--home section ends-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
