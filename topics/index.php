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
<title>DXトピックス｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/topics.css" />
</head>
<body id="topics" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">DXトピックス</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">DXトピックス</span></h1>

<ul class="topics__list">
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>topics/02/">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/topics_item_thumb1.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">神戸データサイエンス操練所</span>2022.00.00</dt>
<dd class="topics__item__description"><em>神戸データサイエンス操練所について</em></dd>
</dl>
</a></li>
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>topics/03/">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/topics_item_thumb2.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">高大連携</span>2022.00.00</dt>
<dd class="topics__item__description">高大連携について<br><br></dd>
</dl>
</a></li>
<li class="topics__item"><a href="<?php echo $base_url . '/'; ?>topics/01/">
<p class="topics__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/topics_item_thumb3.jpg" alt=""></p>
<dl>
<dt class="topics__item__term"><span class="topics__item__category">DXプロジェクト</span>2022.00.00</dt>
<dd class="topics__item__description">IoTとエージェントを活用した<br>高齢者の見守り実証実験</dd>
</dl>
</a></li>
</ul>


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