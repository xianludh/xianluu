
    var save=""; 
	var tim=1;  
	setInterval("tim++",10);  
	var b=1;  
	var autourl=new Array();  
	autourl[1]="//vn11nn.com";autourl[2]="//vn11nn.com";autourl[3]="//vn11nn.com";autourl[4]="//vn11nn.com";autourl[5]="//vn11nn.com";autourl[6]="//vn11nn.com"; 
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

