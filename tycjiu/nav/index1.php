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
    <title>澳门太阳城集团-导航站</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/index-min.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/testSpeed.js"></script>
    <script src="js/jq_scroll.js" type="text/javascript"></script>
    <script src="js/prism-min.js"></script>
    <!--视频-->
    <!--视频-->
    <script type="text/javascript">
    $(document).ready(function() {
        $(".mc6").click(function() {
            $(".f_left").hide();
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".us_7").click(function() {
            $(".f_right").hide();
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".la_pos").hover(function() {
            $(".pi_c").fadeOut()
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#scrollDiv").Scroll({
            line: 1,
            speed: 500,
            timer: 3000,
            up: "but_up",
            down: "but_down"
        });
    });
    </script>
</head>

<body>
    <div class="wrapper">
        <!--头部-->
        <div class="header">
            <div class="bh_a"></div>
            <div class="bh_c">
                <div class="c_auto">
                    <div class="head">
                        <div class="head_1">
                            <a href="http://www.tyc77111.com" title=""><img src="img/logo.png" alt="" /></a>
                        </div>
                        <div class="head_3">
                            <a href="#" title=""><img src="img/pic_2.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--中部-->
        <div class="layout">
            <div class="c_auto">
                <div class="lay_1">
                    <div class="sen_1">
                        <input type="text" class="pus" id="sudu1" value="10ms" style="border:0px;background-color:transparent;color:#fff" />
                        <span><img src="img/pic_3.png" alt="" /></span>
                        <em>tyc88555.com</em>
                        <a class="o_n1" href="http://www.tyc88555.com/" target="_Blank" title=""><img src="img/pic_28.png" alt="" /></a>
                    </div>
                    <div class="sen_2">
                        <input type="text" class="pus" id="sudu2" value="10ms" style="border:0px;background-color:transparent;color:#fff" />
                        <span><img src="img/pic_4.png" alt="" /></span>
                        <em>tyc44666.com</em>
                        <a class="o_n2" href="http://www.tyc44666.com/" target="_Blank" title=""><img src="img/pic_28.png" alt="" /></a>
                    </div>
                    <div class="sen_3">
                        <input type="text" class="pus" id="sudu3" value="10ms" style="border:0px;background-color:transparent;color:#fff" />
                        <span><img src="img/pic_5.png" alt="" /></span>
                        <em>tyc88000.com</em>
                        <a class="o_n3" href="http://www.tyc88000.com/" target="_Blank" title=""><img src="img/pic_28.png" alt="" /></a>
                    </div>
                    <div class="sen_4">
                        <input type="text" class="pus" id="sudu4" value="10ms" style="border:0px;background-color:transparent;color:#fff" />
                        <span><img src="img/pic_6.png" alt="" /></span>
                        <em>tyc88666.com</em>
                        <a class="o_n4" href="http://www.tyc88666.com/" target="_Blank" title=""><img src="img/pic_28.png" alt="" /></a>
                    </div>
                    <div class="sen_5">
                        <input type="text" class="pus" id="sudu5" value="10ms" style="border:0px;background-color:transparent;color:#fff" />
                        <span><img src="img/pic_7.png" alt="" /></span>
                        <em>tyc44222.com</em>
                        <a class="o_n5" href="http://www.tyc44222.com/" target="_Blank" href="#" title=""><img src="img/pic_28.png" alt="" /></a>
                    </div>
                    <div class="sen_6">
                        <input type="text" class="pus" id="sudu6" value="10ms" style="border:0px;background-color:transparent;color:#fff" />
                        <span><img src="img/pic_8.png" alt="" /></span>
                        <em>tyc88222.com</em>
                        <a class="o_n6" href="http://www.tyc88222.com/" target="_Blank" title=""><img src="img/pic_28.png" alt="" /></a>
                    </div>
                </div>
                <div class="lay_2">
                    <span><img src="img/pic_27.jpg" alt="" /></span>
                    <a href="index.php" title=""><span><!-- 从新检测 --></span></a>
                </div>
                <div class="lay_3">
                    <div class="g_ar">最新公告:</div>
                    <!--自动滚动-->
                    <div class="scrollbox">
                        <div id="scrollDiv">
                            <ul>
                                <li>
                                    <h3><a href="http://www.tyc44000.com/" target="_Blank" class="linktit">
                            1、澳门太阳城集团首创真人视讯天天返水1.0%电子游艺1.5%返水无上限。 </a></h3> </li>
                                <li>
                                    <h3><a href="http://www.tyc44888.com/" target="_Blank" class="linktit">
                            2、电子游艺十部曲洪荒之利祝您赚翻天。</a></h3></li>
                                <li>
                                    <h3><a href="http://www.tyc44666.com/" target="_Blank" class="linktit">
                            3、澳门太阳城集团奢华顶级VIP十大特权独家专享一对一服务。</a></h3></li>
                                <li>
                                    <h3><a href="http://www.tyc44999.com/" target="_Blank" class="linktit">
                            4、公司将不定期随机派发神秘彩金，最高奖金不设上限，没有门槛更多精彩等您来挑战！</a></h3></li>
                                
                            </ul>
                        </div>
                        <div class="scroltit">
                            <div class="updown" id="but_down">向上</div>
                            <div class="updown" id="but_up">
                                向下</div>
                        </div>
                    </div>
                    <!--自动滚动-->
                </div>
                <div class="lay_4">
                    <div class="la_left">
                        <ul>
                            <li class="cc1">
                                <a href="http://www.tyc33222.com/" target="_Blank" title="">
                                    <p>
                                        <span>太阳城贵宾会</span>
                                        <em>VIP MEMBER</em>
                                    </p>
                                    <h3><img src="img/pic_13.png" alt="" /></h3>
                                </a>
                            </li>
                            <li class="cc2">
                                <a href="http://www.tyc33222.com/" target="_Blank" title="">
                                    <p>
                                        <span>手机登入</span>
                                        <em>PHONE LOGIN</em>
                                    </p>
                                    <h4><img src="img/pic_14.png" alt="" /></h4>
                                </a>
                            </li>
                            <li class="cc3">
                                <a href="http://tyc33222.com/" target="_Blank" title="">
                                    <p>
                                        <span>资讯端下载</span>
                                        <em>DOWNLOAD</em>
                                    </p>
                                    <h5><img src="img/pic_16.png" alt="" /></h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="la_pos">
                        <!--视频-->
                        <div -id="CuPlayer" class='video-elment prism-player'><img src="img/v.jpg" width="453" /></div>
                        <!--视频-->
                    </div>
                    <div class="la_right">
                        <ul>
                            <li class="cc4">
                                <a href="http://www.tyc33222.com/" target="_Blank" title="">
                                    <h3><img src="img/pic_13.png" alt="" /></h3>
                                    <p>
                                        <span>代理登入</span>
                                        <em>AGENT LOGIN</em>
                                    </p>
                                </a>
                            </li>
                            <li class="cc5">
                                <a href="https://sgzzaxc219.chatglobal.net/chat/chatClient/chatbox.jsp?companyID=641028&configID=41044&jid=9323807521&s=1" target="_Blank" title="">
                                    <h4><img src="img/pic_15.png" alt="" /></h4>
                                    <p>
                                        <span>在线客服</span>
                                        <em>ONLINE SERVICE</em>
                                    </p>
                                </a>
                            </li>
                            <li class="cc6">
                                <a href="http://www.tyc33222.com/" target="_Blank" title="">
                                    <h5><img src="img/pic_17.png" alt="" /></h5>
                                    <p>
                                        <span>优惠办理</span>
                                        <em>PREFERENTIAL</em>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="foot_1">
            <div class="c_auto">
                <div class="in_ty">
                    <img src="img/flogo.png" alt="" />
                </div>
            </div>
        </div>
        <div class="foot_2">Copyright © 澳门太阳城集团 2007 Reserved</div>
    </div>
<script>
var player = new prismplayer({
    id: "CuPlayer", // 容器id
    source: "", // 视频url 
    autoplay: true, // 自动播放
    width: "100%", // 播放器宽度
    height: "286px" // 播放器高度
});
</script>
</script>
</body>

</html>
