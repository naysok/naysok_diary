<!-- <!DOCTYPE html> -->
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <title>diary.naysok.org</title>

    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">

  </head>

  <body>

    <!-- header -->
    <div class="header">
      <h1>diary.naysok.org</h1>
      <br>
      <p><a href="https://github.com/naysok/naysok_diary" target="_blank">https://github.com/naysok/naysok_diary</a></p>
      <br>
      <hr>
      <br>
    </div>

    <div class="url">

      <!-- ===== get url, PHP ===== -->
      <?php
      $dirs = glob('./build/*');

      foreach ($dirs as $dir) {
          $date = explode("/", $dir);

          // echo "0 : ", $date[0], "\n";
          // echo "1 : ", $date[1], "\n";
          // echo "2 : ", $date[2], "\n";

          echo "<p><a href=\"$dir\">", $date[2], "</a></p>\n";
      }
      ?>
      <!-- ===== get url PHP ===== -->

    </div>


    <!-- footer -->
    <div class="footer">
      <br>
      <hr>
      <br>
      <p>2020</p>
      <p>diary.naysok.org</p>
      <br><br>
    </div>

    </body>

    </html>