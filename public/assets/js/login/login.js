function loginUser() {
	var width = window.innerWidth;

	if (width > 1200) {
		$(".latestInfoPcTr").show();

	} else {
		$(".latestInfoPcTr").hide();
	}
}

$(function() {

	$(window).resize(function() {

		var width = window.innerWidth;

		if (width > 1200) {
			$(".latestInfoPcTr").show();

		} else {
			$(".latestInfoPcTr").hide();
		}
	});
});

function webLogin() {

	loginFlag = true;

	var userId = $(".userId").val();
	var password = $(".password").val();

	// ユーザid
	if (userId.length == 0) {
		$(".errMessage").text("ユーザIDが入力されていません。");
		loginFlag = false;
		$(".errFlag").val("1");

		// パスワード
	} else if (password.length == 0) {
		$(".errMessage").text("パスワードが入力されていません。");
		loginFlag = false;
		$(".errFlag").val("1");
	}

	if (loginFlag == true) {
		var form = document.formLogin;
		form.action = "/fuelphp/login/login";
		form.submit();
		return true;
	}

	return false;
}