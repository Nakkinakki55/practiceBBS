<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>practice掲示板</title>
  <meta content="練習用の掲示板" name="description">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Sample</title>
  <!-- BootstrapのCSS読み込み -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="js/bootstrap.min.js"></script>
  <style type=text/css>
            .main{
              padding:30px;
              background-color:#efefef;
            }
    				
    				h1 img{
    					width: 60%;
        				height: auto;
    				}
    
    				h1{
    					text-align : center;
    				}
    
    				h2{
    				padding-top:60px;
    				}
    
    				.btnPos{
    					text-align: center;
    				}
  </style>
</head>
<body>
  <div class="container">
    <div class="main">
      <h1><img src="bbsTitleLogo.png"></h1>
      <?php


$new_mysqli = new mysqli('localhost', 'userName', 'password', 'DBName');

if (isset($_POST['deleteId'])) {
    $deleteId = $_POST['deleteId'];
    $sql = "DELETE FROM bbs WHERE id='$deleteId'";

    $result = $new_mysqli->query($sql);
}

if (isset($_POST['content']) && isset($_POST['userName']) && ($_POST['password']) == 'password') {
    $content = $_POST['content'];
    $userName = $_POST['userName'];
    $sql = "INSERT INTO bbs (userName,content, updated_at) VALUES ('$userName','$content', NOW());";
    $mes = '';

    $result = $new_mysqli->query($sql);
}

$sql = 'select userName,updated_at,content from bbs';

// ↓queryに$sqlを渡す
$result = $new_mysqli->query($sql);

$new_mysqli->close();

?>
        <h2>投稿フォーム</h2>
        <form class="form" action="main.php" method="post">
          <div class="form-group"> <label class="control-label">投稿内容</label> <input class="form-control" type="text" name="content"> </div>
          <div class="form-group"> <label class="control-label">投稿者</label> <input class="form-control" type="text" name="userName"> </div>
          <div class="form-group"> <label class="control-label">管理人から配布されたパスワード</label> <input class="form-control" type="text" name="password"> </div>
          <div class=btnPos> <button class="btn btn-primary" type="submit">送信</button> </div>
        </form>
        <h2>発言リスト</h2>
        <table class="table table-striped">
          <tr>
            <th>投稿者</th>
            <th>日時</th>
            <th>投稿内容</th>
          </tr>
          <?php

?>
          <?php foreach ($result as $val) {
    ?>
          <tr>
            <!-- ### ここにコードを追加 -->
            <tr>
              <td>
                <?= $val['userName'] ?>
              </td>
              <td>
                <?= $val['updated_at'] ?>
              </td>
              <td>
                <?= $val['content'] ?>
              </td>
            </tr <?php } ?>> </table>
    </div>
  </div>
</body>
</html>
