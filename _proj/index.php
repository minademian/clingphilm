<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>ClingFilm Prototype</title>
  <?php /* ?>
  <script type="text/javascript" src="/scripts/behaviour.js"></script>
  <link href="/styles/clingfilm.css" media="screen" type="text/css" />
  <?php */ ?>
  <script type="text/javascript">
    function Warn()
    {
      alert('Sorry nigga, this site has been protected by ClingFilm. :)');
      return false;
    }
  </script>
  <style type="text/css">
    input {
      float:right;
      width:50px;
      clear:left;
      border:0;
      background:transparent;
      margin:0;padding:0;
    }
    div#clingfilm {
      z-index:2;
      position:absolute;
      top:0px;
      left:0;margin:0;padding:0;
      border:0;
    }
    div#content {margin:0;padding:0;z-index:1;}
    div#content img {float:right;clear:left;}
  </style>
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
