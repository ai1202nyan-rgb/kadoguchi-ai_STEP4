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
    <!-- ここに見出しと説明文を追加 -->
     <h1>フォーム入力</h1>
    
  <main>
<!-- フォーム開始 --> 
<form action="confirm.php" method="post">  
      <!-- TODO: 名前入力欄を作成（label + input） -->
     <label for>名前:</label>
      <input type="text" id="name" name="name"><br><br>

      <label for>年齢:</label>
      <input type="text" id="age" name="age"><br><br>

        <!-- TODO: 電話番号入力欄 -->
      <label for>電話番号:</label>
      <input type="telphone" id="telphone" name="telphone"><br><br>

        <!-- TODO: メールアドレス入力欄-->
      <label for>メールアドレス:</label>
      <input type="email" id="email" name="email"><br><br>

      <!-- TODO:　住所-->
       <label for>住所:</label>
       <input type="text" id="adress" name="adress"><br><br>

        <!-- TODO:　質問-->
      <label for>質問:</label>
      <input type="text" name="question"><br><br>
    
      <label for>性別:</label>
      <select id="sex" name="sex"><br><br>
        <option value="dansei">男性</option>
        <option value="josei">女性</option>
      </select>

        <!--送信ボタン-->
        <button type="submit">送信</button>
      </form>

  </main>

  <footer> 
    
  </footer>

</body>
</html>