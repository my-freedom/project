var tabIndex = 0;
var tabFlag;//tab的下标
var tabTitleStr;//tab的title
function addPanel(titleStr, flagIndex){
	tabIndex = flagIndex;
	tabTitleStr = titleStr;
	var tab = $("#tab").tabs("getTab", titleStr);
	if(tab){
		$('#tab').tabs("select", titleStr);
		clearAllRowStatus();
		return;
	}
	var url, cols,cols1, columns,columns1,url1, content1;
	if(flagIndex==1||flagIndex==4 || flagIndex==7){	// 学生管理
		//alert(flagIndex);
		url = "./datagrid_data.json";
		cols = ["{field:\"ch\",width:350,checkbox:true,align:\"left\"},",
			"{field:\"name\",title:\"名称\",width:130,align:\"center\"},",
			"{field:\"nj\",title:\"年级\",width:130,align:\"center\"}"];
		columns = createColumnsHead(cols);
		url1 = "./datagrid_data_order.json";
		cols1 = ["{field:\"ch\",width:350,checkbox:true,align:\"left\"},",
			"{field:\"username\",title:\"姓名\",width:110,align:\"center\"},",
			"{field:\"num\",title:\"学号\",width:110,align:\"center\"},",
			"{field:\"sex\",title:\"性别\",width:110,align:\"center\"},",
			"{field:\"yx\",title:\"班级\",width:110,align:\"center\"},",
			"{field:\"pro\",title:\"专业\",width:110,align:\"center\"},",
			"{field:\"phone\",title:\"手机\",width:110,align:\"center\"},",
			"{field:\"email\",title:\"邮箱\",width:110,align:\"center\"}"];
		columns1 = createColumnsHead(cols1);
	}else if(flagIndex==2||flagIndex==5 || flagIndex==8){	// 课程管理
		//alert(flagIndex);
		url = "./datagrid_data_user.json";
		cols = ["{field:\"proname\",title:\"项目名称\",width:200,align:\"center\"},",
			"{field:\"xmjj\",title:\"项目简介\",width:200,align:\"center\"}"];
		columns = createColumnsHead(cols);
	}else if(flagIndex==3 ||flagIndex==6 || flagIndex==9){	// 项目管理
		//alert(flagIndex);
		url = "./datagrid_data3.json";
		cols = ["{field:\"oid\",title:\"定单号\",width:120,align:\"center\"},",
			"{field:\"desc\",title:\"定单内容\",width:300,align:\"left\"},",
			"{field:\"committime\",title:\"成交时间\",width:180,align:\"center\"},",
			"{field:\"amount\",title:\"金额\",width:80,align:\"center\"},",
			"{field:\"username\",title:\"姓名\",width:80,align:\"center\"},",
			"{field:\"name\",title:\"用户名\",width:100,align:\"center\"},",
			"{field:\"idcard\",title:\"身份证号\",width:180,align:\"center\"}"];
		columns = createColumnsHead(cols);
	}
	if(flagIndex == 0){	// 首页
		$("#tab").tabs("add",{
			title: titleStr,
			border:false, 
			href:"./welcome.html",
			closable: true			
		});
	}else if(flagIndex==1){	
		content ="<div class='easyui-layout' style='width:1220px;height:550px;' fit='true'>"
		        +"<div class='w1' data-options='region:\"west\",title:\"班级列表\"' style='width:320px'>"
		        +"<table style=\"margin:10px\" class=\"easyui-datagrid\" id='tabGrid1'"
				+ "data-options='url:\""+ url +"\",method:\"get\","
				+ "loadMsg:\"数据加载中, 请稍等......\","
				+ "fit:true,singleSelect:true,rownumbers:true,canche:false,"
				+ "pagination:true,pagePosition:\"bottom\"," 
				+ columns
				+ "onLoadSuccess:setPage,"
				//+ "onRowContextMenu:contextMenu"
				+ "'></table></div>"
				+"<div class='c1' data-options='region:\"center\",title:\"学生列表\"' style='width:320px'>"
		        +"<table style=\"margin:10px\" class=\"easyui-datagrid\" id='tabGrid_1'"
				+ "data-options='url:\""+ url1 +"\",method:\"get\",toolbar:\"#tool\","
				+ "loadMsg:\"数据加载中, 请稍等......\","
				+ "fit:true,singleSelect:true,rownumbers:true,canche:false,"
				+ "pagination:true,pagePosition:\"bottom\"," 
				+ columns1
				+ "onLoadSuccess:setPage1,"
				//+ "onRowContextMenu:contextMenu"
				+ "'></table></div></div>";
		$("#tab").tabs("add",{
			title: titleStr,
			border:false, 
			content:content,
			closable: true				
		});
		
	}else{
		content ="<div class='easyui-layout' style='width:420px;height:550px;'><div class='w1' data-options='region:\"west\",title:\"项目列表\"' style='width:420px'>"
		+"<table style=\"margin:10px\" class=\"easyui-datagrid\" id='tabGrid" + tabIndex + "'"
				+ "data-options='url:\""+ url +"\",method:\"get\","
				+ "loadMsg:\"数据加载中, 请稍等......\","
				+ "fit:true,singleSelect:true,rownumbers:true,canche:false,"
				+ "pagination:true,pagePosition:\"bottom\"," 
				+ columns
				+ "onLoadSuccess:setPage,"
				//+ "onRowContextMenu:contextMenu"
				+ "'></table></div></div>";
		$("#tab").tabs("add",{
			title: titleStr,
			border:false, 
			content:content,
			closable: true				
		});
	}
	$("#tabGrid1").datagrid({
			onClickRow:function(){
				//alert("ff");
			
			var a=$("#tabGrid1").datagrid("getSelected");
			var b=$("#tabGrid1").datagrid("getRowIndex",a);
			//console.log(b);
			  if(b==0){
			  	//alert(b);
			  	url1="datagrid_data_order.json";
				$("#tabGrid_1").datagrid({
					url:url1
				})
			  }else if(b==1){
			  	url1="datagrid_order1.json";
				$("#tabGrid_1").datagrid({
					url:url1
				})
			  }
			  else if(b==2){
			  	url1="datagrid_order2.json";
				$("#tabGrid_1").datagrid({
					url:url1
				})
			  }else if(b==3){
			  	url1="datagrid_order3.json";
				$("#tabGrid_1").datagrid({
					url:url1
				})
			  }
			}
		});
}
function createColumnsHead(cols){
	var colsHead = "columns:[["
		for(var index in cols){
			colsHead += cols[index];
		}
		colsHead += "]],";
	return colsHead;
}
function setPage(){
	$("#tabGrid1").datagrid("checkRow",0);
	var pager = $("#tabGrid" + tabIndex).datagrid("getPager");
	var options = pager.data("pagination").options;
	var total = options.total;
	var pageCount = Math.ceil(total/options.pageSize);
	pager.pagination({
		pageSize: 10,
		beforePageText: '第',
		afterPageText: '页    共 {pages} 页',  
		displayMsg: '当前显示 {from} - {to} 条记录   共 {total} 条记录/ ' + pageCount + '页',
		showPageList:false,
		layout:['first','prev','next','last','refresh'],
		onBeforeRefresh:function(){
			alert('刷新之前触发, 如果返回false可以取消刷新');
			return true;
		},
		onRefresh:function(){
			alert('数据刷新...');
		}
	});
}
function setPage1(){
	var pager = $("#tabGrid_1").datagrid("getPager");
	var options = pager.data("pagination").options;
	var total = options.total;
	var pageCount = Math.ceil(total/options.pageSize);
	pager.pagination({
		pageSize: 10,
		beforePageText: '第',
		afterPageText: '页    共 {pages} 页',  
		displayMsg: '当前显示 {from} - {to} 条记录   共 {total} 条记录/ ' + pageCount + '页',
		showPageList:false,
		layout:['first','prev','next','last','refresh'],
		onBeforeRefresh:function(){
			alert('刷新之前触发, 如果返回false可以取消刷新');
			return true;
		},
		onRefresh:function(){
			alert('数据刷新...');
		}
	});
}
function clearAllRowStatus(){
	$("#tabGrid" + tabIndex).datagrid("clearSelections");	// 清除所有已选行
}
