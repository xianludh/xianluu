
    var save=""; 
	var tim=1;  
	setInterval("tim++",10);  
	var b=1;  
	var autourl=new Array();  
	autourl[1]="//bb365v.com";autourl[2]="//bb365i.com";autourl[3]="//bb365h.com";autourl[4]="//bb365k.com";autourl[5]="//bb365f.com";autourl[6]="//bb365e.com"; autourl[7]="//bb365l.com";autourl[8]="//bb365c.com";autourl[9]="//bb365b.com";autourl[10]="//bb365w.com";
	function auto(url,b){ 
		$("#sudu"+b).html(tim+"ms");
	}  
	function run(){  
		for(var i=1;i<autourl.length;i++){  
			document.write("<img name=\"suduname\" src=\""+autourl[i]+"/"+"\" width=\"1\" height=\"1\" onerror=\"auto('"+autourl[i]+"',"+i+")\" style=\"display:none\" />");  
		} 
	}  
	run();  
	document.write(save); 

