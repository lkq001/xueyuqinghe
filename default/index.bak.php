<?
if (@file_exists("/etc/wdos-release")) {
	$title='恭喜，wdOS 安装成功';
	$c='<strong><span class="STYLE4">恭喜，wdOS 安装成功</span>!</strong><br>
<h2 align="center">wdOS是一个基于CentOS 5.8版本精简优化过的Linux服务器系统<br>
  并集成nginx,apache,php,mysql等web应用环境及wdcp管理系统
  <br>
  装好系统,就可以通后台管理服务器和网站,FTP,数据库等<br>
  使用方便,操作简单,安全,稳定,易用<br>
  lamp,lnmp,lnamp可自由切换<br>
  <span class="STYLE5">这一切,都是免费的</span>.</h2>';
}else{
	$title='恭喜，lanmp_wdcp 安装成功';
	$c='<strong><span class="STYLE4">恭喜，lanmp_wdcp 安装成功</span>!</strong><br>
<h2 align="center">lanmp_wdcp是一个集成nginx,apache,php,mysql等web应用环境<br>
  及wdcp管理系统的RPM安装包,比起编译包安装快速,简单,5分钟就可搞店<br>
  然后就可以通过wdcp后台管理服务器和网站,FTP,数据库等<br>
  使用方便,操作简单,安全,稳定,易用<br>
  lamp,lnmp,lnamp可自由切换<br>
  <span class="STYLE5">这一切,都是免费的</span>.</h2>';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/tr/html4/loose.dtd">
<html>
<head>
<title><?=$title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="author" content="wdlinux">
<meta name="keywords" content="wdOS,wdcp,wddns,wdcdn,lamp,lnmp,lnamp,LANMP一键安装包">
<meta name="description" content="wdOS,wdcp,wddns,wdcdn,lamp,lnmp,lnamp,LANMP一键安装包">
<style type="text/css"> 
<!--
.links {color: #009900}
.STYLE1 {font-weight: bold}
.STYLE4 {font-size: 36px}
.STYLE5 {color: #FF0000}
-->
</style>
</head>
<body>
<br>
<br>
<center>
<?
echo $c;
?>
<h2><img src="http://www.wdlinux.cn/images/lnamp.gif" alt="wdos是一个精简优化过的Linux服务器系统"></h2>
<p>wdcp系统管理面板登录 <a href="http://<?=$_SERVER["HTTP_HOST"];?>:8080" target=_blank>http://<?=$_SERVER["HTTP_HOST"];?>:8080</a> 默认用户密码:admin wdlinux.cn </p>
<p><span class="STYLE1">查看本地环境：</span><a href="/iProber2.php" target="_blank" class="links">探针</a>　<a href="/phpinfo.php" target="_blank" class="links">phpinfo</a></p>
<p>wdOS官网: <a href="http://www.wdos.net" target="_blank">http://www.wdos.net</a></p>
<p>wdOS论坛讨论区： <a href="http://www.wdlinux.cn/bbs/forum-2-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-2-1.html</a></p>
<p>lanmp一键安装包： <a href="http://www.wdlinux.cn/bbs/forum-5-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-5-1.html</a></p>
<p>wdcp管理系统论坛 <a href="http://www.wdlinux.cn/bbs/forum-3-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-3-1.html</a> </p>
<p>wddns免费智能DNS系统 <a href="http://www.wdlinux.cn/bbs/forum-18-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-18-1.html</a></p>
<p>wdcdn缓存加速管理系统 <a href="http://www.wdlinux.cn/bbs/forum-4-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-4-1.html</a> </p>
<p><a href="http://www.wddns.net" target="_blank">免费智能DNS解析,多线路多省份智能DNS解析</a> <a href="http://www.wdcdn.com" target="_blank">免费CDN加速,全国CDN加速</a> </p>
<h3><a href="http://www.wdos.net" target="_blank">wdOS</a> by <a href="http://www.wdlinux.cn" target="_blank">wdlinux</a> </h3>
<p>为安全起见,本页可删除或重命名</p>
</center>
</body>
</html>
