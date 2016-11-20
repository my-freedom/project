//第一个轮播
	var m=1;
	  var obj=document.getElementsByName("new"); 
      function show(){
	  	for(var i=0;i<obj.length;i++){
	  		if((m-1)==i){
	  			obj[i].style.background="orange";
	  		}else{
	  			obj[i].style.background="white";
	  		}
	  	}
	  	document.getElementById("images").src="img/banner-"+m+".jpg";
	  	m++;
	  	if(m>5){m=1;}
	  	setTimeout("show()",2000);
	  }
//二级菜单
function displaySubMenu(li) { 
var subMenu = li.getElementsByTagName("ul")[0]; 
subMenu.style.display = "block"; 
} 
//隐藏子导航栏
function hideSubMenu(li) { 
var subMenu = li.getElementsByTagName("ul")[0]; 
subMenu.style.display = "none"; 
} 
//选项卡切换
 function change(val, obj){
	   	   obj.style.borderBottom="2px solid #F22E00";
	   	   if (val=='gg') {
            	gg.style.display='block';
            	lt.style.display='none';
            	gz.style.display='none';
            	gy.style.display='none';
            	aq.style.display='none';
            } 
            else if (val=='gz') {
            	gz.style.display='block';
            	lt.style.display='none';
            	gg.style.display='none';
            	gy.style.display='none';
            	aq.style.display='none';
            } else if(val=='lt'){
            	gg.style.display='none';
            	lt.style.display='block';
            	gz.style.display='none';
            	gy.style.display='none';
            	aq.style.display='none';
            } else if(val=='gy'){
            	gg.style.display='none';
                gy.style.display='block';
            	lt.style.display='none';
            	gz.style.display='none';
            	aq.style.display='none';

            }else if(val=='aq'){
            	gg.style.display='none';
                aq.style.display='block';
            	lt.style.display='none';
            	gy.style.display='none';
            	gz.style.display='none';
            }
	   }

	   function change2(obj){
	   	 obj.style.border="none";
	   }
//无缝滚动
var speed=30;
var ad1=document.getElementById("ad1");
var imgs=document.getElementById("imgs");
var reps=document.getElementById("reps");
reps.innerHTML=imgs.innerHTML;
function run(){
	if(reps.offsetWidth-ad1.scrollLeft<=0){
		ad1.scrollLeft-=imgs.offsetWidth;
	}else{
		ad1.scrollLeft++;
	}
}
var action=setInterval(run,speed);
ad1.onmouseover=function(){
	clearInterval(action);
};
ad1.onmouseout=function(){
	action=setInterval(run,speed);
};
//关闭按钮
function closebtn(){
	var obj=document.getElementById("erweima");
	obj.style.display="none";
}
//导航切换
  function changenav(val, obj){
	   	   obj.style.backgroundColor="#F22E00";
	   	   var btn1=document.getElementById("btn1");
	   	   var btn2=document.getElementById("btn2");
	   	   var btn3=document.getElementById("btn3");
            if (val=='info1') {
            	info1.style.display='block';
            	info1_1.style.display='none';
            	btn2.style.backgroundColor='white';
            	btn3.style.backgroundColor='white';
            	info1_2.style.display='none';
            } else if(val=='info1_1'){
            	btn1.style.backgroundColor='white';
            	btn3.style.backgroundColor='white';
            	info1_1.style.display='block';
            	info1.style.display='none';
            	info1_2.style.display='none';
            } else if(val=='info1_2'){
            	btn1.style.backgroundColor='white';
            	btn2.style.backgroundColor='white';
                info1_2.style.display='block';
            	info1_1.style.display='none';
            	info1.style.display='none';
            }
	   }

//左侧导航
var o1=document.getElementById("o1");
var o2=document.getElementById("o2");
var o3=document.getElementById("o3");
var one=document.getElementById("one");
var tow=document.getElementById("tow");
var three=document.getElementById("three");
 o1.onmouseover=function(){
 	one.style.display="block";
 	tow.style.display="none";
 	three.style.display="none";	
 };
 o2.onmouseover=function(){
 	tow.style.display="block";
 	one.style.display="none";
 	three.style.display="none";	
 };
 o3.onmouseover=function(){
 	three.style.display="block";
 	one.style.display="none";
 	tow.style.display="none";	
 };
 one.onmouseout=function(){
 	one.style.display="none";
 };
 tow.onmouseout=function(){
 	tow.style.display="none";
 };
 three.onmouseout=function(){
 	three.style.display="none";	
 };
// 存储
function savedata(){
	var msg=document.getElementById("msg");
	var key=1;
	localStorage.setItem(key,msg.value);
	msg.value="";
	alert("存储成功");
}
function readdata(){
	var i=0;
	var key=localStorage.key(i);
	var val=localStorage.getItem(key);
	var msg=document.getElementById("msg");
	msg.value=val;
}
readdata();
//楼梯导航
var aDiv=document.getElementsByClassName('ff');
//	alert(aDiv[1].offsetTop)
	var oul=document.getElementById('dH');
	var oli=oul.getElementsByTagName('li');
	var m=1;
		for(var i=0;i<oli.length;i++){
			oli[i].index=i;
			oli[i].onclick=function(){
				for(var j=0;j<oli.length;j++){
					oli[j].className='';
				}
			    this.className='floor';
			    m=2;
			     $("body").animate({scrollTop:aDiv[this.index].offsetTop},500,function(){m=1;});
//			    document.body.scrollTop=aDiv[this.index].offsetTop;   
			}	
		}
		
    window.onscroll=function(){
    	if(m==1){
    	var sTop=document.body.scrollTop;
        if(sTop>=250){
        	for(var j=0;j<oli.length;j++){
        		oli[j].className='';
        	}
        	oli[0].className='floor';
        }
        if(sTop>=1050){
        	for(var j=0;j<oli.length;j++){
        		oli[j].className='';
        	}
        	oli[1].className='floor';
        }
        if(sTop>=1850){
        	for(var j=0;j<oli.length;j++){
        		oli[j].className='';
        	}
        	oli[2].className='floor';
        }
    }   
}