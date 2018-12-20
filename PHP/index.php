
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/Footer.css">
    <link rel="stylesheet" href="../CSS/Index.css">
  </head>
  <body>
    <?php include 'Header.php'; ?>
    <div class="section" id="section-1-wrap">
      <div class="about">
        <p>I am Robin</p>
        <p>Game Developer from the Netherlands. I like programming, games, and making pictures. I'm creative, honest and a perfectionist.</p>
      </div>
      <div class="infobutton" id="infobutton">
        <a class="arrow" href="javascript:void(0);"  onclick="scrollButton()">&#187;</a>
      </div>
    </div>
    <div class="section" id="section-2-wrap">
      <div class="highlight">
        <div class="highlight_player">
          <video class="video" style="height:550px" autoplay muted loop>
            <source src="../Videos/preview.mp4" type="video/mp4">
          </video>
        </div>
        <div class="highlight_games_section">
          <div class="highlight_games">
            <div class="highlight_game">
              <div class="highlight_game_content">
                <a class="highlight_strip_item" href="Freqy.php"><img src="../Pictures/freqyTumbnail.jpg"></a>
                <div class="highlight_game_content_text">
                  <h1>Endless runner Freqy</h1>
                </div>
                <a href="Freqy.php">
                  <div class="highlight_game_button">
                    <p class="arrow_right">&#9650;</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="highlight_game">
              <div class="highlight_game_content">
                <a class="highlight_strip_item" href="StarWars.php"><img src="../Pictures/starWars2.png"></a>
                <div class="highlight_game_content_text">
                  <h1>Star wars vertical slice</h1>
                </div>
                <a href="StarWars.php">
                  <div class="highlight_game_button">
                    <p class="arrow_right">&#9650;</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="highlight_game">
              <div class="highlight_game_content">
                <a class="highlight_strip_item" href="BeatTheBoss.php"><img src="../Pictures/beatTheBossTumbnail.jpg"></a>
                <div class="highlight_game_content_text">
                  <h1>Beat the boss Level editor</h1>
                </div>
                <a href="BeatTheBoss.php">
                  <div class="highlight_game_button">
                    <p class="arrow_right">&#9650;</p>
                  </div>
                </a>
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
