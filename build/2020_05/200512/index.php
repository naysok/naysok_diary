<?php include('../../../parts/header.php'); ?>
<h1>200512</h1>

<h3>雑感</h3>

<p>朝起きて、コートのクリーニングを出しに外出した。もう少し部屋の荷物を片付けたい。  </p>

<p>部屋の環境整備欲の高まりに合わせて、浴室の掃除を一気に行う。壁や床をちゃんと磨くと浴室全体の白さが増したように感じる。月一くらいでちゃんと掃除したいと思う。  </p>

<p>Axolotl をいじくる。自分で昨日までやっていたものと似ていて、それぞれの入力で距離を計算し足し合わせる。メッシュ化のマーチングキューブ（？）の計算も早くすごいなと思った。僕の実装と明らかに違う点が一つあり、解像度を入力して格子点の計算をするのは最後のメッシュ化のところで、足し合わせのコンポーネントではでは内部的に特に何もしていないように見える。距離として出力されているものは構造体的なもので、おそらく足し合わせコンポーネントでは計算はせず式の連結だけを行い、メッシュ化の時点で格子点を計算し足し算されているのだろう。  </p>

<p>計算が早くすごいなと思って、GitHub にて公開されているソースコードを読む。Python のコードが公開されていて、数を見る限り、コンポーネントそのもののコードではないので、コンポーネントの実装を想像しながらコードを読む。ざっくり読む感じ、ジオメトリを扱うプログラムから、SDF (Signed Distance Fields) というものを出力し、 iOctree というプログラムで Subdivided Octree に変換し、iMarchingCubes というプログラムでメッシュ化している。Signed Distance Fields は、符号付き距離場というもので、Octree は、八分木という計算軽量化の手法らしい。  </p>

<p>ソースは MIT ライセンスなので、書き換えて Rhino ではないところでも使ってもいいと思う。プログラムの転用や書き換えについてや、細かな技術の調査は、また今度時間のある時に掘り下げようと思う。  </p>

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
