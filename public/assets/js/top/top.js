function changeTab(tabName,tabColor) {
	// タブメニュー実装
	document.getElementById('tab1').style.display = 'none';
	document.getElementById('tab2').style.display = 'none';
	document.getElementById('tab3').style.display = 'none';

	// タブ初期文字カラー
	document.getElementById('tab01').style.color = 'white';
	document.getElementById('tab02').style.color = 'white';
	document.getElementById('tab03').style.color = 'white';

	if(tabName){
		// タブメニュー実装
		document.getElementById(tabName).style.display = 'block';

		if(tabName == "tab1"){
			document.getElementById(tabColor).style.color = 'yellow';
			document.getElementById('searchList').style.display = 'block';
			document.getElementById('searchResult').style.display = 'block';

		} else if(tabName == "tab2"){
			document.getElementById(tabColor).style.color = 'yellow';
			document.getElementById('searchList').style.display = 'none';
			document.getElementById('searchResult').style.display = 'none';

		} else if(tabName == "tab3"){
			document.getElementById(tabColor).style.color = 'yellow';
			document.getElementById('searchList').style.display = 'none';
			document.getElementById('searchResult').style.display = 'none';

		}

	} else {
		document.getElementById('tab1').style.display = 'block';
		document.getElementById('tab01').style.color = 'yellow';
		document.getElementById('searchResult').style.display = 'block';
	}
}

function logOut() {
	var form = document.formTop;
	form.action = "/fuelphp/top/logOut";
	form.submit();
	return true;
}

function search() {
	var form = document.formTop;
	form.action = "/fuelphp/top/index";
	form.submit();
	return true;
}