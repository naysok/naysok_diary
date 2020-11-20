<?php include('../../../parts/header.php'); ?>
<h1>200906</h1>

<h3>雑感</h3>

<p>日曜日だが昨日に引き続きボクセルライブラリを書く。  </p>

<p>昨日までの時点で、メッシュの内外判定、中間ファイルからメッシュ（として解釈できる頂点の配列）へのパースができていたので、基本的な機能が全部揃った。  </p>

<p>実行してみるとあまりにも遅くお話にならないので、高速化に向けての施策を考える。  </p>

<h3>フルカラーボクセル環境の準備</h3>

<p>速度が遅い原因は、確実に全走査での計算である。テストデータでは、600 x 600 個の点を、各メッシュ面（荒いデータで 6000）に対して総当たりで、ループ処理で計算している。  </p>

<p>ghPython（IronPython 2系） では、numpy が使えないので行列計算をしないで解いていたけど、これでは全然だめなので、Python 3系と切り分けてやっていこうと思った。  </p>

<p>あまり Numpy の行列計算でということがあまりやったことがないので、簡単なコードを書きながら進めていこうと思う。  </p>

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
<li>3D Printing 建築模型  </li>
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