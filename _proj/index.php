<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>ClingFilm - a tool to protect your photos</title>
  <link rel="stylesheet" href="clingfilm.css" media="screen" type="text/css" />
</head>
<body>
  <div id="clingfilm">
    <form method="post" action="index.php" onsubmit="Warn();">
    <?php
    for($i=0;$i<5000;$i++)
    {
    ?>
      <input type="submit" value="" name="ass" />
    <?php
    }
    ?>
    </form>
  </div>
  <div id="content">
    <?php
    for($i=0;$i<100;$i++)
    {
    ?>
      <img src="./artwork/heartfelt-sadness.jpg" alt="heartfelt sadness" />
    <?php
    }
  ?>
  </div>
</body>
</html>
