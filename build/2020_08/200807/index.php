<?php include('../../../parts/header.php'); ?>
<h1>200807</h1>

<h3>雑感</h3>

<p>池尻へ。  </p>

<p>昨日の続きで、Mesh Vertex Color について深堀り。  </p>

<p>四角形格子から、特定の対角を結ぶことで（例えば右肩上がり）、三角形メッシュを割ると、特定のパターンの時に引っ張られることを確認。これでは困る。  </p>

<p>四角形格子で、四角形メッシュを作ればいいのではと思っていたが、実装してみると上のパターンと変わらず、これもダメ（内部的におそらく OpenGL の出力に向けて三角形に割られている）。  </p>

<p>正三角形を並べたメッシュにすると、大部マシになった。これで行きます。  </p>

<h3>積みタスク</h3>

<ul>
<li>gcode リファクタリング（Rhino + Python）  </li>
</ul>
<ul>
<li>フルカラーボクセル環境の準備  </li>
</ul>
<ul>
<li>Auto GUI Tool の開発  </li>
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
