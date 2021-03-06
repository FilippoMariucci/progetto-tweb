<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/nav_style.css">
  <link rel="stylesheet" type="text/css" href="css/Livello_1_style/contattaci_style.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav>
    <label class="logo">Affittacamere</label>
    <ul id="nav">
      <li><a href="home_log.php" >home</a></li>
      <li><a href="faq.php">faq</a></li>
      <li><a href="contattaci_log.php">contattaci</a></li>
      <li><a href="catalogo_log.php">catalogo</a></li>
      <li>
       <li>
       <?php
       session_start();
           if(isset($_SESSION['user_id']) && ($_SESSION['username']) =='admin') {
              include("db.php");
              $result = mysqli_query($connection, "SELECT * FROM user");
        ?>
        <a href="area_ris_4.php" style="padding:10px; color:orange"> Welcome <?php echo $_SESSION['username'] ?></a>
        <?php
           }elseif(isset($_SESSION['user_id']) && ($_SESSION['ruolo']) =='le') {
              include("db.php");
              $result = mysqli_query($connection, "SELECT * FROM user");
        ?>
        <a href="area_ris_2.php" style="padding:10px; color:orange"> Welcome <?php echo $_SESSION['username'] ?></a>
        <?php
          } else {
              include("db.php");
              $result = mysqli_query($connection, "SELECT * FROM user");
              ?>
              <a href="area_ris_3.php" style="padding:10px; color:orange"> Welcome <?php echo $_SESSION['username'] ?></a>
              <?php
          }
         ?></li>
      <li><a href="logout.php" class="fa fa-sign-out"></a></li>
    </ul>
    <label id="icon">
      <i class="fa fa-bars" aria-hidden="true" onclick="show_nav()"></i>
    </label>
  </nav>

  <header>
    <h1>CONTATTACI</h1>
    <i class="fa fa-envelope"></i><a href="mailto:s1095256@studenti.univpm.it">
      Email: s1095256@studenti.univpm.it</a>  (Mariucci Filippo)<br>
    <i class="fa fa-envelope"></i><a href="mailto:s1092407@studenti.univpm.it">
      Email: s1092407@studenti.univpm.it</a>  (Olivieri Giorgio)<br>
    <i class="fa fa-envelope"></i><a href="mailto:s1095256@studenti.univpm.it">
      Email: s1095256@studenti.univpm.it</a>  (Palmieri Giovanni)<br>
    <i class="fa fa-envelope"></i><a href="mailto:s1093418@studenti.univpm.it">
      Email: s1093418@studenti.univpm.it</a>  (Sisi Mattia)<br>
    <i class="fa fa-map-marker"></i><a href="https://www.google.com/maps/dir//Universit%C3%A0+Pol
      itecnica+delle+Marche+-+Facolt%C3%A0+di+Ingegneria,+Via+Brecce+Bianche,+12,+60131+Ancona+AN/@43.585524,13.497659
      5,13.83z/data=!4m9!4m8!1m0!1m5!1m1!1s0x132d80233dd931ef:0x161719e4f3f5daaf!2m2!1d13.516595!2d43.586779!3e0"
      target="_blank">Via Brecce Bianche, 12, Ancona, AN</a><br>
    <img src="img/maps.jpeg" alt="posizione maps">
  </header>

  <footer>
    <div class="describe">
      <p>Scarica la guida al sito</p>
      <a href="#" class="fa fa-download" aria-hidden="true" download></a>
    </div>
    <div class="creator">
      <h3>Powered By</h3>
      <p>Mariucci Filippo</p>
      <p>Olivieri Giorgio</p>
      <p>Palmieri Giovanni</p>
      <p>Sisi Mattia</p>
    </div>
  </footer>

  <script>
    function show_nav(){
      var x = document.getElementById("nav");
      if(x.style.left === "0%"){
        x.style.left = "-100%";
      }
      else{
        x.style.left = "0%";
      }
    }
  </script>
</body>
</html>
