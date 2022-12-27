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
<body id="program" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>program/">講座プログラム</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">データサイエンス AI・基礎</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"></h1>

<div class="main__visual">
<h2 class="main__visual__title"></h2>


</div>

<section class="leader">
<div class="leader__inner">
<h2 class="leader__title"></h2>



</div>
</section>

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

<?php if(false) { ?>
<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->
<?php } ?>

</body>
</html>