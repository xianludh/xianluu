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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="澳门美高梅赌场"/>
<meta name="description" content="澳门美高梅赌场"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<title>澳门美高梅赌场 - 官方直营网络赌场</title>
<link rel="stylesheet" href="images/style.css" />
</head>
<body>
<div class="top"><div><span class="xl"></span></div></div>
<div class="xljc_nr"><div class="xljc_lnr">
<div class="xljc_nr_left">
<ul><span><b>通用网址</b>温馨提示：MS值越小,打开网站速度越快,越排前的网址越快！</span>
<iframe id="httpiframeone" src="images/http.htm#https://www.m0034.com,https://www.m0035.com,https://www.m689.com,https://www.m0020.com,https://www.m225.com,https://www.m716.com,https://www.m0031.com" frameborder="0" height="370" width="680" allowtransparency="true" scrolling="no" border="0"></iframe>
<a class="httpRefresh" onclick="document.getElementById('httpiframeone').contentWindow.location.reload(true);"></a>
</ul>
</div>
<div class="xljc_nr_right">
<ul class="Nav">
<a href="https://www.m0027.com/" target="_blank" style="background-image:url(images/Nav_01.png);"></a>
<a href="https://www.m559.com/?f=ookpj" target="_blank" style="background-image:url(images/Nav_02.png);"></a>
<a href="https://www.m0031.com/sm/sports.php" target="_blank" style="background-image:url(images/Nav_03.png);"></a>
<a href="https://www.m631.com/" target="_blank" style="background-image:url(images/Nav_04.png);"></a>
<a href="https://www.m716.com/" target="_blank" style="background-image:url(images/Nav_05.png);"></a>
<a href="https://gzzaxc219.learnsaas.com/chat/chatClient/chatbox.jsp?companyID=443425&configID=40997&jid=4586090404&s=1" target="_blank" style="background-image:url(images/Nav_06.png);"></a>
</ul>
<ul class="xljc_nr_Tips"><div>
<span id="Clientip">您的ip是：</span>
<script type="text/javascript" src="https://client.wlouds.com/ip/?TopCasino"></script>
<b>检测后还不能登录,请按以下操作:</b>
<br /><span>打开IE浏览器，选择：工具-> Internet选项-> 在选择 (删除历史浏览记录)-> 删除-> 重启IE</span>
</div>
</ul>
</div></div>
<div class="clear"></div>
</div>
<div class="by"><div>
<span>Copyright © 澳门美高梅赌场 Reserved</span>
</div>
</div>
</body>
</html>
