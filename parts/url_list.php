<div class="url">


<!-- ===== get url PHP ===== -->
<?php
$dirs = glob('../build/*');

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
