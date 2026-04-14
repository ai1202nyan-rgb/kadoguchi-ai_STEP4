<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
  <!-- ↓ CSSファイルを読み込んでください「style.css」にすること -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
// フォームからのデータを受け取る
$name = $_POST["name"];
$age = $_POST["age"];
$telphone = $_POST["telphone"];
$email = $_POST["email"];
$address = $_POST["address"];
$question = $_POST["question"];
$sex = $_POST["sex"];

// エラーメッセージを格納する配列
if(!preg_match("/^[ぁ-んァ-ヶ一一-龠a-zA-Z\s]+$/u", $name)){
    echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
}elseif(!preg_numeric($age)||$age<0 ||$age>150){
    echo "<p>年齢は0から150の間で入力してください。</p>";
}elseif(!preg_match("/^[0-9_/-]+$/", $name)){
    echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>"; 
}elseif(!preg_match($pattern,$email)){
    echo"<p>メールアドレスの形式が正しくありません。</p>"
$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
$email = 'user@example.com';
}elseif(!preg_match("/^[ぁ-んァ-ヶー一-龠a-za-Z/s]+$/u",$address))
    echo "<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
    $address = '東京都新宿区西新宿2-8-1';
$prefecture_pattern = '/^(北海道|東京都|(?:京都|大阪)府|.{2,3}県)/u';
preg_match($prefecture_pattern, $address, $prefecture);
// $prefecture[1] = "東京都"
// 市区町村抽出
$city_pattern = '/[都道府県](.+?[市区町村])/u';
preg_match($city_pattern, $address, $city);
// $city[1] = "新宿区" 

}else{
    echo "<p>データが送信されていません。</p>";
}
?>
</body>
</html>