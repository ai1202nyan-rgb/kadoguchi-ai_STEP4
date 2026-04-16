<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <!-- ↓ CSSファイルを読み込んでください「style.css」にすること -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>入力内容確認</h1>
<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
// フォームからのデータを受け取る
   $name = $_POST["name"];
   $age = $_POST["age"];
   $phone = $_POST["phone"];
   $email = $_POST["email"];
   $address = $_POST["address"];
   $question = $_POST["question"];
   $sex = $_POST["sex"];

// バリデーション
if(!preg_match("/^[ぁ-んァ-ヶ一一-龠a-zA-Z\s]+$/u", $name)){
    echo"<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
}elseif(!is_numeric($age)||$age<0 ||$age>150){
    echo"<p>年齢は0から150の間で入力してください。</p>";
}elseif(!preg_match("/^[0-9-]+$/", $phone)){
    echo"<p>電話番号は半角数字とハイフンのみ使用できます。</p>"; 
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo"<p>メールアドレスの形式が正しくありません。</p>";
}elseif(!preg_match("/^[ぁ-んァ-ヶー一-龠0-9a-zA-Z\s]+$/u",$address)){
    echo"<p>住所はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";

}else{
    //入力内容の表示　名前、年齢、電話番号、メールアドレス、住所、質問、性別
    echo"<p>名前:".htmlspecialchars($name,ENT_QUOTES,'UTF-8')."</p>";
    echo"<p>年齢:{$age}歳</p>";
    echo"<p>電話番号:".htmlspecialchars($phone, ENT_QUOTES,'UTF-8')."</p>";
    echo"<p>メールアドレス:".htmlspecialchars($email, ENT_QUOTES,'UTF-8'). "</p>";
    echo"<p>住所:". htmlspecialchars($address, ENT_QUOTES, 'UTF-8'). "</p>";
    echo"<p>質問:".nl2br(htmlspecialchars($question,ENT_QUOTES,'UTF-8'))."</p>";
    echo"<p>性別:". htmlspecialchars($sex, ENT_QUOTES, 'UTF-8'). "</p>";
}
}else{
    echo "<p>データが送信されていません。</p>";
}
 ?>

</body>
</html>