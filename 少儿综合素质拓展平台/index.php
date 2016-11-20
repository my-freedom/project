<!DOCTYPE html>
<html>
<head>
<meta property="qc:admins" content="1407576330616061006317345360" />
<meta name="data-spm" content="a2107" />
<title>少儿综合素质拓展平台</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/main.css" type="text/css" />
<script>
 window.onload = function () {
            var container = document.getElementById('container');
            var list = document.getElementById('list');
            var buttons = document.getElementById('buttons').getElementsByTagName('span');
            var prev = document.getElementById('prev');
            var next = document.getElementById('next');
            var index = 1;
            var len = 5;
            var animated = false;
            var interval = 3000;
            var timer;


            function animate (offset) {
                if (offset == 0) {
                    return;
                }
                animated = true;
                var time = 300;
                var inteval = 10;
                var speed = offset/(time/inteval);
                var left = parseInt(list.style.left) + offset;

                var go = function (){
                    if ( (speed > 0 && parseInt(list.style.left) < left) || (speed < 0 && parseInt(list.style.left) > left)) {
                        list.style.left = parseInt(list.style.left) + speed + 'px';
                        setTimeout(go, inteval);
                    }
                    else {
                        list.style.left = left + 'px';
                        if(left>-200){
                            list.style.left = -600 * len + 'px';
                        }
                        if(left<(-600 * len)) {
                            list.style.left = '-600px';
                        }
                        animated = false;
                    }
                }
                go();
            }

            function showButton() {
                for (var i = 0; i < buttons.length ; i++) {
                    if( buttons[i].className == 'on'){
                        buttons[i].className = '';
                        break;
                    }
                }
                buttons[index - 1].className = 'on';
            }

            function play() {
                timer = setTimeout(function () {
                    next.onclick();
                    play();
                }, interval);
            }
            function stop() {
                clearTimeout(timer);
            }

            next.onclick = function () {
                if (animated) {
                    return;
                }
                if (index == 5) {
                    index = 1;
                }
                else {
                    index += 1;
                }
                animate(-600);
                showButton();
            }
            prev.onclick = function () {
                if (animated) {
                    return;
                }
                if (index == 1) {
                    index = 5;
                }
                else {
                    index -= 1;
                }
                animate(600);
                showButton();
            }

            for (var i = 0; i < buttons.length; i++) {
                buttons[i].onclick = function () {
                    if (animated) {
                        return;
                    }
                    if(this.className == 'on') {
                        return;
                    }
                    var myIndex = parseInt(this.getAttribute('index'));
                    var offset = -600 * (myIndex - index);

                    animate(offset);
                    index = myIndex;
                    showButton();
                }
            }
            container.onmouseover = stop;
            container.onmouseout = play;
            play();

        }

var countin = 0;
        function stucenter(){
            if(countin==0){
            alert("请先登录！");
            window.location.href='login.html';
            countin=1;
        }
        else{
            window.location.href='learningcenter.php';
        }
        }
        function mycenter(){
            if(countin==0){
            alert("请先登录！");
            window.location.href='login.html';
            countin=1;
        }
        else{
            window.location.href='learningcenter.php';
        }
        }
        function toplist(){
            if(countin==0){
            alert("请先登录！");
            window.location.href='login.html';
            countin=1;
        }
        else{
            window.location.href='learningcenter.php';
        }
        }
        function myvideo(){
            if(countin==0){
            alert("请先登录！");
            window.location.href='login.html';
            countin=1;
        }
        else{
            window.location.href='learningcenter.php';
        }
        }
        function paradise(){
            if(countin==0){
            alert("请先登录！");
            window.location.href='login.html';
            countin=1;
        }
        else{
            window.location.href='learningcenter.php';
        }
        }
</script>
</head>
<body>
   <div class="tit"><span class="tite"><img src="images/homepage3.png"/>&nbsp;&nbsp;&nbsp;少儿综合素质拓展平台</span><span><a href="login.html">请登录</a></span><span><a href="register1.html">快速注册</a></span><span></span><span></span>
   </div>
  <div class="top">
  <a href="main.html">首页</a>
  <a href="javascript:void(0);" onclick="stucenter()">学习中心</a>
  <a href="javascript:void(0);" onclick="mycenter()">个人中心</a>
  <a href="javascript:void(0);" onclick="toplist()">排行榜</a>
  <a href="javascript:void(0);" onclick="myvideo()">视频中心</a>
  <a href="javascript:void(0);" onclick="paradise()">课外乐园</a>
  </div>
  <div class="mid">
    
    <div id="container">
    <div id="list" style="left: -600px;">
        <img src="images/5.png" alt="5"/>
        <img src="images/1.png" alt="1"/>
        <img src="images/2.png" alt="2"/>
        <img src="images/3.png" alt="3"/>
        <img src="images/4.png" alt="4"/>
        <img src="images/5.png" alt="5"/>
        <img src="images/1.png" alt="1"/>
    </div>
    <div id="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
        <span index="4"></span>
        <span index="5"></span>
    </div>
    <a href="javascript:;" id="prev" class="arrow">&lt;</a>
    <a href="javascript:;" id="next" class="arrow">&gt;</a>
    </div>
    <div class="weather">
    	<img src="images/weather.png" alt="1"/>
    </div>
    <div class="con">
    	<table>
    		<tr><td colspan="4"><h4>游戏</h4></td></tr>
    		<tr>
    		<td><img src="images/game1.jpg"/></td>
    		<td><img src="images/game2.jpg"/></td>
    		<td><img src="images/game3.jpg"/></td>
    		<td><img src="images/game4.jpg"/></td></tr>
    	</table>
    	<table>
    		<tr><td colspan="4"><h4>测试</h4></td></tr>
    		<tr>
    		<td><img src="images/game1.jpg"/></td>
    		<td><img src="images/game2.jpg"/></td>
    		<td><img src="images/game3.jpg"/></td>
    		<td><img src="images/game4.jpg"/></td></tr>
    	</table>
    </div>
    <div class="ad">
    	<img src="images/score.png"/>
    </div>
</div>
</body>
</html>


