<?php include('../../parts/header.php'); ?>
<h1>200423</h1>

<h3>雑感</h3>

<p>昼に起きた。パソコンに向かって、gcode リファクタリングのプログラムを書く。綺麗に、また、エラーなくと、出来のよいものを目指して苦労した。とりあえず動いた。  </p>

<p>夜、とある配信を見ていたら、気になる話題が 2つほど（作業しながらなのですべては把握できず）。  </p>

<p>夜中、先日（200416）の作業の加工試験が行われていた（遅くまでありがとうございます）。うまく出来た用で何より。  </p>

<h3>配信より気になる話題を 2つ</h3>

<p>1つ目は、自分で作ってみると、見え方や解像度が上がる。話の流れは、自分で DJ としてつなぐつもりで曲を聞いていると解像度が上がる、的な。まさしくこの通りで、やらなきゃ難しさもわからない。  </p>

<p>2つ目は、概要を知っていることと、それらを使ってきちんと高い打点を出せることはぜんぜん違う。後者の人らの存在は尊く、打点は積み重ねによるところが大きいだろう的な話しであった。  </p>

<p>これらは、僕が頻繁に使っている言い回しの「理論上できる」というものに近い。やり方はなんとなくわかるので出来そう、多分出来る、が、精度は不明というもの。  </p>

<p>理論上できるものを実際に出来るかという問題については、正しい知見を多く溜めておいて近しい問題から正確な予想をする、予想が出来なければすばやく試す、ということで解決できる。  </p>

<p>このような話は教員の、「『きちんと』やるのはとても難しいよ」、という表現を思い出す、心に刻みまくっている。  </p>

<h3>gcode リファクタリング（Rhino + Python）</h3>

<p>今回のハードウェアは、Marlin 等の汎用のファームウェアではなく、独自ファームウェアなので gcode の構文がわずかに違う。また、エクストルーダを主軸として扱うので、通常の E とは違う実装が必要っぽい。実際に動く gcode と、Cura から出力した gcode を一行ずつ見比べ、その辺をチェック。  </p>

<p>1層目から 2層目にパスとしてつながっていて出力しながら移動するのか、分かれているので出力せずに移動するのか、で場合分け。少し迷った。  </p>

<p>自分でゼロから gcode を出力する場合は、各行に XYZEF などすべての要素を書いてしまえば良いので、デバッグ用のプレビューが楽なので嬉しい。一般的な gcode では、変位しないパラメータは書かないことが多い。これは手修正の際に便利とかそういうものなのか、メモリの節約なのか、詳細は不明。</p>

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
<li>DailyCodingChallenge Day22  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day23  </li>
</ul>
<ul>
<li>threejs  </li>
</ul>
<ul>
<li>Rhino + cs  </li>
</ul>
<br><br>
<p><a href="../../">back</a></p>
<br>
<?php include('../../parts/footer.php'); ?>
