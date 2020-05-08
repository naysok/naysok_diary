<?php include('../../../parts/header.php'); ?>
<h1>200421</h1>

<h3>雑感</h3>

<p>珍しく朝起きた。朝からパソコンに向かう。  </p>

<p>gcode リファクタリングに向けてワークフローを書き出したり、過去のスレッドを読んだりしていた。いくつか整理できたので気分的にも明日からがりがり書きはじめれそう。  </p>

<p>夕方からは Python_STL の実装の続きをする。バイナリについての整理を行って、頂点が数個でのテストでは問題なく動いた。完成したと思いきや、数十万個でのテストを行うと、明らかにパフォーマンスが悪く、ぐぐりまくって何とか完成。  </p>

<p>21時ごろから、高尾さんが主催するオンラインもくもく会に参加した。DailyCodingChallenge をやっている人が多かったが、Python_STL を進めていた。会の最後に成果報告的なタイミングがあり、つぶやき Processing という 280 文字でのクリエイティビティを知る。copy や、erase などあると便利な関数が p5js にはありそうであった。  </p>

<p>DailyCodingChallenge を積みタスクとして積んでいるが、コードを書くのであれば仕事でも利用できるコードを書きたいと思って、発見や気軽さではなく、明日のご飯のために価値のあるコードを書かなければならないという気持ちがあり、僕はなかなか手を付けれていないのであった。基礎練習もしくは失敗してもいい自主練のようなつもりで、うまくバランスをとっていきたいと思うが、できるかはわからない。  </p>

<h3>Python_STL の実装</h3>

<p>前回（042015）、バイナリ書き出しも含め最低限の確認を追え、後2日あれば終わるといっていたものの続きを行う。放置した結果、頭も整理されあっさり仕上がり、テストを行った。上でも書いた通り、頂点が数個でのテストでは問題なく動いていたが、数十万個でのテストを行うと明らかにパフォーマンスが悪く困った。バイナリの連結の部分があやしく、調べてみると + での連結は行うべきではないと書いてあった。文字列はイミュータブルであり、連結を行うと新たにオブジェクトとして生成されるらしい。配列にまとめ、最後に join で連結が正しいようだった。join に修正した結果は、明らかにパフォーマンスが改善し、バイナリに変換することで書き込み量が減るので速度は2倍くらい速くなった。頂点数にもよるがデータサイズも半分から 8分の1 くらいになると思う。  </p>

<p>純粋なライブラリとして動くことが多分確認できたので、他のプロジェクトで使いたい。全体として以外でもモジュール部分で気を使ったつもりなので、Python x 3D まわりの秘伝のタレとして作っていきたい。  </p>

<h3>積みタスク</h3>

<ul>
<li>gcode リファクタリング（Rhino + Python）  </li>
</ul>
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
<li>DailyCodingChallenge Day3  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day4  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day5  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day6  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day7  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day8  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day9  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day10  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day11  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day12  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day13  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day14  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day15  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day16  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day17  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day18  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day19  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day20  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day21  </li>
</ul>
<ul>
<li>threejs  </li>
</ul>
<ul>
<li>Rhino + cs  </li>
</ul>
<br><br>
<p><a href="../../../">back</a></p>
<br>
<?php include('../../../parts/footer.php'); ?>
