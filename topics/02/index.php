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
<title>神戸データサイエンス操練所｜CMDS 神戸大学</title>
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
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">神戸データサイエンス操練所</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">神戸データサイエンス操練所</span></h1>

<section class="topics">
<h2 class="topics__title">神戸データサイエンス操練所について</h2>

<div class="topics__inner">
<div class="topics__box">
<h3 class="topics__subtitle">「尖ったデータサイエンティスト」を育成する<br>「神戸データサイエンス操練所」</h3>
<p class="topics__text">データサイエンス・人工知能（AI）に関して志を高くもつ人であれば、年齢や学問分野は不問です。<br>
数学に苦手意識がないことと、Pythonを使えることが必須ですが、今でなくても、近い将来、苦手意識を克服し、Pythonも使えるようになると決意する人も対象です。</p>

<div class="topics__flex">
<p class="topics__text">1）データサイエンスや人工知能(AI)を自分のものにしたい人<br>
2）企業や自治体がもつ「本物の社会課題」に挑み、本物のデータを使って、真剣勝負で結果を出したい(出せるようになりたい)人<br>
3）企業や自治体との秘密保持を誓約でき、個人情報や企業秘密などを含む機微なデータを慎重に取り扱い、人の役に立つことに使いたいと思う人</p>
<p class="topics__pic"><a href="http://www.cmds.kobe-u.ac.jp/kobe_ds_sorenjo/img/kobe_ds_training_center.pdf" target="_blank" rel="noopener"><img src="img/pic1.jpg" width="340" alt=""></a></p>
</div>

<h3 class="topics__subtitle">先輩からのメッセージ</h3>
<h4 class="topics__subtitle2"><em>岡部 桃子</em>（2021年大学院農学研究科博士課程前期課程修了、神戸データサイエンス操練所１期生）</h4>
<p class="topics__text">私は2015年に農学部資源生命科学科応用植物学コースに入学しました。同じ農学部の生産環境工学コースの統計学の授業を履修したことでデータサイエンスに興味を持つようになり、数理・データサイエンスセンターの授業等を履修するようになりました（当時は今のようなカリキュラムはありませんでしたが）。<br>
<br>
大学院に進学してからもいくつかのカリキュラムに参加させていただき、その一つが神戸データサイエンス操練所でした。操練所では勉強会や企業案件に参加しました。企業案件の内容は守秘義務があるため詳しく書くことはできませんが、企業の中には実際にどのようなデータがありどのように利用されているのかを知ることができて興味深かったです。自分の研究では利用したことのない手法だったので始める前は不安がありましたが、一緒に企業案件に取り組んでくださった先生方が丁寧にご指導くださったので安心して取り組めました。また、案件の内容は研究室での研究とは全く異なる分野だったものの、そこで学んだ手法については自分の研究分野においても参考になりました。自分の興味を持つ分野への就職にもつながり、本当に参加してよかったと思います。<br>
<br>
後輩の皆さんが神戸データサイエンス操練所で学び多い経験ができるよう応援しています。</p>

<h3 class="topics__subtitle">募集要項</h3>
<p class="topics__text">【対象】<br>
データサイエンス・人工知能（AI）に対して志を高く持つ意識の高い学生を求めます<br>
【活動内容】<br>
・基礎理論の習得（勉強会やセミナーを通して）<br>
・Pythonなど言語スキル習得<br>
・共同研究（教員・学生・社会人合同でのチーム編成による実課題への取り組み）<br>
【募集について】<br>
募集については、facebookおよび数理・データサイエンスセンターのニュース欄にてお知らせします<br>
【連絡先】<br>
詳細については、小澤 誠一 教授までお問い合わせください<br>
ozawasei[at]kobe-u.ac.jp（※ [at]を＠に変えて送信してください）</p>

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