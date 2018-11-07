<?php
  header('HTTP/1.1 307 Temporary Redirect');
header('Location:app/web');
?>
<html>
  <head>
    <title>Moved</title>
  </head>
  <body>
    <h1>Moved</h1>
    <p>This page has moved to <a href="app/web">mi app</a>.</p>
  </body>
</html>
?>