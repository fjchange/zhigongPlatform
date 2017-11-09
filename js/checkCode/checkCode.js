var code;
var codeLength=4;

window.onload=function (){
    createCode();
}
function createCode(){
    code="";
    var checkCode=document.getElementById("code");
    var random=new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R',
        'S','T','U','V','W','X','Y','Z');
    for (var i=0;i<codeLength;i++){
        var index=Math.floor(Math.random()*36);
        code+=random[index];
    }
    checkCode=code;
}
function validateCode(){
    var inputCode=document.getElementById("input").value.toUpperCase();
    if(inputCode.length<=codeLength){
        alert("请输入验证码!");
    }
    else if(inputCode.length!=code){
        alert("请输入正确的验证码！");
        createCode();
    }
    else{
        document.getElementById("submitBtn").disabled="false";
    }
}
