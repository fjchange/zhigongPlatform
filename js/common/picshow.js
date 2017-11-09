function MouseEvent(e){this.x=e.pageX,this.y=e.pageY}(function(e){e.fn.jqueryzoom=function(t){var n={xzoom:200,yzoom:200,offset:10,position:"right",lens:1,preload:1};t&&e.extend(n,t);var r="";e(this).hover(function(){var t=e(this).width(),i=e(this).offset().left,s=e(this).offset().top,o=e(this).children("img").get(0).offsetWidth,u=e(this).children("img").get(0).offsetHeight;r=e(this).children("img").attr("alt");var a=e(this).children("img").attr("jqimg");e(this).children("img").attr("alt",""),e("div.zoomdiv").get().length==0&&(e(this).after("<div class='zoomdiv'><img class='bigimg' src='"+a+"' onerror='this.src=\"/images/js/base/nopic.jpg\"'/></div>"),e(this).append("<div class='jqZoomPup'>&nbsp;</div>")),n.position=="right"?i+o+n.offset+n.xzoom>screen.width?leftpos=i-n.offset-n.xzoom:leftpos=i+t+n.offset:(leftpos=i-n.xzoom-n.offset,leftpos<0&&(leftpos=i+o+n.offset)),e("div.zoomdiv").css({top:s,left:leftpos}),e("div.zoomdiv").width(n.xzoom),e("div.zoomdiv").height(n.yzoom),e("div.zoomdiv").show(),n.lens||e(this).css("cursor","crosshair"),e(document.body).mousemove(function(r){mouse=new MouseEvent(r);var a=e(".bigimg").get(0).offsetWidth,f=e(".bigimg").get(0).offsetHeight,l="x",c="y";if(isNaN(c)|isNaN(l)){var c=a/o,l=f/u;e("div.jqZoomPup").width(n.xzoom/(c*1)),e("div.jqZoomPup").height(n.yzoom/(l*1)),n.lens&&e("div.jqZoomPup").css("visibility","visible")}xpos=mouse.x-e("div.jqZoomPup").width()/2-i,ypos=mouse.y-e("div.jqZoomPup").height()/2-s,n.lens&&(xpos=mouse.x-e("div.jqZoomPup").width()/2<i?0:mouse.x+e("div.jqZoomPup").width()/2>t+i?t-e("div.jqZoomPup").width()-2:xpos,ypos=mouse.y-e("div.jqZoomPup").height()/2<s?0:mouse.y+e("div.jqZoomPup").height()/2>u+s?u-e("div.jqZoomPup").height()-2:ypos),n.lens&&e("div.jqZoomPup").css({top:ypos,left:xpos}),scrolly=ypos,e("div.zoomdiv").get(0).scrollTop=scrolly*l,scrollx=xpos,e("div.zoomdiv").get(0).scrollLeft=scrollx*c})},function(){e(this).children("img").attr("alt",r),e(document.body).unbind("mousemove"),n.lens&&e("div.jqZoomPup").remove(),e("div.zoomdiv").remove()}),count=0,n.preload&&(e("body").append("<div style='display:none;' class='jqPreload"+count+"'></div>"),e(this).each(function(){var t=e(this).children("img").attr("jqimg"),n=jQuery("div.jqPreload"+count+"").html();jQuery("div.jqPreload"+count+"").html(n+'<img src="'+t+'">')}))}})(jQuery)
function scrollimg() {
	$(".icog_next").unbind('click');
	$(".icog_prev").unbind('click');
	var img_count = $(".screenimg img").length;
	var ul_w = 80 * img_count;
	//var ul_w = 210 * img_count + img_count * 10;
	$(".screenimg ul").css("width", ul_w);
	if (img_count > 4) {
		$(".screenimg li").eq(0).addClass("scroll_on");
	}
	$(".icog_next").bind("click", function () {
		var curr = $(".screenimg .scroll_on").index();
		if (curr < 0)
			return;
		if ((img_count - curr) > 4) {
			$(".screenimg .scroll_on").removeClass("scroll_on");
			$(".screenimg li").eq(curr + 1).addClass("scroll_on");
			//$(".screenimg ul").animate({ left: -(210 * (curr + 1) + 10 * (curr + 1)) }, 300);
			$(".screenimg ul").animate({ left: -(80 * (curr + 1))}, 300);
			if (img_count - curr - 1 == 4) {
				$(".icog_next").removeClass("icog_next_c");
			}
		}
		$(".icog_prev").addClass("icog_prev_c");
	});
	$(".icog_prev").bind("click", function () {
		var curr = $(".screenimg .scroll_on").index();
		if (curr < 0) return;
		if (curr > 0) {
			$(".screenimg .scroll_on").removeClass("scroll_on");
			$(".screenimg li").eq(curr - 1).addClass("scroll_on");
			$(".screenimg ul").animate({ left: -(80 * (curr - 1)) }, 300);
			if (curr == 1) {
				$(".icog_prev").removeClass("icog_prev_c");
			}
			$(".icog_next").addClass("icog_next_c");
		}
	});
	if (img_count > 4) {
		$(".icog_prev").hover(function () {
			if ($(".scroll_on").index() != 0) {
				$(this).addClass("icog_prev_c");
			}else{
				$(this).removeClass("icog_prev_c");
			}
		});
		$(".icog_next").hover(function () {
			if ($(".scroll_on").index() != (img_count - 4)) {
				$(this).addClass("icog_next_c");
			}else{
				$(this).removeClass("icog_next_c");
			}
		});
		if ($(".scroll_on").index() != (img_count - 4)) {
			$(".icog_next").addClass("icog_next_c");
		}else{
			$(".icog_next").removeClass("icog_next_c");
		}
		if ($(".scroll_on").index() != 0) {
			$(".icog_prev").addClass("icog_prev_c");
		}else{
			$(".icog_prev").removeClass("icog_prev_c");
		}
	}
}
$(function(){			
	$(".jqzoom").jqueryzoom({
		xzoom:400,
		yzoom:360,
		offset:2,
		position:"right",
		preload:1,
		lens:1
	});
	$("#spec-list span").live("mouseover",function(){
		var src=$(this).find("img").attr("src");
		//var jqimg=$(this).attr("jqimg");
		$("#spec-n1 img").eq(0).attr({
			src:src.replace("\/n5\/","\/n1\/").replace("_4.","_1."),
			jqimg:src.replace("_4.",".")
		});
		$(this).addClass("hover").parents("li").siblings().find("span").removeClass("hover");
	});
})