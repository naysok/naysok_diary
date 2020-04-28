<?php include('../../parts/header.php'); ?>
<h1>200409</h1>

<h3>所感</h3>

<p>昼に起きた。昨日の続きのフルカラーを進める。設計が甘く、何度書き始めても着地点が見えないような感じでこれではダメと思い、必要な工程を考え、昨日までの RGB &gt;&gt; CMYK の部分と、プリント用の連番画像の生成の部分でコードを分割した。これが多少うまくいって、最低限動くことが確認できた。  </p>

<p>フルカラー以外が何も進んでいないので、他のタスクも同時並行でできるようにしたい。  </p>

<p>あとは、本当に朝型生活にしたい（と書いているがすでに28時半）。  </p>

<h3>フルカラー</h3>

<p>上にも描いたように設計が甘く、全然着地できない。一度手を止めて、画像の合成の際に、先にやること最後にやることを分けて、コードも分割してとりあえず動くところまで来た全ピクセルを走査するのは、スマートでないが、これは裏切らないので一旦これで。  </p>

<p>今は、プリントに入稿する際の状態がわからないので、必要に応じて修正できるように、結構冗長な実装をしている。機械側の入稿に関して仕様が把握できたら、形状を作るためのスライスした連番画像の方を、透過画像として、上からペーストするだけで面倒をみれるようにしようと思う。  </p>

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
