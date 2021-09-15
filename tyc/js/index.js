var jroll = new JRoll('#scroll');
jroll.refresh();
setInterval(function() {
    jroll.refresh()
}, 500);
var urllink=[
    'http://t4851.com?register=1',
    'http://t4852.com?register=1',
];
function gopath() {
    window.location.href = urllink[Math.floor((Math.random()*urllink.length))]
}
function isAndroid() {
    var u = navigator.userAgent;
    return u.indexOf('Android') > -1 || u.indexOf('Linux') > -1;
}
function down(){
   if(isAndroid())  window.location.href='https://cocos-android-3.oss-accelerate.aliyuncs.com/tyc528.apk'
   else window.location.href='https://app.yidianpi.net/app/qjwgEIMdE'
}