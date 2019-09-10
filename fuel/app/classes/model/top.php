<?php
use Fuel\Core\DB;

class Model_Top
{

    /**
     * Top検索結果取得
     *
     * @return array $loginInfo ログイン情報
     */
    public static function getTopInfo($paramList = null)
    {
        // ログイン情報
        $topInfoList = array();
        $where = "";

        $sql = "SELECT * FROM desktopinfo";

        // 検索条件の指定がある場合
        if ($paramList != null && count($paramList) >= 1) {
            $where .= " WHERE ";
            // 検索条件組み立て処理
            if (isset($paramList["budgetPrevious"]) && strlen($paramList["budgetPrevious"]) >= 1) {
                $where .= "amountOfMoney >= :budgetPrevious";
            }
            if (isset($paramList["budgetRear"]) && strlen($paramList["budgetRear"]) >= 1) {
                $where .= " AND amountOfMoney <= :budgetRear";
            }

            $sql = "SELECT * FROM desktopinfo" . $where;
        } else {
            $sql = "SELECT * FROM desktopinfo";
        }

        try {
            $result = array();

            // 検索条件が存在する場合
            if ($paramList != null && count($paramList) >= 1) {
                $result = DB::query($sql)->parameters($paramList)->execute();

            // 検索条件が存在しない場合
            } else {
                // SQL実行
                $result = DB::query($sql)->execute();
            }

            if (count($result) > 0) {
                foreach ($result as $topInfo) {
                    $topInfoList[] = $topInfo;
                }
            }
        } catch (Exception $e) {

            // エラー画面に遷移するようにする
            echo $e->getMessage();
        }

        return $topInfoList;
    }
}

