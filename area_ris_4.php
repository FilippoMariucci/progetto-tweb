<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/nav_style.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/Livello_4_style/area_ris_4_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
//This page displays the list of the forum's categories
include('db.php');
 session_start();
?>
  <nav>
    <label class="logo">Affittacamere</label>
    <ul id="nav">
      <li><a href="home_log.php" >home</a></li>
      <li><a href="faq.php">faq</a></li>
      <li><a href="contattaci_log.php">contattaci</a></li>
      <li><a href="catalogo_log.php">catalogo</a></li>
      <li>
       <li>
       <a href="#" style="padding:10px; color:orange" class="active"> Welcome <?php echo $_SESSION['username'] ?></a></li>
      <li><a href="logout.php" class="fa fa-sign-out"></a></li>
    </ul>
    <label id="icon">
      <i class="fa fa-bars" aria-hidden="true" onclick="show_nav()"></i>
    </label>
  </nav>

  <header>

    <div class="container">

      <div class="area">
        <i class="fa fa-user"></i>
        <h1>Area Riservata</h1>
      </div>

      <div class="bottoni">

        <div class="statistiche">
          <button>
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
            <a href="statistic.php" class="active"><p>Visualizza e analizza le statistiche a tua disposizione</p></a>
          </button>
        </div>



        <div class="faq">
          <button>
            <i class="fa fa-question" aria-hidden="true"></i>
            <a href="view_faq.php" class="active"><p>Visualizza e/o modifica FAQ</p></a>
          </button>
        </div>

      </div>

    </div>

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
