
    var save=""; 
	var tim=1;  
	setInterval("tim++",10);  
	var b=1;  
	var autourl=new Array();  
	autourl[1]="//x1157.com";autourl[2]="//x1159.com";autourl[3]="//x1169.com";autourl[4]="//x1170.com";autourl[5]="//x1171.com";autourl[6]="//x1175.com";autourl[7]="//x1176.com";
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

