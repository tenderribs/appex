<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css\main.css">
        <title>applied experience</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    </head>
    <body>
      <?php
          require_once('header.php');
          $page = $_GET["page"];

          if ($page == '') {
            require_once('pages/home.html');

          } else if ($page == 'features') {
            require_once('pages/features.html');

          } else if ($page == 'system') {
            require_once('pages/system.html');

          } else if ($page == 'about') {
            require_once('pages/about.html');

          } else if ($page == 'test') {
            require_once('pages/test.html');
            
          } else if ($page == 'blog') {
            require_once('pages/blog.html');
          }
      ?>



    </body>
</html>