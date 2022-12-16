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
<li class="news__tab__item -all">すべて</li>
<li class="news__tab__item -notices">NOTICES</li>
<li class="news__tab__item -events">EVENTS</li>
</ul>

<div class="news__box">
<ul class="news__list">
<li class="news__item">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">すべて</span><a href="<?php echo $base_url . '/'; ?>">タイトルが入ります。タイトルが入ります。</a></dd>
</dl>
</li>
<li class="news__item -notices">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">NOTICES</span>タイトルが入ります。タイトルが入ります。</dd>
</dl>
</li>
<li class="news__item -events">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">EVENTS</span>タイトルが入ります。タイトルが入ります。</dd>
</dl>
</li>
<li class="news__item -notices">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">NOTICES</span>タイトルが入ります。タイトルが入ります。</dd>
</dl>
</li>
<li class="news__item -events">
<dl>
<dt class="news__item__date">2022.00.00</dt>
<dd class="news__item__text"><span class="news__item__category">EVENTS</span>タイトルが入ります。タイトルが入ります。</dd>
</dl>
</li>
</ul>

<p class="news__more link-btn"><a href="<?php echo $base_url . '/'; ?>news/">お知らせ一覧</a></p>
</div>

</div>
</div>

<section class="leader">
<div class="leader__inner">
<h2 class="leader__title">次世代XDリーダー育成</h2>

<p class="leader__lead"><span class="leader__lead__inner">現在の職種に関係なく、</span><br>
<span class="leader__lead__inner">どなたでも無理なく、</span><br>
<span class="leader__lead__inner">楽しく学べます。</span></p>
<p class="leader__pic"><img src="<?php echo $base_url . '/'; ?>img/leader_pic.png" alt=""></p>
<p class="leader__text">DX基礎講座は、<br>
DX人材の育成を目的とした<br>
神戸大学が提供するeラーニングプログラムです。<br>
<br>
完全オンラインで、いつでもどこでも学べ、<br>
専門スタッフがわかるまで疑問に答える<br>
「オンライン・オフィスアワー」も設置されています。<br>
データサイエンスの理論とビジネス領域で<br>
活用できるスキルを同時に学べます。<br>
<br>
DXに対して、こんな「不安」はありませんか？<br>
・DXとは何かがわからない、メリットが想像できない<br>
・自社に導入できるのかわからない、自信がない<br>
・まず何を準備して、どうやって進めればいいかわからない<br>
<br>
本プログラムを受講すると、あなたの会社に合う DX取り組み領域と<br>
AI 導入「はじめの一歩」がわかります。<br>
- 自社に合った AI 取組領域 ※を選定できる！<br>
- DX 導入の進め方と、最初に準備すべきことがわかる！<br>
<span class="leader__text__notice">AI 取組領域の例：需要予測、経理業務の最適化、材料調達の最適化、製品不良の自動検知、<br>
機械・設備の予知保全など</span></p>
<p class="leader__pic leader__pic2"><img src="<?php echo $base_url . '/'; ?>img/leader_pic2.gif" alt=""></p>
</div>
</section>

<section class="program">
<div class="program__inner">
<h2 class="program__title">講座プログラム</h2>

<p class="program__lead">本プログラムを受講すると、あなたの会社に合うDX取り組み領域とAI導入「はじめの一歩」がわかります。</p>
<p class="program__more link-btn"><a href="<?php echo $base_url . '/'; ?>program/">講座プログラム一覧</a></p>

<ul class="program__list">
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb1.jpg" alt=""></p>
<dl>
<dt class="program__item__term"><em>データサイエンス・AI基礎</em></dt>
<dd class="program__item__description">インターネット・情報技術の進展により、ビッグデータやＡＩの活用が可能になり社会に新しい価値が生まれ、日常にも大きな変化をもたらしています。</dd>
<dd class="program__item__more">VIEW MORE</dd>
</dl>
</a></li>
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb2.jpg" alt=""></p>
<dl>
<dt class="program__item__term">Pyton基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語として世界で広く普及しているPythonを採り上げ，演習を通してプログラミングの基礎，および，データサイエンスの実践方法について学習します。</dd>
<dd class="program__item__more">VIEW MORE</dd>
</dl>
</a></li>
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb3.jpg" alt=""></p>
<dl>
<dt class="program__item__term">Pyton基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語として世界で広く普及しているPythonを採り上げ，演習を通してプログラミングの基礎，および，データサイエンスの実践方法について学習します。</dd>
<dd class="program__item__more">VIEW MORE</dd>
</dl>
</a></li>
</ul>
</div>
</section>

<section class="lecturer">
<div class="lecturer__inner">
<h2 class="lecturer__title">担当講師について</h2>

<p class="lecturer__lead">DXって何なのか？<br>
がわかります</p>
<p class="lecturer__text">完全オンラインで、いつでもどこでも学べ、<br>
専門スタッフがわかるまで疑問に答える<br>
「オンライン・オフィスアワー」が設置されています。</p>
</div>
</section>

<section class="topics">
<div class="topics__inner">
<h2 class="topics__title">TOPICS<small>DXトピックス</small></h2>

<ul class="topics__list">
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">神戸データサイエンス操練所</span>2022.00.00</dt>
<dd class="topics__item__description"><em>タイトルが入りますタイトルが入ります</em></dd>
</dl>
</a></li>
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">高大連携</span>2022.00.00</dt>
<dd class="topics__item__description">タイトルが入りますタイトルが入ります</dd>
</dl>
</a></li>
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">DXプロジェクト</span>2022.00.00</dt>
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