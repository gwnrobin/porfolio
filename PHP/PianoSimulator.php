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
    <div class="section" id="section-1-wrap" style="background-image: url(../Pictures/piano.jpg)">
      <div class="centershow-wrap">
        <div class="centershow">
          <h1 class="title" >Piano Simulator</h1>
          <div class="buttons-wrap">
            <div class="buttons">
              <a href="#">
                <div class="button no-play">
                  <div class="inner_button no-play-inner">
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
      <div class="game_highlights">
        <div class="rightcol">
          <div class="information">

          </div>
        </div>
        <div class="leftcol">
          <div class="highlight">
            <div class="highlight_player">
              <div class="highlight_player_area">
                <div id="highlight_movie_placeholder"></div>
              </div>
              <iframe class="highlight_movie" frameBorder="0" allowfullscreen src="https://www.youtube.com/embed/XbGJzQgsNhU">Browser not compatible.</iframe>
            </div>
            <div class="highlight_strip">
              <div class="highlight_scroll">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
                <img class="highlight_strip_item" src="https://via.placeholder.com/192x108">
              </div>
            </div>
          </div>
        </div>
        <div style="clear: both"></div>
      </div>


      <div class="information-wrap">
        <div class="information-container">

          <div class="text-information-wrap shadow-hover">
            <div class="information">
              <h3>About the game</h3>
              <p>The game is axactly what the name says, it is a game where you play a piano. and piano is being played with a leap motion!!<br><br>if you have taken a look at the documentation you will see almost a whole other game. this is because in the first place the game was meant to be made inside unreal engine, but because of bad planning I did not have much time left. but I still managed to make a part of the game in unity.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'Footer.php'; ?>
    <script src="../Scripts/Header.js"></script>
  </body>
</html>
