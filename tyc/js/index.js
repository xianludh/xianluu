var jroll = new JRoll('#scroll');
jroll.refresh();
setInterval(function() {
    jroll.refresh()
}, 500);
var urllink=[
    'https://t4851.com:6443?register=1',
    'https://t4852.com:6443?register=1',
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