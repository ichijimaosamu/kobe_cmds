<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/base_url.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/base_url.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>講座プログラム｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/program.css" />
</head>
<body id="program" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="container">
<!--container-->

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<ol class="topicpath">
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>">トップ</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>program/">講座プログラム</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">データサイエンス AI・基礎</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">講座プログラム</span></h1>

<section class="program">
<div class="program__upper">
<h2 class="program__title">データサイエンス AI・基礎</h2>

<dl class="program__box">
<dt class="program__box__term">社会で起きている変化、 データ AI利活用の<br>
最新動向や活用領域、実用事例に触れ、 AI倫理、プライバシー保護など留意事項を理解した上で適切にデータ解析する基礎を習得します。</dt>
<dd class="program__box__description">この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。</dd>
</dl>

<p class="program__pic"><img src="<?php echo $base_url . '/'; ?>program/01/img/program_pic.jpg" alt=""></p>
</div>

<div class="program__lower">
<section class="summary box">
<h3 class="box__title">概要</h3>

<div class="summary__inner">
<ul class="summary__list">
<li class="summary__item">
<dl>
<dt class="summary__item__term">受講対象者</dt>
<dd class="summary__item__description">役員層・事業企画者・管理職層</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">テーマ</dt>
<dd class="summary__item__description">社会で起きている変化、 データ AI利活用の最新動向や活用領域、 実用事例に触れ、 AI倫理、 プライバシー保護など留意事項を理解した上で適切にデータ解析する基礎を習得します。</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">実施形態</dt>
<dd class="summary__item__description">学習時間15時間<br>
オンデマンド講義 事前学習1時間 + リアルタイム講義 (遠隔) 1時間</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">定員</dt>
<dd class="summary__item__description">30名</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">開催曜日</dt>
<dd class="summary__item__description">水・金 16:00-17:00</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">対応する試験・検定・資格</dt>
<dd class="summary__item__description">なし</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">修了証発行の有無</dt>
<dd class="summary__item__description">なし</dd>
</dl>
</li>
</ul>
</div>
</section>

<section class="schedule box">
<h3 class="box__title">スケジュール</h3>

<ol class="schedule__list">
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第1回</dt>
<dd class="schedule__item__description">イントロダクション、 社会で起きている変化</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第2回</dt>
<dd class="schedule__item__description">社会におけるデータサイエンス. AI利活用</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第3回</dt>
<dd class="schedule__item__description">データAI利活用の現場 最新動向</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第4回</dt>
<dd class="schedule__item__description">AI利活用における留意事項</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第5回</dt>
<dd class="schedule__item__description">データリテラシー・データを読む</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第6回</dt>
<dd class="schedule__item__description">データリテラシー・データを説明する</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第7回</dt>
<dd class="schedule__item__description">データリテラシー・データを扱う</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第8回</dt>
<dd class="schedule__item__description">確認テスト</dd>
</dl>
</li>
</ol>
</section>
</div>

</section>


<section class="lecturer">
<h2 class="lecturer__title">担当講師について</h2>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/01/img/lecturer_pic.png" alt="お名前お名前"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">お名前お名前</dt>
<dd class="lecturer__info__position">神戸大学工学部 研究科<br>
専攻専攻</dd>
<dd class="lecturer__info__text">紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。</dd>
</dl>
</div>
</section>


<section class="contact">
<h2 class="contact__title"><span class="contact__title__category">データサイエンス AI・基礎</span><br>
お申し込みについて</h2>

<p class="contact__text">この文章はダミーです繰り返します。この文章はダミーです繰り返します。<br>
紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。</p>
<p class="contact__btn link-btn"><a href="<?php echo $base_url . '/'; ?>contact/">お申し込みはこちらから</a></p>
</section>


<!--/main-->
</article>

</main>

<!--/content-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/footer.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/footer.php');
}
?>

<!--/container-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/common_script.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_script.php');
}
?>

<?php if(false) { ?>
<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->
<?php } ?>

</body>
</html>