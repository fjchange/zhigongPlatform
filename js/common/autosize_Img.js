function autosize(imgD,h,w){
    ImgD=document.getElementById(imgD);
    var image=new Images();
    image.src=ImgD.src;
    if(image.width<w&&imags.height<h){
        ImgD.width=image.width;
        ImgD.height=image.height;
    }
    else{
        if(w/h<=image.width/image,height){
            ImgD.width=w;
            ImgD.height=w*(image.height/image.width);
        }
        else{
            ImgD.width=h*(image.width/image.height);
            ImgD.height=h;
        }
    }
}