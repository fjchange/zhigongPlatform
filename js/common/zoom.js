function e(element){
    return element=document.getElementsById(element);
}
function D1(element) {
    var d=e(element);
    var h=d.offsetHeight;
    var maxh=400;
    function dmove() {
        if(h>=maxh){
            d.style.height='400px';
            clearInterval(iIntervalId);
        }
        else{
            h+=50;
            d.style.display='block';
            d.style.height=h+'px';
        }
    }
    iIntervalId=setInterval(dmove,2);
}
function D2(element) {
    var d=e(element);
    var h=d.offsetHeight;
    var maxh=400;
    function dmove() {
        if(h<=0){
            d.style.display='none';
            clearInterval(iIntervalId);
        }
        else{
            h-=50;
            d.style.height=h+'px';
        }
    }
    iIntervalId=setInterval(dmove,2);
}
function use(targetId) {
    var d=e(targetId);
    if(d.style.display=='block'){
        D2(targetId);
        d.style.display='none';
    }
    else{
        D1(targetId);
        d.style.display='block';
    }
}