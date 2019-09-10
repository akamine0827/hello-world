<?php
/**
 *
 * @author akamine027
 *
 */

use Fuel\Core\Controller;
use Fuel\Core\Response;
use Fuel\Core\View;

class Controller_Top extends Controller {

    /**
     * ログイン画面初期表示
     *
     * @return \Fuel\Core\Response ログイン画面
     */
    public static function action_index() {
        // 検索条件
        $paramList = array();

        //
        if(isset($_POST["budgetPrevious"]) && strlen($_POST["budgetPrevious"]) >= 1) {
            $paramList["budgetPrevious"] = $_POST["budgetPrevious"];
        }
        if(isset($_POST["budgetRear"]) && strlen($_POST["budgetRear"]) >= 1) {
            $paramList["budgetRear"] = $_POST["budgetRear"];
        }
        // TOP画面検索結果
        $topInfoList = array();
        $topInfoList = Model_Top::getTopInfo($paramList);
        // 検索結果をPOSTに設定
        $_POST["topInfoList"] = $topInfoList;
        // ログイン画面に遷移
        return Response::forge(View::forge("top/top"));
    }

    /**
     * ログアウト処理
     * @return \Fuel\Core\Response
     */
    public static function action_logOut() {

        return Response::forge(View::forge("login/login"));
    }

    /**
     * TOP画面情報取得処理
     */
    public static function getTop() {

    }
}
?>