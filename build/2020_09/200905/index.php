<?php include('../../../parts/header.php'); ?>
<h1>200905</h1>

<h3>雑感</h3>

<p>昨日に引き続き、ボクセル計算のためのプログラムを書く。  </p>

<p>昨日までの作業で、閉じたポリメッシュと任意の点の内外判定部分ができたので、今日は汎用の中間ファイルのパーサを書く。これはただの文字列処理。  </p>

<h3>フルカラーボクセル環境の準備</h3>

<p>3D モデルの汎用ファイル形式である、アスキーの STL のパーサを実装。  </p>

<p>要素はスペース区切りの上に、インテンドとして先頭にスペースが挟まっているので嫌だなと思ったが、要素の末尾から切り出せば、と気が付いたのでそこからは秒殺。  </p>

<p>頂点だけを抜き出す際に、そのまま抜き出すと重複が含まれる。set 型に入れて、重複を弾こうとしたが、頂点の xyz の各成分でリストにしてしまうと set 型には入れられない。  </p>

<p>xyz の各成分を連結し文字列として、set 型に入れ重複を弾く。その後、文字列から各成分に分けて、リストにすることで重複をを弾くことができた。  </p>

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
