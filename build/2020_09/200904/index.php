<?php include('../../../parts/header.php'); ?>
<h1>200904</h1>

<h3>雑感</h3>

<p>在宅デー。  </p>

<p>契約が口約束のまま浮いているので、自分の作業をする。  </p>

<p>昨日までちまちまと、Ray-Triangle の交差についてのプログラムを書いていたがなんとなく終わりが見えてきたので、本腰を入れて実装をはじめる。  </p>

<p>なんとなくタイムラプスの動画を撮りつつ作業したが、擬似的に他人の目があるのでネットサーフィンも出来ないし、スマホで適当なインスタの流し見もできないので作業は捗る。  </p>

<h3>フルカラーボクセル環境の準備</h3>

<p>Ray-Triangle で、任意の無限遠のレイと、任意の三角形の交差の有無を調べ、交差があった時に、交差した点とレイの原点からなる直線の長さと、レイの元となる直線の長さを比較すると、Line-Triangle に置き換えることができる。  </p>

<p>これにより、閉じたポリメッシュに対して、任意の点とモデルの外にいる点を用いて、メッシュ面の総当たりで Line-Triangle を行い、交差した回数により、交差が奇数回であればその任意の点はメッシュの中、偶数回であれば外と判別できる。  </p>

<p>この判定手法は、4月ごろに先生に OpenGL の断面描画では、と教えてもらったもので、めっちゃ感動したのを覚えている。  </p>

<p>メッシュの断面の高さで格子点を作りそれを画像として出力することで断面の切断画像が作れるので、明日以降は画像処理のパートを書いていきたい。  </p>

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
