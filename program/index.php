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

<div class="tab">

<ul class="tab__list">
<li class="tab__item">2022年度</li>
<?php if(false) { ?>
<li class="tab__item">2021年度</li>
<?php } ?>
</ul>

<div class="tab__group">
<div class="tab__content">
<h2 class="tab__content__title">DX基礎講座</h2>
<p class="tab__content__lead">DX基礎講座は、DX人材の育成を目的とした神戸大学が提供するeラーニングプログラムです。<br>
完全オンラインで、いつでもどこでも学べ、専門スタッフがわかるまで疑問に答える「オンライン・オフィスアワー」も設置されています。<br>
現在の職種に関係なく、どなたでも無理なく、楽しく学べます。<br>
さあ、あなたもDX人材の仲間入りです！</p>

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
<dt class="program__item__term">Python基礎演習</dt>
<dd class="program__item__description">データサイエンスの効果的な実践には，コンピュータ・ソフトウェアの活用が必須です。本講義では，データサイエンスのためのプログラミング言語とし</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
</dl>
</a></li>
</ul>
</div>

<?php if(false) { ?>
<div class="tab__content">
<ul class="program__list">
<li class="program__item"><a href="<?php echo $base_url . '/'; ?>program/01/">
<p class="program__item__thumb"><img src="<?php echo $base_url . '/'; ?>img/program_item_thumb1.jpg" alt=""></p>
<dl>
<dt class="program__item__term"><em>データサイエンス・AI基礎</em></dt>
<dd class="program__item__description">インターネット・情報技術の進展により、ビッグデータやＡＩの活用が可能になり社会に新しい価値が生まれ、日常にも大きな変化をもたらしています。</dd>
<dd class="program__item__more"><span class="program__item__more__inner">VIEW MORE</span></dd>
</dl>
</a></li>
</ul>
</div>
<?php } ?>

</div>

</div>

<section class="summary box">
<h3 class="summary__title">概要</h3>

<div class="summary__inner">
<ul class="summary__list">
<li class="summary__item">
<dl>
<dt class="summary__item__term">募集期間</dt>
<dd class="summary__item__description">2022年11月8日(火) &ndash; 2022年12月16日(金)</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">開講期間</dt>
<dd class="summary__item__description">2023年1月10日(火) &ndash; 2023年2月28日(火)</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">受講形式</dt>
<dd class="summary__item__description">eラーニングによる自習形式<br>
+ オンライン・オフィスアワー<br>
※毎週水曜17時-19時にZOOMで質問に答えます。</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">対象者</dt>
<dd class="summary__item__description">主に企業や自治体、教育機関などの就業者を対象とし、<br>
技術系部署に限らず、経営層、事務系各部署でデータサイエンス・AIを使って<br>
組織内のDX推進を担う（担うことを目指す）人材を広く対象とします。</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">定員</dt>
<dd class="summary__item__description">500名</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">受講料</dt>
<dd class="summary__item__description">１科目コース（15時間）10,000円※<br>
２科目コース（30時間）20,000円※<br>
※教育機関の教職員には優待枠がありますので、<br>
　お問い合わせください（条件設定あり）<br>
※団体申請をご希望の場合はお問い合わせください</dd>
</dl>
</li>
<li class="summary__item">
<dl>
<dt class="summary__item__term">申込方法</dt>
<dd class="summary__item__description">以下のURLで申込フォームにアクセスし、お申込みください。<br>
<a href="https://forms.gle/RHkH1bqM5Pzt8Btn6" target="_blank" rel="noopener">https://forms.gle/RHkH1bqM5Pzt8Btn6</a></dd>
</dl>
</li>
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

<script src="<?php echo $base_url . '/'; ?>js/program.js"></script>

</body>
</html>