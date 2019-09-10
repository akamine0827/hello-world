<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="http://localhost/fuelphp/assets/css/login/loginPc.css" media="screen and (min-width: 1880px)">
<link rel="stylesheet" href="http://localhost/fuelphp/assets/css/login/loginSpc.css" media="screen and (min-width: 1201px) and (max-width:1879px)">
<link rel="stylesheet" href="http://localhost/fuelphp/assets/css/login/loginSp.css" media="screen and (max-width: 1200px)">
<?php
use Fuel\Core\Asset;
echo Asset::js('web/jquery-3.3.1.min.js');
echo Asset::js('login/login.js');
?>
</head>
<body onload="loginUser();">
	<form name="formLogin" class="formLogin" action="" method="POST">
		<table class="loginTable">
			<tbody>
				<tr>
					<td>
						<div class="main">
							<p class="title">salesData</p>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="loginInputStyle">
							<table class="inputTableData">
								<tbody>
									<tr>
										<td>
											<table class="loginInputTable">
												<tbody>
													<tr class="loginInputUserTr">
														<th class="loginInputTh">
															<img class="images" src="http://localhost/fuelphp/assets/img/login/user.png">
														</th>
														<td class="loginInputTd">
															<input name="userId" class="userId" type="text" maxlength="10" value="<?php if(isset($_POST["userId"])) { echo $_POST["userId"];}?>">
														</td>
													</tr>
													<tr class="loginInputUserTr">
														<th class="loginInputTh">
															<img class="images" src="http://localhost/fuelphp/assets/img/login/paseID.png">
														</th>
														<td class="loginInputTd">
															<input name="password" class="password" type="password" maxlength="10" value="<?php if(isset($_POST["password"])) { echo $_POST["password"];}?>">
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr>
										<td class="buttonTd">
											<table class="buttonLoginTable">
												<tbody>
													<tr>
														<td>
															<p class="errMessage"></p>
															<button class="loginButton" onclick="return webLogin();">
																<font style="font-style: oblique;" face="NSimSun">salesData</font>
																<font face="ＭＳ Ｐゴシック 本文">へログイン</font>
															</button>
														</td>
													</tr>
													<tr>
														<td class="userCheck">
															<input id="checkSaveButton" type="checkbox" value="">
															<label class="checkSaveMessage " for="checkSaveButton"> ユーザを保存</label>
														</td>
													</tr>
													<tr>
														<td>
															<a class="userRegistration" href="login.php">
																ユーザをお忘れですか？ <font>|</font> 無料サインアップ
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="latestMain">
							<table class="latestTableColor">
								<tbody>
									<tr>
										<td class="latestInfoTd">
											<div class="latestInfoDiv">
												<p>新しいsalesData</p>
												<p>ログイン商品のご案内</p>
												<p>5月16日に新商品が入荷</p>
												<div class="latestInfoStyle">
													<button class="latestInfoButton" onclick="">詳しくはこちら</button>
												</div>
											</div>
											<div class="latestimageStyle">
												<img class="latestImage"
													src="http://localhost/fuelphp/assets/img/login/pcData.png">
											</div>
										</td>
									</tr>
									<tr class="latestInfoPcTr">
										<td class="latestInfoPc">
											<div class="boxTable1" style="">
												<div class="boxStyle">
													<div>
														<p>業務に最適なパソコンがそろって</p>
														<p>ます。</p>
														<p>今なら、Office365もついてくる!</p>
													</div>
													<div class="boxMessage">
														<span class="latestLinkStyle">
															<a class="forgetLink" href="login.php">最新情報はこちらから</a>
														</span>
														<span class="latestLinkImage">
															<img src="http://localhost/fuelphp/assets/img/login/linc.png">
														</span>
													</div>
												</div>
											</div>
											<div class="boxTable2">
												<div class="boxStyle">
													<div>
														<p>初心者でも大丈夫、操作マニュアル</p>
														<p>付きです。</p>
														<p>パソコン操作をマスターしよう！</p>
													</div>
													<div class="boxMessage">
														<span class="latestLinkStyle">
															<a href="login.php" class="forgetLink">最新情報はこちらから</a>
														</span>
														<span class="latestLinkImage">
															<img src="http://localhost/fuelphp/assets/img/login/linc.png">
														</span>
													</div>
												</div>
											</div>
											<div class="boxTable3">
												<div class="boxStyle">
													<div>
														<p>業務に最適なパソコンがそろって</p>
														<p>ます。</p>
														<p>今なら、Office365もついてくる!</p>
													</div>
													<div class="boxMessage">
														<span class="latestLinkStyle">
															<a class="forgetLink" href="login.php">最新情報はこちらから</a>
														</span>
														<span class="latestLinkImage">
															<img src="http://localhost/fuelphp/assets/img/login/linc.png">
														</span>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" name="errFlag" class="errFlag" value="0">
	</form>
</body>
</html>