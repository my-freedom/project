 function getXmlHttpObject(){
       var xmlHttpRequest;
      if(window.ActiveXObject){
        xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");//IE浏览器创建ajax对象方法
      }else if(window.XMLHttpRequest)
      {
        
        xmlHttpRequest=new XMLHttpRequest();//非IE浏览器创建ajax方法(注意其严格区分大小写，一定要注意)
      }
      return xmlHttpRequest;

   }
   function $(id){
     return document.getElementById(id);//根据id获取对象
   }
function count(a){
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