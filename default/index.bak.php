<?
if (@file_exists("/etc/wdos-release")) {
	$title='��ϲ��wdOS ��װ�ɹ�';
	$c='<strong><span class="STYLE4">��ϲ��wdOS ��װ�ɹ�</span>!</strong><br>
<h2 align="center">wdOS��һ������CentOS 5.8�汾�����Ż�����Linux������ϵͳ<br>
  ������nginx,apache,php,mysql��webӦ�û�����wdcp����ϵͳ
  <br>
  װ��ϵͳ,�Ϳ���ͨ��̨�������������վ,FTP,���ݿ��<br>
  ʹ�÷���,������,��ȫ,�ȶ�,����<br>
  lamp,lnmp,lnamp�������л�<br>
  <span class="STYLE5">��һ��,������ѵ�</span>.</h2>';
}else{
	$title='��ϲ��lanmp_wdcp ��װ�ɹ�';
	$c='<strong><span class="STYLE4">��ϲ��lanmp_wdcp ��װ�ɹ�</span>!</strong><br>
<h2 align="center">lanmp_wdcp��һ������nginx,apache,php,mysql��webӦ�û���<br>
  ��wdcp����ϵͳ��RPM��װ��,����������װ����,��,5���ӾͿɸ��<br>
  Ȼ��Ϳ���ͨ��wdcp��̨�������������վ,FTP,���ݿ��<br>
  ʹ�÷���,������,��ȫ,�ȶ�,����<br>
  lamp,lnmp,lnamp�������л�<br>
  <span class="STYLE5">��һ��,������ѵ�</span>.</h2>';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/tr/html4/loose.dtd">
<html>
<head>
<title><?=$title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="author" content="wdlinux">
<meta name="keywords" content="wdOS,wdcp,wddns,wdcdn,lamp,lnmp,lnamp,LANMPһ����װ��">
<meta name="description" content="wdOS,wdcp,wddns,wdcdn,lamp,lnmp,lnamp,LANMPһ����װ��">
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
<h2><img src="http://www.wdlinux.cn/images/lnamp.gif" alt="wdos��һ�������Ż�����Linux������ϵͳ"></h2>
<p>wdcpϵͳ��������¼ <a href="http://<?=$_SERVER["HTTP_HOST"];?>:8080" target=_blank>http://<?=$_SERVER["HTTP_HOST"];?>:8080</a> Ĭ���û�����:admin wdlinux.cn </p>
<p><span class="STYLE1">�鿴���ػ�����</span><a href="/iProber2.php" target="_blank" class="links">̽��</a>��<a href="/phpinfo.php" target="_blank" class="links">phpinfo</a></p>
<p>wdOS����: <a href="http://www.wdos.net" target="_blank">http://www.wdos.net</a></p>
<p>wdOS��̳�������� <a href="http://www.wdlinux.cn/bbs/forum-2-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-2-1.html</a></p>
<p>lanmpһ����װ���� <a href="http://www.wdlinux.cn/bbs/forum-5-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-5-1.html</a></p>
<p>wdcp����ϵͳ��̳ <a href="http://www.wdlinux.cn/bbs/forum-3-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-3-1.html</a> </p>
<p>wddns�������DNSϵͳ <a href="http://www.wdlinux.cn/bbs/forum-18-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-18-1.html</a></p>
<p>wdcdn������ٹ���ϵͳ <a href="http://www.wdlinux.cn/bbs/forum-4-1.html" target="_blank">http://www.wdlinux.cn/bbs/forum-4-1.html</a> </p>
<p><a href="http://www.wddns.net" target="_blank">�������DNS����,����·��ʡ������DNS����</a> <a href="http://www.wdcdn.com" target="_blank">���CDN����,ȫ��CDN����</a> </p>
<h3><a href="http://www.wdos.net" target="_blank">wdOS</a> by <a href="http://www.wdlinux.cn" target="_blank">wdlinux</a> </h3>
<p>Ϊ��ȫ���,��ҳ��ɾ����������</p>
</center>
</body>
</html>
