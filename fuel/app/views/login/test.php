<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<tr>
			<th>ユーザ名</th>
			<th>ユーザID</th>
			<th>パスワード</th>
		</tr>
    	<?php
        // ログイン情報
        use Fuel\Core\DB;

        $loginInfo = array();
        // $db = new PDO("mysql:dbname=example", "akamine", "akamine0827");

        $userId = "akamine";
        $password = "akamine0827";

        $sql = "SELECT * FROM logininfo";

        try {
            $result = array();
            // SQL実行
            $result = DB::query($sql)->execute();
            if (count($result) > 0) {
                foreach ($result as $login) {
                    $loginInfo[] = $login;
                }
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }

        foreach ($loginInfo as $logData) {
            echo "<tr>";
            echo "<td>" . $logData['userName'] . "</td>";
            echo "<td>" . $logData['userId'] . "</td>";
            echo "<td>" . $logData['password'] . "</td>";
            echo "</tr>";
        }

        echo "<td>".print_r($loginInfo,true)."</tr>";
        ?>
</table>
</body>
</html>