<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"΢���ź�";font-size:14px;}
		#l-map{height:300px;width:100%;}
		#r-result{width:100%;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ThuZmwAvFnw8lz2RmtgrshQQCTFCmCwO"></script>
	<title>�ؼ���������ʾ����</title>
</head>
<body>
	<div id="l-map"></div>
	<div id="r-result">Please enter the address:<input type="text" id="suggestId" size="20" value="�ٶ�" style="width:150px;" /></div>
	<div id="searchResultPanel" style="border:1px solid #C0C0C0;width:150px;height:auto; display:none;"></div>
</body>
</html>
<script type="text/javascript">
	// �ٶȵ�ͼAPI����
	function G(id) {
		return document.getElementById(id);
	}

	var map = new BMap.Map("l-map");
	map.centerAndZoom("����",12);                   // ��ʼ����ͼ,���ó��к͵�ͼ����

	var ac = new BMap.Autocomplete(    //����һ���Զ���ɵĶ���
		{"input" : "suggestId"
		,"location" : map
	});

	ac.addEventListener("onhighlight", function(e) {  //�����������б��ϵ��¼�
	var str = "";
		var _value = e.fromitem.value;
		var value = "";
		if (e.fromitem.index > -1) {
			value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
		}    
		str = "FromItem<br />index = " + e.fromitem.index + "<br />value = " + value;
		
		value = "";
		if (e.toitem.index > -1) {
			_value = e.toitem.value;
			value = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
		}    
		str += "<br />ToItem<br />index = " + e.toitem.index + "<br />value = " + value;
		G("searchResultPanel").innerHTML = str;
	});

	var myValue;
	ac.addEventListener("onconfirm", function(e) {    //����������б����¼�
	var _value = e.item.value;
		myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
		G("searchResultPanel").innerHTML ="onconfirm<br />index = " + e.item.index + "<br />myValue = " + myValue;
		
		setPlace();
	});

	function setPlace(){
		map.clearOverlays();    //�����ͼ�����и�����
		function myFun(){
			var pp = local.getResults().getPoi(0).point;    //��ȡ��һ�����������Ľ��
			map.centerAndZoom(pp, 18);
			map.addOverlay(new BMap.Marker(pp));    //��ӱ�ע
		}
		var local = new BMap.LocalSearch(map, { //��������
		  onSearchComplete: myFun
		});
		local.search(myValue);
	}
</script>
