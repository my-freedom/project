window.onload = function () {
				var out = document.getElementsByClassName("out")[0];
				var btn = document.getElementsByClassName("btn")[0];
				var str = "";
				for (var i = 0;i < 4;i++) {
					str += "<ul class='box' style='left:0;top:" + i * 65 + "px'><li> </li><li> </li><li style='background-position:0 " + (-i * 65) + "px'></li><li></li><li></li><li style='background-position:0 " + (-i * 65) + "px'></li></ul>"
				}
				out.innerHTML = str;
				var boxs = document.getElementsByClassName("box");
//				for (var i = 0;i < boxs.length;i++) {
//
//				}
				var angle = 0;
				function fz() {
					angle += 180;
					if(angle > 180) {
						angle=0;
					}
					for(var i = 0;i < boxs.length;i++) {
						setCss3(boxs[i],{transform:"rotateY(" + angle + "deg)"});
						setCss3(boxs[i],{transition:"all 2s ease " + Math.random() * 1.5 + "s"});
					}
				}
				setInterval(fz,4000);
				var index=9;
				function djs(){
					index--;
					var num=document.getElementById("num");
					num.innerHTML=index;
					if(index==0){
						window.location.href="1.html";
					}
				}
				setInterval(djs,1000);
			}
