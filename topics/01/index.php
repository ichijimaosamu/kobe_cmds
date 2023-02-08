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
<title>DXトピックス｜CMDS 神戸大学</title>
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
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">DXプロジェクト</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">DXプロジェクト</span></h1>

<section class="topics">
<h2 class="topics__title">IoTとエージェントを活用した<br>高齢者の見守り実証実験</h2>

<div class="topics__inner">
<div class="topics__box">
<p class="topics__text">神戸大学数理・データサイエンスセンターの中村匡秀教授のグループは，兵庫県三田市と協働し，デジタル技術を活用した在宅高齢者の見守り実証実験を行っています。<br>
中村研究室では，IoTやスマートホーム，エージェント技術を駆使して，在宅高齢者を「暮らし」と「こころ」の両面から見守るデジタル技術の研究開発を進めています。今回の実証実験は，三田市地域福祉課，および，スマートシティ推進課の協力のもと，2022年10月から三田市在住の高齢者の方々に被験者になっていただき，実証実験を進めています。実験の目的は，システムが収集したデータによって遠方家族や支援者が高齢者を見守ることができるかを実証するとともに，高齢者本人の孤独感の緩和や心の癒し，ストレス解消等の効果が見込めるかどうかを調査することです。</p>

<h3 class="topics__subtitle">(1) IoTセンサによる「暮らし」の見守り</h3>
<p class="topics__text">7種類のセンサ（人感，照度，音量，気圧，温度，湿度，振動）を内蔵した「自律センサボックス」を対象者宅内に設置すると，センサボックスが周囲の環境を自動的に測定し，10秒ごとにデータ化して神戸大学内のサーバに送信します．収集したデータは対象者本人および本人が許諾した家族・支援者に共有され，起床や就寝，食事等の毎日の暮らしを遠隔からデータで見守ることができます。また，これらの環境の時系列データに機械学習を適用し，行動推定や異常検知等の「機械による見守り」を併用することで，人による見守りの質を上げることにもチャレンジしています。</p>

<h3 class="topics__subtitle">(2) バーチャルエージェントによる「こころ」の見守り</h3>
<div class="topics__flex">
<p class="topics__text">センサでは捉えきれない高齢者の心の内を，バーチャルエージェント（PC内で動作する音声対話可能なロボット）が対話によって外化させ，高齢者の内的状態の見守りにつなげます。対象者宅内に設置されたPCに近づくと，バーチャルエージェント「メイちゃん」が自動的に声掛けを行います。メイちゃんは，時間や状況に応じて，体調や食事の内容，今日の予定，やったこと，水分補給の促しなどの質問を行い，高齢者との対話を行います。対話内容はテキスト化され，本人の振り返りや家族・支援者の見守りに活用されます。また，最新版のメイちゃんは，雑談AIとの統合によって簡単な対話もこなせるようになっており，高齢者とのコミュニケーションを通した孤独感の解消につなげることを期待しています。</p>
<p class="topics__pic"><img src="img/pic1.jpg" alt="メイちゃんと対話する高齢者①"><span class="caption">メイちゃんと対話する高齢者①</span></p>
</div>

<h3 class="topics__subtitle">(3) バーチャルエージェントを介したWebサービスの活用</h3>
<div class="topics__flex">
<p class="topics__text">最新の調査ではスマートフォンやPCなどのデジタル機器の活用が，高齢者の生きがいにつながる可能性があることが分かっています。しかしながら，これらの機器の操作は高齢者にとってハードルが高いことも事実であり，利用をあきらめている人も多くいます。そこで，様々なWebサービスとメイちゃんを連携し，高齢者がメイちゃんとの対話を通じて簡単にサービスを利用できる仕組みも実装しています。具体的には，YouTubeやWeb検索，カレンダー，天気予報，日記の振り返り，タイマー，アラーム等を実装しています。また，利用者の生活史や趣味・嗜好に応じて，AIが自動的にYouTubeの動画を選別してくれる「らくらく動画サービス」も開発しており，試していただいています。</p>
<p class="topics__pic"><img src="img/pic2.jpg" alt="メイちゃんと対話する高齢者②"><span class="caption">メイちゃんと対話する高齢者②</span></p>
</div>

<h3 class="topics__subtitle">(4) ウェアラブルデバイスを活用した<br>
睡眠・ストレスデータの取得・活用</h3>
<p class="topics__text">自身の健康に強い関心をお持ちの高齢者に対しては，ウェアラブル活動量計(GARMIN VivoSmart4)を装着していただき，睡眠やストレスデータ，消費カロリー等のデータを取得して，ご自身の健康管理に役立ててもらう実験も行っています。メイちゃんとGARMINのクラウドサービスを連携させることで，高齢者はメイちゃんとの対話を通じて日々のストレスや健康状態を知ることができるようになっています。</p>
<p class="topics__pic -center"><img src="img/pic3.jpg" alt="自律センサボックスが計測した環境データ"><span class="caption">自律センサボックスが計測した環境データ</span></p>

<h3 class="topics__subtitle">(5) IoTスピーカーによる音声提示サービス</h3>
<div class="topics__flex">
<p class="topics__text">物忘れに不安のある高齢者に対しては，小型のIoTスピーカーを宅内の様々な場所に設置して，良く忘れがちなことを音声でリマインドしてくれるサービスALPS (Assisted Living with Personalized Speakers)を試していただいています。ALPSの利用者は，音声でリマインドしてほしいことを，設置場所と時間に関するルールとして登録しておきます。するとスピーカーに装着された人感センサの反応によって，ルールに応じた音声が提示されます。玄関に設置して忘れ物がないか確認したり，階段を上る時は手すりにつかまるように促したりすることができます。</p>
<p class="topics__pic"><img src="img/pic4.jpg" alt="メイちゃんとの対話ログ"><span class="caption">メイちゃんとの対話ログ</span></p>
</div>
<p class="topics__text">現在のところ，実験は順調に進んでおり，高齢者の方々はメイちゃんとの対話を楽しんでおられるようです。<br>
-------<br>
実証実験は2022年12月末までの予定です。</p>

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