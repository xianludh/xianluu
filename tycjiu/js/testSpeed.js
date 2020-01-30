    var save=""; 
	var tim=1;  
	setInterval("tim++",10);  
	var b=1;  
	var autourl=new Array();  
	autourl[1]="www.tyc77111.com";  
	autourl[2]="www.tyc77111.com";  
	autourl[3]="www.tyc77111.com"; 
	autourl[4]="www.tyc77111.com"; 
	autourl[5]="www.tyc77111.com"; 
	autourl[6]="www.tyc77111.com"; 
	autourl[7]="www.tyc77111.com";  
	autourl[8]="www.tyc77111.com"; 
	autourl[9]="www.tyc77111.com"; 
 
	function auto(url,b){ 
		$("#sudu"+b).val(tim+"ms");
	}  
	function run(){  
		for(var i=1;i<autourl.length;i++){  
			document.write("<img name=\"suduname\" src=\"https://"+autourl[i]+"/"+"\" width=\"1\" height=\"1\" onerror=\"auto('https://"+autourl[i]+"',"+i+")\" style=\"display:none\" />");  
		} 
	}  
	run();  
	document.write(save); 
