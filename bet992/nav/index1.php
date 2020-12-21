<?php
header("Content-Type:text/html;charset=utf-8");

//判断手机或电脑
function isMobile()
{ 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
}

//判断手机或电脑
if(isMobile()){
	
echo "<script Language=Javascript>window.location.href='m/';</script>";
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>bet365最快线路检测中心</title>
     <link href="images/test.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
a:link {
	color: #FFE61D;
	text-decoration: none;
}
a:hover {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFE61D;
}
a:active {
	text-decoration: none;
}
-->
</style>
   
  
  
</head>
<body>
<div id="contentbg">
	<div class="content">
	
	<div style="height:25px; font-size:12px; text-align:center; line-height: 25px;margin-left: 46px;margin-top:-5px;">
	<a href="#" >
	            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="300" height="30" id="UB" align="middle">
                    <param name="movie" value="images/UB.swf" />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#003333" />
                    <param name="play" value="true" />
                    <param name="loop" value="true" />
                    <param name="wmode" value="transparent" />
                    <param name="scale" value="showall" />
                    <param name="menu" value="true" />
                    <param name="devicefont" value="false" />
                    <param name="salign" value="" />
                    <param name="allowScriptAccess" value="sameDomain" />
                    <!--[if !IE]>-->
                    <object type="application/x-shockwave-flash" data="images/play.swf" width="300" height="30">
                        <param name="movie" value="images/UB.swf" />
                        <param name="quality" value="high" />
                        <param name="bgcolor" value="#003333" />
                        <param name="play" value="true" />
                        <param name="loop" value="true" />
                        <param name="wmode" value="transparent" />
                        <param name="scale" value="showall" />
                        <param name="menu" value="true" />
                        <param name="devicefont" value="false" />
                        <param name="salign" value="" />
                        <param name="allowScriptAccess" value="sameDomain" />
                    <!--<![endif]-->
                        <a href="https://www.adobe.com/go/getflash">
                            <img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获得 Adobe Flash Player" />
                        </a>
                    <!--[if !IE]>-->
                    </object>
                    <!--<![endif]-->
                </object></a></div>
		<div class="left">
			<div class="top">
				<h2>最新网址 </h2>
				<script language="javascript">
				    tim = 1
				    setInterval("tim++", 100)
				    b = 1
				    var autourl = new Array()
				    autourl[1] = 'https://bb365w.com';
				    autourl[2] = 'https://bb365b.com';
				    autourl[3] = 'https://bb365c.com';
				    autourl[4] = 'https://bb365l.com';
				    autourl[5] = 'https://bb365e.com';
				    autourl[6] = 'https://bb365f.com';
				    autourl[7] = 'https://bb365o.com';
				    autourl[8] = 'https://bb365m.com';
				    autourl[9] = 'https://bb365i.com';
				    autourl[10] = 'https://bb365n.com';
				</script>
				<script src="images/timtest.js"></script>
			</div>
		
		</div>
		<div class="right">
			<br/><br/><br/><br/>
			<p><span>温馨提示：反应时间越小，打开就越快</span></p><br/>
			<p>如果我们的检测中心对您有帮助，请按 Ctrl+D 收藏： www.b992.com</p><br/>
			<p><span>如果检测后还不能登录请按以下操作方式：</span></p>
			<p>操作步骤：打开IE浏览器：选择：工具-》Internet选项-》 再选择（删除历史浏览记录）-》删除-》重启IE</p><br/>
			
			<br/><br/>
			<a class="bt01" target="_blank" href="https://gzzaxc219.learnsaas.com/chat/chatClient/chatbox.jsp?companyID=748350&configID=41032&jid=5463663779&s=1">客服</a>
			
			<div  href="javascript:void(0)">
                <img src="images/wl.png" width=295 height=90 /></div>
				
		</div>
	</div>	
</div>

<div class="footer" style="padding-left:120px" >

	</div>
</body></html>
