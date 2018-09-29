$().ready(function(){
	   var map = new BMap.Map('allmap');
	    var poi = new BMap.Point(120.090190,30.139910);
	    map.centerAndZoom(poi, 30);
//									  map.enableScrollWheelZoom();//鼠标缩放
	
	
	    var content = '<div style="margin:0;line-height:30px;padding:2px;">' + 
	                    '地址：杭州市西湖区云栖小镇云计算产业园D3' +
	                  '</div>';
	
	    //创建检索信息窗口对象
	    var searchInfoWindow = null;
		searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
				title  : "杭州维度维度工业设计有限公司",      //标题
				width  : 290,             //宽度
				height : 30,              //高度
				panel  : "panel",         //检索结果面板
				enableAutoPan : true,     //自动平移
				searchTypes   :[
					BMAPLIB_TAB_SEARCH,   //周边检索
					BMAPLIB_TAB_TO_HERE,  //到这里去
					BMAPLIB_TAB_FROM_HERE //从这里出发
				]
			});
	    var marker = new BMap.Marker(poi); //创建marker对象
	    marker.enableDragging(); //marker可拖拽
	    marker.addEventListener("click", function(e){
		    searchInfoWindow.open(marker);
	    })
	    map.addOverlay(marker); //在地图中添加marker
	  var label = new BMap.Label("杭州市西湖区云栖小镇云计算产业园3栋2层D3<br />电话：13864859693",{offset:new BMap.Size(40,-10)});
		marker.setLabel(label);
		
		function openInfoWindow3() {
			searchInfoWindow3.open(new BMap.Point(120.091188,30.161421)); 
		}
})

									 