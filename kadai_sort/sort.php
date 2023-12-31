<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            //$orderがtrueのとき昇順にソート
            //それ以外のとき降順にソート
            if ($order === true ) {
                echo '昇順にソートします。<br>';
                sort($array);
                foreach ($array as $array) {
                    echo $array . '<br>';
                }
            } else {
                echo '降順にソートします。<br>';
                rsort($array);
                foreach ($array as $array) {
                  echo $array . '<br>';
                }
            }
        }
        //配列
        $nums = [15, 4, 18, 23, 10];
        
        $array = $nums;

        sort_2way($nums, true);
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>