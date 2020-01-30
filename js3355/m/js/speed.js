
    var save=""; 
	var tim=1;  
	setInterval("tim++",10);  
	var b=1;  
	var autourl=new Array();
	autourl[1]="//nn88js.com";autourl[2]="//mm88js.com";autourl[3]="//bb88js.com";autourl[4]="//bb88js.com";autourl[5]="//tt88js.com";autourl[6]="//dd88js.com"; autourl[7]="//kk88js.com";autourl[8]="//pp88js.com";autourl[9]="//cc88js.com";
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

