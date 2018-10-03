<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/Footer.css">
    <link rel="stylesheet" href="../CSS/Game.css">
  </head>
  <body>
    <?php include 'Header.php'; ?>
    <div class="section" id="section-1-wrap" style="background-image: url(../Pictures/zombie.jpg)">
      <div class="centershow-wrap">
        <div class="centershow">
          <h1 class="title">Zombie Feeder</h1>
          <div class="buttons-wrap">
            <div class="buttons">
              <a href="#">
                <div class="button">
                  <div class="inner_button">
                    <p>Play</p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="button" style="margin-left: 1rem">
                  <div class="inner_button">
                    <p>documentation / code</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="infobutton" id="infobutton">
        <a class="arrow" href="javascript:void(0);"  onclick="scrollButton()">&#187;</a>
      </div>
    </div>
    <div id="section-2-wrap">
      <div class="information-wrap">
        <div class="information-container">
          <div class="text-information-wrap shadow-hover">
            <div class="information">
              <h3>About the game</h3>
              <p>this project is just a little game focused on the shader i am using.<br><br>the shader in the project extrudes the vertices. in this shader i also added a way to paint with shades of gray what u want to extrude the most or not.</p>
            </div>
          </div>
          <div class="general-information-wrap shadow-hover">
            <div class="information">
              <h3>Genaral information</h3>
              <li>Name game: Zombie Feeder</li>
              <li>Engine: Unity</li>
              <li>Code language: C#</li>
              <li>Time spent: 5 days</li>
              <li>Special hardware: none</li>
              <li>My part: all programming</li>
            </div>
          </div>
          <div class="game_pictures-wrap shadow-hover">
            <div class="game_pictures">
              <div class="big">
                <iframe class="frame" frameBorder="0" allowfullscreen src="https://www.youtube.com/embed/XbGJzQgsNhU">Browser not compatible.</iframe>
              </div>
              <div class="small">
                <div class="video-links">
                  <div class="">
                    <img class="video-link" src="https://via.placeholder.com/192x108">
                    <img class="video-link" src="https://via.placeholder.com/192x108">
                    <img class="video-link" src="https://via.placeholder.com/192x108">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'Footer.php'; ?>
    <script src="../Scripts/Header.js"></script>
  </body>
</html>
