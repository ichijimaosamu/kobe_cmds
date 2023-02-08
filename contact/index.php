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
<title>最新情報｜CMDS 神戸大学</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/contact.css" />
</head>
<body id="contact" class="lower" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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
<li class="topicpath__item"><a href="<?php echo $base_url . $_SERVER["REQUEST_URI"]; ?>">お問い合わせ</a></li>
</ol>

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__title"><span class="main__title__inner">お問い合わせ</span></h1>

<div class="contact">
<h2 class="contact__title">CONTACT<small>お問い合わせ</small></h2>

<form method="post" id="form1">
<table class="contact__table">
<tbody>
<tr>
<th>お名前</th>
<td><input name="name" type="text" class="middle"></td>
</tr>
<tr>
<th>所属</th>
<td><input name="department" type="text" class="long" placeholder="〇〇株式会社△△部 or 〇〇大学△△研究科"></td>
</tr>
<tr>
<th>電話番号</th>
<td><input name="tel" type="text" class="short" placeholder="xxx-xxxx-xxxx"></td>
</tr>
<tr>
<th>メールアドレス</th>
<td><input name="email" type="text" class="long" value=""></td>
</tr>
<tr>
<th>お問い合わせ種別</th>
<td>
<select name="contact_type">
<option selected="" value="共同研究について">共同研究について</option>
<option value="コンソーシアムについて">コンソーシアムについて</option>
<option value="イベント関係について">イベント関係について</option>
<option value="標準カリキュラムコースについて">標準カリキュラムコースについて</option>
<option value="授業関係について">授業関係について</option>
<option value="教育研究支援基金について">教育研究支援基金について</option>
<option value="その他のお問い合わせ">その他のお問い合わせ</option>
</select>
</td>
</tr>
<tr>
<th>お問い合わせ内容</th>
<td><textarea name="contact" type="text" rows="10" placeholder="具体的に記入してください。"></textarea></td>
</tr>
</tbody>
</table>
<div class="contact-button-area">
<input type="reset" value="リセット" name="reset">
<input type="button" id="send_button" value="確 認">
</div>
</form>
</div>

</div>


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