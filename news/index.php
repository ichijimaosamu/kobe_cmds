<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/base_url.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/base_url.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>最新情報｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/news.css" />
</head>
<body id="news" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="container">
<!--container-->

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<ol class="topicpath">
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>">トップ</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">最新情報</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">最新情報</span></h1>

<div class="news">
<h2 class="news__title">NEWS<small>お知らせ</small></h2>

<ul class="news__tab">
<li class="news__tab__item -all">すべて</li>
<li class="news__tab__item -notices">NOTICES</li>
<li class="news__tab__item -events">EVENTS</li>
</ul>

<div class="news__box">
<ul class="news__list">
<li class="news__item -events">
<dl>
<dt class="news__item__date">2023.02.08</dt>
<dd class="news__item__description"><span class="news__item__category">EVENTS</span><a href="https://duex.jp/news/detail/143" target="_blank" rel="noopener">［関西地区コンソーシアム］<br>
数理人材育成協会（HRAM）では、2023年2月20日（月）18:30～Zoomウェビナーにて、2023年度のガイダンスを行います。HRAMでは、学生・社会人を対象に、数理データサイエンスに関連したe-Learning教材の提供、公開講座などを実施しています。ガイダンス視聴をご希望の方は、お申込みください（申込締切2/15）。</a></dd>
</dl>
</li>
<li class="news__item -events">
<dl>
<dt class="news__item__date">2023.01.31</dt>
<dd class="news__item__description"><span class="news__item__category">EVENTS</span><a href="http://www.cmds.kobe-u.ac.jp/events/2022/2022_fd_symposium/index.html" target="_blank" rel="noopener">2023年2月21日(火)13:00から、Zoomによる「数理・データサイエンス・AI教育 FDシンポジウム」を「大学に期待される社会人DXリカレント教育」をテーマに開催いたします。多くの皆様のご参加を心よりお待ち申し上げております。</a></dd>
</dl>
</li>
<li class="news__item -notices">
<dl>
<dt class="news__item__date">2023.01.12</dt>
<dd class="news__item__description"><span class="news__item__category">NOTICES</span><span class="news__item__text">eラーニングプログラム「DX 基礎講座」が1月10日から専用の学習管理システム (LMS) 上で受講可能になりました。申し込みをされた方には LMS へログインするための通知をメールにて送付しておりますのでご確認ください。まだ通知を受け取っていないと思われる方は、こちらまでお問い合わせください。</span></dd>
</dl>
</li>
</ul>

</div>

</div>


<!--/main-->
</article>

</main>

<!--/content-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/footer.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/footer.php');
}
?>

<!--/container-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_script.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_script.php');
}
?>

<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->

</body>
</html>