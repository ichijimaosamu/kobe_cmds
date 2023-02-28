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
<title>次世代DXリーダ育成｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/leader.css" />
</head>
<body id="leader" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">次世代DXリーダ育成</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">次世代DXリーダ育成</span></h1>

<section class="leader__box">
<h2 class="leader__box__title">DX基礎講座</h2>

<p class="leader__box__lead">DX基礎講座は、DX人材の育成を目的とした神戸大学が提供するeラーニングプログラムです。<br>
完全オンラインで、いつでもどこでも学べ、専門スタッフがわかるまで疑問に答える「オンライン・オフィスアワー」も設置されています。<br>
現在の職種に関係なく、どなたでも無理なく、楽しく学べます。<br>
さあ、あなたもDX人材の仲間入りです！</p>

<section class="leader__subbox">
<h2 class="leader__subbox__title">開催概要（社会人向け）</h2>

<div class="leader__subbox__flex">
<ul class="leader__subbox__list">
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【開催期間】</dt>
<dd class="leader__subbox__item__description">2023年1月10日（火）－2023年 2月28日（火）</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【受講形式】</dt>
<dd class="leader__subbox__item__description">eラーニングによる自習形式 ＋ オンライン・オフィスアワー※<br>
※毎週水曜17時-19時にZOOMで質問に答えます。</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【定員】</dt>
<dd class="leader__subbox__item__description">500名（先着順）</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【受講対象】</dt>
<dd class="leader__subbox__item__description">主に企業や自治体、教育機関などの就業者を対象とし、技術系部署に限らず、経営層、事務系各部署でデータサイエンス・AIを使って組織内のDX推進担う（担うことを目指す）人材を広く対象とします。</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【受講料】</dt>
<dd class="leader__subbox__item__description">1科目コース（15時間）10,000円 ※<br>
2科目コース（30時間）20,000円 ※<br>
※教育機関の教職員には優待枠がありますので、お問い合わせください（条件設定あり）<br>
※団体申請をご希望の場合はお問い合わせください</dd>
</dl>
</li>
</ul>

<p class="leader__subbox__pic"><a href="http://www.cmds.kobe-u.ac.jp/events/2022/2022_dx_basic/img/dx_basic_1.pdf" target="_blank" rel="noopener"><img src="http://www.cmds.kobe-u.ac.jp/events/2022/2022_dx_basic/img/dx_basic_1.jpg" width="250" alt="開催案内"></a></p>
</div>
</section>

<section class="leader__subbox">
<h2 class="leader__subbox__title">開催概要（大学生向け）</h2>

<div class="leader__subbox__flex">
<ul class="leader__subbox__list">
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【開催期間】</dt>
<dd class="leader__subbox__item__description">2023年1月10日（火）－2023年 2月28日（火）</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【受講形式】</dt>
<dd class="leader__subbox__item__description">eラーニングによる自習形式 ＋ オンライン・オフィスアワー※<br>
※毎週水曜17時-19時にZOOMで質問に答えます。</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【定員】</dt>
<dd class="leader__subbox__item__description">300名（先着順）</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【受講対象】</dt>
<dd class="leader__subbox__item__description">文系・理系に関わらず、すべての大学生・高専生・大学院生（特に認める場合は高校生も受講可）を対象とします。文部科学省認定制度MDASHリテラシー・応用基礎レベルの内容を身に付けられます。</dd>
</dl>
</li>
<li class="leader__subbox__item">
<dl>
<dt class="leader__subbox__item__term">【受講料】</dt>
<dd class="leader__subbox__item__description">1科目コース（15時間）10,000円 ※<br>
2科目コース（30時間）20,000円 ※<br>
※受講完了することを確約する者は受講料を免除<br>
※団体申請をご希望の場合はお問い合わせください</dd>
</dl>
</li>
</ul>

<p class="leader__subbox__pic"><a href="http://www.cmds.kobe-u.ac.jp/events/2022/2022_dx_basic/img/dx_basic_2.pdf" target="_blank" rel="noopener"><img src="http://www.cmds.kobe-u.ac.jp/events/2022/2022_dx_basic/img/dx_basic_2.jpg" width="250" alt="開催案内"></a></p>
</div>
</section>

<section class="leader__subbox">
<h2 class="leader__subbox__title">講座詳細</h2>

<h3 class="leader__subbox__subtitle">データサイエンス・AI基礎</h3>
<p class="leader__subbox__text">社会で起きている変化、データ・AI利活用の最新動向や活用領域、実用事例に触れ、AI倫理、プライバシー保護など留意事項を理解した上で適切にデータ解析する基礎を習得します。<br>
<br>
<em>【学習スケジュール】</em><br>
第1回　社会で起きている変化<br>
第2回　社会におけるデータサイエンス・AI利活用<br>
第3回　データ・AI利活用の現場・最新動向<br>
第4回　データ・AI利活用における留意事項<br>
第5回　データリテラシー・データを読む<br>
第6回　データリテラシー・データを説明する<br>
第7回　データリテラシー・データを扱う<br>
第8回　確認テスト（オンライン）</p>


<h3 class="leader__subbox__subtitle">Python基礎演習</h3>
<p class="leader__subbox__text">社会で起きている変化、データ・AI利活用の最新動向や活用領域、実用事例に触れ、AI倫理、プライバシー保護など留意事項を理解した上で適切にデータ解析する基礎を習得します。<br>
<br>
<em>【学習スケジュール】</em><br>
第1回　Python イントロダクション<br>
第2回　データ型，演算子，制御構造<br>
第3回　リスト，配列，関数<br>
第4回　Pandas入門<br>
第5回　ファイル入出力、プロットと可視化<br>
第6回　生データからデータセットへ<br>
第7回　Hello　データサイエンス<br>
第8回　演習問題 総合解説</p>
</section>

<section class="leader__subbox">
<h2 class="leader__subbox__title">申込先</h2>
<p class="leader__subbox__text"><a href="">社会人の方はこちら</a>からお申込みください<br>
<a href="">学生の方はこちら</a>からお申込みください<br>
<br>
【申込受付期間】<br>
2022年11月8日（火）～12月23日（金）<br>
※募集期限が1週間延長になりました。</p>

</section>

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