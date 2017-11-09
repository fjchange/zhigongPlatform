var index=0;
var p;
var imgLen =$(".main .banner .slider li").length;
var imgWidth=975;
console.log(imgLen);
var nnum='';
$('.slider').css('width','999999px');

$('.banner').hover(function () {
    clearInterval(p);
    $('.banner .bx').fadeIn();
},function () {
    pic();
    $('.banner .bx').fadeOut();
});
function pic(){
    p=setInterval(function(){
        index++;
        if(index>=imgLen){
            index=0;
        }
        selectimg(index);
    },3000);
}
function selectimg(index) {
    $('.slider').animate({'left':'-'+imgWidth*index+'px'},{'width':999999+'px'},{'position':'relative'},600);
    $('.con a').eq(index).addClass('active').siblings('a').removeClass('active');
}
$('.banner .left').click(function () {
    index-=1;
    if(index<0){
        index=imgLen-1;
    }
    selectimg(index);
});
$('.banner .right').click(function () {
    index+=1;
    if(index>=imgLen){
        index=0;
    }
    selectimg(index);
});
for(var i=0;i<imgLen;i++){
    nnum+="<a href='javascript:;'></a>";
}
$('.banner .con').html(nnum);
$('.banner .con a').eq(0).addClass('active');

$('.con .a').each(function (index) {
    $(this).click(function () {
        $('.banner .slider').animate({'margin-left':'-'+imgWidth*index+'px'},600);
        $('.con a ').eq(index).addClass('active').siblings('a').removeClass('active');
    });
});
pic();
var val=$('.main .banner .con a').length;
console.log(val);