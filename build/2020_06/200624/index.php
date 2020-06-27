<?php include('../../../parts/header.php'); ?>
<h1>200624</h1>

<h3>雑感</h3>

<p>昨日、現場で感じた不便だった点を、昨日のデータをいじくりながら試す。すぐ重くなるので本当につらいところがある。  </p>

<h3>gcode リファクタリング（Rhino + Python）</h3>

<p>昨日を分割し、逐一試す。rhinoscriptsyntax から RhinoCommon に置き換えたり、重い計算をするタイミングなり、いくつか試す。  </p>

<p>普通に、処理の順番を間違えてめっちゃ重い処理が発生していた。線を移動してから分割すればいいところで、線を分割してから移動させていた。機能追加の際に、精査していなかった...  </p>

<p>さらに、もう一個大きなミスがあった。gcode 書き出しに必要な文字列処理が重い処理で、これをパラメータ変更の際に都度都度やっていた。書き出しの際にだけやれば良い...</p>

<h3>積みタスク</h3>

<ul>
<li>gcode リファクタリング（Rhino + Python）  </li>
</ul>
<ul>
<li>フルカラーボクセル環境の準備  </li>
</ul>
<ul>
<li>Writer Plus Ai 検証  </li>
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
<li>DailyCodingChallenge Day24  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day25  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day26  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day27  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day28  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day29  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day30  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day31  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day32  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day33  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day34  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day35  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day36  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day37  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day38  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day39  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day40  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day41  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day42  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day43  </li>
</ul>
<ul>
<li>DailyCodingChallenge Day44  </li>
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
