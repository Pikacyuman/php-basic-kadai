<?php
// 連想配列を作成
$vegetable = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

// foreach文を使って連想配列の各要素を出力
foreach ($vegetable as $key => $value) {
    // キーと値をコロンで区切って出力し、要素ごとに改行
    echo $key . ": " . $value . "<br>";
}
?>
