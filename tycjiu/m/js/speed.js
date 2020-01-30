
    var save=""; 
	var tim=1;  
	setInterval("tim++",10);  
	var b=1;  
	var autourl=new Array();  
	autourl[1]="https://vn4411.com";autourl[2]="https://vn4433.com";autourl[3]="https://vn4477.com";autourl[4]="https://vn4488.com";autourl[5]="https://vn4499.com";autourl[6]="https://vn4499.com"; 
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

