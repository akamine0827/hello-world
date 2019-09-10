<?php

/**
 * ログイン画面処理
 * @author akamine027
 *
 */
use Fuel\Core\DB;

class Model_Login {

    /**
     * ログイン情報取得
     *
     * @param string $userId ユーザID
     * @param string $password パスワード
     * @return array $loginInfo ログイン情報
     */
    public static function getLoginInfo($userId, $password) {
        // ログイン情報
        $loginInfo = array();

        $sql = "SELECT * FROM logininfo WHERE userId = :userId AND password = :password";

        try {
            $result = array();
            // SQL実行
            $result = DB::query($sql)->param("userId", (string) $userId)
                ->param("password", (string) $password)
                ->execute();

            if (count($result) > 0) {
                foreach ($result as $login) {
                    // ユーザ名
                    $loginInfo["userName"] = $login["userName"];
                    // ユーザID
                    $loginInfo["userId"] = $login["userId"];
                    // パスワード
                    $loginInfo["password"] = $login["password"];
                }
            }
        } catch (Exception $e) {

            // エラー画面に遷移するようにする
            echo $e->getMessage();
        }

        return $loginInfo;
    }
}
?>