
<!-- トップ画像 -->
class="cover-image"
<!-- 要約 -->
class="summary"
<!-- 本文 -->
class="the-text"

画像のサイズは700×400px

文字は小分けにして、pではさむ。
そうすれば、pの下にはmarginうっている。

<p></p>
<h2></h2>

<span　class="single-page"><引用元:出版社,タイトル,巻数,ページ></span>

<span　class="double-page"><引用元:出版社,タイトル,巻数,ページ></span>

.floatcontainer:after{
  content: ".";
  display: block;
  height: 0;
  font-size:0;
  clear: both;
  visibility:hidden;
}

