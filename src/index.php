<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-Section</title>
</head>

<body>
  <?php

  $mysqli = new mysqli('db', getenv('MYSQL_USER'), getenv('MYSQL_ROOT_PASSWORD'), 'information_schema');

  if ($mysqli->connect_error) {
    echo 'Connection Error [', $mysqli->connect_errno, ']: ', $mysqli->connect_error;
  } else {
    echo 'MySQLi Connected Successfully!';
  }

  ?>
</body>

</html>