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


    <!-- url_list -->
    <div class="url">

      <!-- =============== PHP =============== -->
      <?php

      // Get Month_List
      $month_src = glob('./build/*');
      $month = array_reverse($month_src);


      foreach ($month as $m) {
        
        list($p0, $p1, $new_m) = explode("/", $m);

        // Define Month
        echo "\n<!--  ===== Month ===== -->\n<h2>$new_m</h2>\n\n";
        
        // Get Date_list
        $date = glob('./build/'.$new_m."/*");
        $date_reverse = array_reverse($date);

        // Define Date
        echo "<!-- Date -->\n<p>\n";

        foreach ($date as $d) {
          $yyyymm = explode("/", $d);

          echo "<a href=\"$d\">", $yyyymm[3], "</a>";

          // Divede
          if ($d !== $date_reverse[0]) {
            echo "\n&nbsp/&nbsp\n";
          }

        }

        echo "\n</p><br>\n<!-- Date -->\n\n";

      }

      ?>
      <!-- =============== PHP =============== -->

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