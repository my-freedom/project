window.onload=function(){
	var index=1;
	var li=document.getElementsByName("n");
	var imgs=document.getElementById("imgs");
	var s=document.getElementById("s");
	function show(){
		console.log(index);
		if(index==6){
			index=1;
		}
		imgs.src="img/br-"+index+".jpg";
		console.log(index);
		for(var i=1;i<=li.length;i++){
			li[i-1].style.background="black";
			if(index==i){
				li[index-1].style.background="red";
			}   
		}
		index++;
	}
var time=setInterval(show,1000);
	for(var k=0;k<li.length;k++){
		li[k].ins=k;
		li[k].onclick=function(){
			if(index==6){
			index=1;
		    }
			index=this.ins+1;
			imgs.src="img/br-"+(this.ins+1)+".jpg";
			for(var j=0;j<li.length;j++){
				li[j].style.background="black";
			}
			li[this.ins].style.background="red";
		}
		
	}
	
}
