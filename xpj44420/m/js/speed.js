    var save="";
    var tim=1;  
    setInterval("tim++",10);  
    var b=1;  
    var autourl=new Array();  
    autourl[1]="https://xpj5553.com";autourl[2]="https://xpj12111.com";autourl[3]="https://xpj13111.com";autourl[4]="https://xpj14111.com";autourl[5]="https://xpj17111.com";autourl[6]="https://xpj5550.com";autourl[7]="https://xpj19111.com";autourl[8]="https://xpj99964.com"; 
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

