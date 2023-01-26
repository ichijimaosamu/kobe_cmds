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