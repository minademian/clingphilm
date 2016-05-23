<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>ClingFilm Prototype</title>
  <link href="./clingfilm.css" media="screen" type="text/css" />
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
