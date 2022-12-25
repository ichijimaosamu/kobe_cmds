<?php $URI = $_SERVER["REQUEST_URI"]; ?>
<header class="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div class="header__upper">
<h1 class="header__logo logo"><a href=""><img src="<?php echo $base_url . '/'; ?>img/header_logo.png" alt="CMDS 神戸大学"></a><small>Society5.0 と地方創生を加速させる<br>
次世代DXリーダ育成プログラム事業</small></h1>

<p class="header__contact link-btn"><a href="<?php echo $base_url . '/'; ?>contact/">お問い合わせ</a></p>
</div>

<nav class="header__nav">
<ul class="header__nav__list">
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>"><span class="header__nav__item__inner">トップ</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>news/"><span class="header__nav__item__inner<?php if(strpos($URI,'/news/') !== false) {echo ' -is-active'; } ?>">最新情報</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>leader/"><span class="header__nav__item__inner<?php if(strpos($URI,'/leader/') !== false) {echo ' -is-active'; } ?>">次世代DXリーダ育成</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>program"><span class="header__nav__item__inner<?php if(strpos($URI,'/program/') !== false) {echo ' -is-active'; } ?>">講座プログラム</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>faq/"><span class="header__nav__item__inner<?php if(strpos($URI,'/faq/') !== false) {echo ' -is-active'; } ?>">FAQ</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>topics/"><span class="header__nav__item__inner<?php if(strpos($URI,'/topics/') !== false) {echo ' -is-active'; } ?>">DXトピックス</span></a></li>
</ul>
</nav>
</header>