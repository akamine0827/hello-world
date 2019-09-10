<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php use Fuel\Core\Asset;

echo Asset::css('top/topPc.css');
echo Asset::js('web/jquery-3.3.1.min.js');
echo Asset::js('top/top.js');
?>
</head>
<body onload="changeTab('','');">
	<form name="formTop" class="formTop" action="" method="POST">
    	<div align="center">
    		<div class="loginTableMain">
    			<table class="loginTable">
    				<tbody>
    					<tr>
    						<td>
    							<div class="main">
    								<p class="title">salesData</p>
    								<div class="loginInfo">
    									<table>
    										<tbody>
    											<tr>
    												<td>
        												<button class="loginInfoButton">お客様情報</button>
    												</td>
    												<td class="loginInfoTd">
    													<button class="loginInfoButton" onClick="return logOut();">ログアウト</button>
    												</td>
    											</tr>
    										</tbody>
    									</table>
    								</div>
    								<p class="loginInfo">
    									<input name="userName" type="hidden" value="<?php if(isset($_POST["userName"])) { echo $_POST["userName"];}?>">
    									<input name="userId" type="hidden" value="<?php if(isset($_POST["userId"])) { echo $_POST["userId"];}?>">
    									<?php echo "<font>ユーザ名 : " . $_POST['userName'] . "</font><br><font>ユーザID：" . $_POST['userId'] . "</font>";?>
    								</p>
    							</div>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<div class ="tableTabImage">
    								<div class="tableTabMenu">
    									<a class="testStyle" id="tab01" onclick="changeTab('tab1','tab01'); return false;" href="#tab1">商品一覧</a>
    									<a class="testStyle" id="tab02" onclick="changeTab('tab2','tab02'); return false;" href="#tab2">購入履歴</a>
    									<a class="testStyle" id="tab03" onclick="changeTab('tab3','tab03'); return false;" href="#tab3">設定</a>
    								</div>
    							</div>
    							<div align="center" id="tab1">
        							<table class="searchStyle">
        								<tbody>
        									<tr>
        										<th class="searchTh" >ご予算から探す</th>
        										<td class="searchTd">
        											<table>
        												<tbody>
        													<tr>
        														<td class="searchInputTd">予算</td>
        														<td class="searchInputTd">
        															<input class="searchInputText" name="budgetPrevious" type="text" maxlength="10" value="<?php if(isset($_POST["budgetPrevious"])) echo $_POST["budgetPrevious"]?>">
        														</td>
        														<td class="searchInputTd">～</td>
        														<td class="searchInputTd">
        															<input class="searchInputText" name="budgetRear" type="text" maxlength="10" value="<?php if(isset($_POST["budgetRear"])) echo $_POST["budgetRear"]?>">
        														</td>
        													</tr>
        												</tbody>
        											</table>
        										</td>
        									</tr>
        									<tr>
        										<th class="searchTh">販売時期から探す</th>
        										<td class="searchTd">
        											<table>
        												<tbody>
        													<tr>
        														<td class="searchInputTd">期間</td>
        														<td class="searchInputTd">
        															<input class="searchInputText" name="pasWord" type="text" maxlength="6" value="">
        														</td>
        														<td class="searchInputTd">～</td>
        														<td class="searchInputTd">
        															<input class="searchInputText" name="pasWord" type="text" maxlength="6" value="">
        														</td>
        													</tr>
        												</tbody>
        											</table>
        										</td>
        									</tr>
        									<tr>
        										<th class="searchTh">カテゴリーから探す</th>
        										<td class="searchTd">
        											<span class="searchSpan">
        												<select class="searchPullDown">
        													<option value="0">全て</option>
        													<option value="1">ディスクトップ</option>
        													<option value="2">ノートパソコン</option>
        													<option value="3">タブレット</option>
        													<option value="4">スマートフォン</option>
        												</select>
        											</span>
        										</td>
        									</tr>
        									<tr>
        										<th class="searchTh">ＯＳから探す</th>
        										<td class="searchTd">
        											<span class="searchSpan">
        												<select class="searchPullDown">
        													<option>全て</option>
        													<option>Windows7</option>
        													<option>Windows8</option>
        													<option>Windows10</option>
        													<option>Mac</option>
        													<option>MacbookPro</option>
        													<option>Linux</option>
        												</select>
        											</span>
        										</td>
        									</tr>
        									<tr>
        										<th class="searchTh">メーカーから探す</th>
        										<td class="searchTd">
        											<span class="searchSpan">
        												<select class="searchPullDown">
        													<option>全て</option>
        													<option>DELL</option>
        													<option>Lenovo</option>
        													<option>富士通</option>
            											</select>
        											</span>
        										</td>
        									</tr>
        									<tr>
        										<th class="searchTh">状態から探す</th>
        										<td class="searchTd">
        											<span class="searchSpan">
        												<select class="searchPullDown">
        													<option>全て</option>
        													<option>S : 新品</option>
        													<option>A : 傷なし</option>
        													<option>B : 少し傷あり</option>
        													<option>C : 傷あり</option>
        													<option>D : 付属品等なし</option>
        												</select>
        											</span>
        										</td>
        									</tr>
        								</tbody>
        							</table>
        							<div class="searchButtonStyle">
        								<button class="searchButton" onclick="return search();">検索！</button>
        							</div>
        						</div>
								<div id="tab2">
    								<table>
    									<tbody>
    										<tr>
    											<td>タブ2の内容です。画像やリンクを含めることもできます。</td>
    										</tr>
    									</tbody>
    								</table>
    							</div>
    							<div id="tab3">
    								<table>
    									<tbody>
    										<tr>
    											<td>タブ3の内容です。画像やリンクを含めることもできます。</td>
    										</tr>
    									</tbody>
    								</table>
    							</div>
    						</td>
    					</tr>
    					<tr>
    						<td align="center" class="searchList" id="searchList">
    							<div class="searchListMain">
    								<p class="searchTitle">検索一覧</p>
    								<p class="searchNumber">10件 / 100件</p>
    								<p class="searchSortMain">
    									<span class="searchSortTitle">
    										並び<br>替え
    									</span>
    									<span class="searchSortStyle">
        									<select class="searchSort">
        											<option>予算で並び替え</option>
        											<option>年式で並び替え</option>
        											<option>OSで並び替え</option>
        											<option>メーカーで並び替え</option>
        											<option>状態で並び替え</option>
        									</select>
    									</span>
    								</p>
    							</div>
    						</td>
    					</tr>
    					<tr>
    						<td align="center" class="searchResultStyle" id="searchResult">
    							<div align="right" class="searchResultDiv">
    								<button class ="pdfBotton">PDF印刷</button>
    							</div>
    							<table>
    								<tbody>
    									<tr>
    										<td align="center" class="pageList">
                                        		<?php
                                                    echo '	<button class="pageBotton" onclick=""><</button>';

                                                    for ($count = 0; $count < 4; $count ++) {
                                                        echo '	<button class="pageBotton" onclick=>'. ($count + 1) . '</button>';
                                                    }
                                                    echo '	<button class="pageBotton" onclick="">></button>';
                                                ?>
    										</td>
    									</tr>
    								</tbody>
    							</table>
    							<table style="width: 95%; border-width: 0.1px; border-collapse: collapse; border-style: solid; text-align: center;">
    								<tbody>
    									<tr>
    										<th class="thLogin1" style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 280px; height: 80px; color: white; font-family: "NSimSun"; font-size: 26px;'>
    											<p style="float: left; padding-left: 20px; padding-top: 40px;">(・・?
    											</p>
    											<table style="text-align: left; float: left;">
    												<tbody>
    													<tr>
    														<td>
    															<p style="padding-left: 20px; padding-top: 20px;">スペック別にも</p>
    															<p style="padding-left: 20px;">並びかえ順序を</p>
    															<p style="padding-left: 20px; padding-bottom: 20px;">変更できます</p>
    														</td>
    													</tr>
    												</tbody>
    											</table>
    										</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 200px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>ＯＳ</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 250px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>ＣＰＵ</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 180px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>メモリ</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 120px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>HDD/SS</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 180px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>光学ドライブ</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 180px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>ＬＡＮ</th>
    										<th class="thLogin1"
    											style='background: rgb(89, 89, 89); border: 0.1px solid rgb(178, 178, 178); width: 180px; height: 70px; color: white; font-family: "NSimSun"; font-size: 26px;'>付属品</th>
    									</tr>
    									<?php
                                        if(isset($_POST['topInfoList']) && count($_POST['topInfoList']) >= 1) {
                                            $topInfoList = array();
                                            $topInfoList = $_POST['topInfoList'];

                                            foreach ($topInfoList as $topInfo) {
                                                if(isset($topInfo['stock']) && $topInfo["stock"] != '0') {
                                            ?>
    									<tr>
    										<td class="tdLogin1"
    											style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; font-family: "NSimSun"; font-size: 20px; border-collapse: collapse;'>
    											<table style="width: 100%;">
    												<tbody>
    													<tr>
    														<td style="padding: 15px;">
    															<img style="width: 100%;"src="<?php if(isset($topInfo["image"])) echo $topInfo["image"] ?>">
    														</td>
    													</tr>
    													<tr>
    														<td style="background: white;">
    															<p style="padding-top: 15px; padding-left: 15px; color: red; text-align: left;">
    																<?php if(isset($topInfo["bargainFlag"]) && $topInfo["bargainFlag"] == '1'){echo "今、お買い得！キャンペーン中";} else { echo "通常価格となっております。"; } ?>
    															</p>
    															<p style="float: left; padding-top: 10px; padding-left: 15px; color: black; text-align: left;"><?php echo "在庫 : ".$topInfo["stock"]."台";?></p>
    															<p
    																style="float: right; padding-top: 10px; padding-right: 20px; font-size: 23px;">金額：<?php echo $topInfo["amountOfMoney"];?>円</p>
    														</td>
    													</tr>
    												</tbody>
    											</table>
    										</td>
    										<td class="tdLogin1" style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: black; font-family: "NSimSun"; font-size: 23px; border-collapse: collapse;'>
    											<?php if(isset($topInfo["os"]) && $topInfo["os"] != null) echo $topInfo["os"] ?>
    										</td>
    										<td class="tdLogin1" style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: black; font-family: "NSimSun"; font-size: 23px; border-collapse: collapse;'>
    											<?php if(isset($topInfo["cpu"]) && $topInfo["cpu"] != null) echo $topInfo["cpu"] ?>
    										</td>
    										<td class="tdLogin1" style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: black; font-family: "NSimSun"; font-size: 23px; border-collapse: collapse;'>
    											<?php if(isset($topInfo["memori"]) && $topInfo["memori"] != null) echo $topInfo["memori"] ?>
    										</td>
    										<td class="tdLogin1" style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: black; font-family: "NSimSun"; font-size: 23px; border-collapse: collapse;'>
    											<?php if(isset($topInfo["hdd"]) && $topInfo["hdd"] != null) echo $topInfo["hdd"] ?>
    										</td>
    										<td class="tdLogin1" style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: black; font-family: "NSimSun"; font-size: 23px; border-collapse: collapse;'>
    											<?php if(isset($topInfo["opticalDrive"]) && $topInfo["opticalDrive"] != null) {echo $topInfo["opticalDrive"];} else { echo "なし";} ?>
    										</td>
    										<td class="tdLogin1"
    											style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: black; font-family: "NSimSun"; font-size: 23px; border-collapse: collapse;'>
    											<p>優先：<?php if(isset($topInfo["lanHoJoalo"]) && $topInfo["lanHoJoalo"] == '1') {echo "◯";}else {echo "×";} ?></p>
    											<p>無線：<?php if(isset($topInfo["lanHaHoLetho"]) && $topInfo["lanHaHoLetho"] == '1') {echo "◯";}else {echo "×";} ?></p>
    										</td>
    										<td class="tdLogin1" style='background: rgb(242, 242, 242); border: 0.1px solid rgb(178, 178, 178); height: 70px; color: rgb(178, 178, 178); font-family: "NSimSun"; font-size: 26px; border-collapse: collapse;'>
    											<?php if(isset($topInfo["liphetoho"]) && $topInfo["liphetoho"] != null) {echo $topInfo["lisebelisoa"];} else { echo "----";} ?>
    										</td>
    									</tr>
    									<?php
                                                }
                                            }
    									}?>
    								</tbody>
    							</table>
    							<table style="margin-top: 15px;">
    								<tbody>
    									<tr>
    										<td align="center" class="pageList">
                                        		<?php
                                                    echo '	<button class="pageBotton" onclick=""><</button>';

                                                    for ($count = 0; $count < 4; $count ++) {
                                                        echo '	<button class="pageBotton" onclick=>'. ($count + 1) . '</button>';
                                                    }
                                                    echo '	<button class="pageBotton" onclick="">></button>';
                                                ?>
    										</td>
    									</tr>
    								</tbody>
    							</table>
    						</td>
    					</tr>
    					<tr>
    						<td>
    							<div class="main"
    								style="background: rgb(173, 173, 173); height: 250px;">
    								<p class="title" style="float: left;"></p>
    							</div>
    						</td>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
	</form>
</body>
</html>