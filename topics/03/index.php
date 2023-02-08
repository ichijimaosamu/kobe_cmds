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
<title>高大連携｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/common_head.php';
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
	include_once '../../common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<ol class="topicpath">
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>">トップ</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . '/'; ?>topics/">DXトピックス</a></li>
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">高大連携</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">高大連携</span></h1>

<section class="topics">
<h2 class="topics__title">高大連携について</h2>

<div class="topics__inner">
<div class="topics__box">
<p class="topics__text">数理・データサイエンスセンターでは、わが国の発展を支えるデータサイエンス人材を輩出するため、中高生を対象としてその所有する３つの資源（データサイエンスに関する知(Knowledge)、情報基盤(Information)、技術(Technology)を有効活用し、大学における学習の基礎となる統計的思考力、判断力、新たな発想力を養う機会を提供しています。<br>
<br>
また、神戸大学附属中等教育学校の「データサイエンスⅠ・Ⅱ」の授業開発指導、生徒への課題研究への助言などを通して、文部科学省より認定されたスーパーサイエンスハイスクール事業(SSH事業)の運営にも協力し、令和３年度以降その成果を教員対象の研修会や授業研究会の実施、生徒対象のPBLコンテストの開催などを通じて、全国の高等学校に成果を還元していく予定です。</p>

<h3 class="topics__subtitle">関連ニュース</h3>
<ul class="topics__link">
<li class="topics__link__item"><a href="http://www.cmds.kobe-u.ac.jp/events/2022/2022_school_student_ds_contest/index.html" target="_blank" rel="noopener">第2回「中学生・高校生データサイエンスコンテスト」(2022/06/17)</a></li>
<li class="topics__link__item"><a href="http://www.cmds.kobe-u.ac.jp/events/2021/2021_school_student_ds_contest/index.html" target="_blank" rel="noopener">第1回「中学生・高校生データサイエンスコンテスト」(2021/05/26)</a></li>
</ul>

<h3 class="topics__subtitle">連携校関連情報</h3>
<h4 class="topics__subtitle2"><a href="https://www.edu.kobe-u.ac.jp/kuss-top/" target="_blank" rel="noopener">神戸大学附属中等教育学校</a></h4>
<ul class="topics__link">
<li class="topics__link__item"><a href="http://www.cmds.kobe-u.ac.jp/news/2021/2021_fuzoku/index.html" target="_blank" rel="noopener">附属中等教育学校の生徒が数理・データサイエンスセンターを訪問しました</a></li>
<li class="topics__link__item"><a href="https://www.kobe-u.ac.jp/NEWS/info/2021_08_27_01.html" target="_blank" rel="noopener">附属中等教育学校生徒が神戸市長を表敬訪問しました</a></li>
<li class="topics__link__item"><a href="https://www.kobe-u.ac.jp/NEWS/info/2021_07_21_03.html" target="_blank" rel="noopener">附属中等教育学校の生徒が「国際統計ポスターコンテスト」のYounger age division（2004年生まれ以下の生徒）部門で優勝しました</a></li>
</ul>
</div>
</div>
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

<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../../common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->

</body>
</html>