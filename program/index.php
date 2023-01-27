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
<title>講座プログラム｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_head.php';
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
	include_once '../common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<ol class="topicpath">
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>">トップ</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">講座プログラム</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">講座プログラム</span></h1>

<ul class="program__list">
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>program/01/">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb1.jpg" alt=""></p>
<dl>
<dt class="program__item__term"><em>データサイエンス・AI基礎</em></dt>
<dd class="program__item__description">インターネット・情報技術の進展により、ビッグデータやＡＩの活用が可能になり社会に新しい価値が生まれ、日常にも大きな変化をもたらしています。</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
</dl>
</a></li>
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>program/02/">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb2.jpg" alt=""></p>
<dl>
<dt class="program__item__term">Pyton基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語とし</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
</dl>
</a></li>
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>program/02/">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb3.jpg" alt=""></p>
<dl>
<dt class="program__item__term">Pyton基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語とし</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
</dl>
</a></li>
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>program/02/">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb3.jpg" alt=""></p>
<dl>
<dt class="program__item__term">Pyton基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語とし</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
</dl>
</a></li>
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>program/02/">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb3.jpg" alt=""></p>
<dl>
<dt class="program__item__term">Pyton基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語とし</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
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