function butt(){
document.write("<form class='formclass' name=autof style='padding:0px; margin:0px;'>")
for(var i=1;i<autourl.length;i++)document.write("<div class='tline'><input type=text class='msinput' name=txt"+i+" value=测试中……><img src='images/arrow.png' border='0' /><input class='urlinput' type=text name=url"+i+">&nbsp;<input type='button'  onclick='window.open(this.form.url"+i+".value)' class='buttonopen'></div>")
document.write("<center><input type=submit value=点击这里重新检测刷新访问速度 class='buttonsubmit'></center></form>")
}
butt()
function auto(url){
document.forms[0]["url"+b].value=url
if(tim>200)
{document.forms[0]["txt"+b].value="链接超时"}
else
{document.forms[0]["txt"+b].value=tim*10+"ms"}
b++
}
function run(){for(var i=1;i<autourl.length;i++)document.write("<img src="+autourl[i]+"/"+Math.random()+" width=1 height=1 onerror=auto('"+autourl[i]+"') style='display:none'>")}
run()