window.onload=function(){
	alert(111);
	var container = document.getElementById('ma');
            var list = document.getElementById('list');
            /*五个按钮*/
            var buttons = document.getElementById('nav1').getElementsByTagName('li');
            var index = 1;/*用来存放当前显示的是第几张图片*/
            var len = 5;
            var animated = false;/*布尔值，用于判断图片是否在切换*/
            var interval = 3000;
            var timer;
            function animate (offset) {
                if (offset == 0) {
                    return;
                }
                animated = true;
                var time = 300;/*位移总的时间*/
                var inteval = 10;/*位移间隔时间*/
                var speed = offset/(time/inteval);/*位移速度*/
                var left = parseInt(list.style.left) + offset;
                /*位移的判断*/
                var go = function (){
                    if ( (speed > 0 && parseInt(list.style.left) < left) || (speed < 0 && parseInt(list.style.left) > left)) {
                        list.style.left = parseInt(list.style.left) + speed + 'px';
                        setTimeout(go, inteval);/*递归，10毫秒调用一次*/
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
             /*亮起小圆点*/
           function showButton() {
            /*其他圆点变暗*/
                for (var i = 0; i < buttons.length ; i++) {
                    if( buttons[i].className == 'on'){
                        buttons[i].className = '';
                        break;
                    }
                }
               /* 当前圆点变亮*/
                buttons[index - 1].className = 'on';
            }
           /* 做自动播放*/
            /*清除定时器*/
            /*右箭头*/
            /*左箭头*/
            /*s给每个圆点加上事件*/
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].onclick = function () {
                    if (animated) {
                        return;
                    }
                    if(this.className == 'on') {
                        return;
                    }
                    /*获取按钮的index属性值*/
                    var myIndex = parseInt(this.getAttribute('index'));
                    var offset = -600 * (myIndex - index);/*计算偏移量*/

                    animate(offset);
                    index = myIndex;
                    showButton();
                }
            }

            play();
            
       }

}