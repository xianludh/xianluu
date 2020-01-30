function test() {
	var span, d = document, li, a, i, lis = d.getElementById('ttcesu').getElementsByTagName('li');
	for (i = 0; li = lis[i++]; ) {
		a = li.getElementsByTagName('a')[0];
		if (!a) { continue; }
		p = d.createElement('p');
		p.ctime=new Date();
		p.innerHTML = '测速中...<img src="' + a.href + '" border="0" width="1" height="1" onerror="testresult(this)" />';
		li.appendChild(p);
	}
};
function testresult(img) {
	var p = img.parentNode;
	if (!testresult.isrun) {testresult.isrun = true; }
	p.innerHTML = ((new Date() - p.ctime)) + 'ms';
};
var ran = Math.random();