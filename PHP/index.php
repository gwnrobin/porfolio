
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
        <p>I'm Robin</p>
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
            <source src="../Videos/movie.mp4" type="video/mp4">
          </video>
        </div>
        <div class="highlight_strip">
          <div class="highlight_scroll">
            <a class="highlight_strip_item" href="PianoSimulator.php"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="ZombieFeeder.php"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
            <a class="highlight_strip_item" href="https://placeholder.com"><img src="https://via.placeholder.com/250x120"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section" id="section3">

    </div>
    <?php include 'Footer.php'; ?>
    <script src="../Scripts/Header.js"></script>
  </body>
</html>
