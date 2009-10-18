<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Phwittr</title>
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="keywords" content="phwittr,phwitter,phitter,phittr,php,twitter" />
<meta name="description" content="PHPのXXXXで作成されたTwitterクローンです" />
<!-- *** stylesheet *** -->
<?php echo $html->css('import'); ?>
<link href="./css/import.css" rel="stylesheet" type="text/css" media="all" />
<!-- *** javascript *** -->
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">google.load("jquery", "1.2");</script>
</head>
<body id="yourDomainName" class="indexBody">
 
<div id="page">
<div id="header">
<h1><?php echo $html->image('share/phwittr_logo.gif') ?></h1>
<ul id="guideNav">
<li><a href="#">ホーム</a></li>
<li><a href="#">設定</a></li>
<li><a href="#">ログアウト</a></li>
</ul>
<!-- / #header --></div>
 
 
<div id="contents">
<?php echo $content_for_layout; ?>
<div id="sub">
 
<div class="subsection_title">
<a href="#">プロフィール</a>
<h3>ようこそ！</h3>
</div>
<div class="subsection_title">
<h3>ステータス</h3>
</div>
<div class="subsection_body">
<ul class="status">
<li>
<span class="label"><a href="#">あなたのつぶやき</a></span>
<span>999</span>
</li>
<li>
<span class="label"><a href="#">みんなのつぶやき</a></span>
<span>999</span>
</li>
</ul>
</div>
 
<!-- / #sub --></div>
<!-- / #contents --></div>
 
 
<div id="footer">
<p class="copy">&copy; cakematsuri &amp; PHP Framework Fight!</p>
<!-- / #footer --></div>
 
 
<!-- / #page --></div>
 
</body>
</html>