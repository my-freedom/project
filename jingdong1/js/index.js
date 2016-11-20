$(function(){
	$("#hide span").click(function(){
		var i=$(this).index();
		//alert($("#hi"+i).text());
		//console.log(i);
		$("#hide").css("display","none")
		$("#beijing span").replaceWith("<span>"+$("#hi"+i).text()+"<span>");
		//$("#beijing span").text()=$("#hi"+i).text();
	});
    $(".headermain span").mouseover(function(){
    	$("#hide").show();
    }); 
    $(".headermain span").mouseout(function(){
    	$("#hide").hide();
    }); 
    $("#jd1").mouseover(function(){
    	$(".wdjd").show();
    }); 
    $("#jd1").mouseout(function(){
    	$(".wdjd").hide();
    }); 
    $("#jd2").mouseover(function(){
    	$(".jdsj").show();
    }); 
    $("#jd2").mouseout(function(){
    	$(".jdsj").hide();
    }); 
     $("#jd3").mouseover(function(){
    	$(".gzjd").show();
    }); 
    $("#jd3").mouseout(function(){
    	$(".gzjd").hide();
    });
     $("#jd4").mouseover(function(){
    	$(".kffw").show();
    }); 
    $("#jd4").mouseout(function(){
    	$(".kffw").hide();
    }); 
     $("#jd5").mouseover(function(){
    	$(".wzdh").show();
    }); 
    $("#jd5").mouseout(function(){
    	$(".wzdh").hide();
    });
    $(".buycar").mouseover(function(){
    	$(".car1").show();
    }); 
    $(".car1").mouseover(function(){
    	$(".car1").show();
    }); 
    $(".car1").mouseout(function(){
    	$(".car1").hide();
    }); 
    $(".buycar").mouseout(function(){
    	$(".car1").hide();
    });
   // alert($("#a0").text());
  
    //    轮播
    
      var m=1;
    $(function show(){
    	$("#images").attr("src","img/asd-"+m+".jpg");
    	//alert($("#images").attr("src"));
     	$("#li"+m).css("background","#B61B1F");
    	//alert($("#li"+m).attr("background"));
    	$("#li"+m).siblings().css("background","black");
	    m++;
    	if(m>6){m=1;}
    	setTimeout(show,2000);
    })
    //无缝滚动
    function nextinfo(){
        $(".content").animate({marginLeft:'-898px'},1300,function(){
//      	if(marginLeft<-2000){
//          $(this).css("marginLeft",0);
//          }
             var firstLi1=$(".imgs img").eq(0);
             var firstLi2=$(".imgs img").eq(1);
             var firstLi3=$(".imgs img").eq(2);
             var firstLi4=$(".imgs img").eq(3);
             var firstLi5=$(".imgs img").eq(4);
            $(".imgs").append(firstLi1);
            $(".imgs").append(firstLi2);
            $(".imgs").append(firstLi3);
            $(".imgs").append(firstLi4);
            $(".imgs").append(firstLi5);
            $(this).css("marginLeft",0);
        })
        
    }
    var cur=setInterval(nextinfo,2300);
    $(".section2pic").bind({
      'mouseover':function(){clearInterval(cur);},
      'mouseout':function(){cur=setInterval(nextinfo,2000);}
  });
//选项卡切换
  $(".dp li").bind({
  	'mouseover':function(){
  		$(this).removeClass("a").addClass("active");
  		$(this).siblings().removeClass("active").addClass("a");
  		var s=$(this).index()+1;
  		$("#ddd"+s).show();
  		$("#ddd"+s).siblings().hide();
  	}
  });
//楼梯导航
    var mark=1;
$(".cb2 div").bind({
    'click':function(){
        mark=2;
        $(this).addClass("act");
        $(this).siblings().removeClass("act");
        var i=$(this).index();
        var divT=$(".floor>div").eq(i).offset().top;
        
        $("body,html").animate({"scrollTop":divT},500,function(){mark=1;});
    }
});
    $(window).scroll(function(){
        var wT=$(this).scrollTop();
        var dH=$(".floor>div").height();
        if(wT>1634 && mark==1){
        	var i=Math.floor((wT-1634)/dH);
        	$(".cb2 div").eq(i).addClass("act");
            $(".cb2 div").eq(i).siblings().removeClass("act");
        }else{
        	$(".cb2 div").eq(0).removeClass("act");
        }
    });
  
  
  });
  
  
  
  
  
  
  