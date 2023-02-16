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
<dt class="program__box__term">Society 5.0がもたらす社会の変化、データ・AI利活用の最新動向や活用、実用事例に触れ、AI倫理、プライバシー保護などを理解した上で、適切にデータ解析するスキルを習得します。また、エクセルを使った、実践的なデータ解析演習も学べます。</dt>
<dd class="program__box__description"></dd>
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

<section class="schedule box">
<h3 class="box__title">スケジュール</h3>

<ol class="schedule__list">
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第1回</dt>
<dd class="schedule__item__description">社会で起きている変化<br>
・データサイエンス・AIが注目される背景<br>
・Scoiety 5.0とデータサイエンス・AI</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第2回</dt>
<dd class="schedule__item__description">社会におけるデータサイエンス・AI利活用<br>
・データサイエンス・AIの概要<br>
・データ解析のフローと基本用語<br>
・データ解析の種類：多変量解析、機械学習</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第3回</dt>
<dd class="schedule__item__description">データAI利活用の現場・最新動向<br>
・データ利活用事例（インタビュー）<br>
・各業種におけるAI利活用</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第4回</dt>
<dd class="schedule__item__description">AI利活用における留意事項<br>
・データ利活用の現状とリスク<br>
・プライバシー保護技術と匿名・仮名加工<br>
・AI・データ倫理と人間中心のAI社会原則</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第5回</dt>
<dd class="schedule__item__description">データリテラシー・データを読む<br>
・データ分布・代表値・偏差値・基本統計量<br>
・不偏分散と標本分散、相関係数<br>
・相関と因果</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第6回</dt>
<dd class="schedule__item__description">データリテラシー・データを説明する<br>
・データの可視化手法：各種グラフ、散布図<br>
・主成分分析と高次元データの可視化<br>
・時系列データの可視化・情報抽出</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第7回</dt>
<dd class="schedule__item__description">データリテラシー・データを扱う<br>
・単回帰分析・重回帰分析<br>
・深層学習入門と過学習・次元の呪い<br>
・基本統計量を使ったデータ分析演習</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第8回</dt>
<dd class="schedule__item__description">確認テスト（オンライン）</dd>
</dl>
</li>
</ol>
</section>
</div>

</section>


<section class="lecturer">
<h2 class="lecturer__title">担当講師について</h2>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/01/img/ozawa_seiichi.jpg" alt="小澤 誠一"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">小澤 誠一<small>教授</small><span class="en">Ozawa Seiichi</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
機械学習/ビッグデータ解析/セキュリティ<br>
■研究業務内容：<br>
機械学習をビッグデータ解析に応用して、サイバーセキュリティ、金融文書解析、スマート農業などの実問題の解決に取り組んでいます。また、複数の組織が互いにデータを直接共有しなくても、セキュアにデータ解析可能な協調学習手法の開発にも取り組んでいます。</dd>
</dl>
</div>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/01/img/shutoh_nobumichi.jpg" alt="首藤 信通"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">首藤 信通<small>教授</small><span class="en">Shutoh Nobumichi</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
数理統計学/多変量解析/統計的漸近理論<br>
■研究業務内容：<br>
専門分野は数理統計学であり、主として多変量解析の理論研究に従事している。具体的には、欠測データや高次元データ等の扱いにくいデータに対して、数字を応用することにより、理論的に新規の統計解析法を導出する研究や、既存の統計解析法を改良する研究を行っている。</dd>
</dl>
</div>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/01/img/komyo_arata.jpg" alt="光明 新"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">光明 新<small>講師</small><span class="en">Komyo Arata</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
数学/代数幾何学/可積分系<br>
■研究業務内容：<br>
代数幾何学の可積分系への応用。特にパンルヴェ方程式の背後にある幾何学的構造の解明を目標に、接続のモジュライ空間や指標多様体を研究している。データサイエンス教育（リテラシーレベル・応用基礎レベル・PBL演習）、リカレント教育に取り組んでいる。</dd>
</dl>
</div>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/01/img/dummy.jpg" alt="伊藤 真理"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">伊藤 真理<small>特命准教授</small><span class="en">Ito Mari</span></dt>
<dd class="lecturer__info__text" style="display: none;">&nbsp;</dd>
</dl>
</div>
</section>


<section class="contact">
<h2 class="contact__title"><span class="contact__title__category">データサイエンス AI・基礎</span><br>
お申し込みについて</h2>

<p class="contact__text">この文章はダミーです繰り返します。この文章はダミーです繰り返します。<br>
紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。紹介文章が入ります。この文章はダミーです繰り返します。</p>
<p class="contact__btn link-btn"><a href="https://forms.gle/RHkH1bqM5Pzt8Btn6" target="_blank" rel="noopener">お申し込みはこちらから</a></p>
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