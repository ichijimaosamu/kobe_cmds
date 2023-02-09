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
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">Python基礎演習</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">講座プログラム</span></h1>

<section class="program">
<div class="program__upper">
<h2 class="program__title">Python基礎演習</h2>

<dl class="program__box">
<dt class="program__box__term">データサイエンス・AI分野で最もよく使われるPython言語を使って、自分の手で基礎的なデータ分析を行えることを目標とし、Google Colabを使ったオンデマンド講義とeラーニング型演習で、プログラミング基礎を短期間で効果的に習得できます。</dt>
<dd class="program__box__description">この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。この文章はダミーです。繰り返します。</dd>
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
<dd class="schedule__item__description">Pythonイントロダクション<br>
・プログラム、プログラミングとは<br>
・Hello Pythonプログラミング<br>
・キーボードから入力を受け付ける</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第2回</dt>
<dd class="schedule__item__description">データ型、演算子、制御構造<br>
・Pythonの代表的なデータ型<br>
・Pythonの代表的な演算子<br>
・逐次実行、条件分岐、繰り返し</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第3回</dt>
<dd class="schedule__item__description">リスト、配列、関数<br>
・リストの基本操作とfor文によるリスト操作<br>
・配列を作成・型と要素の操作<br>
・関数とは、配列のメソッドを利用する</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第4回</dt>
<dd class="schedule__item__description">Pandas入門<br>
・Pandasデータフレーム<br>
・表の基本的な操作を学習しよう<br>
・データを分析してみよう<br>
・表を生成・変形する</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第5回</dt>
<dd class="schedule__item__description">ファイル入出力、プロットと可視化<br>
・ファイル入出力、プロットと可視化<br>
・プロット：データをグラフに描く<br>
・図とサブプロット</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第6回</dt>
<dd class="schedule__item__description">生データからデータセットへ<br>
・データのクリーニング<br>
・データフレームの結合、変形<br>
・グループ化によるデータの集計<br>
・時系列データの処理</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第7回</dt>
<dd class="schedule__item__description">Hello データサイエンス<br>
・データサイエンスの手法（相関分析、主成分分析、回帰分析）<br>
・データを眺める手法（可視化手法）</dd>
</dl>
</li>
<li class="schedule__item">
<dl>
<dt class="schedule__item__term">第8回</dt>
<dd class="schedule__item__description">演習問題 総合解説</dd>
</dl>
</li>
</ol>
</section>
</div>

</section>


<section class="lecturer">
<h2 class="lecturer__title">担当講師について</h2>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/02/img/nakamura_masahide.jpg" alt="中村 匡秀"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">中村 匡秀<small>教授</small><span class="en">Nakamura Masahide</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
情報通信/ウェブ情報学、サービス情報学、情報ネットワーク、計算機システム、ソフトウェア<br>
■研究業務内容：<br>
サービスコンピューティングとソフトウェア工学を駆使した、スマートシステム、サイバーフィジカルシステムの設計・実装に関する研究。ヴァーチャルエージェント、オントロジー、機械学習の応用にも興味を持つ。</dd>
</dl>
</div>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/02/img/yamada_akira.jpg" alt="山田 明"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">山田 明<small>教授</small><span class="en">Yamada Akira</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
サイバーセキュリティ、ネットワーク、AI応用、ヒューマンファクタセキュリティ<br>
■研究業務内容：<br>
サイバーセキュリティにおける課題に対してAI・機械学習の応用による研究を行っている。ISPにおけるDDoS攻撃検知・軽減システムの研究開発と実用化やWeb媒介型攻撃対策の実用化に向けた研究開発を実施。システムだけでなくヒトを考慮したヒューマンファクタセキュリティ研究分野の確立を目指している。</dd>
</dl>
</div>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/02/img/tahara_nobuhiko.jpg" alt="田原 伸彦"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">田原 伸彦<small>特命助教</small><span class="en">Tahara Nobuhiko</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
数学/基礎解析学<br>
■研究業務内容：<br>
主に高階のパンルヴェ型方程式系の相空間について研究を行っている。また、統計的機械学習・深層学習の数理にも興味を持っている。</dd>
</dl>
</div>

<div class="lecturer__inner">
<p class="lecturer__pic"><img src="<?php echo $base_url . '/'; ?>program/02/img/chen_sinan.jpg" alt="陳 思楠"></p>

<dl class="lecturer__info">
<dt class="lecturer__info__name">陳 思楠<small>特命助教</small><span class="en">Chen Sinan</span></dt>
<dd class="lecturer__info__text">■研究分野：<br>
情報通信/ウェブ情報学、サービス情報学/情報通信/ソフトウェア<br>
■研究業務内容：<br>
実世界の課題を改善する応用情報学の研究を行っている。Computer VisionとVirtual Agentを統合した在宅介護支援システムの開発や、Software資産のUpcyclingによる高機能・新設計の生み出しを努めている。また、文理・異分野研究の融合に向けた先端教育手法も模索している。</dd>
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