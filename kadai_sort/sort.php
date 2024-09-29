<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数
        function sort_2way($array, $order) {
            if ($order) {
                sort($array); // 昇順
            } else {
                rsort($array); // 降順
            }
            
            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }

        // ソートする配列
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        echo '昇順ソートにします。<br>';
        sort_2way($nums, true);

        echo '<br>';

        // 降順ソート
        echo '降順ソートにします。<br>';
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
