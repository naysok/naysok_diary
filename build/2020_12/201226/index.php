<?php include('../../../parts/header.php'); ?>
<h1>201226</h1>

<h3>雑感</h3>

<p>土曜日。  </p>

<p>昨日に引き続き、ボクセルの計算をする。昨日の段階で　Cupy を導入し高速化のめどが立ったので、今日は入力点群の作り方など探す。  </p>

<h3>フルカラーボクセル環境の準備</h3>

<p>昨日の時点で、（ボリュームのオフセット計算においては）入力の点群のソースは、STL ファイルとしていた。その場合 STL の仕様上、平面の部分には大きなメッシュが貼られ、粗密があり、これでは、計算値が綺麗に出力されない。  </p>

<p>入力の点群を、汎用のソフトウェアを使って作るのは自然な作業と判断し、Grasshopper を使ってテキストファイルを作成するようにした。  </p>

<p>特に問題なく動いたのでこれで行きたい。あとは自動化関係や、必要に応じてのダウンサンプリングなどを書く必要がありそう。   </p>

<h3>積みタスク</h3>

<ul>
<li>gcode リファクタリング（Rhino + Python）  </li>
</ul>
<ul>
<li>フルカラーボクセル環境の準備  </li>
</ul>
<ul>
<li>PEmbroider の検証  </li>
</ul>
<ul>
<li>threejs  </li>
</ul>
<ul>
<li>Rhino + cs  </li>
</ul>
<ul>
<li>diary-updete, previous + next  </li>
</ul>
<br><br>
<p><a href="../../../">back</a></p>
<br>
<?php include('../../../parts/footer.php'); ?>
