let tim = 1;
setInterval("tim++", 100);
let b = 0;
let str = '';
const autourl = ['https://vns2033.com','https://vns3033.com','https://vns00ww.com','https://vns00xx.com','https://vns00yy.com','https://vns8033.com','https://vns00tt.com','https://vns00jj.com'];

function butt(){
    for(let i = 0; i < autourl.length; i++) {
        str += `<li>
                    <span class="btn-open">
                            <a href="" target="_blank" class="png24" id="href${i}">
                                进入游戏
                            </a>
                        </span>
                    <span class="ms" id="sudu${i}">
                            检测中
                        </span>
                    <span class="url" id="url${i}">
                           
                        </span>
                </li>`;
    }
}
butt();
function auto(url){
    $("#url" + b).html(url);
    $('#href' + b).attr('href',url);

    if(tim > 200){
        $('#sudu' + b).html('链接超时');
    }
    else {
        $('#sudu' + b).html(tim*10 + "ms");
    }
    b++;
}
function run(){
    for(let i = 0; i < autourl.length; i++) {
        document.write("<img src="+autourl[i]+"/"+Math.random()+" width=1 height=1 onerror=auto('"+autourl[i]+"') style='display:none'>")
    }}
run();
$('.speedlist').append(str);

