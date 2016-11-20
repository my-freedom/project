window.onload = function(){
	var t = document.getElementById('top');
	var timer = null;
	//获取页面可视区的高度
	var clientHeight = document.documentElement.clientHeight;

	//滚动条滚动时触发
	window.onscroll = function(){
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;
			if (osTop >= clientHeight) {
				t.style.display = 'block';
			}else{
				t.style.display = 'none';
			}
	}

	t.onclick = function(){
		//设置定时器
		timer = setInterval(function(){
			//获取滚动条顶部高度
			var osTop = document.documentElement.scrollTop || document.body.scrollTop;
			var ispeed = osTop / 5;
			document.documentElement.scrollTop = document.body.scrollTop -= osTop-ispeed;
			if (osTop == 0) {
				clearInterval(timer);
			}
		},50);

	}
}