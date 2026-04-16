<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <!-- ↓ CSSファイルを読み込んでください「style.css」にすること -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- ここに見出しと説明文を追加 -->
     <h1>フォーム入力</h1>   
<!-- フォーム開始 --> 
<form action="confirm.php" method="post"> 

      <!-- TODO: 名前入力欄を作成（label + input） -->
     <label for="name">名前:</label>
      <input type="text" id="name" name="name"><br><br>

      <label for="age">年齢:</label>
      <input type="text" id="age" name="age" min="0" max="150"><br><br>

        <!-- TODO: 電話番号入力欄 -->
      <label for="phone">電話番号:</label>
      <input type="tel" id="phone" name="phone"><br><br>

        <!-- TODO: メールアドレス入力欄-->
      <label for="email">メールアドレス:</label>
      <input type="email" id="email" name="email"><br><br>

      <!-- TODO:　住所-->
       <label for="address">住所:</label>
       <input type="text" id="address" name="address"><br><br>

        <!-- TODO:　質問-->
      <label for="question">質問:</label>
      <input type="text" id="question" name="question"><br><br>

      <label for="sex">性別:</label>
      <select id="sex" name="sex">
        <option value="男性">男性</option>
        <option value="女性">女性</option>
      </select><br><br>

        <!--送信ボタン-->
        <button type="submit">送信</button><br><br>
      </form>
</body>
</html>