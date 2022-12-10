<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/base_url.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/base_url.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>CMDS 神戸大学｜社会人のためのDX基礎講座</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/top.css" />
</head>
<body id="top" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="container">
<!--container-->

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<main role="main">

<article class="main">
<!--main-->

<div class="main__visual">
<h1 class="main__visual__title"><img src="<?php echo $base_url . '/'; ?>img/main_visual_title.png" alt="社会人のためのDX基礎講座"></h1>

<div class="news">
<h2 class="news__title">NEWS<small>お知らせ</small></h2>

<ul class="news__tab">
<li class="news__tab__item">すべて</li>
<li class="news__tab__item">カテゴリー</li>
<li class="news__tab__item">カテゴリー</li>
</ul>

<div class="news__box">
<ul class="news__list">
<li class="news__item">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">お知らせ</span><a href="<?php echo $base_url . '/'; ?>">タイトルが入ります。タイトルが入ります。</a></dd>
</dl>
</li>
<li class="news__item">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">カテゴリー</span>タイトルが入ります。タイトルが入ります。</dd>
</dl>
</li>
<li class="news__item">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">カテゴリー</span>タイトルが入ります。タイトルが入ります。</dd>
</dl>
</li>
</ul>

<p class="news__more"><a href="<?php echo $base_url . '/'; ?>news/">お知らせ一覧</a></p>
</div>

</div>
</div>

<section class="leader">
<div class="leader__inner">
<h2 class="leader__title">次世代XDリーダー育成</h2>

<p class="leader__lead">現在の職種に関係なく、<br>
どなたでも無理なく、<br>
楽しく学べます。</p>
<p class="leader__text">DX基礎講座は、<br>
DX人材の育成を目的とした<br>
神戸大学が提供するeラーニングプログラムです。<br>
<br>
完全オンラインで、いつでもどこでも学べ、<br>
専門スタッフがわかるまで疑問に答える<br>
「オンライン・オフィスアワー」も設置されています。<br>
現在の職種に関係なく、どなたでも無理なく、<br>
楽しく学べます。<br>
<br>
さあ、あなたもDX人材の仲間入りです！</p>
</div>
</section>

<section class="curriculum">
<div class="curriculum__inner">
<h2 class="curriculum__title">カリキュラム</h2>

<p class="curriculum__lead">本プログラムを受講すると、あなたの会社に合うDX取り組み領域とAI導入「はじめの一歩」がわかります。</p>
<p class="curriculum__more"><a href="<?php echo $base_url . '/'; ?>curriculum/">カリキュラム一覧</a></p>

<ul class="curriculum__list">
<li class="curriculum__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="curriculum__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="curriculum__item__term"><em>データサイエンス・AI基礎</em></dt>
<dd class="curriculum__item__description">インターネット・情報技術の進展により、ビッグデータやＡＩの活用が可能になり社会に新しい価値が生まれ、日常にも大きな変化をもたらしています。</dd>
<dd class="curriculum__item__more">VIEW MORE</dd>
</dl>
</a></li>
<li class="curriculum__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="curriculum__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="curriculum__item__term">Pyton基礎演習</dt>
<dd class="curriculum__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語として世界で広く普及しているPythonを採り上げ，演習を通してプログラミングの基礎，および，データサイエンスの実践方法について学習します。</dd>
<dd class="curriculum__item__more">VIEW MORE</dd>
</dl>
</a></li>
<li class="curriculum__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="curriculum__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="curriculum__item__term">Pyton基礎演習</dt>
<dd class="curriculum__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語として世界で広く普及しているPythonを採り上げ，演習を通してプログラミングの基礎，および，データサイエンスの実践方法について学習します。</dd>
<dd class="curriculum__item__more">VIEW MORE</dd>
</dl>
</a></li>
</ul>
</div>
</section>

<section class="lecturer">
<div class="lecturer__inner">
<h2 class="lecturer__title">担当講師について</h2>

<p class="lecturer__lead">どなたでも無理なく、<br>
楽しく学べます。</p>
<p class="lecturer__text">この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。<br>
<br>
この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。<br>
この文章はダミーです。繰り返します。この文章はダミーです。</p>
</div>
</section>

<section class="topics">
<div class="topics__inner">
<h2 class="topics__title">TOPICS<small>DXトピックス</small></h2>

<ul class="topics__list">
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">お知らせ</span>2022.00.00</dt>
<dd class="topics__item__description"><em>タイトルが入りますタイトルが入ります</em></dd>
</dl>
</a></li>
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">イベント</span>2022.00.00</dt>
<dd class="topics__item__description">タイトルが入りますタイトルが入ります</dd>
</dl>
</a></li>
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">お知らせ</span>2022.00.00</dt>
<dd class="topics__item__description">タイトルが入りますタイトルが入ります</dd>
</dl>
</a></li>
</ul>

<p class="topics__more"><a href="<?php echo $base_url . '/'; ?>topics/">トピックス一覧</a></p>
</div>
</section>

<section class="links">
<div class="links__inner">
<h2 class="links__title">LINKS<small>関連リンク</small></h2>

<ul class="links__list">
<li class="links__item"><a href="#" target="_blank" rel="noopener"><img src="https://placehold.jp/340x90.png" alt=""></a></li>
<li class="links__item"><a href="#" target="_blank" rel="noopener"><img src="https://placehold.jp/340x90.png" alt=""></a></li>
<li class="links__item"><a href="#" target="_blank" rel="noopener"><img src="https://placehold.jp/340x90.png" alt=""></a></li>
</ul>
</div>
</section>

<!--/main-->
</article>

</main>

<!--/content-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/footer.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/footer.php');
}
?>

<!--/container-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/common_script.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_script.php');
}
?>

<?php if(false) { ?>
<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->
<?php } ?>

<script src="<?php echo $base_url . '/'; ?>js/top.js"></script>
</body>
</html>