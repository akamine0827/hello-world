<?php
use Fuel\Core\Controller;
use Fuel\Core\Response;
use Fuel\Core\View;
use function Fuel\Core\Database_Result\count;

/**
 *
 * @author akamine027
 *
 */
class Controller_Login extends Controller {

    /**
     * ログイン画面初期表示
     *
     * @return \Fuel\Core\Response ログイン画面
     */
    public static function action_index() {
        // ログイン画面に遷移
        return Response::forge(View::forge("login/login"));
    }

    /**
     * ログイン処理
     *
     * @return \Fuel\Core\Response 正常：TOP画面、異常：ログイン画面
     */
    public static function action_login() {

        // ユーザID
        $userId = $_POST["userId"];
        // パスワード
        $password = $_POST["password"];

        // ログイン情報
        $loginInfo = array();

        // ログイン情報取得
        $loginInfo = Model_Login::getLoginInfo($userId, $password);

        /**************************/
        /** ログイン情報取得判定 **/
        /**************************/
        if (!isset($loginInfo) && ount($loginInfo) == 0) {
            // エラー判定フラグ 2 : PHP異常
            $_POST["errFlag"] = "2";
            // エラーメッセージ設定
            $_POST["errMessage"] = "該当するユーザが存在しません";
            // ログイン画面に遷移
            return Response::forge(View::forge("login/login"));
        }

        /**********************/
        /** ログイン情報設定 **/
        /**********************/
        // ユーザ名
        $_POST["userName"] = $loginInfo["userName"];
        // ユーザID
        $_POST["userId"] = $loginInfo["userId"];
        // パスワード
        $_POST["password"] = $loginInfo["password"];
        // エラー判定フラグ 0:正常
        $_POST["errFlag"] = "0";


        // TOP画面検索結果
        $topInfoList = array();
        $topInfoList = Model_Top::getTopInfo();
        // 検索結果をPOSTに設定
        $_POST["topInfoList"] = $topInfoList;


        // TOP画面に遷移
        return Response::forge(View::forge("top/top.php"));
    }

    /**
     * ログイン画面初期表示
     *
     * @return \Fuel\Core\Response
     */
    public static function action_test() {
        return Response::forge(View::forge('login/test'));
    }
}
?>