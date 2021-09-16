let downloadType;
let sharetraceKey;
let xi_domain
(function () {
    return new Promise(function (succeed, fail) {
        var req = new XMLHttpRequest();
        let url = location.origin + '/frontend/v1/configNavigate';
        req.open('get', url, true);
        var _this = this;
        req.addEventListener('load', function () {
            if (req.readyState == 4 && req.status == 200) {
                let res = JSON.parse(req.responseText);
                if (res.code == 200) {
                    const $siteConfig = res.data['siteConfig'];
                    if ($siteConfig.downloadType) downloadType = $siteConfig.downloadType;
                    if ($siteConfig.other.sharetrace_key) sharetraceKey = $siteConfig.other.sharetrace_key;
                    if ($siteConfig.other.xi_domain) xi_domain = $siteConfig.other.xi_domain
                    localStorage.downloadIosLink =  $siteConfig.IOS.link;
                    localStorage.downloadAndroidLink = $siteConfig.Android.link;
                }
                succeed(res);
            } else {
            }
        });
        req.addEventListener('error', function () {
            fail(new Error('Network error'));
        });
        req.send(null);
    });
})()

function isAndroid () {
    let u = navigator.userAgent
    return u.indexOf('Android') > -1 || u.indexOf('Adr') > -1
}
function iosDownload(iosUrl) {
    setTimeout(function () {
        window.location.href = iosUrl;
    }, 0);
}
function downLink() {
    if (!isAndroid()) iosDownload(localStorage.downloadIosLink);
    else iosDownload(localStorage.downloadAndroidLink);
}
function downApp(){
    if(downloadType && sharetraceKey){
        let host = xi_domain || 'https://aaebwm.com/'
        XInstall.setHost(host)
        try {
            XInstall.getInstall( sharetraceKey ,{channelCode:4627989122},function(res){
                downLink();
            })
        } catch (error) {
            this.downLink();
        }
    } else {
        downLink();
    }
}