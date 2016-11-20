var m,q3,unit_object;
$(document).ready(function(){//jquery的主方法
	$.ajax({//把语文的全都获取下来
		            method:"post",
                    url:"list.php",
                    data:{
                         "num":1
                     },
                     complete:function(response){
                     	
                     	 unit_object= eval("("+response.responseText+")");
   	  	                 m=count(unit_object);
   	  	                 q2=unit_object;
   	  	                 q3=m;
   	  	                 $("#list1").append("<table><tr><td colspan='4'>语文</td></tr><tr><td>排名</td><td>姓名</td><td>星星数量</td></tr><tr><td>"+q2[0].id+"</td><td>"+q2[0].user+"</td><td>"+q2[0].record+"</td></tr><tr><td>"+q2[1].id+"</td><td>"+q2[1].user+"</td><td>"+q2[1].record+"</td></tr><tr><td>"+q2[2].id+"</td><td>"+q2[2].user+"</td><td>"+q2[2].record+"</td></tr><tr><td>"+q2[3].id+"</td><td>"+q2[3].user+"</td><td>"+q2[3].record+"</td></tr><tr><td>"+q2[4].id+"</td><td>"+q2[4].user+"</td><td>"+q2[4].record+"</td></tr><tr><td>"+q2[5].id+"</td><td>"+q2[5].user+"</td><td>"+q2[5].record+"</td></tr><tr><td>"+q2[6].id+"</td><td>"+q2[6].user+"</td><td>"+q2[6].record+"</td></tr><tr><td>"+q2[7].id+"</td><td>"+q2[7].user+"</td><td>"+q2[7].record+"</td></tr><tr><td>"+q2[8].id+"</td><td>"+q2[8].user+"</td><td>"+q2[8].record+"</td></tr></table>");
                          

                    }

	});
$.ajax({//把语文的全都获取下来
		            method:"post",
                    url:"list.php",
                    data:{
                         "num":2
                     },
                     complete:function(response){

                     	
                     	 unit_object= eval("("+response.responseText+")");
   	  	                 m=count(unit_object);
   	  	                 q2=unit_object;
   	  	                 q3=m;


   	  	                 $("#list2").append("<table><tr><td colspan='4'>数学</td></tr><tr><td>排名</td><td>姓名</td><td>星星数量</td></tr><tr><td>"+q2[0].id+"</td><td>"+q2[0].user+"</td><td>"+q2[0].record+"</td></tr><tr><td>"+q2[1].id+"</td><td>"+q2[1].user+"</td><td>"+q2[1].record+"</td></tr><tr><td>"+q2[2].id+"</td><td>"+q2[2].user+"</td><td>"+q2[2].record+"</td></tr><tr><td>"+q2[3].id+"</td><td>"+q2[3].user+"</td><td>"+q2[3].record+"</td></tr><tr><td>"+q2[4].id+"</td><td>"+q2[4].user+"</td><td>"+q2[4].record+"</td></tr><tr><td>"+q2[5].id+"</td><td>"+q2[5].user+"</td><td>"+q2[5].record+"</td></tr><tr><td>"+q2[6].id+"</td><td>"+q2[6].user+"</td><td>"+q2[6].record+"</td></tr><tr><td>"+q2[7].id+"</td><td>"+q2[7].user+"</td><td>"+q2[7].record+"</td></tr><tr><td>"+q2[8].id+"</td><td>"+q2[8].user+"</td><td>"+q2[8].record+"</td></tr></table>");
                          

                    }

	});
$.ajax({//把语文的全都获取下来
		            method:"post",
                    url:"list.php",
                    data:{
                         "num":3
                     },
                     complete:function(response){
                     	
                     	 unit_object= eval("("+response.responseText+")");
   	  	                 m=count(unit_object);
   	  	                 q2=unit_object;
   	  	                 q3=m;
   	  	                 $("#list3").append("<table><tr><td colspan='4'>英语</td></tr><tr><td>排名</td><td>姓名</td><td>星星数量</td></tr><tr><td>"+q2[0].id+"</td><td>"+q2[0].user+"</td><td>"+q2[0].record+"</td></tr><tr><td>"+q2[1].id+"</td><td>"+q2[1].user+"</td><td>"+q2[1].record+"</td></tr><tr><td>"+q2[2].id+"</td><td>"+q2[2].user+"</td><td>"+q2[2].record+"</td></tr><tr><td>"+q2[3].id+"</td><td>"+q2[3].user+"</td><td>"+q2[3].record+"</td></tr><tr><td>"+q2[4].id+"</td><td>"+q2[4].user+"</td><td>"+q2[4].record+"</td></tr><tr><td>"+q2[5].id+"</td><td>"+q2[5].user+"</td><td>"+q2[5].record+"</td></tr><tr><td>"+q2[6].id+"</td><td>"+q2[6].user+"</td><td>"+q2[6].record+"</td></tr><tr><td>"+q2[7].id+"</td><td>"+q2[7].user+"</td><td>"+q2[7].record+"</td></tr><tr><td>"+q2[8].id+"</td><td>"+q2[8].user+"</td><td>"+q2[8].record+"</td></tr></table>");
                          

                    }

	});
             $.ajax({//把英语的全都获取下来
		            method:"post",
                    url:"list.php",
                    data:{
                         "num":4
                     },//这里是会出现一个图表
                     success:function(response){
                     	 /*unit_object= eval("("+response.responseText+")");
   	  	                 m=count(unit_object);
   	  	                 q2=unit_object;
   	  	                 q3=m;*/
   	  	                  


   	  	                 option = {
                              title : {
                               text: '七天学习状况分析',
                            
                                   },
								    tooltip : {
								        trigger: 'axis'
                       
								    },
                   
								    legend: {
								        data:['最高得星']
								    },
								    
								   
								    xAxis : [
								        {
								           
								            boundaryGap : false,
								            data : ['3/6','3/7','3/8','3/9','3/10','3/11','3/12']
								        }
								    ],
								    yAxis : [
								        {
								            type : 'value',
								            axisLabel : {
								                formatter: '{value} 个'
								            }
								        }
								    ],
								    series : [
								        {
								            name:'最多得分',
								            type:'line',
								            data:[11, 11, 15, 13, 12, 13, 10],
								           
								           
								        },
								        {
								           
								            
								           
								          
								           
								                   }
								                 ]
								            };

  var mychart = echarts.init(document.getElementById("list4"),"red");
 mychart.setOption(option);
								                    
								   	  	                
								                          

								     }


									});


	function count(a){//自定义一个计算对象长度的函数
     var t=typeof a;
     if(t=="string"){
       return a.length;
     }else if(t=="object"){
      var n=0;
      for(var i in a){
        n++;
      }
      return n;
     }else{
      return false;

     }
}
});