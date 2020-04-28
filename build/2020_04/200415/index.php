<?php include('../../parts/header.php'); ?>
<h1>200415</h1>

<h3>雑感</h3>

<p>昼に起きた。机に向かい、なんとなく今月の収支を確認し、ちょっとつらくなってしまった。つらくなっても、支出を減らすことと、今月がんばること、何かネタ探して仕事を増やすことくらいしか方法がない。ニュースとして、ハーバード大が 2022年まで外出自粛と予測したみたいなものを目にする、本当に困るな。  </p>

<p>午後から、ghPython、ghCPython でのいくつかのテストをした。ghPython では、モジュール側に全部書いても問題なく動きそうとわかり、まあ悪くはない。モジュールとして、いくつか俺ライブラリが溜まってくると捗ると思う。再利用性もこっちのほうが良い。ghCPython は今日軽く見た限り、配列に対して思ってた挙動をせずにダメかもしれないと思った。  </p>

<p>続けて、STL のバイナリでの入出力について調べる。バイナリ書き出しの実装に合わせて、先日、設計が甘い状態で適当に作ってしまった3次元テクスチャライブラリから、Python で STL を読み書きするためのコアみたいな機能だけ取り出し整理することとした。</p>

<h3>ghPython, ghCPython</h3>

<p>内部のエディタが不便 + 分割してコードを書けず複雑な処理を書くのがつらいので、すべてモジュールとして書くための環境をテスト。ghPython コンポーネントはインターフェースとして使うだけで、入出力だけにしようと思う。ひとつ行き詰まった点は、モジュールの変更が反映されず詰んだかと思ったが、モジュールを強制的にリロードすることで解決できて安心。  </p>

<p>CPython コンポーネントは、中で作った二次元配列がコンポーネントから出すと、ただのリストに出力されていた。これでは結構不便だと思うが、今後要確認。わかっていれば次につなぐ ghPython 上で対応すればいいのか。  </p>

<h3>Python_STL</h3>

<p>画像処理による3次元テクスチャライブラリのときに、アスキーの STL が重すぎたので、バイナリの STL が気になっていた。昨日なんとなくヒントを貰ったので実装する。ついでに、というかベースはテクスチャライブラリから持ってくるので、ぐちゃぐちゃに書きあげてしまった部分を整理し、ピュアなコアライブラリを一回作ろうと思った。機能に合わせ分割し、必要な機能を追加で設計し、さらにアスキーとバイナリでも共通化できるところなど押さえた。  </p>

<p>整理しがてら、バイナリ STL の仕様を調べ苦労しつつもとりあえず書いてみると、うまく書き出しできていた。整理をもう少しと、いくつかテストして完成として、あと2日間くらいで終わると思う。実線投入の機会を探そう。  </p>

<h3>積みタスク</h3>

<ul>
<li>Python_STL の実装  </li>
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
