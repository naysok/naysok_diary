<?php include('../../parts/header.php'); ?>
<h1>200402</h1>

<h3>雑感</h3>

<p>昼12時に起きた。シャワーを浴びて、研究室に。先生や先輩後輩と適当な世間話をしつつ、研究では、仕事や作業ではない少し遠い目的に向かってやるんだな、なんか久しぶりだなと思った。  </p>

<p>中古で購入したモニタの動作確認をした。MacBooko Pro(Mid 2014) から Display Port or VGA 入力のディスプレイに上手く繋げれていなかったが、Mini Display Port &gt;&gt; Display Port で解決した。  </p>

<p>帰りに近所のスーパーに。パスタは無い。少し離れた別のスーパーに向かってパスタを確保した。出て行くお金を絞らないとと、商品の値段を見ながらお菓子やジュースは我慢した。  </p>

<p>積みタスクは減っていないが、趣味で作ろうとしていた日報システムの実装（Python）ができた。明日は頑張りたい。  </p>

<p>明日は、雑用で FabCafe に。  </p>

<h3>日報システムの実装</h3>

<p>昨日、なんとなく設計した機能を実装する。合わせて、HTML ファイルを、PHP で書いて、コードの共通化を図ることを試した。Python でざっくり書いて2時間くらいでできた。markdown から HTML への変換は、Python-Markdown とかいうライブラリで秒でできた。あとは、ファイル名を走査するとか、実行時に何をするかのフローを想定し適当に if 分で書いて完成。  </p>

<h3>PHP</h3>

<p>include を用いて、ファイル分割しコードの共通化が簡単にできた。デバッグ環境として、ビルドインウェブサーバというのを知った。CUI から、簡易的なサーバを立てられる。MAMP みたいなアプリケーションがいらないのでとても良さそう。  </p>

<h3>積みタスク</h3>

<ul>
<li>フルカラーボクセル環境の準備  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day1  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day2  </li>
</ul>
<ul>
<li>threejs  </li>
</ul>
<ul>
<li>gcode リファクタリング（Rhino + Python）  </li>
</ul>
<ul>
<li>Rhino + cs  </li>
</ul>
<br><br>
<p><a href="../../">back</a></p>
<br>
<?php include('../../parts/footer.php'); ?>
